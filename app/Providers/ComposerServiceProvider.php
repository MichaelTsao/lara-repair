<?php
/**
 * Created by PhpStorm.
 * User: caoxiang
 * Date: 2017/7/16
 * Time: 下午2:36
 */

namespace App\Providers;

use App\Company;
use App\Worker;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
//        View::composer(
//            'profile', 'App\Http\ViewComposers\ProfileComposer'
//        );

        // Using Closure based composers...
        View::composer('apply', function ($view) {
            $view->with('companies', Company::where('status', Company::STATUS_NORMAL)->get());
            $view->with('levels', Worker::LEVELS);
        });
    }
}