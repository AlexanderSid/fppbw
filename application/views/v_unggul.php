<!DOCTYPE html>
<html lang="en">
  <?php
    if (isset($emailErr)) {
    $emailEr= $emailErr;    
  }else{  
    $emailEr= "";
  }
  ?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Equitas - Keunggulan</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style >
  #link-container {
    text-align: center;}

  .btn-primary {
    color: #fff;
    background-color: #d80404;
    border-color: #d80404;
  }

  .card-title {
  color: #d80404;
    margin-bottom: 0.75rem;
  }
  .error {color: #FF0000;}
  </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/heroic-features.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/slideshow.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">
      <div class="container">
        <img class="navbar-brand" src="<?php echo base_url('assets/img/eq3.png');?>"href="#" height="50" width="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo site_url('main'); ?>">Home
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('main/about'); ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('main/contact'); ?>">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('tabloid'); ?>">Subscribe</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
    
      <!-- Jumbotron Header -->
      <header class="jumbotron">
        <h1 class="display-4">NOT YET AVAILABLE</h1>
      </header>



     

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"></p>
        
      </div>
      <div id=link-container>
      <a class="text-white" href="<?php echo site_url('login'); ?>">Masuk</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/slideshow.js"></script>


  </body>

</html>
