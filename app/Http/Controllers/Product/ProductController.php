<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public  function index()
    {
        $product = \Market\Models\Product\Produc::all();
        return view('product/product')->with("products",$product);
    }
}
