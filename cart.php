<?php
// require_once("cart_session.php");
// session_start();
require_once("cart_session.php");
require_once("cartdb.php");
if(isset($_SESSION['login_userid'])){
	$cart=fetch_cart($_SESSION['login_userid']);
	$cart=json_decode($cart,1);
}
else{
	$cart=cart_fetch_session();
	$cart=json_decode($cart,1);
}

$totalamount=0;
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
                        <li class="active">Shopping Cart</li>
                    </ul>
				</div>
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-12">
				<h2>Shopping Cart</h2>
			</div>
		</div>
	<form action="payment-process.php" method="POST">
		<div class="row">
		    <div class="col-md-12">
			<div class="cart-info">
				<table class="table">
					<thead>
					    <tr>
							<th class="image">Image</th>
							<th>Product</th>
							<th>Price</th>
							<th>Quantity</th>
							<th class="total">Total</th>
						</tr>
					</thead>

					<tbody id="empty_cart_message">

						<?php 
						if($cart['is_null']==false){
						foreach ($cart['cart'] as $row) {	
						$totalamount=intval($row['total'])+$totalamount;							
						?>
						<tr>
				
							<input type="hidden" id="cart_id" value="<?=$row['cart_id']?>">
						    <input type="hidden" id="p_id" value="<?=$row['p_id']?>">
						    <td class="image"><img alt="IMAGE" src="<?php echo'admin/uploads/product/'.$row['p_image']; ?>"></td>
							<td class="name"><a href="product.php"><?= print_r($row['p_name']); ?></a></td>
							<td id="price"><?=$row['p_price']?></td>
							<td class="quantity">
								<input type="text" size="1" value="<?=$row['quantity']?>" name="quantity" id="qnty">
								<input type="hidden" size="1" value="<?=$totalamount?>" name="amount" id="post_total_amount">
								<input type="hidden" name="firstname" value="<?=$_SESSION['login_username']?>">
								
								<input type="hidden" name="email" value="umraniyadipeshk@gmail.com">

								<input type="hidden" name="phone" value="9979880672">
								<input type="hidden" name="productinfo" value="good">
								<input type="hidden" name="service_provider" value="good">							
								<input type="hidden" name="surl" value="http://localhost/Delux Furniture/payment-status.php">
								<input type="hidden" name="furl" value="http://localhost/Delux Furniture/payment-status.php">
								<img title="Update" alt="Update" src="img/update.png" id="update_cart">
								<img title="Remove" alt="Remove" src="img/remove.png" id="remove_cart">
							</td>
							<td class="total" id="subtotal"><?=$row['total']?></td>
						</tr>
						<?php } }?>
					</tbody>			
				</table>
				<div id="cart_empty">
					<?php
						if($cart['is_null']==true){
							?>
							<center><p>No product is added to the cart</p></center>
						<?php
						}
					?>								
				</div>						
            </div> 			
		    </div>					
		</div>	
		
		<div class="row">
		   
		    <div class="col-sm-4 col-sm-offset-8">
				<div class="cart-totals">
					<table class="table">
					    <tr>
							<th>Shipping</th>
							<td>Free Shipping</td>
						</tr>
					    <tr>
							<th><span>Order Total</span></th>
							<td><p id="ordertotalamount"><?=$totalamount?></p></td>
						</tr>					
				</table>
				<p>
				<input type="submit" class="btn btn-primary" id="checkout" value="Proceed to Checkout">							
				</p>
				</div>

			</div>
		
		</div>
	</form>

	</div>
	<!-- include fotter page -->
		<?php include_once 'fotter.php';?>
	<!-- end fotter page -->	
	
</div>
	<!-- include js_script -->
		<?php include_once 'js_script.php';?>
	<!-- end include js_cript -->
	<script type="text/javascript">
	$(document).on('click','#update_cart',function(){
		var th=this;
		var qnt=parseInt($(th).parent().find('#qnty').val());
		var price=parseInt($(th).parent().siblings('#price').html());
		var cart_id=parseInt($(th).parent().siblings('#cart_id').val());
		var total=$(th).parent().siblings('#subtotal');
		if(qnt>0){
			var subtotal=qnt*price;
			total.html(subtotal);
		}
		$.ajax({
		  url: "cart_session.php",
		  method: "POST",
		  data: { cart_id : cart_id ,qnt : qnt , flag : "update_cart"},
		  success:function(data){
		  	$("#ordertotalamount").html(data);
		  	$("#post_total_amount").val(data);	
		  }
		});
	});

	$(document).on('click','#remove_cart',function(){
		var th=this;
		var p_id=parseInt($(th).parent().siblings('#p_id').val());
		var cart_id=parseInt($(th).parent().siblings('#cart_id').val());
		if(confirm("Are you sure you want to remove the product")){
			$(this).closest("tr").remove();
			$.ajax({
			  url: "cart_session.php",
			  method: "POST",
			  dataType: "json",
			  data: { cart_id : cart_id ,p_id : p_id , flag : "remove_cart"},
			  success:function(data) {
			  	if(data[0].is_null==1){
			  		$('#cart_empty').html("<center><p>No product is added to the cart</p></center>");			  		
			  	}				
			  	$("#ordertotalamount").html(data[0].totalamount);
				$("#post_total_amount").val(post_total_amount);			  	
			  }
			});
		}
	});
	</script>
</body>
</html>
