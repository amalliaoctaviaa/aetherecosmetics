<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Landingpage extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('welcome', compact('product'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('productBlogs', compact('product'));
    }
}
