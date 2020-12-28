<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$queryFBUpdate = "SELECT *,rand() AS random_row FROM tbl_fbupdates WHERE fb_used=0 ORDER BY ".random_row." ASC LIMIT 1";
$FBUpdate = mysql_query($queryFBUpdate, $Wisdom_Mcr) or die(mysql_error());
$row_FBUpdate = mysql_fetch_assoc($FBUpdate);
$totalRows_FBUpdate = mysql_num_rows($FBUpdate);

$updateSQL = "UPDATE tbl_fbupdates SET fb_used=1 WHERE tbl_id=".$row_FBUpdate["tbl_id"];
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$Result1 = mysql_query($updateSQL, $Wisdom_Mcr) or die(mysql_error());


$to = "";
$subject = $row_FBUpdate["fb_update"];
$message = "";
$from = "fbupdate@gratitudestonesonline.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);

mysql_free_result($FBUpdate);

header("location:index.php?msg=5");
?>