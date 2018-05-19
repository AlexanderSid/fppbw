<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Equitas</title>


    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<style>
  .jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: transparent;
  background-image: url('assets/img/eqbg.jpg');
  background-size: cover;
  border-radius: 0.3rem;
  }
  @media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
  }

  .jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
  }
	</style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/heroic-features.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/slideshow.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/cssnew.css" rel="stylesheet">
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
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
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
        <h1 class="display-4">Mari berlangganan</h1>
        <p class="lead">Dengan berlangganan dengan Equitas online newsletter anda akan mendapatkan berita-berita seputar hukum & politik yang up to date dalam wilayah Malang raya dan Nusa Tenggara Timur secara gratis, jangan lewatkan setiap berita baru hanya dengan akses internet</p>
        <form action="<?php echo site_url('Subscribe/register_user'); ?>" method="post">
        <input type="text" name="email" size="60" placeholder="Masukkan Email..">
        <input type="submit" value="Subscribe" class="btn btn-danger"><br>
        <?php if($this->session->flashdata('code') =='1'): ?>
          <p style="color: green;"> Email berhasil ditambahkan</p>
        <?php elseif($this->session->flashdata('code') =='0'): ?>
        <p style="color: red;"> Email gagal ditambahkan</p>
        <?php else :?> 
        <?php endif; ?>
        

      </form>
      </header>

    </div>
    <!-- /.container -->
 <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/eq2.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                Profile, sejarah, tujuan dan segala sesuatu tentang equitas yang anda harus ketahui
              </p>
              <br>
              <div class="card-footer text-center">
              <a href="<?php echo site_url('main/about'); ?>" class="btn btn-primary">Find Out More!</a>
            </div>
            </div>

          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/eq2.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Langganan Tabloid</a></h2>
              <p>
                Dapatkan berita fresh dalam bentuk kertas hangat yang akan menemani anda dengan berita-berita seputar Malang raya dan NTT
              </p>
              <div class="card-footer text-center">
              <a href="<?php echo site_url('main/about'); ?>" class="btn btn-primary">Find Out More!</a>
            </div>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/eq2.png" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-location-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Contact Us</a></h2>
              <p class="text-center">
               Hubungi kami!
              </p>
              <br><br>
              <div class="card-footer text-center">
              <a href="<?php echo site_url('main/about'); ?>" class="btn btn-primary">Find Out More!</a>
            </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Unggul Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp text-center">
          <h3 style="color: #d80404">KEUNGGULAN</h3>
          <p>Beberapa hal yang dapat kami jamin selama pelayanan kami demi kenyamanan anda.</p>
          <br><br>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline" style="color: red"></i></div>
            <h4 class="title">Berita up to date</h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: red"></i></div>
            <h4 class="title">Konten berkualitas</h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline" style="color: red"></i></div>
            <h4 class="title">Harga terjangkau</h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline" style="color: red"></i></div>
            <h4 class="title"><a href="">Pengiriman tepat waktu</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline" style="color: red"></i></div>
            <h4 class="title">Autentik - No hoax</h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>

        </div>

      </div>
      <br><br>
    </section><!-- #services -->


<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Equitas</h3>
            <p></p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo site_url('main'); ?>">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo site_url('main/about'); ?>">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo site_url('main/contact'); ?>">Send message</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Malang - Jawa Timur <br>
              Indonesia<br>
              <strong>Phone:</strong> +6281....<br>
              <strong>Email:</strong> equitas.news@yahoo.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Other</h4>

            <a href="<?php echo site_url('login'); ?>"><p style="color: white">Admin - Masuk</p></a>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/slideshow.js"></script>


  </body>

</html>
