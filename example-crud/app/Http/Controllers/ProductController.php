<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Petshop;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function productsCreate()
    {
        $petshops = Petshop::all();
        return view('product.products-create', compact('petshops'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'petshop_id' => 'required|exists:petshops,id',
        ]);
        Product::create($data);
        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        $petshops = Petshop::all();
        return view('product.products-edit', compact('product', 'petshops'));
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'petshop_id' => 'required|exists:petshops,id'
        ]);
        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product Deleted Successfully');
    }
}
