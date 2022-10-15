<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.website.cart.cart');
    }

    public function cart_register()
    {
        $cartItems                  = Cart::where('customer_id',auth()->user()->id)->get();
        $cartItems_count            = Cart::where('customer_id',auth()->user()->id)->count();
        $cartItems_discounts_true   = Cart::where('customer_id',auth()->user()->id)->where('discount','>','0');
        $cartItems_discounts_false  = Cart::where('customer_id',auth()->user()->id)
        ->where('discount','<=','0')
        ->orWhere('discount','=',null);
    }

    public function add_to_cart(Request $request , $id)
    {
        if (Auth::id()) {
            $user                   = auth()->user();
            $product                = Product::fine($id);
            $cart                   = new Cart;
            $cart->customer_name    = $user->name;
            $cart->customer_phone   = $user->phone;
            $cart->customer_email   = $user->email;
            $cart->customer_address = $user->address;
            $cart->product_name     = $product->name;
            $cart->product_image    = $product->image_name;
            $cart->is_accessory     = $product->is_accessory;
            $cart->clothing_type    = $product->clothing_type;
            $cart->product_category = $product->product_category;
            $cart->price            = $product->price;
            $cart->discount         = $product->discount;

        };

        if ($request->quantity > 0){
            $cart->quantity      = $request->quantity;
        }
        elseif ($request->quantity == null || $request->quantity == "") {
            return redirect()->back()->with('quantity_is_null_message' , 'The quantity value is empty! Please enter a quantity for the "'.$cart->product_name.'" product!');
        }
        elseif($request->quantity == 0){ // wrong condition (2): quantity is equals to "zero" value
            return redirect()->back()->with('quantity_is_zero_message' , 'You entered ['.$request->quantity.'] value for the quantity for "'.$cart->product_name.'" product. You can not enter [zero] value for the quantity for any product!');
        }
        elseif($request->quantity < 0){ // wrong condition (3): quantity is equals to "negative" value
            return redirect()->back()->with('quantity_is_negative_message' , 'You entered ['.$request->quantity.'] value for the quantity. The entered value for the quantity for "'.$cart->product_name.'" product is in negative!');
        }
        $cart->customer_id      = $user->id;
            $cart->save();

            return redirect()->back()->with('addCart_message' , '"'.$product->name.'" [Quantity: '.$cart->quantity.'] - added successfully to your cart!');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCartItemsForCheckout()
    {
        return view('website.website.cart.checkout');
    }
}
