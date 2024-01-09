<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://universities.hipolabs.com/search?country=United+States',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
//   CURLOPT_POSTFIELDS =>'{
//     "name": "hello one two",
//     "link": "aljfkal;dk"
// }',
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: application/json',
//     'Authorization: Bearer eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7Il9pZCI6IjY1OGE1MmMxODMxZGY5ZWEyZWU0YjY3NyIsIm5hbWUiOiJrYXVuZ2toYW50emF3IiwiZW1haWwiOiJrYXVuZ2toYW50emF3LmRldkBnbWFpbC5jb20iLCJpc0FkbWluIjp0cnVlLCJzb2NpYWxNZWRpYSI6W10sImNyZWF0ZWRBdCI6IjIwMjMtMTItMjZUMDQ6MTI6NDkuMzM3WiIsInVwZGF0ZWRBdCI6IjIwMjMtMTItMjZUMDQ6MTI6NDkuMzM3WiIsIl9fdiI6MH0sImlhdCI6MTcwMzY2NjYwNCwiZXhwIjoxNzAzNjcwMjA0fQ.5eoE2MjDKY0Cvfu9GKaKA5pS3xcVyGKjI5SmcKh394fJHHn3bzTKPYKZ3dRcLJlWNuiGOGFb4wfpg2vAaff6GQ'
//   ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
