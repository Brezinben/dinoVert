<?php

namespace App\Listeners;

use App\Events\PostCreate;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostCreateLog
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
     * @param PostCreate $event
     * @return void
     */
    public function handle(PostCreate $event)
    {
        $post = $event->getPost();
        DB::table('logs')->insert([
            'type' => 'info',
            'message' => 'Un nouveau bien a été crée, il a l\'id : #' . $post->id . ' et pour titre ' . $post->title,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
