<?php
include "connect.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Quiz &middot;MCQ</title>
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
    .navbar .navbar-inner 
	
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
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 100px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
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

    form.form-inline div.control-group { display: inline-block; }
form.form-inline div.control-group div.controls { display: inline-block; }
    

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

    .input-recaptcha{
 width:172px;   
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
 
     <!--validate form elements-->
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
      <div class="container" style="width:1100px"> <!-- fixed size given to navbar-->

        <div class="navbar navbar">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#"><span style="font-size: 30px; ">e</span>-<span style="font-size: 23px">PATHSHAALA</span></a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#"><span style="color: #1F0F00 ; font-weight: bold"><i class="icon-home"></i></span></a></li>
                <li><a href="#about"><span style="color: #1F0F00 ">About</span></a></li>
                <li><a href="#contact"><span style="color: #1F0F00 ">Contact</span></a></li>
              </ul>
             
               
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="color: #1F0F00; font-weight: bold; font-family: Century Gothic"><i class="icon-user"></i>&nbsp;John Doe</span><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="profile_page_student.php"> <i class="icon-user"></i> My Profile</a></li>
                    <li><a href="#"> <i class="icon-pencil"></i> Edit Profile</a></li>
                    <li><a href="#"> <i class="icon-wrench"></i> My Account</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Logout</a></li>
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
          <div class="carousel-caption" style="font-family: Century Gothic;">
             <h1 align:center> </h1> 
              
               </div><!-- carousal caption-->
           </div><!-- container-->
         </div><!--carousal inner-->
     </div><!--carousal slide-->
  
   

<div class="container-fluid" >
  <div class="row-fluid">

<?php
			if($_SESSION['previlege']==0)
			{
			$id=$_SESSION['uid'];
			$board1=$_SESSION['board'];
			//$subname=$_GET['link'];
			//$sql=mysql_query("SELECT Subject_ID FROM package_having_subject NATURAL JOIN student NATURAL JOIN subject WHERE Student_ID ='$id' and Subject_Name='$subname'");
			//$sub_id=mysql_fetch_assoc($sql);
			}
			else
			{
			$id=$_SESSION['fid'];
			$sql1=mysql_query("select * from faculty natural join subject_of_board where Faculty_ID='$id'");
			$board=mysql_fetch_assoc($sql1);
			$board1=$board['Board_ID'];
			//$board1=$_SESSION['board'];
			}
			$subject=$_GET['link'];
			$quizid=$_GET['link1'];
			$sql2=mysql_query("SELECT Board_ID FROM subject_of_board WHERE Subject_ID ='$subject'");
			$board=mysql_fetch_assoc($sql2);
			$sql3=mysql_query("SELECT * FROM quiz WHERE Quiz_ID ='$quizid'");
			$quiz=mysql_fetch_assoc($sql3);
			//$fetch=mysql_fetch_assoc($result);
			

 
  echo "
    <div class=\"span8 offset2 \"  style=\"margin-top:-160px; position:relative; align:center\">
      <div class=\"hero-unit\">";

          
		  echo "<hr>";
		  
		  
		 $sql4=mysql_query( "SELECT * FROM faculty NATURAL JOIN quiz NATURAL JOIN quiz_questions  where Subject_ID='$subject' and Board_ID='$board1' and Quiz_ID='$quizid' ");
		//	$result4=mysql_query($sql4);
			$fetch4=mysql_fetch_assoc($sql4);
			$fac_name=$fetch4['Username'];
		
			$time=$fetch4['Timestamp'];
			
		
          echo "<h4>added by ".$fac_name."</a> on ".$time." </h4>";
		  ?>
		  
          <h5>Instructions: ----------------</h5>
          <hr>
		    <fieldset>
          <form autocomplete="off" action="<?php echo "quiz_submit.php?link=".$sub_id."&link1=".$quizid; ?>" method="post" name="form"  >
          
              <ol>
			  <?php
			  $result=mysql_query("select * from quiz_questions where Subject_ID='$subject' and Board_ID='$board1' and Quiz_ID='$quizid' order by Question_ID");
			
			  while($fetch=mysql_fetch_assoc($result))
			  {
             echo"   <li>".$fetch['Statement']."
                  <div class=\"control-group \">
                    <label class=\"control-label\"></label>             
                    <div class=\"controls\"  class=\"radio\">
                      <input type=\"radio\" name=\"".$fetch['Question_ID']."\" id=\"optionsRadios1\" value=\"a\">".$fetch['Option1']."
                    </div>
                    <div class=\"controls\" class=\"radio\">
                     <input type=\"radio\" name=\"".$fetch['Question_ID']."optionsRadios\" id=\"optionsRadios2\" value=\"b\">".$fetch['Option2']."
                    </div>
                     <div class=\"controls\"  class=\"radio\">
                      <input type=\"radio\" name=\"".$fetch['Question_ID']."\" id=\"optionsRadios3\" value=\"c\">".$fetch['Option3']."
                    </div>
                    <div class=\"controls\" class=\"radio\">
                     <input type=\"radio\" name=\"".$fetch['Question_ID']."\" id=\"optionsRadios4\" value=\"d\">".$fetch['Option4']."
                    </div>
                  </div>
                </li>";
				}
				?>
			</ol>
            <input type="submit" value="Submit" class="btn btn-large btn-inverse span3" data-toggle="modal" style="margin-left:40%" >
          </form>
        </fieldset>
        
        <!--==========my modal===========-->
  <div id="myModal" class="modal hide fade" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>
      <h3>Are you sure you want to Submit quiz?</h3>
    </div>
    <div class="modal-footer">
      <button class="btn btn-success pull-left">Submit</button>
      <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Cancel</button>
    </div>
  </div>
<!--============my modal finishes=============-->       
      </div><!--hero unit-->
    </div> <!-- span8-->


 </div> <!-- Row fluid-->

</div> <!-- container-fluid -->


      <!-- FOOTER -->
      <footer class="span10 offset3">
       <p class="pull-right"><class="push-bottom"><a href="#"><i class="icon-circle-arrow-up"></i>Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>  or use local jquery -->
	<!--<script src="assets/js/jqBootstrapValidation"></script>-->
    
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
    <script>
  $(function () { $("form,input").not("[type=submit]").jqBootstrapValidation(); } );
  </script>
  </body>
</html>
