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
<title>Gratitude Stones Online Privacy Policy</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="description" content="Gratitude Stones Online will always protect your online privacy, find out more...">
<meta name="keywords" content="how to be grateful, how to law of attraction, how to positive thinking, how to the secret, how to goal setting">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="7 days">
<meta name="alexa" content="100">
<meta name="serps" content="1, 2, 3, 4, 10, 11, 12, ATF">
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
          <section id="privacy">
            <h1>The privacy of my visitors is important to me.</h1>
            <br>
            <h3>I will never give or sell your information to third parties, I hate spam as much as you do.</h3>
            <p>I recognize that the privacy of your personal information is as important to you as mine is to me.  Here is some information on what types of personal information I receive and collect when you use or visit <b>GratitudeStonesOnline.com</b> and how I safeguard your information.</p>
            <h3>Personal Details</h3>
            <p>When you complete a purchase via PayPal I recieve your Email Address and Physical Address details which I use to ship your order to you and also to ensure I have a means of contacting you regarding your order.&nbsp; I may also periodically send you emails regarding updates to this website.&nbsp; You may unsubscribe from these emails at any time, using the unsubscribe link contained within each email.</p>
            <h3>Third Party Websites</h3>
            <p>This website may contain links to other websites.  I am not responsible for the privacy policies or practices of third party websites.  You should check every website's privacy policy before you continue to use the website.</p>
            <h3>Cookies</h3>
            <p>Some of the pages on this website may use cookies.  A cookie is a text-only string of information that a website transfers to the cookie file on your computer.  No personal information is stored in the cookie file.</p>
            <h3><em>Disabling/Enabling Cookies</em></h3>
            <p>You can choose to disable or selectively turn off this website's cookies or third-party cookies in your browser settings, or by managing preferences in programs such as Norton Internet Security.  However, this can affect how you are able to interact with this website as well as other websites.  This could include the inability to login to services or programs, such as logging into forums or accounts.</p>
            <h3>Policy Amendments</h3>
            <p>I may update this privacy policy from time-to-time by posting a new version on this website.  You should check this page occasionally to ensure you are happy with any changes.</p>
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