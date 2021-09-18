<?php 
session_start();
//require 'db_operations.php';
if(isset($_SESSION['login_userid'])){
	// fetch_user_cart_db($_SESSION['login_userid']);	
	// echo $_SESSION['login_userid'];
}

?>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; chaRs et=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'css_script.php';?>
    <title>Furniture E-commerce website</title>
</head>
<body>
<div class="page-container">
	<!-- include header part -->
		<?php include 'header.php';?>
	<!-- end include header part -->
		
	<div class="container">
		<div class="row">
		    <div class="col-md-12 slideshow">
				<div id="slideshow0">
					<div class="camera_wrap camera_emboss camera_white_skin">
						<div data-thumb="image/ban1.jpg" data-src="image/ban1.jpg" >
						</div>
						<div data-thumb="image/banr2.jpg" data-src="image/banr2.jpg" >
						</div>
						<div data-thumb="image/banr3.jpg" data-src="image/banr3.jpg" >
						</div>
						<div data-thumb="image/banr4.jpg" data-src="image/banr4.jpg" >
						</div>
						
					</div>
				</div>
			</div>
		</div>
				
		<div class="row">
			<div class="col-md-3 left-menu">
				<div class="">
			<?php
				include('config.php');
				$res=mysqli_query($con,"select * from category");
				while($row=mysqli_fetch_array($res))
				{
			?>
				
				
					<h3><?php echo $row['category_name']; ?></h3>
					
					<!-- <ul>
						<li class="active"><a href="category.php">One Seater</a></li>
					</ul> -->
				
			

			<?php		
				}
			?>
		    </div>
		</div>
		<div class="col-md-9">
		
		<div class="row">
		    <?php
		   	 	include('config.php');
		    	$res=mysqli_query($con,"select * from product");
		    	// var_dump($res);
		    	while($row=mysqli_fetch_array($res))
		    	{
		    ?>
		    <div class="col-md-4">
			    <div class="product">
			    	
				    <a href="product.php?id=<?=$row['p_id']?>"><img alt="product image" width="500px" height="200px" src="<?php echo 'admin/uploads/product/'.$row['p_image']; ?>"></a>
					<div class="name">
				    <a href="product.php?id=<?=$row['p_id']?>"><?php echo $row['p_name']; ?></a>
				    </div>
				    <div class="price">
				    <p>Rs. <?php echo $row['p_price']; ?></p>
				    </div>
				</div>
			</div>
		    
		    <?php
				}
			 ?>		
		
		</div>
	

		
	   </div>
	 </div>	
	</div>		
	<?php include_once 'js_script.php';?>
	<!-- include fotter page -->
		<?php include_once 'fotter.php';?>
	<!-- end fotter page -->	

	
</div>
	<!-- include js_script -->
<script type="text/javascript">
		$(document).on('click','#logout_user',function(){
			$.ajax({
			  url: "cart_session.php",
			  method: "POST",
			  dataType: "json",
			  data: {flag : "logout"},
			  success:function(data){
			  	window.location.replace = "http://localhost/Delux Furniture/index.php"; 
			  }
			});
		});	
	</script>		
	<!-- end include js_cript -->	
<script>
		$(document).ready( function()
		{	
			jQuery('#slideshow0 > div').camera({
			alignment:"center",
			autoAdvance:true,
			mobileAutoAdvance:true,
			barDirection:"leftToRight",
			barPosition:"bottom",
			cols:6,
			easing:"easeInOutExpo",
			mobileEasing:"easeInOutExpo",
			fx:"random",
			mobileFx:"random",
			gridDifference:250,
			height:"auto",
			hover:true,
			loader:"pie",
			loaderColor:"#eeeeee",
			loaderBgColor:"#222222",
			loaderOpacity:0.3,
			loaderPadding:2,
			loaderStroke:7,
			minHeight:"200px",
			navigation:true,
			navigationHover:true,
			mobileNavHover:true,
			opacityOnGrid:false,
			overlayer:true,
			pagination:true,
			pauseOnClick:true,
			playPause:true,
			pieDiameter:38,
			piePosition:"rightTop",
			portrait:false,
			rows:4,
			slicedCols:12,
			slicedRows:8,
			slideOn:"random",
			thumbnails:false,
			time:7000,
			transPeriod:1500,				
			imagePath: '../image/'
		});
	});
	</script>    
</body>
</html>
