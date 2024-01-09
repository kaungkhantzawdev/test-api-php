<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://judgify-staging-11201423.dev.odoo.com/lead/create',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "lead_source": "Inbound App",
    "lead_status": "Stage 1 - Not Contacted",
    "original_source_drill_down_1": "",
    "original_source_drill_down_2": "",
    "email": "phyo1690@gmail.com",
    "first_name": "Phyo Hsu",
    "last_name": "Mon19",
    "phone": "0987654332",
    "company": "Milton website Consulting",
    "newsletter_judgify": true,
    "country": "myanmar"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer 315de66dcff3829c7319a8287cf9a1de769fd831',
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
