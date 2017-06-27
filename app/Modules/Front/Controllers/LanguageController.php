<?php
namespace App\Modules\Front\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Routing\Router;
use Session;

class LanguageController extends Controller
{
    public function swithLanguage(Request $request, $lang)
    {
        // Store the URL on which the user was
        $previous_url = url()->previous();
        $request = str_replace(url('/'),'',$previous_url);
        // dd($request);
        // Transform it into a correct request instance
        $previous_request = app('request')->create($request);

        // Get route name
        $route_name = app('router')->getRoutes()->match($previous_request)->getName();

        // dd($route_name, Session::get('applocale'));
        // Get Query Parameters if applicable
        $query = $previous_request->query();

       // Store the segments of the last request as an array
       $segments =   $previous_request->segments();
      //  array_shift($segments);

       if(in_array($lang, config('translatable.locales') )){
           $segments[0] = $lang;
          //  app()->setLocale($lang);
          //  Session::put('applocale',$lang);
           if (count($query)) {
                // return redirect()->route($route_name);
                return redirect()->to(implode('/', $segments) . '?' . http_build_query($query));
            }
            // return redirect()->route($route_name);
            return redirect()->to(implode('/', $segments));
       }
       return redirect()->back();
    }
}
