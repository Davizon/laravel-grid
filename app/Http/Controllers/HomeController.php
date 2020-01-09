<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home_products()
    {
        return view('frontend.home', [
            'products' => Product::all(),
            'categories' => Category::all(),
            'role' => Auth::user()->role ?? ''
        ]);
    }

    public function shop()
    {
        return view('frontend.shop', [
            'products' => Product::all(),
            'role' => Auth::user()->role ?? ''
        ]);
    }
    public function about()
    {
        return view('frontend.about', [
            'role' => Auth::user()->role ?? ''

        ]);
    }

}
