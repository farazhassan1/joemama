<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class JoeController extends Controller
{
    public function getRandomYoMamaJoke()
    {
        // API endpoint
        $api_url = 'https://www.yomama-jokes.com/api/v1/jokes/random/';

        // Create a Guzzle client
        $client = new Client();

        // try {
            // Make the request to the API
            $response = $client->request('GET', $api_url, [
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            // Decode the JSON response
            $data = json_decode($response->getBody(), true);

            // Extract the joke and category from the response
            $joke = $data['joke'];
            $category = $data['category'];
            
            // Return the joke and category
            return view('joe', $data);

            // return response()->json(['joke' => $joke, 'category' => $category]);
        // } catch (\Exception $e) {
        //     // Handle any errors that occurred during the request
        //     return response()->json(['error' => 'Error fetching Yo Mama joke'], 500);
        // }
    }
}
