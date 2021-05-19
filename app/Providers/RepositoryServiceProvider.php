<?php
/**
 *  app/Providers/RepositoryServiceProvider.php
 *
 * Date-Time: 19.05.21
 * Time: 10:20
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Providers;

use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\Eloquent\Base\EloquentRepositoryInterface;
use Illuminate\Support\ServiceProvider;


/**
 * Class RepositoryServiceProvider
 * @package App\Providers
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
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
    public function boot()
    {
        $this->app->bind(EloquentRepositoryInterface::class,BaseRepository::class);
    }
}