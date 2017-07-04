<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Session;
use Illuminate\Http\Request;

class SetLanguageProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        if(!Session::has('applocale')){
                if (!in_array($request->segment(1), config('translatable.locales')) ){
                    $segments = $request->segments();

                    // Set the default language code as the first segment
                    $segments = array_prepend($segments, config('app.fallback_locale'));
                    app()->setLocale(config('app.fallback_locale'));
                    Session::put('applocale', config('app.fallback_locale'));
                }else{
                    app()->setLocale($request->segment(1));
                    Session::put('applocale', $request->segment(1));
                }
                // dd(session('applocale'));
        }else{
            dd('asds');
            // dd(Session::get('applocale') );
            if(Session::get('applocale') == $request->segment(1)){
                app()->setLocale(Session::get('applocale'));
            }else{
                if(!in_array($request->segment(1), config('translatable.locales'))){
                    app()->setLocale(Session::get('applocale'));
                }else{
                    app()->setLocale($request->segment(1));
                    Session::put('applocale', $request->segment(1));
                }
            }
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
