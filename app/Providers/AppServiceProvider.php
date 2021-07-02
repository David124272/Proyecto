<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Payment;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('categories', Category::with('products')->get()->where('status', '=', true));
        view()->share('products', Product::with('files')->get()->where('status', '=', true));
        view()->share('payments', Payment::all()->where('status', '=', true));
    }
}
