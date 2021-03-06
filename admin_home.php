<?php
include "connect.php";
session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin &middot;Home</title>
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
    
    
    margin-bottom: 12px;
    padding:10px;
    color: #303030;
   
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
            <a class="brand" href="#"><span style="font-size: 30px; ">e</span>-<span style="font-size: 23px">PATHSHAALA</span></a>
            <!-- Responsive Navbar contents-->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#"><span style="color: #1F0F00 ; font-weight: bold"><i class="icon-home"></i></span></a></li>
                <li><a href="#about"><span style="color: #1F0F00 ">About</span></a></li>
                <li><a href="#contact"><span style="color: #1F0F00 ">Contact</span></a></li>
              </ul>
              <!--==========accounts================-->
              <ul class="nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: #1F0F00; font-weight: bold; font-family: Century Gothic"><i class="icon-asterisk"></i> Accounts</span><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="account_experts.php">Experts</a></li>
                    <li><a href="account_students.php">Students</a></li>
                  </ul>
                </li>
              </ul>
              <!--=============accounts finishes============-->
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: #1F0F00; font-weight: bold; font-family: Century Gothic"><i class="icon-user"></i>&nbsp;Administrator</span><b class="caret"></b></a>
                  <ul class="dropdown-menu">
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
    
      <div class="row span5" style="margin-top:-20%">
        <div class="well" style="text-align:center">
          <h4>&middot; Go To &middot; </h4>
           <form autocomplete="off" action="go_to_admin.php" method="post" name="form" class="form-horizontal" />
            <fieldset>
              <div class="control-group">
                <label class="control-label">Class</label>
                <div class="controls">
                  <select name="std" id="std" class="input-small" required>
                  <option value="0" disabled selected>Select</option>
                  <option value="CBSE">6th</option>
                  <option value="ICSE">7th</option>
                  <option value="GBSE">8th</option>
                  </select>           
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">School-board</label>
                <div class="controls">
                  <select name="board" id="board" class="input-small" required>
                  <option value="0" disabled selected>Select</option>
                  <option value="CBSE">CBSE</option>
                  <option value="ICSE">ICSE</option>
                  <option value="GBSE">State Board(Guj)</option>
                  </select>           
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Subject</label>
                <div class="controls">
                  <select name="sub" id="sub" class="input-small" required>
                  <option value="0" disabled selected>Select</option>
                  <option value="CBSE">english</option>
                  <option value="ICSE">mathematics</option>
                  <option value="GBSE">science</option>
                  <option value="GBSE">social studies</option>
                  </select>           
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Page</label>
                <div class="controls">
                  <select name="page" id="page" class="input-small" required>
                  <option value="0" disabled selected>Select</option>
                  <option value="CBSE">Quiz</option>
                  <option value="ICSE">Discussion Forum</option>
                  <option value="GBSE">Study Resources Page</option>
                  </select>           
                </div>
              </div>
              <hr>
              <input type="submit" value="Go" class="btn btn-large btn-inverse" onClick="checkMe()" >
            </fieldset> 
          </form>
     <!--=======form finishes=========-->
        </div>
      </div>
    <!--================all subjects info finishes=============-->

      

        <div class="span7" style="margin-top:-20%">
          <div class="hero-unit sidebar-nav" data-spy="affix" style="max-height:342px;min-height:342px">
            <div class="tabbable" style=" font-size:13px">
              <ul class="nav nav-tabs">
              <!--Le defining of tabs-->
                <li class="active"><a href="#pane1" data-toggle="tab"><strong><i class="icon-file"></i>&nbsp;Approve Quiz</strong></a></li>
                <li><a href="#pane2" data-toggle="tab"><strong><i class="icon-file"></i> &nbsp;Approve Study Resource</strong></a></li>
              </ul>
            <div class="tab-content" style="max-height:270px">
              <!--pane1 Tab-->
                <div id="pane1" class="tab-pane active" style="max-height:270px">
                  <h5>Quizzes to be approved</h5>
				  <!--clicking on link them...-->
					<ol>
					
					<?php
						include "connect.php";
						
					  $q= "SELECT * fROM `quiz` where isApproved=0 ORDER BY `Timestamp` DESC";
					  $xxx=mysql_query($q);
					  if(!mysql_num_rows($xxx))
						echo "No quizzes to be approved..";
					else
					{
					  while( $row=mysql_fetch_assoc($xxx))
					  {
					  $subjid=$row['Subject_ID'];
					  $facid=$row['Faculty_ID'];
					  $boardid=$row['Board_ID'];
					  					  
					  $subj="select Subject_Name from subject where Subject_ID='$subjid'";
					  $t = mysql_fetch_assoc(mysql_query($subj));
					  $subj = $t['Subject_Name'];
					  $faculty="select `Faculty_Name` from `faculty` where Faculty_ID='$facid'";
					  $t = mysql_fetch_assoc(mysql_query($faculty));
					  $faculty = $t['Faculty_Name'];
					  $board="select Board_Name from Board where Board_ID='$boardid'";
					  $t = mysql_fetch_assoc(mysql_query($board));
					  $board = $t['Board_Name'];
					  		
								<!-- quiz display to be added-->
					   echo "<li><a href=\"quizdisplay_admin.php\?qid=".$row['Quiz_ID']."&bid=".$boardid."&sid=".$subjid."\">" .$row['Quiz_ID']. " " .$row['Quiz_name']. "</a>
					   <span class=\"pull-right\">
						 <a href=\"approval.php?action=1&t=1&id=".$row['Quiz_ID']."&subid=".$subjid."&bid=".$boardid. "&type=".$row['Type']."\"> <i class=\"icon-ok\"></i> </a>
							<a href=\"approval.php?action=2&t=1&id=".$row['Quiz_ID']."&subid=".$subjid."&bid=".$boardid."&type=".$row['Type']."\">&nbsp;<i class=\"icon-remove\"></i></a></span>
							<br><span style=\"font-size:12px\">" .$subj. "( board " . $board. ") 
							uploaded by <a href=\"#\">" .$faculty. "</a> on " .$row['Timestamp']. "</span></li>";
							
					}
					}	
                     ?>
					 
					</ol>
                </div>
                    
                <!--pane2 Tab-->
                <div id="pane2" class="tab-pane" style="max-height:270px;">
                  <h5>Study resources to be approved</h5>
                   <ol>
				   <?php
				   include "connect.php";
				   
					$r="Select * from `study_material` where isApproved=0 ORDER BY `Timestamp` DESC";
					$x=mysql_query($r);
					if(!mysql_num_rows($x))
					echo "No study material to be approved..";
					else
					{
					  while( $row=mysql_fetch_assoc($x))
					  {
					  $subjid=$row['Subject_ID'];
					  $facid=$row['Faculty_ID'];
					  $boardid=$row['Board_ID'];
					  $Timestamp=$row['Timestamp'];
					  					  
					  $subj="select Subject_Name from subject where Subject_ID='$subjid'";
					  $t = mysql_fetch_assoc(mysql_query($subj));
					  $subj = $t['Subject_Name'];
					  $faculty="select `Faculty_Name` from `faculty` where Faculty_ID='$facid'";
					  $t = mysql_fetch_assoc(mysql_query($faculty));
					  $faculty = $t['Faculty_Name'];
					  $board="select Board_Name from Board where Board_ID='$boardid'";
					  $t = mysql_fetch_assoc(mysql_query($board));
					  $board = $t['Board_Name'];
					
				   
				    echo "<li><a href=\"pdf_display.php?link=".$row['Material_name']."&link1=".$subj ."\>" .$row['Material_name']."</a>
				   <span class=\"pull-right\">
					<a href=\"approval.php?action=1&t=2&id=".$row['Material_ID']."&subid=".$subjid."&bid=".$boardid."&type=".$row['Type']."\"> <i class=\"icon-ok\"></i> </a>
					<a href=\"approval.php?action=2&t=2&id=".$row['Material_ID']."&subid=".$subjid."&bid=".$boardid."&type=".$row['Type']."\">&nbsp;<i class=\"icon-remove\"></i></a>
					</span><br><span style=\"font-size:12px\">". $subj. "(board" .$board. ")
					uploaded by <a href=\"#\">" .$faculty. "</a> on" .$Timestamp. "</span></li>";
					
					}
					}
					?>	
					  </ol>
                </div>

              </div><!-- /.tab-content -->
            </div><!-- /.tabbable -->
          </div><!--/hero -->
        </div><!--/span-->
     
    <!--Le sidebar finishes-->
</div>
  



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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> <!-- or use local jquery -->
    <script src="js/jqBootstrapValidation.js"></script>
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
    <script src="assets/js/bootstrap-typeahead.js"></script>
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
