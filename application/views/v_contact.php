<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Equitas - Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style >
  #link-container {
    text-align: center;
}

.my-4 {
  margin-bottom: 1rem !important;
  margin-top: 1rem !important;
}
.display-6 {
  font-size: 2rem;
  font-weight: 400;
  line-height: 1.2;
}
.mtop {
  margin-top: 0rem;
  margin-bottom: 0rem;
}

  </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/admin/heroic-features.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">
      <div class="container">
        <a class="navbar-brand" href="#">Equitas - Contact Us</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo site_url('main'); ?>">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('main/about'); ?>">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('main/contact'); ?>">Contact</a>
              <span class="sr-only">(current)</span>
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

      <div class="lead text-center">
        <br>
      <p>Anda dapat menghubungi kami melalui  </p>
      <p>Email       : </p>
      <p>No. Telepon : </p>
      <p>Alamat      : </p>
      <br>
      <p>Atau dapat mengisi langsung form dibawah ini ..</p>
      </div>
      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h2 class="display-6 mtop" style="text-align:center;" >Contact Us</h1>
        <form action="<?php echo site_url('Email_controller/sendmsg'); ?>" method="post">
          <p>Nama</p>
          <input class="mtop" type="text" name="nama" size="80">
          <p>Email anda</p>
          <input class="mtop" type="text" name="email" size="80">
          <p>Pesan anda</p>
          <textarea class="mtop" name="pesan" rows="10" cols="100"></textarea>
          <p></p>
        <button type="submit" >Submit</button>
        </form>

      </header>


      
    </div>
    <!-- /.container -->

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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
