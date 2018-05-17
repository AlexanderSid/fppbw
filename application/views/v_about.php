<!DOCTYPE html>
<html lang="en">


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Equitas - About Us</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <style >
  .display-6 {
  font-size: 2rem;
  font-weight: 400;
  line-height: 1.2;
}
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
  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
  </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/heroic-features.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/slideshow.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">
      <div class="container">
        <a class="navbar-brand">Equitas - About us</a>
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
              <a class="nav-link" href="#">About</a>
              <span class="sr-only">(current)</span>
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

      <h1 class="display-6 text-center">About Us</h1>
      <header class="jumbotron">        
        <img class="center"src="<?php echo base_url('assets/img/eq3.png');?>" >
        <p class="lead">Equitas adalah tabloid yang mulai didirikan sejak tahun .... oleh bpk Antonius,
        blablablablablabla blablablablablablablablablablablablablablabla blablablablablablablablabla</p>
        
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
