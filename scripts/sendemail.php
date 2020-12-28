<?php
if ((isset($_POST["SendEmail"])) && ($_POST["SendEmail"] == "andyjacko")) {
  $YourName = $_POST["YourName"];
  $YourEmail = $_POST["YourEmail"];
  $YourComment = $_POST["YourComment"];
  
  $to = "contact@gratitudestonesonline.com";
  $subject = "Contact Form Submission";
  $message = $YourName . ", has sent you the following message:\r\n\n" . $YourComment . "\r\n" . $YourEmail;
  $headers =  "From: " . $YourEmail . "\r\n";
  mail($to,$subject,$message,$headers);
  
  header("Location: /contactusthanks.php"); 
}else{
  echo "Not Valid Send - Comments only accepted from GratitudeStonesOnline.com";
}
?>