<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function show()
    {
        if (Auth::user()->carts->isEmpty()) {
            $cart = new Cart();
            $cart->status = 1;
            $cart->user_id = Auth::user()->id;
            $cart->save();
        } else {
            $cart = Auth::user()->carts->where('status', 1)->first();
        }

        $total = 0;
        foreach ($cart->products as $p) {
            $total += $p->total * $p->pivot->quantity;
        }

        return view('cart.cart-show', compact('cart', 'total'));
    }


    public function clear(Cart $cart)
    {
        $cart->products()->detach();
        return redirect()->route('cart.show');
    }

    public function checkout(Cart $cart)
    {
        $total = 0;
        foreach ($cart->products as $p) {
            $total += $p->total * $p->pivot->quantity;
        }
        return view('cart.cart-checkout', compact('cart', 'total'));
    }
}
