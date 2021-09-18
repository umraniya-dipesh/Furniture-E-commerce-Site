<?php
	session_start();
	include('config.php');
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

	if(isset($_POST["login"]))
	{
		$uname = $_POST["username"];
		$pass = md5($_POST["lpass"]);
		// echo $uname;
		// echo $pass;
		$sql="select * FROM customer WHERE (uname='".$uname."' or email='".$uname."') and password='".$pass."'";
		$res=mysqli_query($con,$sql);
		$row = $res->fetch_array(MYSQLI_ASSOC);
		if(mysqli_num_rows($res)>0)
		{
				$_SESSION['login_userid']=$row['cust_id'];
				$_SESSION['login_username']=$row['uname'];
				echo "<script type='text/javascript'>alert('Login Succesfully Done');window.location.href='index.php'</script>";
				// echo "<script type='text/javascript'> swal('Good job!','You clicked the button!','success');</script>";
				// header('location:index.php');
		}
		else
		{
			echo "<script type='text/javascript'>alert('Email or password is wrong.');</script>";
		}
	}

	if(isset($_POST["register"]))
	{
		$uname=$_POST['uname'];
		$pass=md5($_POST['rpass']);
		$re_pass=$_POST['repass'];
		$email=$_POST['remail'];
		$contact=$_POST['rcontact'];
		$Address=$_POST['address'];
		$city=$_POST['city'];
		

		$sql="insert into customer(uname,password,email,contact,address,city) values ('".$uname."','".$pass."','".$email."','".$contact."','".$Address."','".$city."')";
		$res=mysqli_query($con,$sql);
		if(isset($res))
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
			    $mail->addAddress($email, $uname);     // Add a recipient
			     $body = "<h3 style='color:#000;'>Welcome ".strtoupper($uname).". Thank you for using our Delux Furniture website.</h3>"; 
			    $mail->isHTML(true);             // Set email format to HTML
			    $mail->Subject = 'Registration';
			    $mail->Body    = $body;
			    $mail->AltBody = strip_tags($body);
			    $message="Registration email has been sent Successfully";
			    $mail->send();
			    echo "<script type='text/javascript'>alert('Register Succesfully Done.');window.location.href='account.php'</script>";
			    //header('Location:account.php');
			}
			catch (Exception $e) {
			    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
			return false;
			
			
		}
		else
		{
			echo "<script type='text/javascript'>alert('Not Register. Try Again');</script>";	
		}
		//print_r($sql);
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
                        <li class="active">My Account</li>
                    </ul>
				</div>
			</div>
			
		</div>
		
		<div class="row">
		    <div class="col-md-12">
				<h2><font color="black">My Account</font></h2>
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-6">
			        <form class="loginbox form-horizontal" id="login_form" method="POST">
						<p class="text-dark"><strong>Login</strong></p>
						<div class="form-group">
							<label class="control-label col-md-4" for="inputEmail" name="username"><font color="black">Username or email</font><span class="required">*</span></label>
							<div class="col-md-8">
								<input type="text" id="username" name="username" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="inputPassword" name="password"><font color="black">Password</font><span class="required">*</span></label>
							<div class="col-md-8">
								<input type="password" name="lpass" id="lpass" class="form-control">
								<!-- <i class="fa fa-user"></i> -->
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<button class="btn btn-primary" type="submit" name="login">Login</button>
								<a href="forgot-password.php"><font color="black">Lost Password?</font></a>
							</div>
						</div>
			        </form>
			</div>
			
			<div class="col-md-6">
				         <form class="loginbox form-horizontal" id="regiser_form" method="POST" name="regiser_form">
							<p class="text-dark"><strong>Register</strong></p>
				            <div class="form-group">
					            <label class="control-label col-md-4" for="inputEmail"><font color="black">Username</font><span class="required">*</span></label>
					            <div class="col-md-8">
					                <input type="text" name="uname" id="uname" class="form-control">
					            </div>
				            </div>
				            <div class="form-group">
					            <label class="control-label col-md-4" for="inputEmail"><font color="black">Email</font><span class="required">*</span></label>
					            <div class="col-md-8">
					                <input type="email" id="remail" name="remail" class="form-control">
					            </div>
				            </div>
				            <div class="form-group">
					            <label class="control-label col-md-4" for="inputPassword"><font color="black">Password</font><span class="required">*</span></label>
					            <div class="col-md-8">
					                <input type="password" name="rpass" id="rpass" class="form-control">
					            </div>
				            </div>
                       
							<div class="form-group">
								<label class="control-label col-md-4" for="inputPassword"><font color="black">Re-enter password</font><span class="required">*</span></label>
								<div class="col-md-8">
									<input type="password" id="repass" name="repass" class="form-control">
									<span id="messages"></span>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" for="inputcontact"><font color="black">Contact</font><span class="required">*</span></label>
								<div class="col-md-8">
									<input type="text" id="rcontact" name="rcontact" class="form-control" maxlength="10">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" for="inputaddress"><font color="black">Address</font><span class="required">*</span></label>
								<div class="col-md-8">
									<textarea class="form-control" name="address" id="address">	</textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-4" for="inputcity"><font color="black">City</font><span class="required">*</span></label>
								<div class="col-md-8">
									<input type="text" id="city" name="city" class="form-control">
								</div>
							</div>
				            <div class="form-group">
					            <div class="col-md-12">
					                <button class="btn btn-primary" type="submit" name="register" id="register">Register</button>
					            </div>
				            </div>
						</form>					
			           
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
		$( "#regiser_form" ).validate({
		  rules: {
			uname: "required",
		    rpass: "required",
		    remail: "required",
		    repass: "required",
		    rcontact: "required",
		    address: "required",
		    city: "required",
		  },
		  messages:{
			  uname: {
		      required: "Please Enter username"
		    },
			rpass: {
		      required: "Please password",  
		    },
		    remail: {
		      required: "Please Enter Email",  
		    },
		    repass: {
		      required: "Please Enter Re-password",  
		    },
		    rcontact: {
		      required: "Please Enter Contact No.",  
		    },
		    address: {
		      required: "Please Enter Address",  
		    },
		    city: {
		      required: "Please Enter City",  
		    },
		  }
		});
	</script>

	<script>
		$(function(){
			$("#register").click(function(){
				var pass =$("#rpass").val();
				var rpass =$("#repass").val();
				if(pass!=rpass)
				{
					alert("Password Not Match.");
					return false;
				}
				return true;
			})
		})
	</script>

	<script>
		$( "#login_form" ).validate({
		  rules: {
			username: "required",
		    lpass: "required",
		  },
		  messages:{
			  username: {
		      required: "Please Enter username"
		    },
			lpass: {
		      required: "Please password",  
		    },	    
		  }
		});
	</script>
</body>
</html>
