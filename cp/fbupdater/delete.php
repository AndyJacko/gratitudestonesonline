<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
if(isset($_GET["tbl_id"])) {
  $deleteSQL = "DELETE FROM tbl_fbupdates WHERE tbl_id=".$_GET["tbl_id"];
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  $Result1 = mysql_query($deleteSQL, $Wisdom_Mcr) or die(mysql_error());
  
  header("location:index.php?msg=3");
}
?>