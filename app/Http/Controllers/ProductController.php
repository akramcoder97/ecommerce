<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\Cart;
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
        ->select('products.*')
        ->get();
        return view('cartList',['products'=>$products]);
        }
    else{
        return redirect('/login'); 
        }
    }
}
