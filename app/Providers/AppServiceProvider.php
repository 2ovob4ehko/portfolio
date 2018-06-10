<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu_items = array(
            (object) array(
                'title' => 'Home',
                'link' => '/',
                'slug' => 'main'
            ),
            (object) array(
                'title' => 'Some category',
                'link' => '/some_category',
                'slug' => 'some_category'
            )
        );
        View::share('menu_items', $menu_items);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
