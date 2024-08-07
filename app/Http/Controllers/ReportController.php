<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ReportController extends Controller
{
    public function getData(Request $request)
    {

        // Default location if none is provided
        $location = $request->input('location','india');


        // Get the API key from the .env file
        $apiKey = env('TOMORROW_IO_API_KEY');

        // Create the API URL
        $url = "https://api.tomorrow.io/v4/weather/realtime?location={$location}&apikey={$apiKey}";

        try {
            // Create a new Guzzle HTTP client
            $client = new Client();

            // Send a GET request to the API
            $response = $client->get($url);

            // Decode the JSON response into an array
            $weatherData = json_decode($response->getBody()->getContents(), true);


            // Return the data to the view (you can customize this as needed)
            return view('dashboard', compact('weatherData'));
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            return response()->json(['error' => 'API request failed: ' . $e->getMessage()], $e->getCode());
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
