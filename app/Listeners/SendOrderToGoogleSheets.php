<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Jobs\SendOrderToGoogleSheets as SendOrderToGoogleSheetsJob;

class SendOrderToGoogleSheets
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
     * @param  OrderCreated  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        dispatch(new SendOrderToGoogleSheetsJob($event->order));
    }
}
