<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{

    public function index(){

        return view('checkout');

    }

    public function pay(){

        Stripe::setApiKey('sk_test_HOLD8UNF0oGQ7kNsuE06y1pd');

        $charge = Charge::create([

            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'source' => request()->stripeToken,

        ]);

        Session::flash('success', 'Purchase successful');

        Cart::destroy();

        Mail::to(request()->stripeEmail)->send(new \App\Mail\LoveStorePurchaseInfo());

        return redirect()->route('home');

    }


}
