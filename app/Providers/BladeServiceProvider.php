<?php

namespace App\Providers;

use App\View\Components\Admin\Sidebar;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot(): void
    {
        Blade::components([
            Sidebar::class => 'sidebar'
        ]);

        Blade::directive('linkactive', function ($route) {
            return "<?php echo Route::is($route) ? 'active' : $route;?>";
        });

        Blade::if('admin', function () {
            return auth()?->user()?->isAdmin() === true;
        });
    }
}
