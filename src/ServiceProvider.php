<?php
namespace PAdamiak\LaravelDirectives;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;
use Illuminate\Support\Facades\Blade;

class ServiceProvider extends SupportServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('route', function (string $expression) {
            return "<?php echo route($expression); ?>";
        });
    }
}