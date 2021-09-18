<?php
	include('config.php');
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	if(isset($_POST['btn']))
	{
		$email=$_POST['inputEmail'];
		$sql=mysqli_query($con,"select * from customer where email='{$email}'");
		$count=mysqli_num_rows($sql);
		$row=mysqli_fetch_array($sql);
		if($count>0)
		{
			$mail = new PHPMailer(true);                                          // Passing `true` enables exceptions
			try { 
			    //Server settings
			    //$mail->SMTPDebug = 2;                                        // Enable verbose debug output
			    $mail->isSMTP();                                              // Set mailer to use SMTP
			    $mail->Host = 'smtp.gmail.com';                              // Specify main and backup SMTP servers
			    $mail->SMTPAuth = true;                                     // Enable SMTP authentication
			    $mail->Username = 'learnanything127@gmail.com';            // SMTP username
			    $mail->Password = 'uzcxrvkbmiyawrza';                     // SMTP password
			    $mail->SMTPSecure = 'tls';                               // Enable TLS encryption, `ssl` also accepted
			    $mail->Port = 587;                                      // TCP port to connect to
			 
			    //Recipients    
			    $mail->setFrom('learnanything127@gmail.com','Delux Furniture');
			    $mail->addAddress($email,$email);     // Add a recipient
			    $body = "<h2> Hi $email <br> Your Password is {$row['password']}.</h3>"; 
			    //$body = "<h3>Your Password is '".$res."'</h3>"; 
			    $mail->isHTML(true);             // Set email format to HTML
			    $mail->Subject = 'Forget Password';
			    $mail->Body    = $body;
			    $mail->AltBody = strip_tags($body);
			    $message="your Password has been sent  Successfully";
			    $mail->send();
			    echo "<script type='text/javascript'>alert('Your password has been sent on your EMAIL ID Now Login .');window.location.href='account.php'</script>";
			    
				}
				catch (Exception $e) {
				    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
				}
				return false;
			//echo $row['password'];
		}
		else
		{
			echo "<script type='text/javascript'>alert('Email Not Found.');</script>";
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
                        <li class="active">Forgotten Password</li>
                    </ul>
				</div>
			</div>
			
		</div>

	    <h2><font color="black">Forgot Your Password?</font></h2>
		
		<div class="row box padding">
		    <div class="col-md-12">
				<p class="forgotten-password">Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.</p>
				<div class="forgotten">
					<form name="forget_pswd" method="POST" class="form-horizontal">
						<div class="form-group">
						<label class="control-label col-md-4" for="inputEmail"><font color="black">E-mail Address </font></label>
							<div class="col-md-8">
								<input type="email" id="inputEmail" name="inputEmail" placeholder="Email" class="form-control">
							</div>
						</div>
					
						<p>
						<button class="btn btn-primary" type="submin" name="btn" id="btn">Continue</button>
						</p>
					</form>
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
