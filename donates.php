<?php 
require_once "config.php";




$amount= $_POST['amount'];


echo '<form action="stripe.php?a='.$amount.'" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="'.$stripeDetails['publishableKey'].'"
    data-amount="'.$amount.'"
    data-name="Charity"
    data-description="Donation for poor"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
</form>';
?>