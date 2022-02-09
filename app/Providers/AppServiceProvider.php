<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Topic;  // 新增 1 
use App\Observers\TopicObserver;  // 新增 2

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
        
        Topic::observe(TopicObserver::class);            // 新增 3
        \App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
    }
}
