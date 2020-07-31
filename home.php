<?php require_once 'templates/header.php';?>
     	 <body background="img/login.jpg" style="background: url(img/login.jpg);background-repeat: no-repeat;opacity: 1.0;filter: alpha(opacity=100);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;background-attachment: fixed;}">
  <div align="center" style="margin-top:95px;">
   <img src="img/logo1.jpg"  width="220px" >
   </div>
    <div class="container" style="width: 1050px;">
    <div class="col-md-11 col-md-offset-3">
     		<div class="row">
	     		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	     			<div class="row btn-c well">
	     				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	     					<a href="Test" class="btn btn-success btn-home"><?php echo $_SESSION['name']; ?> - Start New Test 
                                </a>
	     				</div>
              
	     				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	     					<a href="Test-result" class="btn btn-info btn-home">See Your Test Results</a>
	     				</div>
	     			</div>
	     		</div>

     		</div>
     	</div>
    </div> <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
	
