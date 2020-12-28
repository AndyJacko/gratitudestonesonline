<?php require_once('../scripts/dbc.php'); ?>
<?php require_once('../scripts/cp/getvalstring.php'); ?>
<?php
mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$queryAds = "SELECT *,rand() AS random_row FROM tbl_ads WHERE ad_active = 1 ORDER BY ".random_row." ASC LIMIT 4";
$Ads = mysql_query($queryAds, $Wisdom_Mcr) or die(mysql_error());
$row_Ads = mysql_fetch_assoc($Ads);
$totalRows_Ads = mysql_num_rows($Ads);

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['Username'])) {
  $loginUsername=$_POST['Username'];
  $password=$_POST['Password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "/cp/stones";
  $MM_redirectLoginFailed = "/cp/index.php?s=1";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  
  $LoginRS__query=sprintf("SELECT tbl_user, tbl_pass FROM tbl_admin WHERE tbl_user=%s AND tbl_pass=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $Wisdom_Mcr) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!doctype html>
<html lang="en"><!-- InstanceBegin template="/Templates/userside.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<meta name="geo.region" content="GB-MAN">
<meta name="geo.placename" content="Manchester">
<meta name="geo.position" content="53.479251;-2.247926">
<meta name="ICBM" content="53.479251, -2.247926">
<meta property="og:title" content="FREE Gratitude Stones">
<meta property="og:type" content="website">
<meta property="og:url" content="http://gratitudestonesonline.com">
<meta property="og:image" content="http://gratitudestonesonline.com/images/fbpic.jpg">
<meta property="og:site_name" content="Gratitude Stones Online">
<meta property="og:description" content="A FREE Gratitude Stone will help you work with the Law Of Attraction to achieve all that you desire in life. Come and choose your own FREE Gratitude Stone today.">
<meta property="fb:admins" content="583886348">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gratitude Stones Online: Controlpanel</title>
<!-- InstanceEndEditable -->
<link href="/scripts/gratitudestonesonline.css" rel="stylesheet" type="text/css">
<!-- InstanceBeginEditable name="head" -->
<meta name="robots" content="noindex,nofollow">
<!-- InstanceEndEditable -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script> 
<script type="text/javascript" src="/scripts/nav/jquery.color.js"></script> 
<script type="text/javascript" src="/scripts/nav/jMenu.js"></script> 
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18016706-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div id="mainContainer">
  <div id="header"><?php require("../scripts/design/header.php"); ?></div>
  <div id="content">
    <div id="con" class="column">
      <div id="contentBox">
        <div id="contentContent"><!-- InstanceBeginEditable name="body" -->
          <section id="cplogin">
            <h1>Login To Controlpanel</h1>
            <br><br>
            <?php
			if (isset($_GET['s'])){
			  $popo = $_GET['s'];
			  if ($popo == 1){
				echo "<p class='aligncenter'><strong>Sorry, the details you entered were incorrect.</strong></p>";
			  }else{
				echo"";
			  }
			  if ($popo == 2){
				echo "<p class='aligncenter'><strong>To log back in, please re-enter your details.</strong></p>";
			  }else{
				echo"";
			  }
			  if ($popo == 3){
				echo "<p class='aligncenter'><strong>Sorry, you are not authorised to view that page unless you login first.</strong></p>";
			  }else{
				echo"";
			  }
			}
			?>
            <div id="formstyle" class="myform">
              <form id="form1" name="form1" method="post" action="<?php echo $loginFormAction; ?>">
  
              <label>Username<span class="small">Enter your username</span></label>
              <input name="Username" type="text" id="Username" size="50">
              
              <label>Password<span class="small">Enter your password</span></label>
              <input name="Password" type="password" id="Password" size="50">
              
              <?php if ($_GET['s'] != "1"){ echo "<button type='submit'>LOGIN</button>"; }else{ echo "<button type='submit'>RETRY</button>"; } ?>
              <div class="spacer"></div>
              </form>
            </div>
            <br><br>
            <p class="aligncenter">--- Unauthorised Access Is Not Permitted ---</p>  
          </section>
        <!-- InstanceEndEditable --></div>
      </div>
    </div>
    <div id="nav" class="column"><?php require("../scripts/design/nav.php"); ?></div>
    <div id="ads" class="column"><?php require("../scripts/design/sidebar.php"); ?></div>
    <br class="clearfix">
  </div>
  <div id="footer"><?php require("../scripts/design/footer.php"); ?></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($Ads);
?>