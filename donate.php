<?php 
require_once "config.php";

?>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Charity | Help the poor</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Owl carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>


    </head>

    <body background="assets/images/slider/home-slider-2.jpg">


    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                    <h1 ><a href="index.html">Charity</a></h1>
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>

                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a  href="index.html">HOME</a></li>
                    <li><a class="is-active" href="donate.html">Donate</a></li></ul>

                </div> 

              </div> 
              
            </div>


        </nav> 

    </header> 

     

                        <h3 class="title-style-1 text-center"><u>Thank you for your donation</u>   </h3>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">

                         <form action="stripe.php" method="post">
                

                            <div class="form-group ">
                                <input type="text" class="form-control" id="amount" placeholder="AMOUNT" name="amount">
                            </div>

                      
                            <div class="form-group ">
                                <input type="text" class="form-control" name="firstName" placeholder="First name*">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="lastName" placeholder="Last name*">
                            </div>
                    

                            <div class="form-group ">
                                <input type="text" class="form-control" name="payer_email" placeholder="Email*">
                            </div>

                            <div class="form-group ">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>
<script type="text/javascript">
    var amount=  document.getElementById("amount").value;
</script>

                            <div class="form-group ">
                                <?php
                            echo'<script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="'.$stripeDetails['publishableKey'].'"
    data-amount=".amount."
    data-name="Charity"
    data-description="Donation for poor"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>'?>
                            </div>
                          
                    
                </form>
                 </div>
             </div>

            </div>



<br/>
    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <p>
                                    We are one of the largest national relief and development organizations in India.
                                </p> 

                                <p>
                                    By providing lifesaving food, secure housing, clean water, healthcare, emergency relief, micro-enterprise projects and education opportunities, we are giving the poor a chance at a better future, and showing them God’s love. Join us. 
                                </p>

                            </div>
                            
                        </div>

                    </div>

                 


                    <div class="clearfix"></div>

                </div>
                
            </div>
    
        </div>
    </footer>
 </body> 
 </html>