<?php
require 'vendor/autoload.php'; // Include the Guzzle library

// Replace 'YOUR_API_KEY' with your actual NYC OpenData API key
$apiKey = '';

// The base URL for the NYC OpenData API
$baseUrl = 'https://data.cityofnewyork.us/resource';

// The dataset ID for NYC parks data (you may need to find the specific dataset ID you want)
$datasetId = 'ENTER_DATASET_ID_HERE';

// Build the API endpoint URL
$endpoint = "$baseUrl/$datasetId.json";

// Initialize the Guzzle client
$client = new \GuzzleHttp\Client();

// Set the headers with the API key
$headers = [
    'X-App-Token' => $apiKey,
];

// Make the GET request to the API
$response = $client->request('GET', $endpoint, ['headers' => $headers]);

// Check the response status code
if ($response->getStatusCode() == 200) {
    // Parse the JSON response
    $data = json_decode($response->getBody());

    // Loop through the data and print park information (adjust as needed)
    foreach ($data as $park) {
        echo 'Park Name: ' . $park->park_name . '<br>';
        echo 'Park Address: ' . $park->park_address . '<br><br>';
    }
} else {
    // Handle API errors
    echo 'Error: Unable to fetch data from the NYC OpenData API.';
}
?>


