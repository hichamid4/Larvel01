<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('products', ['products' => $product]);
    }


    public function formcreate()
    {
        $category = Category::all();
        return view('addProduct', ['cat' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('updateProd', ['prod' => $product, 'cat' => $category]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('details', ['prod' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $product = new product();
        $product->name = $request->input('name');
        $product->descr = $request->input('descr');
        $product->type = $request->input('type');
        $product->price = $request->input('price');
        $product->date = $request->input('date');
        $product->categorie_id = $request->input('category');
        $product->save();
        return redirect()->route('index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product = Product::find($request->input('id'));
        $product->name = $request->input('name');
        $product->descr = $request->input('descr');
        $product->type = $request->input('type');
        $product->price = $request->input('price');
        $product->date = $request->input('date');
        $product->categorie_id = $request->input('category');
        $product->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('index');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
}
