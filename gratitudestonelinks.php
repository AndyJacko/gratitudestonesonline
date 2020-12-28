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
<title>Useful Personal Development Resources</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="description" content="Links to some of my favourite personal development and law of attraction websites.">
<meta name="keywords" content="goal setting, personal development, law of attraction, the secret, rhonda byrne">
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
          <section id="links"> 
            <h1>Useful Personal Development Resources</h1>
            <br>
            <p>Here are some of my favourite websites. I hope you find them useful.</p>
            <br>
            <h3>Law Of Attraction Resources</h3>
            <div class="linkcols">
              <ul>
                <li><a href="http://www.thesecret.tv/" target="_blank">The Secret</a></li>
                <li><a href="http://en.wikipedia.org/wiki/Law_of_Attraction" target="_blank">Law Of Attraction (wiki)</a></li>
                <li><a href="http://lotusessence.com/" target="_blank">Lotus Essence (blog)</a></li>
              </ul>
            </div>
            <br>
            <h3>Personal Development Resources</h3>
            <div class="linkcols">
              <ul>
                <li><a href="http://bobproctor.com/" target="_blank">Bob Proctor</a></li>
                <li><a href="http://www.drwaynedyer.com/" target="_blank">Dr. Wayne Dyer</a></li>
                <li><a href="http://deepakchopra.com/" target="_blank">Deepak Chopra</a></li>
                <li><a href="http://www.jackcanfield.com/" target="_blank">Jack Canfield</a></li>
                <li><a href="http://www.agapelive.com/index.php?page=3" target="_blank">Rev. Michael Beckwith</a></li>
                <li><a href="http://www.abraham-hicks.com" target="_blank">Abraham-Hicks</a></li>
                <li><a href="http://www.mrfire.com/" target="_blank">Dr. Joe Vitale</a></li>
                <li><a href="http://www.drdemartini.com/" target="_blank">Dr. Jonh Demartini</a></li>
              </ul>
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