<?php

	session_start();
	$con=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($con,'deluxfurniture');

	if(isset($_POST['sub']))
	{
		$cname=$_POST['cname'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		//echo $message;
		$sql="insert into contact_us(cnt_name,email,subject,message) values ('".$cname."','".$email."','".$subject."','".$message."')";
		//print_r($sql);
		$res=mysqli_query($con,$sql);
		if(isset($res))
		{
			echo "<script type='text/javascript'>alert('Your Request Send.');</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Your Request Not Send.');</script>";	
		}
	}
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
                        <li class="active">Contact Us</li>
                    </ul>
				</div>
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-12">
				<h2><font color="black">Contact Us</font></h2>
			</div>
		</div>
        
		
		<div class="row">
				<div class="col-md-6">
					<div class="contact_form">
						<form name="contactus_form" id="contactus_form" method="POST">
							<fieldset class="form-group">
								<label><font color="black">Name</font><span class="required">*</span></label>
								<input type="text" placeholder="Name" id="cname" name="cname" class="form-control" >
								<label><font color="black">Email</font><span class="required">*</span></label>
								<input type="text" placeholder="Email" class="form-control" id="email" name="email">
								<label><font color="black">Subject</font><span class="required">*</span></label>
								<input type="text" placeholder="Subject" id="subject" name="subject" class="form-control" >							
							</fieldset>
						<!-- </form> -->
						<div class="form-group">
							<label><font color="black">Message</font><span class="required">*</span></label>
							<textarea rows="3" class="form-control" id="message" name="message"></textarea>
						</div>
						<p class="form-group">
							<button class="btn btn-primary" type="submit" name="sub" id="sub">Send Request</button>
						</p>
					</form>
					</div>
				</div>				
				<div class="col-md-6">
					<div class="location">
						<font color="black"><address>
						  <strong>Delux Furniture</strong><br>
						  Bhuj (Kutch), <br>
						  Pin 370001<br>
						  Mobile No :- 9988776655
						</address></font>
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

	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
	<script>
		$("#contactus_form").validate({
			rules: {
				cname: "required",
				message: "required",
				email: "required",
				subject: "required",
			},
			messages: {
				cname: {
					required: "Please Enter Name",
				},
				message: {
					required: "Please Enter Message",
				},
				email: {
					required: "Please Enter Email ID",
				},
				subject: {
					required: "Please Enter Subject",
				},
			}
		});
	</script>
</body>
</html>
