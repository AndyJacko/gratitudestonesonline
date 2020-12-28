<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$query_Ads = "SELECT * FROM tbl_ads WHERE tbl_id=".$_GET["tbl_id"];
$Ads = mysql_query($query_Ads, $Wisdom_Mcr) or die(mysql_error());
$row_Ads = mysql_fetch_assoc($Ads);
$totalRows_Ads = mysql_num_rows($Ads);

if (isset($_POST["Name"])) {
  $insertSQL = "UPDATE tbl_ads SET ad_name='".str_replace("'","&acute;",$_POST["Name"])."',ad_image='".$_POST["Image"]."',ad_code='".$_POST["Link"]."',ad_active=".$_POST["Active"]." WHERE tbl_id=".$_POST["tbl_id"];
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  $Result1 = mysql_query($insertSQL, $Wisdom_Mcr) or die(mysql_error());
  
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
        <h1>Ad Manager</h1>
        <br>
        <a href="delete.php?tbl_id=<?php echo $row_Ads["tbl_id"]; ?>">Delete Ad</a>
        <br><br>
        <div id="formstyle" class="myform">
          <div class="ad"><img src="<?php echo $row_Ads["ad_image"]; ?>"></div>
          <form id="form1" name="form1" method="post" action="">

          <label>Name<span class="small">Enter product name.</span></label>
          <input name="Name" type="text" id="Name" value="<?php echo $row_Ads["ad_name"]; ?>" size="50">
          
          <label>Image<span class="small">Enter image URL.</span></label>
          <input name="Image" type="text" id="Image" value="<?php echo $row_Ads["ad_image"]; ?>" size="50">
          
          <label>Link<span class="small">Enter link URL.</span></label>
          <input name="Link" type="text" id="Link" value="<?php echo $row_Ads["ad_code"]; ?>" size="50">

          <label>Active<span class="small">Is the link active.</span></label>
          <select id="Active" name="Active">
            <option value="1" <?php if ($row_Ads["ad_active"] == 1) { echo "selected"; } ?>>Yes</option>
            <option value="0" <?php if ($row_Ads["ad_active"] == 0) { echo "selected"; } ?>>No</option>
          </select>

          <input name="tbl_id" type="hidden" value="<?php echo $row_Ads["tbl_id"]; ?>">

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
mysql_free_result($Ads);
?>