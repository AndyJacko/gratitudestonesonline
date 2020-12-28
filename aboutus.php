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
<title>The History Behind Gratitude Stones Online</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="description" content="How having an attitude of graditude and the law of attraction taught me how to be positive and improve my life.">
<meta name="keywords" content="what is the secret, attitude of gratitude, positive thinking, how to be positive, what is happiness">
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
          <section id="history">
            <h1>A Little Bit Of History</h1>
            <br>
            <p><img src="/images/andyjacko.jpg" alt="Andy Jacko" name="andyjackophoto" align="left" id="andyjackophoto">My name is Andy Jacko, and I began this website primarily to allow other <u>Law Of Attraction</u> followers to reap the benefits of being grateful for  all the things in their lives, and to enable them to have a <i>&quot;trigger&quot;</i> to remind them when to show gratitude.</p>
            <p>I was not always a very positive person and for a long time plodded my way through life in the best way I could. This all changed the day a friend told me about a new movie called <strong>&quot;The Secret&quot;</strong>. From that day I have been studying and applying The Law Of Attraction and my life just keeps on getting better and better.</p>
            <p>The process of cultivating gratitude and being grateful for the things I already had was an alien idea to me at first, but soon I learned that the more grateful I am for the things which I already have, and being grateful for things that I want, brings forth more things for me to be grateful for.</p>
            <p>I have personally  used my own gratitude stone for roughly 4 years, since watching <strong>&quot;The Secret&quot;</strong>, and I am positive proof that an&nbsp;<i>&quot;Attitude Of Gratitude&quot;</i> certainly does bring forth all the things which you desire.</p>
            <p>Every <strong>gratitude stone</strong> on this website has been personally collected and selected by me whilst going about my daily life, whether it be walking along a canal, visiting the beach on holiday, or simply while I am out walking my dog.</p>
            <p>I also carry the stones around in my hand and pass <strong>&quot;positive energy&quot;</strong> into them, in the hope that some of this positive energy will be transfered to the stone's new owner, and vitalise their lives in the same way my gratitude stone does for me.</p>
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