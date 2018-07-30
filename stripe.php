<?php

require_once "config.php";


// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:



$price= $_POST['amount'];
$email1=$_POST['payer_email'];
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$phno=$_POST['phone'];




if(!isset($_POST['stripeToken']) || !isset($price) ){
  header('Location: http://localhost/PaymentIntegration/donate.php');
exit();

}
$token = $_POST['stripeToken'];
$email= $_POST['stripeEmail'];


$charge = \Stripe\Charge::create([
    'amount' => $price,
    'currency' => 'usd',
    'description' => 'Donation',
    'source' => $token,
]);



$email_to =$email1; 
$email_from = "abhijith1203@gmail.com"; // must be different than $email_from 
$email_subject = "Donation Successful";
$message = " Hello". $fname." ".$lname.",<br/> Your donation of ".$price." is completely Successfull. " ; // required

   

    // create email headers
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if (@mail($email_to, $email_subject, $email_message, $headers))
    {
        echo json_encode(array('success'=>1, 'message'=>'Form submitted successfully.')); 
        echo "Thank you for your help.<br/>";
        ?>
        <input type="button" onclick="location.href='http://localhost/PaymentIntegration/index.html';" value="Go to home" />
        <?php

         echo $token.'<br/>';
echo $email;
    }

    else 
    {
        echo json_encode(array('success'=>0, 'message'=>'An error occured. Please try again later.')); 
        die();        
    }


    



?>

