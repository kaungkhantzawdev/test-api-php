<?php

/** Specify the API endpoint URL */ 
$apiEndpoint = 'http://universities.hipolabs.com/search?country=United+States';

/** Initialize cURL session */ 
$ch = curl_init($apiEndpoint);

/** Set cURL options */
curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 1,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      /**
       *'Authorization: Bearer abcdefg'
       * 
       * 
       */

    ),
  ));

/** Execute cURL session and capture the response */ 
$response = curl_exec($ch);

/** Check for cURL errors */ 
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
    return;
}

/** Get the HTTP status code */
$httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

/** Close cURL session */
curl_close($ch);

/** Process the API response based on the HTTP status code */ 
if ($httpStatusCode == 200) {
    /** API request was successful (status code 200) */ 
    echo 'API request was successful. We will do anything.' . $httpStatusCode;
    echo $response;
    return;

} else {
    /** API request encountered an unexpected status code */ 
    echo 'API request failed with an unexpected status code: ' . $httpStatusCode;
    echo $response;
}

echo $response;

?>
