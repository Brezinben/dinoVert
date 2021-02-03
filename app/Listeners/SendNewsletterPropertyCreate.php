<?php

namespace App\Listeners;

use App\Events\PropertyCreate;
use App\Mail\PropertyCreateMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendNewsletterPropertyCreate
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param PropertyCreate $event
     * @return void
     */
    public function handle(PropertyCreate $event)
    {
        $property = $event->getProperty();
        $emails = DB::table('newsletters')->select('email')->pluck('email');

        $emails->each(fn($email) => Mail::to($email)->send(new PropertyCreateMail($property, $email)));
        session()->flash('info', 'Les emails ont été envoyés');
    }
}
