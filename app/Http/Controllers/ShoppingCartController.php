<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{



    public function add_to_cart(){



        $pdt = Product::find(request()->pdt_id);

        $cartItem = Cart::add([

            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => request()->qty,
            'price' => $pdt->price,

        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect('cart');


    }

    public function index(){

//        Cart::destroy();

        return view('cart');

    }


    public function inc($rowId, $qty){

        Cart::update($rowId, $qty + 1);

        return redirect()->back();

    }


    public function dec($rowId, $qty){

        Cart::update($rowId, $qty - 1);

        return redirect()->back();

    }


    public function delete($rowId){

        Cart::remove($rowId);

        return redirect()->back();

    }

    public function rapid($id){

        $pdt = Product::find($id);

        $cartItem = Cart::add([

            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => 1,
            'price' => $pdt->price,

        ]);

        Cart::associate($cartItem->rowId, 'App\Product');

        return redirect('cart');

    }

}
