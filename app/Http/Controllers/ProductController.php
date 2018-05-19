<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Storage;
use Cart;
use Auth;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(9);

        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.product.create', compact('categories'));
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

        $product = New Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location,$filename);
            $product->image = $filename;
        }
        $product->save();
        return back()->withInfo('Product has been saved successfully!!');

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
        $categories = Category::all() ;
        $product = Product::find($id) ;

        return view('admin.product.edit',compact('product','categories'));
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
            'title'=>'required',
            'description'=>'required',
            'price'=>'required|numeric',
            
            ]);
        
        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->category_id = $request->category_id;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('/images');
            $file->move($location,$filename);
            $oldImage= $product->image;
            \Storage::delete($oldImage);
            $product->image = $filename;
        }
        $product->save();
        return back()->withInfo('Product has been updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::delete($product->image);
        $product->delete();

        return back()->withInfo('Product has been deleted!!');
    }
    public function allproducts()
    {
        $cartItems = Cart::content();
        $categories = Category::all();
        $products = Product::paginate(10);
        return view('allproducts',compact('products','categories','cartItems'));
        
    }
    public function proinfo($id)
    {
        $cartItems = Cart::content();
        $categories = Category::all();
        $products = Product::find($id);
        if($products->category_id == '1'){
        $product = Product::where('category_id', '!=', $products->category_id)->where('category_id', '!=', '9')->latest()->paginate(4);
        }
        elseif ($products->category_id == '9') {
            $product = Product::where('category_id', '!=', $products->category_id)->where('category_id', '!=', '1')->latest()->paginate(4);
        
        }
        else
            $product = Product::where('category_id', '!=', $products->category_id)->latest()->paginate(4);
        
        return view('productinfo',compact('categories','cartItems','products','product'));
        
    }

    public function search(Request $request)
    {
        $cartItems = Cart::content();
        $categories = Category::all();
        $search = $request->searching;
        $product_search = Product::where('title','like','%'.$search.'%')->paginate(2);
        return view('product_search',compact('categories','cartItems','product_search'));
        
    }
  
}
