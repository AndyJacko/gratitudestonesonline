<!doctype html>
<?php require_once('scripts/dbc.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$queryAds = "SELECT *,rand() AS random_row FROM tbl_ads WHERE ad_active = 1 ORDER BY ".random_row." ASC LIMIT 4";
$Ads = mysql_query($queryAds, $Wisdom_Mcr) or die(mysql_error());
$row_Ads = mysql_fetch_assoc($Ads);
$totalRows_Ads = mysql_num_rows($Ads);
?>
<html lang="en"><!-- InstanceBegin template="/Templates/userside.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta name="geo.region" content="GB-MAN">
<meta name="geo.placename" content="Manchester">
<meta name="geo.position" content="">
<meta name="ICBM" content="">
<meta property="og:title" content="FREE Gratitude Stones">
<meta property="og:type" content="website">
<meta property="og:url" content="http://gratitudestonesonline.com">
<meta property="og:image" content="http://gratitudestonesonline.com/images/fbpic.jpg">
<meta property="og:site_name" content="Gratitude Stones Online">
<meta property="og:description" content="A FREE Gratitude Stone will help you work with the Law Of Attraction to achieve all that you desire in life. Come and choose your own FREE Gratitude Stone today.">
<meta property="fb:admins" content="">
<!-- InstanceBeginEditable name="doctitle" -->
<title>How To Contact Gratitude Stones Online</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="description" content="Contact Gratitude Stones Online for help acheiving a more positive attitude and inner happiness.">
<meta name="keywords" content="positive attitude, what is positive thinking, how to be happy, find happiness">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="7 days">
<meta name="alexa" content="100">
<meta name="serps" content="1, 2, 3, 4, 10, 11, 12, ATF">
<script src="/scripts/gratitudestonesonline.js" type="text/javascript"></script>
<!-- InstanceEndEditable -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script> 
<script type="text/javascript" src="/scripts/nav/jquery.color.js"></script> 
<script type="text/javascript" src="/scripts/nav/jMenu.js"></script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div id="mainContainer">
  <div id="header"><?php require("scripts/design/header.php"); ?></div>
  <div id="content">
    <div id="con" class="column">
      <div id="contentBox">
        <div id="contentContent"><!-- InstanceBeginEditable name="body" -->
          <section id="contact">
            <h1>Contacting Gratitude Stones Online</h1>
            <br>
            <p>Feel free to contact Gratitude Stones Online in any of the following ways:</p>
            <p><b>Email:</b> contact[at]gratitudestonesonline[dot]com</p>
            <p><b>Facebook:</b> <a href="https://www.facebook.com/pages/Gratitude-Stones-Online/322358061151263" target="_blank">Gratitude Stones Online</a></p>
            <div id="formstyle" class="myform">
              <form id="form1" name="form1" method="post" action="/scripts/sendemail.php" onSubmit="MM_validateForm('YourName','','R','YourEmail','','RisEmail','YourComment','','R');return document.MM_returnValue">
  
              <label>Name<span class="small">Add your name</span></label>
              <input name="YourName" type="text" id="YourName" size="50">
              
              <label>Email<span class="small">Add your email</span></label>
              <input name="YourEmail" type="text" id="YourEmail" size="50">
              
              <label>Comment<span class="small">Please enter a comment</span></label>
              <textarea name="YourComment" cols="38" rows="5" id="YourComment"></textarea>
              <input name="SendEmail" type="hidden" id="SendEmail" value="andyjacko" />
              
              <button type="submit">SEND COMMENT</button>
              <div class="spacer"></div>
              </form>
            </div>
          </section>
        <!-- InstanceEndEditable --></div>
      </div>
    </div>
    <div id="nav" class="column"><?php require("scripts/design/nav.php"); ?></div>
    <div id="ads" class="column"><?php require("scripts/design/sidebar.php"); ?></div>
    <br class="clearfix">
  </div>
  <div id="footer"><?php require("scripts/design/footer.php"); ?></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Ads);
?>