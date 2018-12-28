<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
	public function create()
    {
        return view('products.create');
    }
	
	public function store(Request $request)
	{
        $product = $this->validate(request(), [
          'name' => 'required',
          'price' => 'required|numeric'
        ]);
        Product::create($product);
        return back()->with('success', 'Product has been added');
	}
	
	public function index()
    {
        $products = Product::all()->toArray();
        return view('products.index', compact('products'));
    }
	
}
