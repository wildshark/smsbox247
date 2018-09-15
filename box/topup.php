<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 29/08/2018
 * Time: 5:50 PM
 */

$data = ["price" => '1',
     "network"=> "mtn",
  "recipient_number" =>"0548263738",
  "sender" => "0543268580",
  "option" => "rmtm",
  "apikey" => "0809d976660aff2b017681f53bb83895feb7acec"];

$data =json_encode($data);

$url = 'https://client.teamcyst.com/api_call.php';

$additional_headers = array(
    'Content-Type: application/json'
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // $data is the request payload
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $additional_headers);

$server_output = curl_exec ($ch);
curl_close($ch);

echo  $server_output;