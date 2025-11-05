<?php
require_once 'config.php';

// Get access token
$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$credentials = base64_encode($consumerKey . ':' . $consumerSecret);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . $credentials]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

echo "<pre>";
print_r(json_decode($response, true));
echo "</pre>";
?>
