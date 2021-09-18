<?php
session_start();

//if(isset($_SESSION['login_userid'])){

?>
<!doctype html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php include_once 'css_script.php';?>

    <title>Furniture E-commerce website</title>
</head>
<body>
<div class="page-container">
	<!-- include header part -->
		<?php include_once 'header.php';?>
	<!-- end include header part -->
	

		<div class="container">
			<ul class="breadcrumb">
					<li><a href="index.php">Home</a> <span class="divider"></span></li>
					<li class="active">About Us</li>
			</ul>

		    <h2>About Us</h2>

		<div class="row registerbox">
		    <div class="col-md-12">
					<p class="text-dark">
						The aim of this web-application is to simplify the process of buying and selling furniture with the purpose to grow the business rapidly. 
					</p>
					<p class="text-dark">
						We are known for our commitment to quality and customer satisfaction.
						Our wilingness to move with the time. 
					</p>
					<p class="text-dark">
						All our products are made from premium materials and hardware and will undoubtely stand the taste of time.  
					</p>
			</div>
		</div>
		
		<!-- <div class="row registerbox">
		    <div class="col-md-4">
			    <img src="image/banner1.jpg" alt="banner" class="img-polaroid">
			</div>
		</div> -->

   </div>		
	<!-- include fotter page -->
		<?php include_once 'fotter.php';?>
	<!-- end fotter page -->	

		
</div>
	<!-- include js_script -->
		<?php include_once 'js_script.php';?>
	<!-- end include js_cript -->	

</html>
