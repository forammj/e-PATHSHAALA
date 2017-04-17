<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Questions &middot; e-PATHSHAALA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"> -->
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }



    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;

      -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 5px 10px rgba(0,0,0,.25);
              box-shadow: 0 5px 10px rgba(0,0,0,.25);
           background-color: #2c2c2c; /* fallback color, place your own */

 
  /* Gradients for modern browsers, replace as you see fit */
  background-image: -moz-linear-gradient(top, #29A3CC, #00CC99);
  background-image: -ms-linear-gradient(top,  #29A3CC, #00CC99);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from( #29A3CC), to(#00CC99));
  background-image: -webkit-linear-gradient(top,  #29A3CC, #00CC99);
  background-image: -o-linear-gradient(top, #29A3CC, #00CC99);
  background-image: linear-gradient(top,  #29A3CC, #00CC99);
  background-repeat: repeat-x;

  /* IE8-9 gradient filter */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333', endColorstr='#222222', GradientType=0);

    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      /*font-size: 16px;*/
      font-family: Century Gothic;
      /*font-weight: bold;*/
      color: #1F0F00;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 300px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 270px;
    }
.carousel-caption {
      text-align: right;
      margin-left: 450px;
     background-color:rgba(0,100,0,0.5);
      position: static;
      padding: 0 10px 10px;
      margin-top: 100px;
    }
    .carousel-caption h3 {
      text-align: center;
      color: #fff;
       line-height: 1.25;
      text-shadow:2px 2px 5px black;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow:2px 2px 5px black;
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span3 {
      margin-top: 150px;
      text-align: left;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span3 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    

    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

      .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }


    @media (max-width: 767px) {

      .navbar-inner {
        margin: -20px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/logo.jpg">
  </head>

  <body style="font-family:Century Gothic">



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper"  style="font-family: Century Gothic; font-size: 15px; font-weight: bold">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container" style="width:1100px">  <!-- fixed size given to navbar-->

        <div class="navbar navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#"><span style="font-size: 30px; ">e</span>-<span style="font-size: 23px">PATHSHALA</span></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#"><span style="color: #1F0F00 ; ">Home</span></a></li>
                <li><a href="#about"><span style="color: #1F0F00 ">About</span></a></li>
                <li><a href="#contact"><span style="color: #1F0F00 ">Contact</span></a></li>
              </ul>
              <ul class="nav pull-right">
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: #1F0F00; font-weight: bold; font-family: Century Gothic"><img src="assets/ico/default_user.jpg" height="35px" width="35px" style="margin-top:-10px; margin-bottom:-10px; margin-right:10px" class="img-rounded-small"/> John Doe</span><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">My Profile</li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">My Account</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->



   

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
 <div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
        <img src="assets/img/profile_background1.jpg" alt="">
        <div class="container">
          <div class="container">
            <div class="carousel-caption" >
              <h3>Word of the day:</h3>
              <p class="lead">Impeccable: In accordance with the highest standards of propriety; faultless. </p>
            </div>
          </div>
          <div class="carousel-caption" style="font-family: Century Gothic;">
             <h1 align:center> </h1> 
              
               </div><!-- carousal caption-->
           </div><!-- container-->
         </div><!--carousal inner-->
     </div><!--carousal slide-->
  
    <div class="container marketing">

      <!-- Profile pic below the carousel -->
                <div class="row">
                     <div class="span3" style="font-family: Century Gothic" >
                      <h1 style="margin-top:-325px; margin-left:-70px; position:absolute; color:#FFFFFF; text-shadow:2px 2px 10px black;"><?php echo $_GET['link'] ?></h1>
                     </div><!-- /.span3 -->
                </div><!-- /.row -->
    </div><!-- / class container marketting -->

<div class="container-fluid" >
  <div class="row-fluid">
  
     <!-- Side Buttons-->
     <div class="span2 offset1"  style="margin-top:-170px; ">
      <div  style="align:middle; ">
     
      <a class="btn btn-large btn-block btn-success disabled" href="#" style="margin-bottom:20px"> My Questions </a>
      <br> <a class="btn btn-large btn-block btn-success" href="#" style="margin-bottom:20px"> All Questions </a>  <!--popup with my courses-->
      <br>  
      <div class="btn-group">  <a class="btn dropdown-toggle btn-success btn-large" data-toggle="dropdown" href="#"> Ask a Question <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">math</a></li>
        <li><a href="#">science</a></li>
        <li><a href="#">social studies</a></li>
        <li><a href="#">english</a></li>
        <li><a href="#">hindi</a></li>
        <li><a href="#">sanskrit</a></li>
      </ul>
      </div> <!--div btn group--> 
      </div> 
    </div><!-- span4-->
  

  <!-- HERO -->
 <div class="span8 "  style="margin-top:-200px">
      <div class="hero-unit">
          <h2>My Questions</h2> 
          <ol>
		  <?php
		  
		  include 'connect.php';



$subj=$_GET['link'];
$uid=$_SESSION['uid'];

 
$result = mysql_query("SELECT distinct Content, Timestamp FROM forum join subject where Student_ID='S5' and Subject_Name='english' order by Timestamp DESC limit 10  ");
//echo mysql_num_rows($result);
		  if(mysql_num_rows($result) == 0)
	{
		echo 'No content found yet.';
	}
	else
	{
		  while($row = mysql_fetch_assoc($result))
		  echo "<li><a href=\"Subject.php?link=".$subj."\">". $row['Content']."</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['Timestamp']."</li> ";
		{
			
				
			
		}
		}
		?>
         <!--  <li><a href="#">What is the integration of sqrt(1 - sin x) e^(-x/2) / (1 + cos x)</a></li>
          <li><a href="#">Why do need differentiation?</a></li>
          <li><a href="#">What are the real world applicatins of algebra?</a></li>-->
        </ol> 
       
      </div>
  </div> <!-- span8-->

 </div> <!-- Row fluid-->

</div> <!-- container-fluid -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><class="push-bottom"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <!--<script src="assets/js/bootstrap-carousel.js"></script> -->
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <!--<script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>-->
    <script src="assets/js/holder/holder.js"></script>
  </body>
</html>
