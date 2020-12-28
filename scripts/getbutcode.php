<?php require_once('dbc.php'); ?>
<?php
if(isset($_GET["id"])){
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  $queryGstones = "SELECT * FROM tbl_gStones WHERE tbl_id=".$_GET["id"];
  $Gstones = mysql_query($queryGstones, $Wisdom_Mcr) or die(mysql_error());
  $row_Gstones = mysql_fetch_assoc($Gstones);
  $totalRows_Gstones = mysql_num_rows($Gstones);
  
  switch ($_GET["country"]){
	case 1:
	$butcode = $row_Gstones["tbl_codeUK"];
	break;
	case 2:
	$butcode = $row_Gstones["tbl_codeEU"];
	break;
	case 3:
	$butcode = $row_Gstones["tbl_codeUS"];
	break;
  }
  mysql_free_result($Gstones);
  echo $butcode;
}
?>