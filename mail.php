

<html>
<body>

<?php
// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","192.168.0.1");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', '201001007@daiict.ac.in');
//if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  //$email = $_REQUEST['email'] ;
  //$subject = $_REQUEST['subject'] ;
  //$message = $_REQUEST['message'] ;
  mail("201001007@daiict.ac.in", "test mail",
  "hello", "From:" . 'rshirin96@gmail.com');
  echo "Thank you for using our mail form";
  }
//else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mail.php'>
  
  <input type='submit'>
  </form>";
  }
?>

</body>
</html>
