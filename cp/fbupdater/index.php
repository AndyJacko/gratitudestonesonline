<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$query_FBUpdate = "SELECT * FROM tbl_fbupdates ORDER BY fb_used,tbl_id ASC";
$FBUpdate = mysql_query($query_FBUpdate, $Wisdom_Mcr) or die(mysql_error());
$row_FBUpdate = mysql_fetch_assoc($FBUpdate);
$totalRows_FBUpdate = mysql_num_rows($FBUpdate);

$query_Used = "SELECT tbl_id FROM tbl_fbupdates WHERE fb_used=1";
$Used = mysql_query($query_Used, $Wisdom_Mcr) or die(mysql_error());
$row_Used = mysql_fetch_assoc($Used);
$totalRows_Used = mysql_num_rows($Used);
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
        <h1>FB Updates Manager</h1>
        <br>
        <a href="reset.php">Reset Updates</a>&nbsp;&nbsp;&nbsp;<a href="send.php">Send Update To FB</a>&nbsp;&nbsp;&nbsp;<a href="add.php">Add New FB Update</a>&nbsp;&nbsp;&nbsp;Total Updates: <?php echo $totalRows_FBUpdate; ?>&nbsp;&nbsp;&nbsp;Sent: <?php echo $totalRows_Used; ?>&nbsp;&nbsp;&nbsp;Unsent: <?php echo $totalRows_FBUpdate - $totalRows_Used; ?>
        <br><br>
        <?php if($_GET["msg"] == 1) { echo "<p class='msg'>FB Update Edited</p>"; } ?>
        <?php if($_GET["msg"] == 2) { echo "<p class='msg'>FB Update Added</p>"; } ?>
        <?php if($_GET["msg"] == 3) { echo "<p class='msg'>FB Update Deleted</p>"; } ?>
        <?php if($_GET["msg"] == 4) { echo "<p class='msg'>FB Updates Reset</p>"; } ?>
        <?php if($_GET["msg"] == 5) { echo "<p class='msg'>FB Update Posted</p>"; } ?>
        <?php do{ ?>
        <div class="<?php if ($row_FBUpdate["fb_used"] == 1) { echo "update2"; } else { echo "update"; } ?>"><?php echo $row_FBUpdate["tbl_id"]; ?>: <a href="edit.php?tbl_id=<?php echo $row_FBUpdate["tbl_id"]; ?>"><?php echo substr($row_FBUpdate["fb_update"],0,60); ?></a></div>
        <?php } while($row_FBUpdate = mysql_fetch_assoc($FBUpdate)); ?>
      </section>
    <!-- InstanceEndEditable --></div>
  </div>
  <div id="footer"><?php require("../../scripts/design/footer.php"); ?></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Used);
mysql_free_result($FBUpdate);
?>