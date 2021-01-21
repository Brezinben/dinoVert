<?php

namespace App\Providers;

use App\Events\PropertyCreate;
use App\Events\PropertyDelete;
use App\Listeners\PropertyCreateLog;
use App\Listeners\PropertyDeleteLog;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        PropertyCreate::class => [
            PropertyCreateLog::class,
        ],
        PropertyDelete::class => [
            PropertyDeleteLog::class,
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
