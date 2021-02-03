<?php

namespace App\Listeners;

use App\Events\PostDelete;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostDeleteLog
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
     * @param PostDelete $event
     * @return void
     */
    public function handle(PostDelete $event)
    {
        $id = $event->getId();
        DB::table('logs')->insert([
            'type' => 'info',
            'message' => 'Un post a été supprimé, il a l\'id : #' . $id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
