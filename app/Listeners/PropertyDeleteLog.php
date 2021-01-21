<?php

namespace App\Listeners;

use App\Events\PropertyDelete;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PropertyDeleteLog
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
     * @param PropertyDelete $event
     * @return void
     */
    public function handle(PropertyDelete $event)
    {
        DB::table('logs')->insert([
            'type' => 'info',
            'message' => 'Un nouveau bien à été supprimer',
        ]);
        $property = $event->getProperty();
        DB::table('logs')->insert([
            'type' => 'info',
            'message' => 'Un  bien à été supprimer, il a l\'id : #' . $property->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
