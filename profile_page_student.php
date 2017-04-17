<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile Page &middot; Bootstrap</title>
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

    .mycontent-right {
    border-left: 4px groove #3399FF;

    }


    

    /* RESPONSIVE CSS
   

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
     -------------------------------------------------- */
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
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: #1F0F00; font-weight: bold; font-family: Century Gothic"><i class="icon-user"></i> <?php echo $_SESSION['name']?></span><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="profile_page_student.php"> <i class="icon-user"></i> My Profile</a></li>
                    <li><a href="#"> <i class="icon-pencil"></i> Edit Profile</a></li>
                    <li><a href="#"> <i class="icon-wrench"></i> My Account</a></li>
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
                  <div class="span3">
                    
                     


                  </div><!-- /.span3 -->
                     <div class="span3" style="font-family: Century Gothic" >
                      <h1 style="margin-top:-325px; margin-left:-300px; position:absolute; color:#FFFFFF; text-shadow:2px 2px 10px black;">About Me</h1>
                     </div><!-- /.span3 -->
                </div><!-- /.row -->
    </div><!-- / class container marketting -->

   <?php
   
   

include "connect.php";
  $uname=$_SESSION['name'];
// echo $uname;
//exit();


$result3 = mysql_query("SELECT * FROM student where User_Name='$uname'");
$row3 = mysql_fetch_assoc($result3);

$subj=mysql_query("SELECT Subject_Name FROM student natural join package_with_subj natural join subject where User_Name='$uname'");
$uid=$_SESSION['uid'];
$ques=mysql_query("SELECT Content FROM forum where Student_ID='$uid' order by Timestamp DESC limit 3  ");



//print_r($row3);


//while()
{ 
$fname=$row3['fname'];

$lname=$row3['lname'];
$class=$row3['class'];

//$board=$row3['board'];
$email=$row3['Email'];
$pic1=$row3['Profile_Pic'];
$pic=substr($pic1,29);
//echo $pic;
}
?>


  <!-- HERO -->
    <div class="span10 offset2 "  style="margin-top:-200px">
      <div class="hero-unit" style="background-image:url(assets/img/cruh.jpg)">
        <div class="row">
          <div class="span4">
		<?php echo "<img src=\"".$pic."\" class=\"img-rounded pull-left\" style=\"box-shadow:10px 10px 5px #888 ;margin-left:-10px ; margin-top:-10px ; max-height:200px ; max-width:200px\"   data-src=\"holder.js/140x140\">";?>
		  
            
            <h3 style="text-align:center; text-shadow: 2px 2px 5px #888;"><?php echo $uname ?></h3>
          </div>
          <div class="span3 mycontent-right">
                <dl class="dl-horizontal" style="margin-left:-30%">
                  <dt>Name</dt>
                  <dd><?php echo $fname  ?></dd>
                  <dt>Class</dt>
                  <dd><?php echo $class ?></dd>
                  <!--<dt>Board</dt> -->
                  <dd><?php //echo $board ?></dd>
                  <dt>email ID</dt>
                  <dd><?php echo $email ?></dd>
                </dl>
          </div>
        </div><!--row ends-->
        <hr style=" border-top: 1px solid #3399FF;  border-bottom: 1px solid #3399FF; box-shadow: 2px 2px 7px   #33CC33;">
        <div btn-groupstyle="font-family:Century Gothic; ">
          <div class="btn-group">
            <button class="btn btn-large btn-inverse"><i class="icon-pencil icon-white"></i> Edit Profile</button>
          </div>
          <div class="btn-group">
            <button class="btn btn-large btn-inverse"><i class="icon-plus icon-white"></i> Upgrade</button>
          </div>
          <div class="btn-group dropup">  
            <button class="btn dropdown-toggle btn-large btn-inverse " data-toggle="dropdown" href="#"><i class="icon-question-sign icon-white"></i> Ask a Question <span class="caret"></span></button>
            <ul class="dropdown-menu">
			<?php 
			$id=$_SESSION['uid'];
			$id=$_SESSION['uid'];
			$sql=mysql_query("select distinct Subject_Name from student natural join package_having_subject natural join subject where Student_ID='$id'");
			while($result=mysql_fetch_assoc($sql))
			{
			$sub=$result['Subject_Name'];
		 echo "<li><a href=\"Subject.php?link=".$result['Subject_Name']."\">". $result['Subject_Name']. "</a></li>";
		 //	echo " <li><a href=\"Subject.html\">".$result['Subject_Name']."</a></li>  "  ;
            }
			?>
            </ul>
            </div> <!--div btn ask a question group--> 
            <div class="btn-group dropup">  
            <button class="btn dropdown-toggle btn-large btn-inverse" data-toggle="dropdown" href="#"><i class="icon-tasks icon-white"></i> Take a Quiz <span class="caret"></span></button>
            <ul class="dropdown-menu">
			<?php 
			$id=$_SESSION['uid'];
			$id=$_SESSION['uid'];
			$sql=mysql_query("select distinct Subject_Name from student natural join package_having_subject natural join subject where Student_ID='$id'");
			while($result=mysql_fetch_assoc($sql))
			{
			$sub=$result['Subject_Name'];
			
             echo "<li><a href=\"Subject.php?link=".$result['Subject_Name']."\">". $result['Subject_Name']. "</a></li>";
		// echo "<li><a href=\"Subject.html\">".$result['Subject_Name']."</a></li>";
			}
			?>
            </ul>
          </div> <!--div btn ask a question group--> 
    </div>
  </div>
</div> <!-- HERO ends-->


  <!-- SIDE-NAVBAR RIGHT -->
    <div class="span4 " style="margin-top:-220px; padding:20px">
          <div class="well sidebar-nav">
          <ul class="nav nav-list">
          <li class="nav-header" style="font-size:12px">My Courses</li>
		  
		  <?php 
			$id=$_SESSION['uid'];
			$sql=mysql_query("select distinct Subject_Name from student natural join package_having_subject natural join subject where Student_ID='$id'");
			while($result=mysql_fetch_assoc($sql))
			{
			
			 echo "<li><a href=\"Subject.php?link=".$result['Subject_Name']."\">". $result['Subject_Name']. "</a></li>";
		 
            }
			?>

          <li class="nav-header" style="font-size:12px">My Questions</li>
		  <?php
			while($que_row=mysql_fetch_assoc($ques))
			{
			 echo "<ul><li >".$que_row['Content']."</li></ul>";
		
			}
			?>

          <li class="nav-header" style="font-size:12px">My Performance</li>
          <li><a href="my_performance.html">View Report</a></li>
          
        </ul>

      </div><!--/.well -->
    </div><!--/span3-->
 </div> <!-- Row fluid-->

</div> <!-- container-fluid -->


      <!-- FOOTER -->
      <footer>
        <div class="span12 offset1">
        <p class="pull-right"><class="push-bottom"><a href="#">Back to top</a></p>
        <p class="pull-left">&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
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
