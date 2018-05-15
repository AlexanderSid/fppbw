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

    <title>Equitas</title>

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
        <p class="lead">Dengan berlangganan dengan Equitas online anda akan mendapatkan berita-berita seputar hukum & politik yang up to date dalam wilayah Malang raya dan Nusa Tenggara Timur secara gratis, jangan lewatkan setiap berita baru hanya dengan akses internet</p>
        <form action="<?php echo site_url('Subscribe/register_user'); ?>" method="post">
        <input type="text" name="email" size="60" placeholder="Masukkan Email..">
        <input type="submit" value="Subscribe"><br>
        <?php if($this->session->flashdata('code') =='1'): ?>
          <p style="color: green;"> Email berhasil ditambahkan</p>
        <?php elseif($this->session->flashdata('code') =='0'): ?>
        <p style="color: red;"> Email gagal ditambahkan</p>
        <?php else :?>
        <?php endif; ?>
        

      </form>
      </header>



      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Langganan Tabloid</h4>
              <p class="card-text">Dapatkan berita fresh dalam bentuk kertas hangat yang akan menemani anda dengan berita-berita seputar Malang raya dan NTT</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo site_url('tabloid'); ?>" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Keunggulan Kami</h4>
              <p class="card-text">Apa saja yang dapat kami tawarkan kepada anda.</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo site_url('main/unggul'); ?>" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">About us</h4>
              <p class="card-text">Profil tabloid Equitas, sejarah dan segala sesuatu tentang Equitas.</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo site_url('main/about'); ?>" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Contact Us</h4>
              <p class="card-text">Hubungi kami!</p>
            </div>
            <div class="card-footer">
              <a href="<?php echo site_url('main/contact'); ?>" class="btn btn-primary">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

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
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/slideshow.js"></script>


  </body>

</html>
