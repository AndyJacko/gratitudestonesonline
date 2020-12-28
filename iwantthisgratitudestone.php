<!doctype html>
<?php require_once('scripts/dbc.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$queryGstones = "SELECT * FROM tbl_gStones WHERE tbl_id=".$_GET["id"];
$Gstones = mysql_query($queryGstones, $Wisdom_Mcr) or die(mysql_error());
$row_Gstones = mysql_fetch_assoc($Gstones);
$totalRows_Gstones = mysql_num_rows($Gstones);

mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$queryCountries = "SELECT * FROM tbl_countries";
$Countries = mysql_query($queryCountries, $Wisdom_Mcr) or die(mysql_error());
$row_Countries = mysql_fetch_assoc($Countries);
$totalRows_Countries = mysql_num_rows($Countries);

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
<title>I Want This Gratitude Stone</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="robots" content="noindex,nofollow">
<script type="text/javascript" src="/scripts/gratitudestonesonline.js"></script>
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
        <section id="iwantthisgratitudestone">
          <h1>Your New Gratitude Stone</h1>
          <br>
          <p>This is the gratitude stone you have chosen. I hope you will be very happy together.</p>
          <br>
          <p class="aligncenter"><em><strong>Note: I am now shipping Gratitude Stones to USA and Europe as well as the UK.</strong></em></p>
          <div id="stonecart">
            <img class="gstonesimg" src='/images/stones/main/<?php echo $row_Gstones['tbl_stoneImg'] ?>' >
            <div id="priceinfo">
              <p><strong>Hi, I am your new gratitude stone. I can't wait to meet you in person.</strong></p>
              <br><br>
              <p>Price: <strong>FREE</strong></p>
              <p>P&P: 
              <select id="ppprice" name="ppprice" onChange="changeamount(<?php echo $row_Gstones['tbl_id']; ?>);">
                <?php do { ?>
                <option value="<?php echo $row_Countries['tbl_id']; ?>"><?php echo $row_Countries['country_name']; ?> - &pound;<?php echo number_format($row_Countries['country_cost'],2); ?></option>
                <?php } while($row_Countries = mysql_fetch_assoc($Countries)); ?>
              </select>
              </p>
              <br>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input id="ppbutton" type="hidden" name="hosted_button_id" value="<?php echo $row_Gstones['tbl_codeUK']; ?>">
                <button type="submit">GET ME NOW</button>
                <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
              </form>              
            </div>
          </div>
          <br><br>
          <p class="aligncenter">Payments are processed by PayPal.</p>
          <p class="aligncenter">Your Gratitude Stone will be delivered to your verified PayPal address.</p>
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
mysql_free_result($Gstones);
mysql_free_result($Countries);
?>