<?php
require "stripe/init.php";

$PublishableKey="pk_test_51NpGdAIPIXuAWKzWVCxwgljd4rMplP4wZ86nsdOw2D0eODY4fTFqdbh2WSnndPjvLFAz9vRFhgfuhZFopGJvFLRT00CxTVJzaV";
$SecretKey="sk_test_51NpGdAIPIXuAWKzWi1jeRbmQP7Cn271Kpw6UWoN8RuhboLL98D6QLaxpkw3txArv5G0eykQRd7mzppjOtlYoiVeB00gPXVBdCe";

\stripe\stripe::setApiKey($SecretKey);
?>