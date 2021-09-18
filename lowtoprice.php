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
        
		<div class="row">
		    <div class="col-md-12">
			    <div class="breadcrumbs">
				    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a> <span class="divider"></span></li>
                        <li class="active">All Product</li>
                    </ul>
				</div>
			</div>
			
		</div>
		
		<div class="row">
		    <div class="col-md-12">
			    <div class="cat_header">
				    <h2>All Product</h2>
			    </div>

			</div>
		</div>
	
		 <div class="row">
			<div class="col-md-3">
				<div class="dropdown">
					<button type="button" data-toggle="drowpdown">Sort By Price</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="lowtoprice.php">Low to High</a><br>
						<a class="dropdown-item" href="hightolow.php">High to Low</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row"><br></div>
		<div class="row">
			<?php
				include('config.php');
				//$sql="";
				$res=mysqli_query($con,"select * from product order by p_price ASC");
				
				while($row=mysqli_fetch_array($res))
		    	{
			?>
			<div class="col-md-3">
			    <div class="product">
				    <!-- <div class="product_sale">Sale</div> -->
				    <a href="product.php?id=<?=$row['p_id']?>"><img alt="product image" width="500px" height="200px" src="<?php echo 'admin/uploads/product/'.$row['p_image']; ?>"></a>
				    <div class="name">
				    <a href="#"><?php echo $row['p_name']; ?></a>
				    </div>
				    <div class="price">
				    <p>Rs. <?php echo $row['p_price']; ?></p>
				    </div>
				    <div class="addcart">
				    <a href="#">Add to cart</a>
				    </div>
				</div>
			</div>


			<?php
				}
			?>
		    
		</div>

		
		<div class="row">
			<div class="col-md-12">
				<ul class="pagination pull-right">
				  <li><a href="#">&laquo;</a></li>
				  <li class="active"><a href="#">1</a></li>
				  <li><a href="#">2</a></li>
				  <li><a href="#">3</a></li>
				  <li><a href="#">4</a></li>
				  <li><a href="#">5</a></li>
				  <li><a href="#">&raquo;</a></li>
				</ul>
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
</body>
</html>
