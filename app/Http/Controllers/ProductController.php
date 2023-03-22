<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show()
    {
        return view('pages.cadastro-product');
    }

    public function store(Request $request)
    {
        $dadosForm = $request->all();

        if (isset($dadosForm)) {
            $product = new Product;
            $product->product = $request->product;
            $product->model = $request->model;
            $product->color = $request->color;
            $product->value = $request->value;
            $product->save();

        return redirect()->route('defalte');
        
    }
        else {
            redirect()->route('defalte');
        }
        
    }
}
