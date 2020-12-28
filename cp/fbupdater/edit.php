<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$query_FBUpdate = "SELECT * FROM tbl_fbupdates WHERE tbl_id=".$_GET["tbl_id"];
$FBUpdate = mysql_query($query_FBUpdate, $Wisdom_Mcr) or die(mysql_error());
$row_FBUpdate = mysql_fetch_assoc($FBUpdate);
$totalRows_FBUpdate = mysql_num_rows($FBUpdate);

if (isset($_POST["Update"])) {
  $updateSQL = "UPDATE tbl_fbupdates SET fb_update='".str_replace("'","&acute;",$_POST["Update"])."',fb_used=".$_POST["Used"]." WHERE tbl_id=".$_POST["tbl_id"];
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  $Result1 = mysql_query($updateSQL, $Wisdom_Mcr) or die(mysql_error());
  
  header("location:index.php?msg=1");
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
        <h1>Edit FB Status</h1>
        <br><br>
        <div id="formstyle" class="myform">
          <form id="form1" name="form1" method="post" action="">

          <label>Update<span class="small">Edit Facebook status update.</span></label>
          <textarea name="Update" cols="50" rows="5" id="Update1"><?php echo $row_FBUpdate["fb_update"]; ?></textarea>

          <label>Used<span class="small">Has the update been used?</span></label>
          <select id="Used" name="Used">
            <option value="1" <?php if ($row_FBUpdate["fb_used"] == 1) { echo "selected"; } ?>>Yes</option>
            <option value="0" <?php if ($row_FBUpdate["fb_used"] == 0) { echo "selected"; } ?>>No</option>
          </select>

          <input name="tbl_id" type="hidden" value="<?php echo $row_FBUpdate["tbl_id"]; ?>">

          <button type="submit">UPDATE</button>
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
<?php
mysql_free_result($FBUpdate);
?>