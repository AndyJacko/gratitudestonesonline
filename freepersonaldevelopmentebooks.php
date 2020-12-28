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
<title>Gratitude Stones Online | The Law Of Attraction | The Secret</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="description" content="Sign up for free personal development eBooks, articles, quotes and more to help you achieve whatever you want in life.">
<meta name="keywords" content="how to personal development, how to positive thinking, how to positive attitude, how to become successful">
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
        <section id="freeebooks">
          <h1>Free Personal Development eBooks</h1>
          <br>
          <p>Here are some amazing, FREE eBooks for you to enjoy.&nbsp; I have personally read each one and can recommend them to anyone who wants to succeed in life.&nbsp; Without reading <b>The Science Of Getting Rich, You Were Born Rich</b> and <b>Think And Grow Rich</b> myself, I doubt very much I would be in the same &quot;place&quot; as I am now.&nbsp; </p>
          <p>If you have heard of <i>The Secret</i>, you will know that Rhonda Byrne was given a little book which inspired her to write her book and to make The Secret movie.&nbsp; The little book she was given was <b>The Science Of Getting Rich</b>. Everyone should read this book.</p>
          <p>Please download the eBooks and if you have a friend who would also benefit from them, feel free to pass them on.</p>
          <div id="ebookscontainer">
            <div class="ebook"><img src="/images/covers/scienceofgettingrich.jpg" alt="The Science Of Getting Rich"><br><button type="button" onClick="window.open('/ebooks/ScienceOfGettingRich.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/thinkandgrowrich.jpg" alt="Think And Grow Rich"><br><button type="button" onClick="window.open('/ebooks/ThinkAndGrowRich.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/youwerebornrich.jpg" alt="You Were Born Rich"><br><button type="button" onClick="window.open('/ebooks/YouWereBornRich.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/lawofattractioninaction.jpg" alt="The Law Of Attraction In Action"><br><button type="button" onClick="window.open('/ebooks/TheLawOfAttractionInAction.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/awesomesecret.jpg" alt="Awesome Secret"><br><button type="button" onClick="window.open('/ebooks/AwesomeSecret.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/acresofdiamonds.jpg" alt="Acres Of Diamonds"><br><button type="button" onClick="window.open('/ebooks/AcresOfDiamonds.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/asamanthinketh.jpg" alt="As A Man Thinketh"><br><button type="button" onClick="window.open('/ebooks/AsAManThinketh.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/nlpinbusinessandinlife.jpg" alt="NLP In Business And In Life"><br><button type="button" onClick="window.open('/ebooks/NLP.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/moneyandbeliefs.jpg" alt="Money &amp; Beliefs"><br><button type="button" onClick="window.open('/ebooks/Money&amp;Beliefs.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/7keystosuccess.jpg" alt="7 Keys To Success"><br><button type="button" onClick="window.open('/ebooks/7KeysToSuccess.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/stopprocrastinationnow.jpg" alt="Stop Procrastinating Now"><br><button type="button" onClick="window.open('/ebooks/StopProcrastinationNow.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/choosetobehappy.jpg" alt="Choose To Be Happy"><br><button type="button" onClick="window.open('/ebooks/ChooseToBeHappy.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/richestmaninbabylon.jpg" alt="Richest Man In Babylon"><br><button type="button" onClick="window.open('/ebooks/RichestManInBabylon.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/unshakableselfconfidence.jpg" alt="Unshakable Self Confidence"><br><button type="button" onClick="window.open('/ebooks/SelfConfidence.pdf')">DOWNLOAD</button></div>
            <div class="ebook"><img src="/images/covers/masterkeysystem.jpg" alt="The Master Key System"><br><button type="button" onClick="window.open('/ebooks/TheMasterKeySystem.pdf')">DOWNLOAD</button></div>
          </div>
          <br>
          <p>In order to view the  eBooks you will need to have Adobe Reader installed. If you do not currently have it installed, you can download it free from <a href="http://get.adobe.com/uk/reader/" target="_blank">here</a>.</p>
          <p>Once you have Adobe Reader installed, click the "DOWNLOAD" button and click the "Save" icon to save them to your computer.</p>
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