<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('datetime', function($expression) {
          return "<?php echo gmdate('Y-m-d H:i:s', $expression); ?>";
        });
      
        Blade::directive('kilobytes', function($expression) {
          return "<?php echo $expression/1024; ?>";
        });
      
        Blade::directive('coin', function($expression) {
          $denomination = Config::get('app.denomination');
          $money = Config::get('app.money');

          return "<?php echo sprintf('".$money."',$expression/$denomination); ?>";
        });
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
