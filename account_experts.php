<?php
include "connect.php";
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Accounts &middot;Experts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"> -->
	<script language="javascript">
function checkMe()
{ 
  var p=document.form.pass.value;
  var c=document.form.password.value;
  if (p!=c){
     alert("Passwords do not match!");
  return false;
  } 
    
  else{
    document.form.submit();
  
  }
  

</script>

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

  <!-- HERO -->
    <div class="span8 offset2 "  style="margin-top:-160px; position:relative; align:center">
      <div class="hero-unit">

          <h3>Experts</h3> <hr>
          <h4><i class="icon-plus-sign"></i>&nbsp;Add an Expert</h4>
          <form autocomplete="off" action="add_expert.php" method="post" name="form" class="form-horizontal" />
            <fieldset>
              <div class="control-group ">
                    <label class="control-label">*Name</label>             
                    <div class="controls form-inline">
                      <input type="text" pattern="^[A-Za-z]{3,20}" name="firstname" data-validation-pattern-message="Do not use special characters or numbers" required="required" data-error="please enter firstname" class="input-medium " placeholder="Firstname" >
                   
                      <input type="text" pattern="^[A-Za-z]{3,20}" name="lastname" data-validation-pattern-message="Do not use special characters or numbers" required="required" data-error="please enter lastname" class="input-medium" placeholder="Lastname" >
                  </div>
              </div>
              <div class="control-group">
                <label class="control-label">*Subject</label>
                <div class="controls">
                  <select name="sub" id="sub" class="input-small" required>
                  <option value="0" disabled selected>Select</option>
                  <option value="M6">mathematics</option>
                  <option value="SC6">science</option>
                  <option value="SS6">social studies</option>
                  <option value="E6">english</option>
                  </select>    
                </div>
              </div>         
             
              <div class="control-group">
                <label class="control-label">*Choose a username</label>
                <div class="controls">
                  <input type="text" pattern="^[A-Za-z0-9._]{3,20}" data-validation-pattern-message="Username should be unique" required="required" class="input-medium" name="username" >
                 </div>
              </div>

              <div class="control-group">
              <label class="control-label">*Choose a Password (min 6 characters)</label>
              <div class="controls">
                  <div class="input-prepend">
                  <span class="add-on"><i class="icon-lock"></i></span>
                      <input type="Password" id="pass" name="password" pattern="^[A-Za-z0-9!@#$%^&*()_]{6,20}" class="input-medium"  placeholder="Password" 
                        data-error="min. 6 characters" required="required">
                  </div>
              </div>
            </div>  
			<div class="control-group">
                <label class="control-label">*Enter an Email Address</label>
                <div class="controls">
                  <input type="email" data-validation-email-message="Not a valid email id!" pattern=  "^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)" data-validation-pattern-message="Must be a valid email id" requiredclass="input-medium" name="email" required="required">
                </div>
              </div> 
            <input type="submit" value="Add" class="btn btn-large btn-inverse span3" style="margin-left:40%" >
          </fieldset>
        </form>
        <!--=====================add an expert finishes=====================-->
        <hr> 
        <h4><i class="icon-star"></i>&nbsp;Current Experts</h4> 
        
		
		<?php
		include "connect.php";
		
		$flag=0;
		$result=mysql_query("SELECT * FROM `faculty`");
		
		if(!mysql_num_rows($result))
		echo "No experts yet.";
		
		else
		{
		while($expert=mysql_fetch_assoc($result))
		{
		$flag=1;
		$sb=$expert['Subject_ID'];
		
		$s=mysql_query("Select Subject_name from subject where Subject_ID='$sb'");
		$rs=mysql_fetch_assoc($s);
		echo "<table class=\"table table-hover table-condensed\">
			<tr>
		      <td> <a href=\"#\">&nbsp;".$expert['Faculty_Name']."</a>&nbsp;&nbsp; " .$sb." </td>
             <td>
				<a href=\"#myModal\" role=\"button\" data-toggle=\"modal\"><i class=\"icon-remove\" );' ></i></a>
			 </td>
             </tr></table>";
		}
		}
		?>
		
 
        <!--==========my modal===========-->
  <div id="myModal" class="modal hide fade" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button>
      <h3>Are you sure you want to permanently delete this account?</h3>
    </div>
    <div class="modal-footer">
      <button class="btn btn-success">Delete</button>
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
