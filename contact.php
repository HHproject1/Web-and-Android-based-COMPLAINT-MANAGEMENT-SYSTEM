<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>COMPLAINT Management System|| Home Page</title>
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
	<h2>Contact YNJGY</h2>
	</div>
</div>
<!--header-->
		<!-- contact -->
		<div class="contact">
			<!-- container -->
			<div class="container">
                            <div class="col-md-5 abt-pic">
				 <img src="images/ynjgy111.jpg" class="img-responsive" alt=""/>
			 </div>
				<div class="contact-info">
					<h3 class="c-text">Feel Free to contact YNJGY!!!</h3>
                  		</div>
				
				<div class="contact-grids">
					
                                    <h4>Yunnan University Of Business Management, Approved By The Chinese Ministry Of Education, Is A Full-Time Practical-Oriented Undergraduate University With The Qualiﬁcation Of Issuing Diplomas And Degrees Independently.The University Has Two Campuses, Haiyuan And Anning, Covering An Area Of 87 Hectares. As Of 2019, The University Has 36,234 Full-Time Students Registered In 6 Secondary Colleges, Including College Of Finance And Accounting, College Of International Business, College Of Art And Media, College Of Education, College Of Engineering, And College Of Medicine. The University Has Two Campuses, Haiyuan And Anning, Covering An Area Of 87 Hectares. The Total Value Of Teaching Equipment Is Over 142 Million RMB. The Library Has A Paper Collection Of More Than 2 Million Books And 1.18 Million Electronic Books. The Total Assets Are About 1.7billion RMB Including Complete Infrastructures For Teaching, Scientiﬁc Research And Living.
1. Learn and implement foreign affairs related guidelines, policies and regulations of People’s Republic of China;

2. Schedule the annual plan, budget, and related rules and regulations of YNJGY;

3. Schedule the employment of long and short-term foreign experts, foreign teachers; responsible for the management and evaluation of foreign personnel, relevant funds usage, etc.;</h4>
                                </div>
                                    <div class="contact-grids">
				 <h3>Address</h3>
        <div class="address">
         Anning Campus: No. 17, Qilin Road, Vocational Education Park, Anning City, Yunnan Province
          <h3>

Phone: 0871- 68314770 E-mail: YNJGY@.edu.cn  Www.Ynjgy.Com</h3>


        </div>
  	
					
			</div>
			<!-- //container -->
		</div>
		<!-- //contact -->
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
