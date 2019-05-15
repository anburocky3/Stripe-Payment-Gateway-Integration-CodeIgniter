<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Stripe Gateway Integration | Codeigniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" />    

    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />

    <!-- Stripe JavaScript library -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>    
    
    <script type="text/javascript">
        //set your publishable key
        Stripe.setPublishableKey('YOUR_PUBLISHABLE_KEY');
        
        //callback to handle the response from stripe
        function stripeResponseHandler(status, response) {
            if (response.error) {
                //enable the submit button
                $('#payBtn').removeAttr("disabled");
                //display the errors on the form
                // $('#payment-errors').attr('hidden', 'false');
                $('#payment-errors').addClass('alert alert-danger');
                $("#payment-errors").html(response.error.message);
            } else {
                var form$ = $("#paymentFrm");
                //get token id
                var token = response['id'];
                //insert the token into the form
                form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                //submit form to the server
                form$.get(0).submit();
            }
        }
        $(document).ready(function() {
            //on form submit
            $("#paymentFrm").submit(function(event) {
                //disable the submit button to prevent repeated clicks
                $('#payBtn').attr("disabled", "disabled");
                
                //create single-use token to charge the user
                Stripe.createToken({
                    number: $('#card_num').val(),
                    cvc: $('#card-cvc').val(),
                    exp_month: $('#card-expiry-month').val(),
                    exp_year: $('#card-expiry-year').val()
                }, stripeResponseHandler);
                
                //submit from callback
                return false;
            });
        });
    </script>


	
</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a href="#" class="navbar-brand">Stripe Gateway</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">

		<ul class="navbar-nav ml-auto">

			<li class="nav-item ">
				<a href="https://facebook.com/anburocky3" class="nav-link" target="_blank">#Developer</a>
			</li>

			<li class="nav-item">
				<a href="<?php echo base_url(); ?>Welcome/help" class="nav-link">Help Article</a>
			</li>

			<li class="nav-item">
				<a href="https://facebook.com/cdudenetworks" class="nav-link" target="_blank">Support</a>
			</li>

		</ul>

	</div>
	
</nav>
<!-- End Bootstrap 4 Navbar -->

	
<div class="container-fluid">
    <div class="row">
		<!-- Main jumbotron for a primary marketing message or call to action -->
	    <div class="jumbotron">
	      <div class="container-fluid">
	        <h1 class="display-5">Hello, Developers!</h1>
	        <p>This project will guide you to integrate International Payment Gateway "Stripe" in Codeigniter <span class="badge bg-primary badge-pill text-white"><?php echo CI_VERSION; ?></span> with Bootstrap 4. Understand how Stripe Gateway works and implement to your web/app accordingly. if you need any minor help <a href="<?php echo base_url(); ?>welcome/help">contact us</a> here. You can also use Learn more button below</p>
	        <p><a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>Welcome/help" role="button">Learn more &raquo;</a></p>
	      </div>
	    </div>
    </div>
</div>

<div class="container">
	<div class="row">	

        <div class="col-md-4">
            
            <div class="card">
                <div class="card-header bg-success text-white">Product Information</div>
                <div class="card-body bg-light">
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Oops!</strong>
                            <?php echo validation_errors() ;?> 
                        </div>  
                    <?php endif ?>
                    <div id="payment-errors"></div>  
                     <form method="post" id="paymentFrm" enctype="multipart/form-data" action="<?php echo base_url(); ?>Welcome/check">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo set_value('name'); ?>" required>
                        </div>  

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="email@you.com" value="<?php echo set_value('email'); ?>" required />
                        </div>

                         <div class="form-group">
                            <input type="number" name="card_num" id="card_num" class="form-control" placeholder="Card Number" autocomplete="off" value="<?php echo set_value('card_num'); ?>" required>
                        </div>
                       
                        
                        <div class="row">

                            <div class="col-sm-8">
                                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="exp_month" maxlength="2" class="form-control" id="card-expiry-month" placeholder="MM" value="<?php echo set_value('exp_month'); ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="exp_year" class="form-control" maxlength="4" id="card-expiry-year" placeholder="YYYY" required="" value="<?php echo set_value('exp_year'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="cvc" id="card-cvc" maxlength="3" class="form-control" autocomplete="off" placeholder="CVC" value="<?php echo set_value('cvc'); ?>" required>
                                </div>
                            </div>
                        </div>
                        

                       

                        <div class="form-group text-right">
                          <button class="btn btn-secondary" type="reset">Reset</button>
                          <button type="submit" id="payBtn" class="btn btn-success">Submit Payment</button>
                        </div>
                    </form>     
                </div>
            </div>
                 
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-info text-white">
                    Test credentials
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Card </th>
                                <th>Brand</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="card-number"> 4242 4242 4242 4242 </td>
                                <td>Visa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>

        <div class="col-md-4">
        	<div class="card">
        		<h6 class="card-header bg-primary text-white">
        			Some Help?
        		</h6>
        		<div class="card-body">
        			<p>Get some real help by browsing these guide from offical source.</p>
        			<ol>
        				<li> <a href="https://stripe.com/docs" target="_blank">Stripe Docs</a> </li>
        				<li> <a href="https://stripe.com/docs/checkout" target="_blank">Stripe Checkout</a></li>
        				<li> <a href="https://stripe.com/docs/error-codes" target="_blank">Stripe Error Codes</a></li>

        			</ol>
        		</div>
        	</div>
        </div>

    </div>
</div> 

   

<!-- Footer -->
<!-- <footer class="footer">
  <div class="container">
    Copyright &copy; <?php //echo date('Y'); ?>  
        <span class="float-right">Coded with Love &hearts;  : <a href="https://facebook.com/anburocky3" target="_blank">Anbuselvan Rocky</a></span>
  </div>
</footer> -->

</body>
</html>