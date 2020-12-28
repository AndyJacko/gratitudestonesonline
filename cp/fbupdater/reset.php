<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$query_FBUpdate = "SELECT * FROM tbl_fbupdates";
$FBUpdate = mysql_query($query_FBUpdate, $Wisdom_Mcr) or die(mysql_error());
$row_FBUpdate = mysql_fetch_assoc($FBUpdate);
$totalRows_FBUpdate = mysql_num_rows($FBUpdate);

do {
  $updateSQL = "UPDATE tbl_fbupdates SET fb_used=0 WHERE tbl_id=".$row_FBUpdate["tbl_id"];
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  $Result1 = mysql_query($updateSQL, $Wisdom_Mcr) or die(mysql_error());
} while($row_FBUpdate = mysql_fetch_assoc($FBUpdate));

mysql_free_result($FBUpdate);

header("location:index.php?msg=4");
?>