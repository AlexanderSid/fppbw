<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Equitas - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style >
	#link-container {
    text-align: center;
}



	</style>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/admin/heroic-features.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
      <div class="container">
        <a class="navbar-brand" href="#">Equitas - Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login/logout'); ?>">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
      	<h2 class="display-5" style="text-align:center;" >Kirim Email ke Subscriber</h2>
        <p style="text-align: center; color: green;"><?php echo $this->session->flashdata('message'); ?></p>
      	<form action="<?php echo site_url('Email_controller/sendemail'); ?>" method="post">
    			<p>Subject</p>
    			<input type="text" name="subject" size="80">
    			<p>Isi</p>
    			<textarea name="isi" rows="10" cols="100"></textarea>
    			<p></p>
				<button type="submit">Submit</button>
    		</form>

    	</header>


      
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"></p>
        
      </div>
     
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>

</html>
