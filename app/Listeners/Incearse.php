<?php

namespace App\Listeners;

use App\Events\VideoViwer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Incearse
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
    public function handle(VideoViwer $event)

    {

        $this->update($event->video);
      //  $event->video->increment('view');

    }
    function update($video){
        $video->viewers = $video->viewers + 1;
        $video->save();

      //  Video->view
       // $v= Video::first();
        //$v->increment('view');
    }
}
