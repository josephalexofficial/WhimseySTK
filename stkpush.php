<?php
require_once 'config.php';

// Get Access Token
$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$credentials = base64_encode($consumerKey . ':' . $consumerSecret);

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization: Basic ' . $credentials]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$tokenData = json_decode($response);
$access_token = $tokenData->access_token ?? null;

if (!$access_token) {
    die("❌ Failed to generate access token!");
}

// Prepare STK Push Request
$stkUrl = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

$timestamp = date("YmdHis");
$password = base64_encode($BusinessShortCode . $Passkey . $timestamp);

$curl_post_data = [
    'BusinessShortCode' => $BusinessShortCode,
    'Password' => $password,
    'Timestamp' => $timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $_POST['amount'] ?? '1',
    'PartyA' => $_POST['phone'] ?? '254708374149', // Test phone
    'PartyB' => $BusinessShortCode,
    'PhoneNumber' => $_POST['phone'] ?? '254708374149',
    'CallBackURL' => $CallbackURL,
    'AccountReference' => 'WhimseyTechSTK',
    'TransactionDesc' => 'Test Payment'
];

$data_string = json_encode($curl_post_data);

$curl = curl_init($stkUrl);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $access_token
]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

$response = curl_exec($curl);
curl_close($curl);

echo "<pre>";
print_r(json_decode($response, true));
echo "</pre>";
?>
