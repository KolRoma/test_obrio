<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Services\Google\GoogleClient;
use App\Services\Google\GoogleService;
use Illuminate\Support\Facades\App;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        $client = GoogleClient::getClient();
        GoogleService::appendSheets($client, $event->order);
    }
}
