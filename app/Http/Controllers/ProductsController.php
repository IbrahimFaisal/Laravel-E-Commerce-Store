<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();

        return view('product.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('product.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'avatar' => 'required|image',
            'price' => 'required',
            'body' => 'required',

        ]);

        $product = new Product();

        $product_image = $request->avatar;

        $product_image_name = time() . $product_image->getClientOriginalName();

        $product_image->move('upload/', $product_image_name);

        $product->name = $request->name;

        $product->avatar = 'upload/' . $product_image_name;

        $product->price =$request->price;

        $product->body = $request->body;

        $product->save();

        Session::flash('success', 'Product created successfully.');

        return redirect('product');

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

        $product = Product::find($id);

        return view('product.edit', compact('product'));

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

        $this->validate($request, [

            'name' => 'required',
            'price' => 'required',
            'body' => 'required',

        ]);

        $product = Product::find($id);

        if($request->hasFile('avatar')){

            $product_image = $request->avatar;

            $product_image_name = time() . $product_image->getClientOriginalName();

            $product_image->move('upload/', $product_image_name);

            $product->avatar = 'upload/' . $product_image_name;

            $product->save();

        }

        $product->name = $request->name;

        $product->price = $request->price;

        $product->body = $request->body;

        $product->save();

        Session::flash('success', 'Product updated successfully.');

        return redirect('product');

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

        if($product->avatar){

            unlink($product->avatar);

        }

        $product->delete();

        Session::flash('success', 'Product deleted successfully.');

        return redirect('product');

    }
}
