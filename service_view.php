<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>🔌 EPL ||💡 Eastern Power Limited</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">
        <img src="assets/img/logo.png" style="width:30px;height:40px;padding-bottom:5px;">&nbspeastern power limited
      </a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index#work">Produts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index#blog">
Sister Concern</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="index#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div id="home" class="intro route bg-image" style="background-image: url(assets/img/99.jpeg);background-position: center;">
  


<br>
<br><br>
<br><br>



    

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">
<?php 
include('includes/config.php');
$id = $_GET['id'];
$select = "SELECT * from `epl_service` where `id`='$id'";
$run = mysqli_query($con,$select);
while ($row=mysqli_fetch_array($run)) {?>
	

      
          <table class="table">
          	<th colspan="2"><center><h1 style="color:white;">Service Info</h1></center></th>
          	<tr>
          		<td style="width:40%;"> 
          		   <img src="author/service-photo/<?php echo$row['photo']?>" style="width:350px;height:350px;">
          	   </td>
          	   <td style="text-align:left;margin-left:-10px;">
          	   	<h1 style="color:white"><br><Strong>TItle</Strong>: <?php echo$row['title']?></h1>
          	   	<p style="color:white;"><Strong>Description</Strong> :  <?php echo $row['description'] ?></p>
          	   	<p style="color:white;"><Strong>Date</Strong> :  <?php echo $row['date']; ?> [<?php echo $row['time'];?>]</p>
          	   		<p style="color:white;"><Strong>Posted By</Strong> :  <?php echo $row['post_by']; ?></p>
          	   </td>
          </tr>
          </table>

<?php } ?>
          
</div>
        </div>
</section>
</main>

<br><br><br><br><br><br><br>


  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Eastern Power Limited</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://facebook.com/udashbd">Saiyed</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
