<!doctype html>
<?php require_once('scripts/dbc.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$queryAds = "SELECT *,rand() AS random_row FROM tbl_ads WHERE ad_active = 1 ORDER BY ".random_row." ASC LIMIT 4";
$Ads = mysql_query($queryAds, $Wisdom_Mcr) or die(mysql_error());
$row_Ads = mysql_fetch_assoc($Ads);
$totalRows_Ads = mysql_num_rows($Ads);

mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$queryGstones = "SELECT *,rand() AS random_row FROM tbl_gStones WHERE tbl_isActive = 1 ORDER BY ".random_row." ASC LIMIT 10";
$Gstones = mysql_query($queryGstones, $Wisdom_Mcr) or die(mysql_error());
$row_Gstones = mysql_fetch_assoc($Gstones);
$totalRows_Gstones = mysql_num_rows($Gstones);
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
<title>Free Gratitude Stones | The Law Of Attraction | The Secret</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="description" content="A FREE Gratitude Stone will help you work with the Law Of Attraction to achieve all that you desire in life.">
<meta name="keywords" content="the law of attraction, the secret rhonda byrne, what is gratitude, thankful quotes, gratitude stones">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="7 days">
<meta name="alexa" content="100">
<meta name="serps" content="1, 2, 3, 4, 10, 11, 12, ATF">
<meta name="google-site-verification" content="">
<meta name="y_key" content="">
<meta name="msvalidate.01" content="">
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
          <section id="homepage">
            <h1>Empower Your Life With A Free Gratitude Stone</h1>
            <br>
            <p>A <strong>Free Gratitude Stone</strong> is a small stone that you can carry around with you in your pocket or purse, and each time you reach into your pocket or purse for something and touch your Gratitude Stone it can act as a reminder for you to be grateful for something in your life, or something which you wish to attract into your life.</p>
            <p>As the Law Of Attraction goes to work for you it will bring you more to be grateful for by using the fundamental principle of the Law Of Attraction, which states that like forces <strong>always</strong> attract each other.</p>
            <p>You have probably reached this website some time after learning about &quot;<b>The Secret</b>&quot; and are looking for a trigger to help remind you to be grateful for all the good things in your life.&nbsp; Having an <i>Attitude of Gratitude</i>, combined with the <i>Law Of Attraction</i> will help you to achieve all the things in life that you desire.</p>
            <div id="stonescontainer">
              <p class="aligncenter">You are currently viewing 10 random Gratitude Stones, if you would like to view the entire range, please <a href="allgratitudestones.php">click here</a>.</p>
              <h3 class="aligncenter">All Gratitude Stones Are FREE</h3>
			  <?php do { ?>
              <div class="gstones">
                <a href="/iwantthisgratitudestone.php?id=<?php echo $row_Gstones['tbl_id'] ?>"><img class="gstonesimg" src='/images/stones/thumb/<?php echo $row_Gstones['tbl_stoneImg'] ?>' ></a><button type="button" onClick="location.href='iwantthisgratitudestone.php?id=<?php echo $row_Gstones['tbl_id'] ?>'">PICK ME</button>
              </div>
              <?php } while ($row_Gstones = mysql_fetch_assoc($Gstones)); ?>
            </div>
            <br>
            <p>Being grateful for all the things you currently have, moves you into a closer vibrational match with who you really are, and when you achieve this vibrational match, you will attract all those things you wish to have towards you.&nbsp; Showing gratitude for the things you have yet to manifest will strengthen your vibrations towards those desires and increase the speed of which they will come to you.</p>
            <p>Each gratitude stone on this website has been personally selected by hand and &quot;<a href="aboutus.php">positively charged</a>&quot; to ensure that you get the most benefit from your gratitude stone.</p></td>
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
mysql_free_result($Gstones);
mysql_free_result($Ads);
?>