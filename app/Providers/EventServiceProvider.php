<?php

namespace App\Providers;

use App\Events\ContactMail;
use App\Events\PostCreate;
use App\Events\PostDelete;
use App\Events\PropertyCreate;
use App\Events\PropertyDelete;
use App\Listeners\ContactMailLog;
use App\Listeners\PostCreateLog;
use App\Listeners\PostDeleteLog;
use App\Listeners\PropertyCreateLog;
use App\Listeners\PropertyDeleteLog;
use App\Listeners\SendNewsletterPropertyCreate;
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
            SendNewsletterPropertyCreate::class
        ],
        PropertyDelete::class => [
            PropertyDeleteLog::class,
        ],
        PostDelete::class => [
            PostDeleteLog::class
        ],
        PostCreate::class => [
            PostCreateLog::class
        ],
        ContactMail::class => [
            ContactMailLog::class,
        ]
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
