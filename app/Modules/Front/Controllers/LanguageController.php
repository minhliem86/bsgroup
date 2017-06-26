<?php
namespace App\Modules\Front\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Routing\Router;

class LanguageController extends Controller
{
    public function swithLanguage(Request $request, $lang)
    {
        // Store the URL on which the user was
        $previous_url = url()->previous();

        // Transform it into a correct request instance
        $previous_request = app('request')->create('/en/about');
        $name_pre = app('router')->getRoutes()->match($previous_request)->getName();
        dd($name_pre);
        // Get Query Parameters if applicable
        $query = $previous_request->query();

        // In case the route name was translated

       // Store the segments of the last request as an array
       $segments = $previous_request->segments();
       array_shift($segments);
       if(in_array($lang, config('translatable.locales') )){
           $segments[0] = $lang;
           if (count($query)) {
                return redirect()->to(implode('/', $segments) . '?' . http_build_query($query));
            }
            return redirect()->to(implode('/', $segments));
       }
       return redirect()->back();
    }
}
