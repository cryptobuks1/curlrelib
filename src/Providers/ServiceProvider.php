<?php

declare(strict_types=1);

namespace Qredis\Curlrelib\Providers;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . DIRECTORY_SEPARATOR . '../routes.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    { }
}
