<?php
require_once "stripe/init.php";



$stripeDetails=array(
"secretKey" => "sk_test_jfnNRTrTn4H3SANR8IvWWNR1",
"publishableKey" => "pk_test_6njMEQdwTWBeFGmdRt7qgZsW",



);


// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);


?>