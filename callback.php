<?php
// callback.php

// Step 1: Capture the raw JSON from Safaricom
$data = file_get_contents('php://input');

// Step 2: Decode the JSON
$decodedData = json_decode($data, true);

// Step 3: Log the response for testing
$logFile = 'logs/callback.log';
file_put_contents($logFile, date("Y-m-d H:i:s") . " - " . print_r($decodedData, true) . "\n", FILE_APPEND);

// Step 4: Optional - Handle the result
if (isset($decodedData['Body']['stkCallback'])) {
    $callback = $decodedData['Body']['stkCallback'];
    $resultCode = $callback['ResultCode'];
    $resultDesc = $callback['ResultDesc'];

    if ($resultCode == 0) {
        // Payment successful
        $amount = $callback['CallbackMetadata']['Item'][0]['Value'];
        $mpesaReceipt = $callback['CallbackMetadata']['Item'][1]['Value'];
        $phone = $callback['CallbackMetadata']['Item'][4]['Value'];

        // Example: save to DB or display
        $successLog = "✅ SUCCESS: Received KES {$amount} from {$phone}, Receipt: {$mpesaReceipt}";
        file_put_contents($logFile, $successLog . "\n", FILE_APPEND);
    } else {
        // Payment failed or cancelled
        $failLog = "❌ FAILED: {$resultDesc}";
        file_put_contents($logFile, $failLog . "\n", FILE_APPEND);
    }
}

// Step 5: Respond to Safaricom with 200 OK
http_response_code(200);
echo json_encode(['ResultCode' => 0, 'ResultDesc' => 'Callback received successfully']);
?>
