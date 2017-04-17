
<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Revision &middot; e-PATHSHAALA</title>
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

  <body style="font-family:Century Gothic" background="assets/img/content.png">



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper"  style="font-family: Century Gothic; font-size: 15px; font-weight: bold">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container" style="width:1100px">  <!-- fixed size given to navbar-->

        <div class="navbar navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#"><span style="font-size: 30px; ">e</span>-<span style="font-size: 23px">PATHSHAALA</span></a>
            <!-- Responsive Navbar  contents-->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#"><span style="color: #1F0F00 ; font-weight: bold"><i class="icon-home"></i></span></a></li>
                <li><a href="#about"><span style="color: #1F0F00 ">About</span></a></li>
                <li><a href="#contact"><span style="color: #1F0F00 ">Contact</span></a></li>
              </ul>
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span style="color: #1F0F00; font-weight: bold; font-family: Century Gothic">
                      <img src="assets/ico/default_user.jpg" height="35px" width="35px" style="margin-top:-10px; margin-bottom:-10px; margin-right:10px" class="img-rounded-small"/> <?php echo $_SESSION['name']?></span>
                    <b class="caret"></b>
                  </a>
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



   

    <!-- Word of the day
    ================================================== -->
    
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

 <!--======================Word of the day finishes======================-->

 <!--=============Subject name=============-->
  
  <div class="container marketing">
    <div class="row">
      <div class="span3" style="font-family: Century Gothic" >
        <h1 style="margin-top:-350px; margin-left:-70px; position:absolute; color:#FFFFFF; text-shadow:2px 2px 10px black;"><?php $_GET['link'] ?></h1>
        <h3 style="margin-top:-315px; margin-left:-70px; position:absolute; color:#FFFFFF; text-shadow:2px 2px 10px black;">QUIZ</h3>
        <h3 style="margin-top:-290px; margin-left:-70px; position:absolute; color:#FFFFFF; text-shadow:2px 2px 10px black;"><?php 
		include "connect.php";
		$brd=$_SESSION['board'];
	
		$sql12=mysql_query("select * from board where BOARD_ID='$brd' ");
		$boardname=mysql_fetch_assoc($sql12);
		echo $boardname['Board_Name'].",".$_GET['link'];
		?></h3>
      </div><!-- /.span3 -->
    </div><!-- /.row -->
  </div><!-- / class container marketting -->

  <!--============Subject name finishes==============-->

  <div class="container-fluid" >
    <div class="row-fluid">
    <div class="span2 offset1"  style="margin-top:-170px; ">
      <div  style="align:middle; ">
         <?php
		 echo "
		 
        <a class=\"btn btn-large btn-block btn-success\" href=\"Subject.php?link=".$_GET['link']."\" style=\"margin-bottom:20px\"> Subject Page</a><br> 
        <a class=\"btn btn-large btn-block btn-success\" href=\"Subject_Revision.php?link=".$_GET['link']."\" style=\"margin-bottom:20px\"> Revision notes </a><br>  <!--with respect to that particular course-->
        <a href=\"#taskmodal\" role=\"button\" style=\"margin-bottom:20px\" class=\"btn btn-large btn-block btn-success\" data-toggle=\"modal\">Ask a Question</a> <!--modal-->
		";
?>
      </div> 
    </div><!-- span4-->
 
   

  <!--============ HERO: display info================ -->
  <div class="span8 "  style="margin-top:-200px">
    <div class="hero-unit">
      <h2 style="margin-top:-5%">Select a MCQ QUIZ : </h2> 
      <div class="row-fluid">
        <table class="table table-hover table-condensed"  style="font-size:15px">
		<?php
		include "connect.php";
			$id=$_SESSION['uid'];
				
			$board=$_SESSION['board'];
			$subname=$_GET['link'];
			$sql2=mysql_query("SELECT Subject_ID FROM package_having_subject NATURAL JOIN student NATURAL JOIN subject WHERE Student_ID ='$id' and Subject_Name='$subname'");
				
			$sub_id=mysql_fetch_assoc($sql2);
		    
			$subject=$sub_id['Subject_ID'];
			$sql=mysql_query("select * from quiz where Board_ID='$board' and Subject_ID='$subject' and Type='MCQ'");
			while($result=mysql_fetch_assoc($sql))
			{	
			$paid=$result['Paid'];
		//	 echo "<li><a href=\"Subject.php?link=".$result['Subject_Name']."&link2=".$result2['Quiz_ID']." \">". $result2['Quiz_Name']. "</a></li>";
		 echo"
          <tr>
            <td><i class=\"icon-book\"></i></td>
            <td><a href=\"quiz_mcq.php?link=".$_GET['link']."&link1=".$result['Quiz_ID']."\">". $result['Quiz_name']. "</a></td>
            <td><span class=\"badge badge-warning\">"; if($paid=='N') {echo " Free!";} echo "</span></td>
          </tr>	 ";
		}
		  ?>
          </table>
      </div>
    </div> <!--hero unit-->
	
	
	
	 <div class="hero-unit">
      <h2 style="margin-top:-5%">Select a Subjective QUIZ : </h2> 
      <div class="row-fluid">
        <table class="table table-hover table-condensed"  style="font-size:15px">
		<?php
		
			$sql=mysql_query("select * from quiz where Board_ID='$board' and Subject_ID='$subject' and Type='Sub'");
			while($result=mysql_fetch_assoc($sql))
			{	
			$paid=$result['Paid'];
		//	 echo "<li><a href=\"Subject.php?link=".$result['Subject_Name']."&link2=".$result2['Quiz_ID']." \">". $result2['Quiz_Name']. "</a></li>";
		 echo"
          <tr>
            <td><i class=\"icon-book\"></i></td>
            <td><a href=\"quiz_mcq.php?link=".$_GET['link']."&link1=".$result['Quiz_ID']."\">". $result['Quiz_name']. "</a></td>
            <td><span class=\"badge badge-warning\">"; if($paid=='N') {echo " Free!";} echo "</span></td>
          </tr>	 ";
		}
		  ?>
          </table>
      </div>
    </div> <!--hero unit-->
  </div> <!-- span8-->
<!--============ HERO: display info================ -->

 </div> <!-- Row fluid-->
</div> <!-- container-fluid -->


  <!-- ================FOOTER================= -->
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
