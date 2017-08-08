<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index($id){

        $product = Product::find($id);

        return view('single', compact('product'));

    }

}
