<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Cart;
use App\Product;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.category.create');
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
            'name'=>'required',
            ]);
        $categories = New Category;
        $categories->name = $request->name;
        
        $categories->save();
        return back()->withInfo('Category has been saved successfully!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::find($id);

        return view('admin.category.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            ]);
        $categories = Category::find($id);
        $categories->name = $request->name;
        $categories->save();
        return back()->withInfo('Category has been updated successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
       
        $categories->delete();
        return back()->withInfo('Category has been deleted successfully!!');

    }
    public function showcategories($id)
    {
        $cartItems = Cart::content();
        $categories = Category::all();
        $categories2 = Category::find($id);
        return view('showcategories',compact('categories2','categories','cartItems'));
    }
    public function catsearch(Request $request)
    {
        $cartItems = Cart::content();
        $categories = Category::all();
        $search = $request->searching;
        $product_search = Product::where('title','like','%'.$search.'%')->paginate(2);
        return view('product_search',compact('categories','cartItems','product_search'));
        
    }
    
}
