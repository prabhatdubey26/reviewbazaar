<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (app()->resolved('db')) {
            $categories = Category::latest()->where(['status'=> 'active'])->get();
            View::share('categories', $categories);
        }
    }
}
