<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\Cart;
use \App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;      // ------ added
class ProductController extends Controller
{
    // ---- index
    function index()
    {
        $data = product::all();
        return view('product',['products'=>$data]);
    }

    // ---- detail
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }

    // ----- add to cart
    function addTocart(Request $req)
    {
        if($req->session()->has('user'))
        {
        $cart = new Cart;
        $cart->user_id=$req->session()->get('user')['id'];  // hadi testoki user id fel cart table f DB
        $cart->product_id=$req->product_id;     // w hadi testoki prodct id fel cart table f DB
        $cart->save();
        return redirect('/');  
        }
        else{
            return redirect('/login'); 
        }
    }
    static function cartItem() // hadi khdemna biha fel header.blade.php
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();

    }

    // ----- line 9 added
     function cartList(Request $req)
    {
        if($req->session()->has('user'))
        {
            $userId=Session::get('user')['id'];
            $products= DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->get();
            return view('cartList',['products'=>$products]);
        }
        else{
        return redirect('/login'); 
        }
    } 

    // ------ ----------- ---------


    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartList');
    }

    // ------ ----------- ---------

    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total = $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');        // return total ta3 les prix

        return view('orderNow',['total'=>$total]);
    }

    // ------ ----------- ---------

    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_meyhod=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();                 // -------- save order data in order table
            Cart::where('user_id',$userId)->delete();       //------- ki ykamal la commande --> le panier ywli vide
        }
        $req->input();
        return redirect('/');
    }

    // ------ ----------- ---------

    function myOrders()
    {
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get(); 

        return view('myOrders',['orders'=>$orders]);    
    }

}
