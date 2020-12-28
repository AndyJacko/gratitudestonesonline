<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$query_RSStones = "SELECT * FROM tbl_gStones ORDER BY tbl_id ASC";
$RSStones = mysql_query($query_RSStones, $Wisdom_Mcr) or die(mysql_error());
$row_RSStones = mysql_fetch_assoc($RSStones);
$totalRows_RSStones = mysql_num_rows($RSStones);
?>
<!DOCTYPE HTML>
<html><!-- InstanceBegin template="/Templates/controlpanel.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex, nofollow">
<title>Gratitude Stones Online: Controlpanel</title>
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<script language="javascript" type="text/javascript" src="../../scripts/pengerzztattoos.js"></script>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="mainContainer">
  <div id="header"><?php require("../../scripts/design/cpheader.php"); ?></div>
  <div id="contentBox">
    <div id="contentContent"><!-- InstanceBeginEditable name="body" -->
        <section id="allstones">  
          <h1>Gratitude Stones Manager</h1>
          <br>
          <div id="allstonescenter">
          <?php do { ?>
          <div class="gstones">
            <img class="<?php if ($row_RSStones['tbl_isActive'] == 1) { echo "gstonesimg"; } else { echo "gstonesimg2"; } ?>" src='/images/stones/thumb/<?php echo $row_RSStones['tbl_stoneImg'] ?>' >
            <?php if ($row_RSStones['tbl_isActive'] == 1) { ?>
            <button type="button" onClick="location.href='edit.php?id=<?php echo $row_RSStones['tbl_id'] ?>'">EDIT&nbsp;<?php echo $row_RSStones['tbl_id'] ?></button>
            <?php } else { ?>
            <button type="button" class="button2" onClick="location.href='edit.php?id=<?php echo $row_RSStones['tbl_id'] ?>'">EDIT&nbsp;<?php echo $row_RSStones['tbl_id'] ?></button>
            <?php } ?>
          </div>
          <?php } while ($row_RSStones = mysql_fetch_assoc($RSStones)); ?>
          </div>
        </section>
    <!-- InstanceEndEditable --></div>
  </div>
  <div id="footer"><?php require("../../scripts/design/footer.php"); ?></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($RSStones);
?>