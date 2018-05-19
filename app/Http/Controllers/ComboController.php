<?php

namespace App\Http\Controllers;

use App\Combo;
use Illuminate\Http\Request;
use Auth;
use Storage;
use Cart;
use App\Category;
class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $combos = Combo::paginate(5);

        return view('admin.product.combo_index',compact('combos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('admin.product.combo_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif',
            ]);

        $combo = New Combo;
        $combo->title = $request->title;
        $combo->description = $request->description;
        $combo->price = $request->price;
        $combo->user_id = Auth::user()->id;

        $combo->motherboard = $request->motherboard;
        $combo->ram = $request->ram;
        $combo->graphics = $request->graphics;
        $combo->hdd = $request->hdd;
        $combo->ssd = $request->ssd;
        $combo->powersupply = $request->powersupply;
        $combo->processor = $request->processor;
        $combo->catching = $request->catching;
        $combo->approval = '1';

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location,$filename);
            $combo->image = $filename;
        }
        $combo->save();
        return back()->withInfo('Combo Product has been saved successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function show(Combo $combo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $combo = Combo::find($id);

        return view('admin.product.combo_edit',compact('combo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            
            ]);
        
        $combo = Combo::find($id);
        $combo->title = $request->title;
        $combo->description = $request->description;
        $combo->price = $request->price;
        $combo->user_id = Auth::user()->id;

        $combo->motherboard = $request->motherboard;
        $combo->ram = $request->ram;
        $combo->graphics = $request->graphics;
        $combo->hdd = $request->hdd;
        $combo->ssd = $request->ssd;
        $combo->powersupply = $request->powersupply;
        $combo->processor = $request->processor;
        $combo->catching = $request->catching;
        $combo->approval = '1';

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location,$filename);
            $oldImage= $combo->image;
            \Storage::delete($oldImage);
            $combo->image = $filename;
        }
        $combo->save();
        return back()->withInfo('Combo Product has been updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $combo = Combo::find($id);
        Storage::delete($combo->image);
        $combo->delete();

        return back()->withInfo('Combo Product has been deleted!!');
    }

    public function allcombos()
    {
        $cartItems = Cart::content();
        $categories = Category::all();
        $combo = Combo::paginate(5);

        return view('allcombos',compact('combo','categories','cartItems'));
    }
    public function cominfo($id)
    {
        $cartItems = Cart::content();
        $categories = Category::all();
        $products = Combo::find($id);
        $product = Combo::where('id', '!=', $products->id)->where('motherboard', '!=', $products->motherboard)->where('graphics', '!=', $products->graphics)
        ->where('hdd', '!=', $products->hdd)->where('ssd', '!=', $products->ssd)
->latest()->paginate(4);
        
        return view('comboinfo',compact('categories','cartItems','products','product'));
        
    }
}
