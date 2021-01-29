<?php

namespace App\Listeners;

use App\Events\ContactMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ContactMailLog
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
     * @param ContactMail $event
     * @return void
     */
    public function handle(ContactMail $event)
    {
        DB::table('logs')->insert([
            'type' => 'notice',
            'message' => "Nouveau message de " . $event->getName() . " | " . $event->getEmail() . '. ' . $event->getMessage(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
