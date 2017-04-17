<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Student &middot;Home</title>
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

.thumb-hover {
   float: left;
   overflow: hidden;
   position: relative;  
   transition: opacity 0.3s ease;
   animation: barberpole 0.5s linear infinite;
}
 
.thumb-hover .mask {
    width:100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
height:100%;
}
 
.thumb-hover img {
   display: block;
   position: relative;
   width:100%;
}
 
.thumb-hover h4, .thumb-hover p {
    color: #fff;
    padding-left:9px;
    padding-right:9px;
    padding-top:9px;
}
  /*
.thumb-hover a, .mask>a, .thumb-hover a:hover, .mask>a:hover{
  color: #fff;
    text-decoration:none;
} */
/* hovering parts */
.thumb-hover .mask {
   background-color:  #333333;
   filter: alpha(opacity=0);
   opacity: 0;
}
 
.thumb-hover:hover{
    border: none;
}
.thumb-hover:hover .mask{
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
   filter: alpha(opacity=70);
   opacity: 0.7;
   -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
}


.hero-unit {
    background: #F3F3F3;
    border: #DADADA 1px solid;
    margin-bottom: 12px;
    padding:10px;
    color: #303030;
    box-shadow: inset 3px 3px 3px   #DADADA, 1px 1px 3px  #DADADA;
}

.contain {
    zoom: 2;
    background: #C0C0C0;
    display: block;
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    margin: auto;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

.well {
  color: #303030;

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

/* end of hovering thumbnails */


    </style>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/logo.jpg">
  </head>

  <body style="font-family:Century Gothic" background="assets/img/content.png">



    <!-- ====================NAVBAR============================= -->
    <div class="navbar-wrapper"  style="font-family: Century Gothic; font-size: 15px; font-weight: bold">
      <div class="container" style="width:1100px"> 
        <div class="navbar navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href=""><span style="font-size: 30px; ">e</span>-<span style="font-size: 23px">PATHSHAALA</span></a>
            <!-- Responsive Navbar contents-->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#"><span style="color: #1F0F00 ; font-weight: bold"><i class="icon-home"></i></span></a></li>
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

  
    <div class="container marketing">
      <!-- ==========The Homepage heading =============== -->
      <div class="row">
        <div class="span3" style="font-family: Century Gothic" >
          <h1 style="margin-top:-325px; margin-left:-70px; position:absolute; color:#FFFFFF; text-shadow:2px 2px 10px black;">Home</h1>
        </div><!-- /.span3 -->
      </div><!-- /.row -->
    </div><!-- / class container marketting -->

    <!-- ==========The Homepage heading finishes=============== -->




    <!-- Marketing messaging and featurettes
    ================================================== -->
  <div class="container">
    <div class="row">
    <!--================all subjects info starts=============-->
      <div class="row span3" style="margin-top:-17%"  >
        <img class="img-circle" src="assets/ico/notes.jpg" style=" margin-left:30%; max-height: 80px"/>
        <p>&nbsp;</p>
        <div class="well" style="text-align:center; color: #303030;">
          <h4>&middot; STUDY RESOURCES &middot; </h4>
          <p>Well prepared notes by our experts include detailed & easy-to-understand chapter wise solutions & concise revision notes to help prepare for exams.</p> 
          <a class="btn btn-inverse btn-small"  href="study_resources.html">Study Page</a> 
        </div>
      </div>

      <div class="row span3" style="margin-top:-17%">
        <img class="img-circle" src="assets/ico/question.jpg" style="margin-left:30%; max-height: 80px"/>
        <p>&nbsp;</p>
        <div class="well" style="text-align:center">
          <h4>&middot; Q&A &middot; </h4>
          <p>Clear any doubts or questions that you have-<i> ask a question </i>which will be answered by our qualified experts or <i>search</i> for existing questions and answers in 'All Questions'.</p>  
          <a class="btn btn-inverse btn-small"  href="">Q&A page</a>     
        </div>
      </div>

      <div class="row span3" style="margin-top:-17%">
        <img class="img-circle" src="assets/ico/quiz.jpg" style="margin-left:30%; max-height: 80px"/>
        <p>&nbsp;</p>
        <div class="well" style="text-align:center">
          <h4>&middot; QUIZ &middot; </h4>
          <p>A number of <i>Multiple Choice Questions</i> and <i>Subjective Tests</i> in each course for you to see how much you have learnt and to analyze your performance. </p>
          <a class="btn btn-inverse btn-small"  href="the_quiz_page.html">Quiz Page</a> 
        </div>
      </div>

      <div class="row span3" style="margin-top:-17%">
        <img class="img-circle" src="assets/ico/join.jpg" style="margin-left:30%; max-height:80px"/>
        <p>&nbsp;</p>
        <div class="well" style="text-align:center">
          <h4>&middot; SUBJECT/UPGRADE &middot; </h4>
          <p>e-PATHSHAALA provides study resources and tests in four subjects. Get a preview of all the subjects here. You can also get access to more courses by an <i>upgrade</i>.</p>
          <!--=======dropdown=========-->
        <div class="btn-group">  
          <a class="btn dropdown-toggle btn-inverse btn-small" data-toggle="dropdown" href="#"><span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="#">Mathematics</a></li>
          <li><a href="#">Science</a></li>
          <li><a href="#">Social Studies</a></li>
          <li><a href="#">English</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-plus"></i>Upgrade</a></li>

          </ul>
        </div> 
        <!--=======dropdown finishes=========-->
        </div>
      </div>
	    <?php
  
   

include "connect.php";
  $uname=$_SESSION['name'];
// echo $uname;
//exit();
$id=$_SESSION['uid'];
$sql=mysql_query("select distinct Board_ID from student natural join package_having_subject where Student_ID='$id'");
	$result=mysql_fetch_assoc($sql);
	
$board=$result['Board_ID'];


	
$result3 = mysql_query("SELECT * FROM student where User_Name='$uname'");
$row3 = mysql_fetch_assoc($result3);

$uid=$_SESSION['uid'];


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

    <!--================all subjects info finishes=============-->
<?php
	$subj=mysql_query("SELECT Subject_Name FROM student natural join package_having_subject natural join subject where User_Name='$uname'");
	echo "<div class=\"row\" style=\"margin-top:25%\">
		<hr>
        <div class=\"span6\">
		<div class=\"hero-unit sidebar-nav\" data-spy=\"affix\" style=\"max-height:270px;min-height:270px\">
		 <div class=\"tabbable\" style=\" font-size:13px\">";
		 echo "  <ul class=\"nav nav-tabs\">";
		 $cnt=0; $cnt1=0;
	while($subj_row=mysql_fetch_assoc($subj))
		  { $cnt1=$cnt1+1;
		  if($cnt1==1)
					{
		 $sub_name = $subj_row['Subject_Name'];
		  echo "<li class=\"active\"><a href=\"#".$subj_row['Subject_Name']."\" data-toggle=\"tab\"><strong>".$subj_row['Subject_Name']."</strong></a></li>";
		  }
		  else
		  {
			 $sub_name = $subj_row['Subject_Name'];
		  echo "<li ><a href=\"#".$subj_row['Subject_Name']."\" data-toggle=\"tab\"><strong>".$subj_row['Subject_Name']."</strong></a></li>";
		  
		  }
		  }
		  
		  
		echo " </ul>
				<div class=\"tab-content\">";
				
		$subj=mysql_query("SELECT Subject_Name FROM student natural join package_having_subject natural join subject where User_Name='$uname'");		
		
		while($subj_row=mysql_fetch_assoc($subj))
		{
		$cnt=$cnt+1;
	
		$sub_name=$subj_row['Subject_Name'];

					if($cnt==1)
					{
					echo  "
              
               <div id=\"".$subj_row['Subject_Name']."\" class=\"tab-pane active\" style=\"max-height:200px;\">
                  <h5>My Questions </h5>
				 ";
				 } 
				 else
				 {
				 echo  "
              
               <div id=\"".$subj_row['Subject_Name']."\" class=\"tab-pane\" style=\"max-height:200px;\">
                  <h5>My Questions </h5>
				 
				 ";
				 }
				//	$sub_name = $subj_row['Subject_Name'];
					$uid=$_SESSION['uid'];	
					$sql1=mysql_query("SELECT Subject_ID FROM package_having_subject NATURAL JOIN student NATURAL JOIN subject WHERE Student_ID ='$uid' and Subject_Name='$sub_name'");
					
					while($sub_id=mysql_fetch_assoc($sql1))
						{
						echo "<ol>";
						$id =$sub_id['Subject_ID'];
						
						$ques=mysql_query("SELECT Content FROM forum where Student_ID='$uid' and Subject_ID='$id'");
						while ($que_row=mysql_fetch_assoc($ques))
						{
							echo "<li ><a href=\"Subject.html\">".$que_row['Content']."</a></li>";
							
						}
						echo "</ol>";
					}
				echo "      
                </div>";
				
             //<!-- /.tab-content -->
            }
				echo "</div>";
			 
			echo "</div>";//<!-- /.tabbable -->
			
			?>
          </ul>
        </div><!--/hero -->

      </div><!--/span-->
      <div class="span6 " style="min-height:270px;">
        <div class="hero-unit sidebar-nav" style="font-size:12px;min-height:270px;">
          <ul class="nav nav-list"  style="min-height:270px;">
            <li class="nav-header" style="font-size:14px" >My Courses</li>
			 <?php 
			     $subj=mysql_query("SELECT Subject_Name FROM student natural join package_having_subject natural join subject where User_Name='$uname'");

		  while($subj_row=mysql_fetch_assoc($subj))
		  {
//		  echo "<li><a href=\"Subject.php?link=".$subj_row['Subject_Name']."\">". $subj_row['Subject_Name']. "</a></li>";
		  echo "<li><a href=\"Subject.php?link=".$subj_row['Subject_Name']."\">". $subj_row['Subject_Name']. "</a></li>";

		  }
          ?>
            
            <li class="nav-header" style="font-size:14px" >My Performance</li>
            <li><a href="#">View Report</a></li>
          </ul>
        </div><!--/hero-->
      </div><!--/span6-->
    <!--Le sidebar finishes-->
    </div>
    <!--/ Le row finishes-->
  
 <!--================Quiz info finishes=============-->
  
  



      <!-- FOOTER -->
      <footer>
        <div class=" row span10 push-bottom">
        <p class="pull-right"><class="push-bottom"><a href="#"><i class="icon-circle-arrow-up"></i>Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
     
      </footer>
      </div> <!-- Row-->
</div> <!-- container-->


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
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/


    js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="assets/js/holder/holder.js"></script>
  </body>
</html>
