<?php
ob_start();
session_start();
require_once 'config.php'; 
?>
<?php 
	if(!empty($_POST)){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->registration( $_POST );
			if($data){
				$_SESSION['success'] = USER_REGISTRATION_SUCCESS;
				header('Location: index');exit;
			}
		} catch (Exception $e) {
			$_SESSION['error'] = $e->getMessage();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<meta name="author" content="https://plus.google.com/+MuniAyothi/">
    <title>PELEGUIN CAPACITY DEVELOPMENT INSTITUTE</title>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<?php require_once 'templates/message.php';?>
			
			<h3 class="text-center">PELEGUIN CAPACITY DEVELOPMENT INSTITUTE</h3>
			<div class="form-header">
				<i class="fa fa-user"></i>
			</div>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-register" role="form" id="register-form">
				<div class="col-md-6">
					<input name="name" id="name" type="text" class="form-control" placeholder="Name"> 
					<span class="help-block"></span>
				</div>
				<div class="col-md-6">
					<input name="email" id="email" type="email" class="form-control" placeholder="Email address" > 
					<span class="help-block"></span>
				</div>
				<div class="col-md-6">
					<input name="phone" id="name" type="phone" class="form-control" placeholder="Phone Number" > 
					<span class="help-block"></span>
				</div>
				<div class="col-md-6">
					<input name="age" id="name" type="age" class="form-control" placeholder="Age" > 
					<span class="help-block"></span>
				</div>
				<div class="col-md-6"> 
				<select name="career_test" id="name" class="form-control" >
					<option value="" selected disabled>Have you had any career test before?</option>
					<option value="Yes">Yes</option>
					<option value="No">No</option> 
					</select>
					<span class="help-block"></span>
				</div>
				<div class="col-md-6">
					<input name="school_attended" id="name" type="schoolattended" class="form-control" placeholder="last school attended" > 
					<span class="help-block"></span>
				</div>
				<div class="col-md-6">
					<input name="password" id="password" type="password" class="form-control" placeholder="Password"> 
					<span class="help-block"></span>
				</div>
				<div class="col-md-6">
					<input name="confirm_password" id="confirm_password" type="password" class="form-control" placeholder="Confirm Password"> 
					<span class="help-block"></span>
				</div>
				<button class="btn btn-block bt-login" type="submit">Sign Up</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Forgot password? </a>
					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="index.php"> Sign In </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->

	
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/register.js"></script>
  </body>
</html>
<?php unset($_SESSION['success'] ); unset($_SESSION['error']);  ?>    