<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
if (isset($_POST["Name"])) {
  $insertSQL = "INSERT INTO tbl_ads (ad_name,ad_image,ad_code,ad_active) VALUES ('".str_replace("'","&acute;",$_POST["Name"])."','".$_POST["Image"]."','".$_POST["Link"]."',".$_POST["Active"].")";
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  $Result1 = mysql_query($insertSQL, $Wisdom_Mcr) or die(mysql_error());
  
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
        <h1>Add New Product</h1>
        <br>
        <div id="formstyle" class="myform">
          <form id="form1" name="form1" method="post" action="">

          <label>Name<span class="small">Enter product name.</span></label>
          <input name="Name" type="text" id="Name" size="50">
          
          <label>Image<span class="small">Enter image URL.</span></label>
          <input name="Image" type="text" id="Image" size="50">
          
          <label>Link<span class="small">Enter link URL.</span></label>
          <input name="Link" type="text" id="Link" size="50">

          <label>Active<span class="small">Is the link active.</span></label>
          <select id="Active" name="Active">
            <option value="1">Yes</option>
            <option value="0">No</option>
          </select>

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