<?php 
session_start();
include('config.php');
include('cartdb.php');

if(isset($_SESSION['login_userid'])){
	$cart=fetch_cart($_SESSION['login_userid']);
	$cart=json_decode($cart,1);

	$tran_sql="insert into transaction(cust_id,txn_id,status,amount) values('".$_SESSION['login_userid']."','".$_POST['txnid']."','".$_POST['status']."','".$_POST['amount']."')";
	$tran_res=mysqli_query($con,$tran_sql);	

	foreach ($cart as $row) {
		$sql="insert into orders_details (cust_id,p_id,price,quantity) values('".@$row[0]['cust_id']."','".@$row[0]['p_id']."','".@$row[0]['p_price']."','".@$row[0]['quantity']."')";
		$res=mysqli_query($con,$sql);					
		$cart_rm="delete from cart where cart_id=".@$row[0]['cart_id'];
		$cart_rm_res=mysqli_query($con,$cart_rm);					
	}
}
else{
	$cart=cart_fetch_session();
	$cart=json_decode($cart,1);
}


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
			<?php include_once 'header.php';?>	
<?php
if($_POST['status']=='success'){
?>
<div class="container">
	<div class="row">
		<h1>Thank You for shopping.</h1>
	</div>
</div>
<?php	
}
else
{
?>
	<div class="container">
	<div class="row">
		<h1>Sorry....Payment Fail ! Try Again.</h1>
	</div>
</div>
	<!--Else indicates failure of transaction-->
<?php
}
?>
<?php include_once 'fotter.php';?>
</div>
</body>
</html>