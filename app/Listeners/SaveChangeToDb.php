<?php

namespace App\Listeners;

use App\Models\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SaveChangeToDb
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Log::create([
           'status'=>$event->status,
           'model'=>$event->model,
           'model_id'=>$event->id,
           'user_id'=>$event->user
        ]);
    }
}
