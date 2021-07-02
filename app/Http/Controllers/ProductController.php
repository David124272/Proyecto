<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
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
        $products = Product::with(['files:id,route'])->get();
        return view('product/product-index', compact('products'));
    }

    public function filter(Category $category)
    {
        $products = $category->products()->with('files')->get();
        return view('product/product-index', compact('products', 'category'));
    }

    public function addToCart(Request $request)
    {
        $this->middleware(['auth', 'verified']);

        // Add to cart_product
        if (Auth::user()->carts->isEmpty()) {
            $cart = new Cart();
            $cart->status = 1;
            $cart->user_id = Auth::user()->id;
            $cart->save();
        } else {
            $cart = Auth::user()->carts->where('status', 1)->first();
        }

        $product = $cart->products()->where('id', $request->product_id)->first();

        if ($product != null) {
            //Update quantity
            $product->pivot->quantity += $request->quantity;
            $product->pivot->save();
        } else {
            $cart->products()->attach(request()->product_id, ['quantity' => request()->quantity]);
        }

        return redirect()->route('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin-products');
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
        Gate::authorize('admin-products');
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:5|max:255',
            'category_id' => 'required',
            'quantity' => 'required|numeric|min:0',
            'total' => 'required',
            'files.*' => 'mimes:jpeg,jpg,png,gif|required'
        ]);

        $product = new Product();
        $product->status = (int)($request->status == null);
        $product->stars = 0;
        $product->name = strtoupper($request->name);
        $product->description = strtoupper($request->description);
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        //$product->discount = $request->discount;
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
        return view('product/product-edit', compact('product'));
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
        Gate::authorize('admin-products');
        $request->validate([
            'name' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:5',
            'category_id' => 'required',
            'quantity' => 'required|numeric|min:0',
            'total' => 'required',
            'files.*' => 'mimes:jpeg,jpg,png,gif|required'
        ]);

        $product->status = (int)($request->status == null);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->quantity = $request->quantity;
        //$product->discount = $request->discount;
        $product->total = $request->total;

        $product->save();

        return view('product.product-show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
