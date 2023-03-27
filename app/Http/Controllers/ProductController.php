<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show()
    {
        $productAll = Product::all();
        return view('pages.productList', ['productAll' => $productAll]);
    }

    public function store(Request $request)
    {

            $product = new Product;
            $product->product = $request->product;
            $product->model = $request->model;
            $product->color = $request->color;
            $product->value = $request->value;
            $product->save();

        return redirect()->route('show');
        
        
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('show');
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product = $request->input('product');
        $product->model = $request->input('model');
        $product->color = $request->input('color');
        $product->value = $request->input('value'); 
        $product->save();
        
        return redirect()->route('show');
    }

    public function formProductRegistrer()
    {
        return view('pages.form-product');
    }

    public function formProductUpdate($id)
    {
        $product = Product::find($id);
        return view('pages.form-update', ['id' => $id, 'product'=> $product]);
    }
}
