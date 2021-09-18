<?php
include('config.php');
require_once("cart_session.php");
require_once("cartdb.php");

?>

<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'css_script.php';?>	
    <title></title>
    <script type="text/javascript">
    	
    </script>
</head>
<body>
<div class="page-container">
	<!-- include header part -->
		<?php include_once 'header.php';?>
	<!-- end include header part -->

    <div class="container">
		    <ul class="breadcrumb prod">
			    <li><a href="index.php">Home</a> <span class="divider"></span></li>
				<li class="active">Product</li>
		    </ul>

		<div class="row product-info">
		    <div class="col-md-6">
						<?php
						$result=mysqli_query($con,"select * from product where `p_id`=".$_GET['id']);
						$rows=mysqli_fetch_assoc($result);
						?>
				<div class="image"><a class="cloud-zoom" rel="adjustX: 0, adjustY:0" id='zoom1' href="products/dress1home.jpg" title="Nano"><img src="admin/uploads/product/<?php echo $rows["p_image"] ?>" title="Nano" alt="Nano" id="image" height="300px" /></a></div>
				<div class="image-additional">
					<a title="Dress" rel="useZoom: 'zoom1', smallImage: 'products/dress1home.jpg'" class="cloud-zoom-gallery" href="products/dress1home.jpg"><img alt="Dress" title="Dress" src="products/dress1home.jpg"></a>
					<a title="Dress" rel="useZoom: 'zoom1', smallImage: 'products/dress5home.jpg'" class="cloud-zoom-gallery" href="products/dress5home.jpg"><img alt="Dress" title="Dress" src="products/dress5home.jpg"></a>
					<!-- <a title="Dress" rel="useZoom: 'zoom1', smallImage: 'products/dress6home.jpg'" class="cloud-zoom-gallery" href="products/dress6home.jpg"><img alt="Dress" title="Dress" src="products/dress6home.jpg"></a>
					<a title="Dress" rel="useZoom: 'zoom1', smallImage: 'products/dress4home.jpg'" class="cloud-zoom-gallery" href="products/dress4home.jpg"><img alt="Dress" title="Dress" src="products/dress4home.jpg"></a> -->
				  </div>
  			</div>
  			
		    <div class="col-md-6">
				<h1>
					<input type="hidden" id="p_id" value="<?=$rows['p_id']?>">
					<input type="hidden" id="p_image" value="<?=$rows['p_image']?>">
					<input type="hidden" id="p_name" value="<?=$rows['p_name']?>"><?=$rows['p_name']	?>
				</h1>
				    <div class="line"></div>
						<ul>
							<li><span>Brand:</span> <a href="#">Shop Online</a></li>							
							<li><span>Availability: </span>In Stock</li>
						</ul>
					<div class="price">
						Price <span class="strike"><?=intval($rows['p_price'])+200?></span>
						<strong>
							<?=$rows['p_price']?>
						</strong>
					</div>	
					<div>
						<span>Colour :- </span> 
						<!-- <strong> -->
							<?=$rows['p_colour']?>
						<!-- </strong> -->
					</div>
					<br>
					<div>
						<span>Description :- </span> 
						<!-- <strong> -->
							<?=$rows['p_description']?>
						<!-- </strong> -->
					</div>				

					<div class="line"></div>
					<?php
					
						$flag=0;
						if(isset($_SESSION['login_userid'])){
								$cart_details=fetch_cart($_SESSION['login_userid'],$_GET['id']);
								$cart_details=json_decode($cart_details,1);
								if($cart_details['is_null']==false){
									foreach ($cart_details['cart'] as $row) {
										if($row['p_id']==$_GET['id']){
											$flag=1;
										}
									}
								}
							}
							else{
								$cart_details=cart_fetch_session();
								$cart_details=json_decode($cart_details,1);
								if($cart_details['is_null']==false){
									foreach ($cart_details['cart'] as $row) {
										if($row['p_id']==$_GET['id']){
											$flag=1;
										}
									}
								}
							}
						if($flag==0){
					?>
					<form class="form-inline" id="addcart">
						<input type="hidden" name="p_price" value="<?=$rows['p_price']?>">
						<button class="btn btn-primary" id="addToCart" type="button">Add to Cart</button>
						<label>Qty:</label> <input type="text" id="qty" placeholder="1" class="col-md-1" maxlength="2">
					</form>
					<?php }else{ ?>
					<form class="form-inline">
						<a class="btn btn-primary" href="http://localhost/Delux Furniture/cart.php">Go to Cart</a>
					</form>
					<?php }  ?>
					<!-- <div class="tabs">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#home">Description</a></li>
						<li></li>
						
					</ul>
					</div> -->
			</div>
		</div>
		
	</div>		
	</div>
	<!-- include fotter page -->
		<?php include_once 'fotter.php';?>
	<!-- end fotter page -->	
</div>
	<!-- include js_script -->
		<?php include_once 'js_script.php';?>
	<!-- end include js_cript -->
<script>
//Add Product To Carts
$(document).on('click','#addToCart',function (e){
	e.preventDefault();
	var p_id=$(".product-info #p_id").val();
	var p_image=$(".product-info #p_image").val();
	var p_name=$(".product-info #p_name").val();
	var p_price=$( "form input:hidden" ).val();
	var qty=$( "form #qty" ).val();

	$.ajax({
	  url: "cart_session.php",
	  method: "POST",
	  data: { id : p_id ,name : p_name ,price : p_price , p_image : p_image ,qty : qty , flag : "addtocart"},
	  success:function(data){
	  	var html='<a class="btn btn-primary" href="http://localhost/Delux Furniture/cart.php">Go to Cart</a>';
	  	console.log(data);
	  	$( "form label" ).remove();
	  	$( "form #qty" ).remove();
	  	$( "#addcart" ).append(html);
	  	$( "form #addToCart" ).remove();
	  }
	});
});
$.fn.CloudZoom.defaults = {
	zoomWidth:"auto",
	zoomHeight:"auto",
	position:"inside",
	adjustX:0,
	adjustY:0,
	adjustY:"",
	tintOpacity:0.5,
	lensOpacity:0.5,
	titleOpacity:0.5,
	smoothMove:3,
	showTitle:false
};
</script>
</body>
</html>
