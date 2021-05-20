<?php
/**
 *  app/Providers/RolesServiceProvider.php
 *
 * Date-Time: 20.05.21
 * Time: 13:11
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Providers;


use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Class RolesServiceProvider
 * @package App\Providers
 */
class RolesServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        Blade::directive('role', function ($roles) {
            return "<?php if(auth()->check() && auth()->user()->hasRole($roles)) : ?>"; //return this if statement inside php tag
        });

        Blade::directive('endrole', function ($roles) {
            return "<?php endif; ?>"; //return this endif statement inside php tag
        });

        Blade::directive('user',function () {
            return "<?php if(auth()->check() && !auth()->user()->hasRole('admin')) : ?>";
        });

        Blade::directive('enduser', function () {
            return "<?php endif; ?>"; //return this endif statement inside php tag
        });
    }
}