<?php 
ob_start();
session_start();
error_reporting(0);
require_once 'config.php'; 
$url=strtok($_SERVER["REQUEST_URI"],'?');
$url_arr = explode("/", $url);

if(!isset($_SESSION['logged_in']) && !in_array("quiz-result", $url_arr)){
	header('Location: index');
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
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    
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
    <script src="js/jquery.validate.min.js"></script>
    
    <?php 
    	
    	if (in_array("quiz-result", $url_arr)){
    ?>
	    <meta property="og:type" content="article" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:description" content="" />
		<meta property="article:published_time" content="2015-02-11T12:03:45+00:00" />
		<meta property="article:modified_time" content="2015-02-11T13:31:33+00:00" />
		<meta property="article:author" content="" />
		<meta property="og:site_name" content="" />
		<meta property="og:image" content="" />
		<meta name="twitter:site" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:card" content="summary" />
    <?php } ?>
    
    
  </head>
 <body>

    <!-- Static navbar -->
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
			<?php 
			$arr = explode("/",$_SERVER['REQUEST_URI']);
			$uri = end( $arr ); 
			?>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if($uri == 'home') echo "class='active'"; ?>><a href="home">Home</a></li>
					<li <?php if($uri == 'quiz-results') echo "class='active'"; ?>><a href="Test-result">Test Results</a></li>
					<li <?php if($uri == 'start-quiz') echo "class='active'"; ?>><a href="Test">Start New Test</a></li>
					
				</ul>
				  <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                Hello 
               <?php if(isset( $_SESSION['logged_in']) ) { ?>
               <?php echo $_SESSION['name']; ?>
            </a>
              
              <?php }else{ ?>
            </a>
            <?php }?>
            
          </li>
          <li><a href="logout"> <span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
                     
        </ul>
      
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
