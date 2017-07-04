<?php   namespace App\Modules;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Request;

class ModuleServiceProvider extends ServiceProvider{

    protected $front_namespace = 'App\Modules\Front\Controllers';

    public function register(){
        $modules = config('module.modules');
        foreach($modules as $module){
            if($module === 'Front'){
                $this->app->register('App\Providers\SetLanguageProvider');
            }
        }
    }

    public function boot(Router $router){
        //Load cai array modules trong file module.php trong thu muc config
        $modules = config('module.modules');

       while (list(,$module) = each($modules)) {

            // Load the routes for each of the modules
            if(file_exists(__DIR__.'/'.$module.'/routes.php')) {
                include __DIR__.'/'.$module.'/routes.php';
            }

            // Load the views
            if(is_dir(__DIR__.'/'.$module.'/Views')) {
                $this->loadViewsFrom(__DIR__.'/'.$module.'/Views', $module);
            }
        }
        $this->mapFrontRoutes($router);
        // dd(session('applocale'));
    }

    protected function mapFrontRoutes(Router $router)
    {
        $locale = Request::segment(1);
        $router->group([
            'namespace' => $this->front_namespace, 'middleware' => ['web','language'], 'prefix' =>$locale
        ], function ($router) {
            require app_path('Modules/Front/routes.php');
        });
    }
}
?>
