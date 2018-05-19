<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Order;
use Cart;
use Auth;
class PaymentController extends Controller
{
    public function paymentMethod()
    {
    	$categories = Category::all();
    	$cartItems = Cart::content();
    	return view('payment.payment_method', compact('cartItems','categories'));
    }
    public function bankTransfer()
    {
    	$cartItems = Cart::content();
    	$categories = Category::all();
    	return view('payment.bank_transfer',compact('categories','cartItems'));
    }

    public function paymentcard()
    {
        $cartItems = Cart::content();
        $categories = Category::all();
        return view('payment.paymentcard',compact('categories','cartItems'));
    }

    public function bankTransferSubmitOrder(Request $request)
    {
        $request->validate([
            'full_name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'phone'=>'required|numeric',
            'zip'=>'required|numeric',
            ]);

        $order = New Order;
        $order->user_id = Auth::user();
        foreach (Cart::content() as $cart) {
            $order = Auth::user()->orders()->create([
                'qty' => $cart->qty,
                'tax' => $cart->tax*$cart->qty,
                'subtotal' => $cart->subtotal,
                'total' => $cart->tax*$cart->qty+$cart->subtotal,
                'title' => $cart->name,
                'size' => 'S',
                'image' => $cart->options->has('image')?$cart->options->image:'',
                'full_name' => $request->full_name,
                'address' => $request->address,
                'city' => $request->city,
                'phone' => $request->phone,
                'zip' => $request->zip,
                'status' => 0,

                ]);

        }
            $order->save();
            Cart::destroy();
           // return back();
            return redirect()->route('thanks');
        
    }


    public function paymentcardSubmitOrder(Request $request)
    {

        $request->validate([
            'full_name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'phone'=>'required|numeric',
            'zip'=>'required|numeric',
            ]);

    \Stripe\Stripe::setApiKey("sk_test_R28MwpOyPa77CCWpXM2I14vZ");

    
    $token = $_POST['stripeToken'];
    foreach (Cart::content() as $cart) {

        $customer = \Stripe\Customer::create([
            'source' => $token,
            'email' => Auth::user()->name,
            ]);
        // Charge the user's card:
        $charge = \Stripe\Charge::create(array(
          "amount" => Cart::total(),
          "currency" => "usd",
          "description" => $cart->name,
          "customer" => $customer->id,
        ));

    }

        $order = New Order;
        $order->user_id = Auth::user();
        foreach (Cart::content() as $cart) {
            $order = Auth::user()->orders()->create([
                'qty' => $cart->qty,
                'tax' => $cart->tax*$cart->qty,
                'subtotal' => $cart->subtotal,
                'total' => $cart->tax*$cart->qty+$cart->subtotal,
                'title' => $cart->name,
                'size' => $cart->options->has('size')?$cart->options->size:'',
                'image' => $cart->options->has('image')?$cart->options->image:'',
                'full_name' => $request->full_name,
                'address' => $request->address,
                'city' => $request->city,
                'phone' => $request->phone,
                'zip' => $request->zip,
                'status' => 0,

                ]);

        }
            $order->save();
            Cart::destroy();
            // return back();
            return redirect()->route('thanks');
        
    }

    public function thanks()
    {
        $cartItems = Cart::content();
        $categories = Category::all();
        return view('payment.thanks',compact('categories','cartItems'));
    }
}
