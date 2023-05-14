<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>cOMPLAINT Management System|| Home Page</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/stylee.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>
<!--header-->
<?php include_once('includes/header.php');?>
<!-- Top Navigation -->
<div class="banner banner5">
	<div class="container">
	<h2>About CMS</h2>
	</div>
</div>
<!--header-->
<!-- About -->
<div class="about">
	 <div class="container">
		 <div class="about-info-grids">
			 <div class="col-md-5 abt-pic">
				 <img src="images/ynjgy02.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="col-md-7 abt-info-pic">
			<h3>CMS</h3>
        
                        <p> Complaint Management System (CMS）is software which is helpful for user, as well as the authorities. In the current system all the activities are done manually. It is very time consuming and costly. This System deals with the various activities related to the user and sub-admin and Administrator .

Complaint Management System provides an online way of solving the problems faced by the user by saving time and eradicate corruption. The objective of the complaints management system is to make complaints easier to coordinate, monitor, track and resolve, and to provide company or campus with an effective tool to identify and target problem areas, monitor complaints handling performance . Complaint Management is a management technique for assessing, analyzing and responding to user complaints. Complaints management software is used to record resolve and respond to user complaints, requests as well as facilitate any other feedback.</p>
      </div>
      </div>
				
			 </div>
			 <div class="clearfix"> </div>
		 </div>
		
	 </div>

<!-- /About -->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
