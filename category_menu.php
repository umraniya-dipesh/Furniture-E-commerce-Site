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
			<div class="row">
		    <div class="col-md-12">
			    <div class="breadcrumbs">
				    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a> <span class="divider"></span></li>
                        <li class="active">Clothing</li>
                    </ul>
				</div>
			</div>
			
		</div>
		<div class="row">
		    <div class="col-md-12">
			    <div class="cat_header">
				    <h2>Clothing</h2>
			    </div>

			</div>
		</div>
		    <div class="col-md-3 left-menu">
				<!-- <div class="panel-group"> -->
					<div class="panel panel-default">
			<?php
				include('config.php');
				//$sql="";
				$res=mysqli_query($con,"select * from category");
				
				while($row=mysqli_fetch_array($res))
		    	{
			?>
				
						<div class="panel-heading">
					<h3 class="panel-title"><a data-toggle="collapse" href="#collapse1"><?php echo $row['category_name'];?></a></h3>
				</div>
				
					<div id="collapse1" class="panel-collapse collapse">
						<div class="panel-footer">
							<a href="category.php">One Seater</a>
						</div>	
						<div class="panel-footer">
							<a href="category.php">Two Seater</a>
						</div>						
					</div>

                     

					

					<!-- <h3>Tables</h3>
					<ul>
						<li><a href="category.php">Dining Table</a></li>
						<li><a href="category.php">Computer Table</a></li>
						<li><a href="category.php">Glass Table</a></li>
					</ul> --> 
				<!-- </div> -->
				<?php 
			}
			?>
		</div>
			</div>
		<div class="col-md-9">
		
		<div class="row">
		    <div class="col-md-4">
			    <div class="product">
					<div class="product_sale">Sale</div>
				    <a href="product.php"><img alt="dress1home" src="products/dress1home.jpg"></a>
					<div class="name">
				    <a href="#">Elegant Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 200.00</p>
				    </div>
				</div>
			</div>
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.php"><img alt="dres2" src="products/dress5home.jpg"></a>
				    <div class="name">
				    <a href="#">Lace Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 250.00</p>
				    </div>	

				</div>	
			
			</div>			
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.php"><img alt="dress3" src="products/dress6home.jpg"></a>
					<div class="name">
				    <a href="#">Floral Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 500.00</p>
				    </div>
				</div>	
			</div>		
			
			<!--
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.html"><img alt="dress4" src="products/dress2home.jpg"></a>
				    <div class="name">
				    <a href="">Black Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 150.00</p>
				    </div>

				</div>	
			</div>	-->	
		
		</div>
	

		<div class="row">
		    <div class="col-md-4">
			    <div class="product">
				    <div class="product_sale">Sale</div>
				    <a href="product.php"><img alt="dress5" src="products/dress3home.jpg"></a>
				    <div class="name">
				    <a href="#">Midi Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 50.00</p>
				    </div>	
				</div>
			
			</div>
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.php"><img alt="dress6" src="products/dress4home.jpg"></a>
				    <div class="name">
				    <a href="#">White Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 120.00</p>
				    </div>	

				</div>			
			</div>			
		    <div class="col-md-4">
			    <div class="product">
				    <div class="product_sale">Sale</div>
				    <a href="product.php"><img alt="dress7" src="products/dress7home.jpg"></a>
				    <div class="name">
				    <a href="#">Red Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 20.00</p>
				    </div>

				</div>			
			</div>		
			
			<!--
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.html"><img alt="dress8" src="products/dress8home.jpg"></a>
				    <div class="name">
				    <a href="">Evening Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 670.00</p>
				    </div>	
				</div>				
			</div>		
		-->
		</div>
		
		
			
		<div class="row">
		    <div class="col-md-4">
			    <div class="product">
					<div class="product_sale">Sale</div>
				    <a href="product.php"><img alt="dress1home" src="products/dress1home.jpg"></a>
					<div class="name">
				    <a href="#">Elegant Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 200.00</p>
				    </div>
				</div>
			</div>
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.php"><img alt="dres2" src="products/dress5home.jpg"></a>
				    <div class="name">
				    <a href="#">Lace Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 250.00</p>
				    </div>	

				</div>	
			
			</div>			
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.php"><img alt="dress3" src="products/dress6home.jpg"></a>
					<div class="name">
				    <a href="#">Floral Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 500.00</p>
				    </div>
				</div>	
			</div>		
			
			<!--
		    <div class="col-md-4">
			    <div class="product">
				    <a href="product.html"><img alt="dress4" src="products/dress2home.jpg"></a>
				    <div class="name">
				    <a href="">Black Dress</a>
				    </div>
				    <div class="price">
				    <p>Rs 150.00</p>
				    </div>

				</div>	
			</div>	-->	
		
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
