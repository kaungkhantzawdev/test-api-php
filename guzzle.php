<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://jsonplaceholder.typicode.com',
    'Content-type' => 'application/json; charset=UTF-8',
    'headers' => [
        'Accept'     => 'application/json',
        /** 'Authorization' => 'Barer ' . 'abcd' */
    ],
    /** You can set any number of default request options. This is second. */
    'timeout'  => 60,
]);


try {
    // $response = $client->request('POST', '/posts', [
    //     'json' => array(
    //         'title' => 'hello',
    //         'body' => 'hi body',
    //         'userId' => 1
    //     )
    // ]);
    $response = $client->post('/posts', [
        'json' => array(
            'title' => 'hello',
            'body' => 'hi body',
            'userId' => 1
        )
        ]);
    
    echo 'hello response';
    
    $httpStatusCode = $response->getStatusCode();
    
    echo( $response->getStatusCode());
    
    $body = $response->getBody();
    // Implicitly cast the body to a string and echo it
    
    /** Process the API response based on the HTTP status code */ 
    if ($httpStatusCode == 200) {
        /** API request was successful (status code 200) */ 
        echo 'API request was successful. We will do anything.' . $httpStatusCode;
        echo $body;
    
        return;
    
    } else {
        /** API request encountered an unexpected status code */ 
        echo 'API request failed with an unexpected status code: ' . $httpStatusCode;
        echo $body;
    
    }
    
} 
catch(GuzzleHttp\Exception\GuzzleException $e) {
    /** Handle timeout error */ 
    echo 'time out error'. $e;
  
}




?>
