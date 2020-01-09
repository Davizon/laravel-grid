<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role === "client"){
            return redirect('/');
        }
        $products = product::all();
        return view('backend.home',
        [
            'products' => $products,
            'role' => Auth::user()->role ?? ''
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role === "client"){
            return redirect('/');
        }
        return view('backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Products = new product();
        $Products->name = $request->get('name');
        $Products->description = $request->get('description');
        $Products->isTrending = $request->get('isTrending');
        $Products->price = $request->get('price');
        $Products->image = $request->get('image');
        $Products->save();

        $category = new Category();
        $category->product_id = $Products->id;
        $category->name = $request->get('category');
        $category->categoryIsHome = $request->get('categoryIsHome');
        $category->save();
        return redirect('/products/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->role === "client"){
            return redirect('/');
        }
        $products = Product::findOrFail($id);
        $category = Category::findOrFail($id);
        return view('backend.edit', [
            'product' => $products,
            'category' => $category

        ]);

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
         $product = product::findOrFail($id);
         $product->name = $request->get('name');
         $product->description = $request->get('description');
         $product->isTrending = $request->get('isTrending');
         $product->price = $request->get('price');
         $product->image = $request->get('image');
         $product->save();

        $category =  Category::findOrFail($id);
        $category->name = $request->get('category');
        $category->categoryIsHome = $request->get('categoryIsHome');
        $category->save();
         return redirect('/products/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
