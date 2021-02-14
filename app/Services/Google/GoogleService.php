<?php

namespace App\Services\Google;

use Google_Client;
use App\Models\Order;

class GoogleService
{
    /**
     * Returns an authorized API client.
     * @return Google_Client the authorized client object
     */
    public static function appendSheets(Google_Client $client, Order $order)
    {
        $service = new \Google_Service_Sheets($client);

        $values = [
            [
                $order->full_name, 
                $order->email, 
                $order->astrologer_service_id,
                $order->created_at->format('Y-m-d H:i:s'),
            ]
        ];

        $service->spreadsheets_values->append(
            env('GOOGLE_SPREADSHEET_ID', ''), 
            'Data', 
            new \Google_Service_Sheets_ValueRange(['values' => $values]), 
            ['valueInputOption' => 'USER_ENTERED']
        );
    }
}
