<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Stripe Help | Codeigniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" />
	
</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a href="<?php echo base_url(); ?>" class="navbar-brand">Stripe Gateway</a>

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

<div class="container mt-5">
	<div class="row">	
		<div class="col-md-12">
			<div class="card">
				<h5 class="card-header bg-primary text-white">Help in Integrating Stripe</h5>
				<div class="card-body">
					<div style="line-height:3rem">
						<h6>Quick steps to integrate to your web/app on the go!</h6>
						<ol>
							<li> Clone the repository <code>git clone https://github.com/anburocky3/Stripe-Payment-Gateway-Integration-CodeIgniter.git</code> </li>
							<li> Open Terminal, type<code>cd Stripe-Payment-Gateway-Integration-CodeIgniter</code> </li>
							<li> Copy<code>Welcome.php</code> controller file in your <code>applications/controllers/</code>directory</li>
							<li> Copy<code>product_form.php</code>,  <code>payment_success.php</code>, <code>payment_error.php</code> view files in our<code>applications/views/</code>directory to your directory.</li>
							<li>Copy<code>stripe</code> folder from<code>applications/third_party</code> folder and paste it in your<code>applications/third_party</code> folder.</li>
							<li> Create New Database and import the<code>orders.sql</code> to your Database.</li>
							<li> Configure the <code>base_url</code> and database info in <code>applications/database.php</code> </li>
							<li> Create developer account on Stripe and get your Stripe secret key & Stripe Publishable key. </li>
							<li> Replace your publishable key in <code>applications/views/product_form.php</code> on <code>line 25</code></li>
							<li> Replace your Secret key & Publishable key in <code>applications/controller/Welcome.php</code> on <code>line 30, 31</code></li>
							<li> Customize the controller logic according to your web/app. </li>

						</ol>	
					</div>

					<div class="card-footer">
						<h6><strong>Code Explanation</strong></h6>
						<ol>
							<li><em>Welcome.php</em> Controller - Displays the product_form.php view page.</li>
							<li><em>Welcome.php/check</em> Method -  Check all parameters required for transaction and process the payment..</li>
							<li><em>Welcome.php/help</em> Method - Displays the quick integration help page.</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
        
    </div>
   

	<!-- Footer -->
	<hr>
	<footer>
		<p class="float-left">Copyright &copy; <?php echo date('Y'); ?>  </p>
			<span class="float-right">Coded with Love &hearts;	: <a href="https://facebook.com/anburocky3" target="_blank">Anbuselvan Rocky</a></span>	
	</footer>
</div> 

</body>
</html>