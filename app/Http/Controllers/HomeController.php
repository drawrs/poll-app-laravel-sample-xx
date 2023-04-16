<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function apiRequest($url)
    {
        // Initialize cURL
        $curl = curl_init();

        // Set cURL options
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
            ],
        ]);

        // Execute the request and get the response
        $response = curl_exec($curl);

        // Check for errors
        if (curl_errno($curl)) {
            $error_message = curl_error($curl);
            curl_close($curl);
            return ['error' => $error_message];
        }

        // Close the cURL session
        curl_close($curl);

        // Decode the JSON response
        $decoded_response = json_decode($response, true);

        // Return the decoded response
        return $decoded_response;
    }

    public function index()
    {
        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => 'http://localhost:8888/poll-app/public/api/v1/api/poll',
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'GET',
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);
        // echo $response;

        // return;
        return view('home');
    }

}
