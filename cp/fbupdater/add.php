<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
if (isset($_POST["Update1"])) {
  $insertSQL = "INSERT INTO tbl_fbupdates (fb_update,fb_used) VALUES ('".str_replace("'","&acute;",$_POST["Update1"])."',0)";
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  $Result1 = mysql_query($insertSQL, $Wisdom_Mcr) or die(mysql_error());
  if (isset($_POST["Update2"])) {
	$insertSQL = "INSERT INTO tbl_fbupdates (fb_update,fb_used) VALUES ('".str_replace("'","&acute;",$_POST["Update2"])."',0)";
	mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
	$Result1 = mysql_query($insertSQL, $Wisdom_Mcr) or die(mysql_error());
  }
  if (isset($_POST["Update3"])) {
	$insertSQL = "INSERT INTO tbl_fbupdates (fb_update,fb_used) VALUES ('".str_replace("'","&acute;",$_POST["Update3"])."',0)";
	mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
	$Result1 = mysql_query($insertSQL, $Wisdom_Mcr) or die(mysql_error());
  }
  if (isset($_POST["Update4"])) {
	$insertSQL = "INSERT INTO tbl_fbupdates (fb_update,fb_used) VALUES ('".str_replace("'","&acute;",$_POST["Update4"])."',0)";
	mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
	$Result1 = mysql_query($insertSQL, $Wisdom_Mcr) or die(mysql_error());
  }
  if (isset($_POST["Update5"])) {
	$insertSQL = "INSERT INTO tbl_fbupdates (fb_update,fb_used) VALUES ('".str_replace("'","&acute;",$_POST["Update5"])."',0)";
	mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
	$Result1 = mysql_query($insertSQL, $Wisdom_Mcr) or die(mysql_error());
  }
  header("location:index.php?msg=2");
}
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
        <h1>Add New FB Update</h1>
        <br>
        <div id="formstyle" class="myform">
          <form id="form1" name="form1" method="post" action="">

          <label>Update 1<span class="small">Enter Facebook status update 1.</span></label>
          <textarea name="Update1" cols="50" rows="5" id="Update1"></textarea>

          <label>Update 2<span class="small">Enter Facebook status update 2.</span></label>
          <textarea name="Update2" cols="50" rows="5" id="Update2"></textarea>

          <label>Update 3<span class="small">Enter Facebook status update 3.</span></label>
          <textarea name="Update3" cols="50" rows="5" id="Update3"></textarea>

          <label>Update 4<span class="small">Enter Facebook status update 4.</span></label>
          <textarea name="Update4" cols="50" rows="5" id="Update4"></textarea>

          <label>Update 5<span class="small">Enter Facebook status update 5.</span></label>
          <textarea name="Update5" cols="50" rows="5" id="Update5"></textarea>

          <button type="submit">ADD</button>
          <div class="spacer"></div>
          </form>
        </div>
      </section>
    <!-- InstanceEndEditable --></div>
  </div>
  <div id="footer"><?php require("../../scripts/design/footer.php"); ?></div>
</div>
</body>
<!-- InstanceEnd --></html>