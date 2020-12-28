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
<title>Gratitude Stones Online: Frequently Asked Questions</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="description" content="Frequently asked questions about the Gratitude Stones Online website.">
<meta name="keywords" content="gratitude stones online, how to be grateful, how to self help, skills development">
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
          <section id="faq">
            <h1>Frequently Asked Questions</h1>
            <br>
            <p>Got a question? See if any of the following FAQ's help to answer it. If you still have a question, then please <a href="/contactus.php">get in touch</a>.</p>
            <ul>
              <li><h3>How much do your Gratitude Stones cost?</h3>All Gratitude Stones are FREE, there is however a postage & packaging charge.</li>
              <li><h3>Can my Gratitude Stone be delivered outside the UK?</h3>Yes, I am now shipping to USA and Europe as well as the UK.</li>
              <li><h3>Will my credit card information be secure?</h3>To protect you and your credit card information, I use PayPal as the payment processor, which encrypts (or encodes) sensitive information before it is sent over the Internet. Encryption ensures that no one can access or use your personal information.</li>
              <li><h3>Can my Gratitude Stone be delivered to a different address?</h3>Sorry, no, I am only shipping Gratitude Stones  to confirmed PayPal addresses only.</li>
              <li><h3>If I order a Gratitude Stone today, when should I expect it to arrive?</h3>Gratitude Stones are processed within 48 hours of being ordered and should be delivered within 3 to 5 working/business days  in the UK, and upto 14 days for USA and Europe, but they should arive no later than 28 days.</li>
              <li><h3>How is my Gratitude Stone shipped?</h3>All Gratitude Stones are shipped via UK, Royal Mail.</li>
              <li><h3>Can I return my Gratitude Stone?</h3>Due to the Gratitude Stones being free, I am not accepting any returns.</li>
            </ul>
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