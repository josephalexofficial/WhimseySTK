<?php
// =========================
// M-Pesa Daraja Configuration
// =========================

// Consumer Key and Secret (from your Safaricom Developer App)
$consumerKey = 'KYLNXKDTSrF8Ur9IFcOokZn0FdbFb4C8gv0hAZNgRRgvzfAc';
$consumerSecret = 'jkqiiFofSaoG6JXApTn4VAbMEAdaVXJ0GxYiyGiXQXrsEhdgtpMv9SIqJBVx4Ppp';

// Business Shortcode (Sandbox default)
$BusinessShortCode = '174379'; // Default test Paybill for sandbox

// Passkey (Sandbox default)
$Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';

// Environment - 'sandbox' or 'production'
$Environment = 'sandbox';

// Callback URL (for sandbox testing use an online URL or ngrok tunnel)
$CallbackURL = 'https://yourdomain.com/callback.php'; // Replace with your real or ngrok URL

?>
