<?php

namespace App\Listeners;

use App\Events\PropertyCreate;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PropertyCreateLog
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
        DB::table('logs')->insert([
            'type' => 'info',
            'message' => 'Un nouveau bien a été crée, il a l\'id : #' . $property->id . ' et pour prix ' . $property->price . ' €',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
