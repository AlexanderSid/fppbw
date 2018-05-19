<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Equitas - Langganan</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

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

/* Contact Section
--------------------------------*/
#contact {
  padding: 60px 0;
}

#contact .contact-info {
  margin-bottom: 20px;
  text-align: center;
}

#contact .contact-info i {
  font-size: 48px;
  display: inline-block;
  margin-bottom: 10px;
  color: #18d26e;
}

#contact .contact-info address, #contact .contact-info p {
  margin-bottom: 0;
  color: #000;
}

#contact .contact-info h3 {
  font-size: 18px;
  margin-bottom: 15px;
  font-weight: bold;
  text-transform: uppercase;
  color: #999;
}

#contact .contact-info a {
  color: #000;
}

#contact .contact-info a:hover {
  color: #18d26e;
}

#contact .contact-address, #contact .contact-phone, #contact .contact-email {
  margin-bottom: 20px;
}

@media (min-width: 768px) {
  #contact .contact-address, #contact .contact-phone, #contact .contact-email {
    padding: 20px 0;
  }
}

@media (min-width: 768px) {
  #contact .contact-phone {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
  }
}

#contact .form #sendmessage {
  color: #18d26e;
  border: 1px solid #18d26e;
  display: none;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}

#contact .form #errormessage {
  color: red;
  display: none;
  border: 1px solid red;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}

#contact .form #sendmessage.show, #contact .form #errormessage.show, #contact .form .show {
  display: block;
}

#contact .form .validation {
  color: red;
  display: none;
  margin: 0 0 20px;
  font-weight: 400;
  font-size: 13px;
}

#contact .form input, #contact .form textarea {
  padding: 10px 14px;
  border-radius: 0;
  box-shadow: none;
  font-size: 15px;
}

#contact .form button[type="submit"] {
  background: #18d26e;
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  cursor: pointer;
}

#contact .form button[type="submit"]:hover {
  background: #13a456;
}


  </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/admin/heroic-features.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/cssnew.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/langgan.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">
      <div class="container">
        <a class="navbar-brand" href="#">Equitas - Langganan</a>

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
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo site_url('main/contact'); ?>">Contact</a>
              
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('tabloid'); ?>">Subscribe</a>
              <span class="sr-only">(current)</span>
                 
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <section id="contact" class="section-bg wow fadeInUp">
    <div class="container">
      <div class="section-header text-center">
          <h3 style="color: #d80404;">Form Langganan</h3>
          <p>Silahkan mengisi semua data dibawah untuk mengajukan langganan..</p>
        </div>
       
      <!-- Jumbotron Header -->
      <div class="text-center">
        <?php if($this->session->flashdata('a') =='1'): ?>
          <p style="color: green;"> Permintaan berlangganan terkirim</p>
        <?php elseif($this->session->flashdata('a') =='0'): ?>
        <p style="color: red;"> Permintaan berlangganan gagal terkirim </p>
        <?php else :?>
        <?php endif; ?>

        <form action="<?php echo site_url('Tabloid/register_user'); ?>" method="post">
          <p></p>
          <input class="mtop" type="text" name="nama" size="98" placeholder="Nama">
          <?php if($this->session->flashdata('b') =='1'): ?>
          <p style="color: green;"> </p>
          <?php elseif($this->session->flashdata('b') =='0'): ?>
          <p style="color: red;"> Nama harus diisi </p>
          <?php else :?><p></p>
          <?php endif; ?>
          <input class="mtop" type="text" name="nope" size="98" placeholder="Nomor handphone, cth: 081234567891">
          <?php if($this->session->flashdata('c') =='1'): ?>
          <p style="color: green;"></p>
          <?php elseif($this->session->flashdata('c') =='0'): ?>
          <p style="color: red;"> Nomor handphone harus diisi </p>
          <?php elseif($this->session->flashdata('c') =='2'): ?>
          <p style="color: red;"> Nomor tidak valid</p>
          <?php else :?><p></p>
          <?php endif; ?>
          <textarea class="mtop" name="alamat" rows="10" cols="100" placeholder="Tuliskan alamat anda.."></textarea>
          <?php if($this->session->flashdata('d') =='1'): ?>
          <p style="color: green;"> </p>
          <?php elseif($this->session->flashdata('d') =='0'): ?>
          <p style="color: red;"> Alamat harus diisi</p>
          <?php else :?><p></p>
          <?php endif; ?>
        <button type="submit" >Submit</button>
        </form>
      </div>
     


      </section>
    </div>
    <!-- /.container -->

    <!-- Footer -->
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
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
