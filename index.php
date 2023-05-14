<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html>
<head>
<title>Complaint Management System|| Home Page</title>
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
<?php include_once('includes/header.php');?>
<!--<div class="banner">
  <div class="container">
  <script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 1000,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="slider">
       <div class="callbacks_container">
        <ul class="rslides" id="slider">
         <li>     
          <h3>Complain Management System</h3>      
           <p>Admin,Teacher, Students can Login Here</p>             
          <div class="readmore">
          <a href="login.php">Login<i class="glyphicon glyphicon-menu-right"> </i></a>
          </div>
         </li>

 
        </ul>
      </div>
    </div>
</div>      
  </div>-->
<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">YNJGY_COMPLAINT_MANAGEMENT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/YNJGY_COMPLAINT_MANAGEMENT/users/">User Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/YNJGY_COMPLAINT_MANAGEMENT/users/registration.php">User Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/YNJGY_COMPLAINT_MANAGEMENT/subadmin/index.php">Sub Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/YNJGY_COMPLAINT_MANAGEMENT/admin/">admin</a>
        </li>
        <li class="nav-item dropdown">
       
        </li>
      </ul>
    </div>
  </div>
</nav>-->


<!--      <p class="bg-dark p-2"></p>-->
           <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item ">
      <img src="images/ynjgy15.jpg" class="d-block w-100"style="height: 840px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Complain Management System</h5>
        <p>Admin can Entry by Login</p>
        <div class="readmore">
          <a href="login.php">Login<i class="glyphicon glyphicon-menu-right"> </i></a>
          </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/ynjgy13.jpg" class="d-block w-100"style="height: 840px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Complain Management System</h5>
        <p>Sub-Admin can Entry by Login</p>
        <div class="readmore">
          <a href="login.php">Login<i class="glyphicon glyphicon-menu-right"> </i></a>
          </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/ynjgy14.jpg" class="d-block w-100"style="height: 840px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Complain Management System</h5>
        <p>User can Entry by Login</p>
        <div class="readmore">
          <a href="users/index.php"class="btn">Login<i class="glyphicon glyphicon-menu-right"> </i></a>
          </div>
      </div>
    </div>
      <div class="carousel-item active">
      <img src="img/ynjgy2.jpg" class="d-block w-100"style="height: 840px" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5 class="fs-1 mb-1">Complain Management System</h5>
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

</div>
<!--/welcome-->
<!--
 <p class=" p-1"style=" background-color: rgba(163,51,38);"></p>  -->
 <main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
<!--    <div class="carousel-inner">
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>-->
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

 <p class=" p-1"style=" background-color: rgba(163,51,38);"></p>  
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="images/50.png" class="bd-placeholder-img rounded-circle" width="140" height="140" alt=""role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"/>
         <title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <h2 class="fw-normal">Admin</h2>
        <p>Admin can login here.</p>
        <p><a class="btn btn-secondary" href="admin/">Login »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="images/student.png" class="bd-placeholder-img rounded-circle" width="140" height="140" alt=""role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"/>
         <title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        <h2 class="fw-normal">Sub-Admin</h2>
        <p>Sub-Admin can login here.</p>
        <p><a class="btn btn-secondary" href="subadmin/index.php">Login »</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="images/student.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" alt=""role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"/>
         <title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        <h2 class="fw-normal">User</h2>
        <p>User can login here..</p>
        <p><a class="btn btn-secondary" href="users/">Login »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

<!-- <p class=" p-1"style=" background-color: rgba(163,51,38);"></p>  -->
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">School of ICT <span class="text-body-secondary"></span></h2>
        <p class="lead">School of ICT (Information and Communication Technology) is established jointly by Yunnan University of Business Management、 Huawei Technologies Co., Ltd and Beijing Huatec Information Technology Co., Ltd . The school is jointly built based on the theories of School-Enterprise Cooperation, School-Enterprise jointly management, School-Enterprise business operation on two main bodies. Jointly carrying out School-Enterprise research for social services and cultivating high-quality applied talents for national information and communications industry.</p>
      </div>
      <div class="col-md-5">
        <img src="images/z.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/50.png" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">School of Shenzhou High Speed Rail Transit <span class="text-body-secondary"></span></h2>
        <p class="lead">School of Shenzhou High Speed Rail Transit (referred to as "School of Shenzhou High Speed Rail") is a secondary school with industrial characteristics which is jointly established by Shenzhou High Speed Rail Technology Co., Ltd. and Yunnan College of Business Management. The college is committed to training full-time senior technical and management talents at the professional level for the development of rail transit in Western China.

 </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="images/zz.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-body-secondary">School of Big Data
 </span></h2>
        <p class="lead">School of Big Data is jointly established by Yunnan College of Business Management, the one of World Top 500 Enterprise HPE (China) Co., Ltd. and Hubei Meiheyisi Education Technology Co., Ltd. At present, there are 2 undergraduate majors in software engineering and big data management and application and 1 major for junior college in computer application technology for the purposes of training high-quality application-oriented innovative talents with technical capabilities such as software development, system architecture, big data development, big data analysis, big data application and project management.</p>
      </div>
      <div class="col-md-5">
       <img src="images/zzz.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
   <p class=" p-1"style=" background-color: rgba(163,51,38);"></p>  
<div class="welcome">
	<div class="container">
		<h3>YNJGY</h3>
        <p>Yunnan University Of Business Management, Approved By The Chinese Ministry Of Education, Is A Full-Time Practical-Oriented Undergraduate University With The Qualiﬁcation Of Issuing Diplomas And Degrees Independently.The University Has Two Campuses, Haiyuan And Anning, Covering An Area Of 87 Hectares. As Of 2019, The University Has 36,234 Full-Time Students Registered In 6 Secondary Colleges, Including College Of Finance And Accounting, College Of International Business, College Of Art And Media, College Of Education, College Of Engineering, And College Of Medicine. The University Has Two Campuses, Haiyuan And Anning, Covering An Area Of 87 Hectares. The Total Value Of Teaching Equipment Is Over 142 Million RMB. The Library Has A Paper Collection Of More Than 2 Million Books And 1.18 Million Electronic Books. The Total Assets Are About 1.7billion RMB Including Complete Infrastructures For Teaching, Scientiﬁc Research And Living.</p>
      </div>
	</div>
<!--testmonials-->
<!--<div class="testimonials">
	
</div>-->
<!--\testmonials-->
<!--specfication-->

<!--/specfication-->
 <p class=" p-1"style=" background-color: rgba(163,51,38);"></p>  
<?php include_once('includes/footer.php');?>
<!--/copy-rights-->
	</body>
</html>
