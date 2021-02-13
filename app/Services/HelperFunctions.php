<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class HelperFunctions
{
    /**
     * Convert image from path to base64 string
     *
     * @param  string $file_path
     * @param  string $mime_type
     * @return string
     */
    public static function convertImageToBase64(string $file_path, string $mime_type): string
    {
        // Encode the image string data into base64 
        $data = base64_encode(Storage::disk('public')->get($file_path)); 

        return "data:$mime_type;base64,$data";
    }
}
