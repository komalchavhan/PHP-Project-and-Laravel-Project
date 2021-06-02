<?php

namespace App\Providers;
//use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
       
       /* $categories =Category::table('categories')->get();
        return view('frontend.index',compact(['categories'=>$categories]));*/
   
        Schema::defaultstringLength(191);
    }
}
