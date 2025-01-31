<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \Illuminate\Auth\Events\Failed::class => [
            //
        ],
        \Illuminate\Auth\Events\Login::class => [
            //
        ],
        \Spatie\Backup\Events\BackupWasSuccessful::class => [
            //
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
