<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product/product-index', compact('products'));
    }

    public function filter(Category $category)
    {
        $products = $category->products;
        return view('product/product-index', compact('products', 'category'));
    }

    public function addToCart(Request $request)
    {
        // Add to cart_product
        if (Auth::user()->carts->isEmpty()) {
            $cart = new Cart();
            $cart->status = 1;
            $cart->user_id = Auth::user()->id;
            $cart->save();
        } else {
            $cart = Auth::user()->carts->where('status', 1)->first();
        }

        $cart->products()->attach(request()->product_id, ['quantity' => request()->quantity]);

        // Update quantity
        $product = Product::find($request->product_id);
        $product->quantity = $product->quantity - $request->quantity;
        $product->save();

        return view('product.product-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/product-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:5|max:255',
            'category_id' => 'required',
            'quantity' => 'required',
            'total' => 'required'
        ]);

        $product = new Product();
        $product->status = (int)($request->status == null);
        $product->stars = 0;
        $product->name = strtoupper($request->name);
        $product->description = strtoupper($request->description);
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        $product->total = $request->total;

        $product->save();

        $files_id = \App\Http\Controllers\FileController::multipleStore($request);
        $product->files()->attach($files_id);

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product/product-show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product/product-form');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
