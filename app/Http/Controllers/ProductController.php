<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;


class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['productDetail'=>$data]);
    }

    function search(Request $req)
    {

        $data = Product::
        where('name', 'like', '%'.$req->input('searchInputBox'). '%')->get();
        return view('/search',['products'=>$data]);
    }

    // using these Request $req whenever
    // we need to get data from a form
    function additionToCart(Request $req)
    {

        // if logged in via session with user return a hello
        // else redirect to homepage
        if($req->session()->has('user'))
        {
            // created a new object
            $cart = new Cart();

            $cart -> user_id = $req 
            -> session() 
            -> get('user')['id'];

            $cart -> product_id = $req
            -> productIDInput;

            // productIDInput comes from the name in the form(detail.blade.php)
            // and product_id comes from the cart table 


            $cart->save();

            return redirect('/');

        }
        else
        {
            return redirect('/login');

        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }




}
