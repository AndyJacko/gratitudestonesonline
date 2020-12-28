<?php require_once('dbc.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$queryAds = "SELECT *,rand() AS random_row FROM tbl_ads WHERE ad_active = 1 ORDER BY ".random_row." ASC LIMIT 4";
$Ads = mysql_query($queryAds, $Wisdom_Mcr) or die(mysql_error());
$row_Ads = mysql_fetch_assoc($Ads);
$totalRows_Ads = mysql_num_rows($Ads);

$req = 'cmd=_notify-synch';

$tx_token = $_GET['tx'];
$auth_token = "";
$req .= "&tx=$tx_token&at=$auth_token";
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
$fp = fsockopen ('www.paypal.com', 80, $errno, $errstr, 30);
if (!$fp){
}else{
  fputs ($fp, $header . $req);
  $res = '';
  $headerdone = false;
  while (!feof($fp)){
    $line = fgets ($fp, 1024);
    if (strcmp($line, "\r\n") == 0){
      $headerdone = true;
    }else if ($headerdone){
      $res .= $line;
    }
  }
  $lines = explode("\n", $res);
  $keyarray = array();
  if (strcmp ($lines[0], "SUCCESS") == 0){
    for ($i=1; $i<count($lines);$i++){
      list($key,$val) = explode("=", $lines[$i]);
      $keyarray[urldecode($key)] = urldecode($val);
    }
	$paycomplete = $keyarray['payment_status'];
	$ppaccount = $keyarray['receiver_email'];
	$ppamount = $keyarray['mc_gross'];
	$errcde = 1;
	if($paycomplete == "Completed" && $ppaccount == "wisdom.mcr@gmail.com" && $ppamount == 2.50){
	  $errcde = 0;	
	}
	$firstname = $keyarray['first_name'];
	$lastname = $keyarray['last_name'];
	$itemnum = $keyarray['item_number'];
	
    $updateSQL = sprintf("UPDATE tbl_gStones SET tbl_isActive=0 WHERE tbl_id=$itemnum");
    mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
    $Result1 = mysql_query($updateSQL, $Wisdom_Mcr) or die(mysql_error());
  }else if (strcmp ($lines[0], "FAIL") == 0){$errcde = 1;}
}
fclose ($fp);
?>
<!doctype html>
<html lang="en"><!-- InstanceBegin template="/Templates/userside.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta name="geo.region" content="GB-MAN">
<meta name="geo.placename" content="Manchester">
<meta name="geo.position" content="53.479251;-2.247926">
<meta name="ICBM" content="53.479251, -2.247926">
<meta property="og:title" content="FREE Gratitude Stones">
<meta property="og:type" content="website">
<meta property="og:url" content="http://gratitudestonesonline.com">
<meta property="og:image" content="http://gratitudestonesonline.com/images/fbpic.jpg">
<meta property="og:site_name" content="Gratitude Stones Online">
<meta property="og:description" content="A FREE Gratitude Stone will help you work with the Law Of Attraction to achieve all that you desire in life. Come and choose your own FREE Gratitude Stone today.">
<meta property="fb:admins" content="583886348">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Thank You For Your Order</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="description" content="Your order has now been completed and your Gratitude Stone is being made ready for shipment." />
<meta name="keywords" content=""/>
<meta name="robots" content="noindex,nofollow" />
<!-- InstanceEndEditable -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script> 
<script type="text/javascript" src="/scripts/nav/jquery.color.js"></script> 
<script type="text/javascript" src="/scripts/nav/jMenu.js"></script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18016706-1']);
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
  <div id="header"><?php require("design/header.php"); ?></div>
  <div id="content">
    <div id="con" class="column">
      <div id="contentBox">
        <div id="contentContent"><!-- InstanceBeginEditable name="body" -->
          <?php 
		  if ($errcde == 1){
		  ?>	  
            <h1>OOPS!</h1>
            <p>It seems something wasn't quite right.</p>
            <p>Please log into your PayPal account at <a href='https://www.paypal.com' target="_blank">www.paypal.com</a> (will open in new window) and check your transaction history to confirm your payment was made.</p>
            <p>If you believe your transaction was sucessful, please <a href="/contactus.php">Get In Contact</a> and I will sort the whole thing out for you.</p>
            <p>&nbsp;</p>
          <?php 
		  }else{
		  ?>
          <?php
          mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
          $queryGstones = "SELECT * FROM tbl_gStones WHERE tbl_id = $itemnum";
          $Gstones = mysql_query($queryGstones, $Wisdom_Mcr) or die(mysql_error());
          $row_Gstones = mysql_fetch_assoc($Gstones);
          $totalRows_Gstones = mysql_num_rows($Gstones);
          ?>
          <h1>Your Gratitude Stone Is On It's Way</h1>
            <p>Thank you for ordering your Gratitude Stone.&nbsp; You can be sure to recieve it within the next few days.</p>
            <p align="center"><b>Your order details are as follows:</b></p>
            <table width="80%" border="0" align="center" cellpadding="2" cellspacing="2" class="stoneBorder">
              <tr>
                <td><?php echo ("Name: $firstname $lastname"); ?>&nbsp;</td>
                <td width="170" rowspan="4"><table width='170' border='0' cellpadding='0' cellspacing='0'>
                  <tr>
                    <td align='center' class='sbT' width='170' height='20'>&nbsp;</td>
                  </tr>
                  <tr>
                    <td align='center' class='sbM' width='170'><img src='/images/stones/thumb/<?php echo $row_Gstones['tbl_stoneImg'] ?>'></td>
                  </tr>
                  <tr>
                    <td align='center' class='sbB' width='170' height='43'><b>Your&nbsp;Stone</b></td>
                  </tr>
                  </table></td>
              </tr>
              <tr>
                <td><?php echo ("Item: Gratitude Stone"); ?></td>
              </tr>
              <tr>
                <td><?php echo ("Total Amount: £2.50 (inc. p&p)"); ?></td>
              </tr>
              <tr>
                <td class="ppTxt"><b>Note:</b> Your transaction has now been completed, and a receipt for your purchase has been emailed to you.&nbsp;You may also log into your account at <a href='https://www.paypal.com'>www.paypal.com</a> to view the full details of this transaction.</td>
              </tr>
          </table>
          <?php
			mysql_free_result($Gstones);
			?>
          <?php
		  }		  
		  ?>
        <!-- InstanceEndEditable --></div>
      </div>
    </div>
    <div id="nav" class="column"><?php require("design/nav.php"); ?></div>
    <div id="ads" class="column"><?php require("design/sidebar.php"); ?></div>
    <br class="clearfix">
  </div>
  <div id="footer"><?php require("design/footer.php"); ?></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php 
mysql_free_result($Ads); 
?>