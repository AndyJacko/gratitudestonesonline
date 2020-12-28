<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$query_Ads = "SELECT * FROM tbl_ads ORDER BY ad_active,tbl_id ASC";
$Ads = mysql_query($query_Ads, $Wisdom_Mcr) or die(mysql_error());
$row_Ads = mysql_fetch_assoc($Ads);
$totalRows_Ads = mysql_num_rows($Ads);
?>
<!DOCTYPE HTML>
<html><!-- InstanceBegin template="/Templates/controlpanel.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex, nofollow">
<title>Gratitude Stones Online: Controlpanel</title>
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div id="mainContainer">
  <div id="header"><?php require("../../scripts/design/cpheader.php"); ?></div>
  <div id="contentBox">
    <div id="contentContent"><!-- InstanceBeginEditable name="body" -->
      <section id="allstones">  
        <h1>Ad Manager</h1>
        <br>
        <a href="add.php">Add New Product</a>
        <br><br>
        <?php if($_GET["msg"] == 1) { echo "<p class='msg'>Ad Edited Succesfully</p>"; } ?>
        <?php if($_GET["msg"] == 2) { echo "<p class='msg'>Ad Added Succesfully</p>"; } ?>
        <?php if($_GET["msg"] == 3) { echo "<p class='msg'>Ad Deleted Succesfully</p>"; } ?>
        <?php do{ ?>
        <div class="<?php if ($row_Ads["ad_active"] == 1) { echo "ad"; } else { echo "ad2"; } ?>"><a href="edit.php?tbl_id=<?php echo $row_Ads["tbl_id"]; ?>"><img src="<?php echo $row_Ads["ad_image"]; ?>"></a></div>
        <?php } while($row_Ads = mysql_fetch_assoc($Ads)); ?>
      </section>
    <!-- InstanceEndEditable --></div>
  </div>
  <div id="footer"><?php require("../../scripts/design/footer.php"); ?></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Ads);
?>