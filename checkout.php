<!doctype html>
<?php
	print_r($_POST);
?>
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
                        <li class="active">Checkout</li>
                    </ul>
				</div>
			</div>
			
		</div>
		
		<div class="row">
		    <div class="col-md-12">
				<h2>Checkout</h2>
			    <p class="well">Already registered? <a href="account.php">Click here to login</a></p>
			</div>
		</div>
		
	
		
		<div class="row">
		    <div class="col-md-12">
			    <div class="your_order">
		    		<h3>Your order</h3>
						<table class="table table-bordered table-responsive">
					        <thead>
						        <tr>
									<th>Product</th>
									<th>Qty</th>
									<th>Totals</th>
						        </tr>
					        </thead>
														
					    </table>
					            <label class="radio"  onclick="jQuery('.cheque').toggle()">
								    <input type="radio" name="optionsRadios" value="option1" checked>
								    Cash on delivery
                                </label>
					            <label class="radio" onclick="jQuery('.paypal').toggle()">
								    <input type="radio" name="optionsRadios" value="option1" checked>
								    PayUmoney <img alt="american" src="image/paypal1.png">
                                </label>
								<div class="paypal">
									<p>Pay via PayUmoney; you can pay with your credit card if you don’t have a PayUmoney account</p>
								</div>
					            <p>
                                    <button class="btn btn-primary" type="button">Place Order</button>
                                </p>	
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
</	body>
</html>
