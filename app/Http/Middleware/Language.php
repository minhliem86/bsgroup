<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!Session::has('applocale') ) {
            // Check if the first segment matches a language code

            if (!in_array($request->segment(1), config('translatable.locales')) ) {
              // Store segments in array
              $segments = $request->segments();
              // Set the default language code as the first segment
              $segments = array_prepend($segments, config('app.fallback_locale'));

              app()->setLocale(config('app.fallback_locale'));
              Session::put('applocale', config('app.fallback_locale') );
              // Redirect to the correct url
              return redirect()->to(implode('/', $segments));
        }else{
            app()->setLocale($request->segment(1));

            Session::put('applocale', $request->segment(1) );
        }
    }else{
        if(in_array($request->segment(1), config('translatable.locales') ) ){
            app()->setLocale($request->segment(1));
            Session::put('applocale', $request->segment(1) );
        }else{
            app()->setLocale(Session::get('applocale'));
            $segments = $request->segments();
            // Set the default language code as the first segment
            $segments = array_prepend($segments, Session::get('applocale') );
             return redirect()->to(implode('/', $segments));
        }
    }
      return $next($request);
    }
}
