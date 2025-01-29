<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class InformationController extends Controller
{
    /**
     * Generate a URL with email and current datetime.
     */
    public function generateUrl()
    {
        // Define the fixed email and URL
        $email = 'ayoemma188@gmail.com';
        $baseUrl = 'https://github.com/tomisin110/basic-information-api';

        // Get the current datetime in ISO 8601 format
        $currentDateTime = Carbon::now()->toIso8601String();

        // Generate URL with parameters
        $generatedUrl = "{$baseUrl}";

        // Return JSON response
        return response()->json([
            'email' => $email,
            'current_datetime' => $currentDateTime,
            'github_url' => $generatedUrl,
            
        ]);
    }
}
