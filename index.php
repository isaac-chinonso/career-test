<?php 
ob_start();
session_start();
require_once 'config.php'; 
?>
<?php 
	if( !empty( $_POST )){
		try {
			$user_obj = new Cl_User();
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				$_SESSION['success'] = 'Logged In Successfully!';
				header('Location: home');exit;
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
			$_SESSION['error'] = $error;
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: home');exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PELEGUIN CAPACITY DEVELOPMENT INSTITUTE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
   <style type="text/css">
    .space{
      padding-bottom: 15px;
      }
	  </style>
  
  </head>
  <body oncopy="return false;" onpaste="return false;" oncut="return false;" background="img/login.jpg" style="background: url(img/login.jpg);background-repeat: no-repeat;opacity: 1.0;filter: alpha(opacity=100);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;background-attachment: fixed;}">
  <div align="center" style="margin-top:20px;">
   <img src="img/logo1.jpg"  width="220px" >
   </div>
 <div class="container example1" style="padding-top:20px;">
	   <div class="col-md-6">
         <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#337ab7;color:#fff;">USER LOGIN</div>
               <div class="panel-body">
			   
                  <div class="login-form">
			<?php require_once 'templates/message.php';?>

			<form id="login-form" method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				  
                    <div class="row space">
					<div class="form-group">
                      <div class="col-md-12">
					      <label>Email</label>
					    <input name="email" class="form-control" type="text" placeholder="Email">
					</div>
                       </div>
						 </div>
				
				<div class="row space">
				<div class="form-group">
                  <div class="col-md-12">
					    <label>Password</label>
					      <input name="password" class="form-control" type="password" placeholder="Password">
				</div>
                  </div>
				  </div>
				       
        
                   <button name="submit" type="submit" class="btn btn-primary">Login</button><hr>
               
                <div class="login-help" align="right">
                      <p class="change_link">New to site?
                         <a href="register" class="to_register"> Create Account </a>
                   </div>
      

                
    </div>

			</form>		   
		</div>
		</div>
		</div>
		</div>
		</div>

	
	
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>
<?php unset($_SESSION['success'] ); unset($_SESSION['error']);  ?>    


  
   

   