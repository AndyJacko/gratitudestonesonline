<!doctype html>
<?php require_once('scripts/dbc.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$queryGstones = "SELECT * FROM tbl_gStones WHERE tbl_isActive = 1 ORDER BY tbl_id ASC";
$Gstones = mysql_query($queryGstones, $Wisdom_Mcr) or die(mysql_error());
$row_Gstones = mysql_fetch_assoc($Gstones);
$totalRows_Gstones = mysql_num_rows($Gstones);

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
<title>FREE Gratitude Stones: The Entire Collection</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="description" content="A FREE Gratitude Stone can help remind you when to be grateful. Being grateful uses the law of attraction to bring you more things to be grateful for.">
<meta name="keywords" content="free gratitude stones, how to be grateful, when to be grateful, the law of attraction, the secret">
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
          <section id="allstones">  
            <h1>The Entire Range Of Free Gratitude Stones</h1>
            <br>
            <p>You are now viewing the entire range of gratitude stones.&nbsp; I add new stones on a regular basis, whenever one of the existing stones goes off to it's new owner.&nbsp; Be sure to check back often to find the perfect Gratitude Stone for yourself or as a gift for a friend.</p>
            <div id="allstonescenter">
			  <h3 class="aligncenter">All Gratitude Stones Are FREE</h3>
			  <?php do { ?>
              <div class="gstones"> 
                <a href="/iwantthisgratitudestone.php?id=<?php echo $row_Gstones['tbl_id'] ?>"><img class="gstonesimg" src='/images/stones/thumb/<?php echo $row_Gstones['tbl_stoneImg'] ?>' ></a><button type="button" onClick="location.href='iwantthisgratitudestone.php?id=<?php echo $row_Gstones['tbl_id'] ?>'">PICK ME</button>
              </div>
              <?php } while ($row_Gstones = mysql_fetch_assoc($Gstones)); ?>
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
mysql_free_result($Gstones);
?>