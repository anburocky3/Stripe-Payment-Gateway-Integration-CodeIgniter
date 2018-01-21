<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    
	<title>Stripe Gateway Integration | Codeigniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />    

    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/bootstrap.min.js" />
	
</head>
<body>

    <header>
        <!-- Bootstrap 4 Navbar  -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="<?php echo site_url('/'); ?>" class="navbar-brand">Stripe Gateway</a>

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
    </header>


    <!-- Begin page content -->
    <div class="container">
        <div class="row mt-3">
            <!-- <div class="col-sm-4"></div> -->
            <div class="col-4 mx-auto">
                <div class="card">
                    <img class="card-imgs-top" src="https://cdn.dribbble.com/users/411286/screenshots/2619563/desktop_copy.png" alt="Card image cap" width="349" height="250">
                    <div class="card-block" style="padding: 20px;">
                        <h4 class="card-title">Payment Successful #<?php echo $insertID; ?></h4>
                        <p class="card-text">We received your payment on your purchase, check your email for more information.</p>
                        <a href="<?php echo site_url('/'); ?>" class="btn btn-info btn-sm float-right">Go Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <footer class="footer">
      <div class="container">
        Copyright &copy; <?php echo date('Y'); ?>  
            <span class="float-right">Coded with Love &hearts;  : <a href="https://facebook.com/anburocky3" target="_blank">Anbuselvan Rocky</a></span>
      </div>
    </footer>
  </body>
</html>
