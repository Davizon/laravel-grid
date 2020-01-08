<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.Home', [
            'products' => Product::all(),
            'categories' => Category::all()
        ]);
    }

    public function shop() {
        return view('frontend.shop', [
            'products' => Product::all()
        ]);
    }

    public function about() {
        return view('frontend.about');
    }
}
