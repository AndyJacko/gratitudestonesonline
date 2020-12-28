<?php require_once('../../scripts/dbc.php'); ?>
<?php require_once('../../scripts/cp/getvalstring.php'); ?>
<?php require_once('../../scripts/cp/authnlogout.php'); ?>
<?php
if (isset($_GET["id"]) || isset($_SESSION["id"])) {
  if(isset($_GET["id"])) { $_SESSION["id"] = $_GET["id"]; }
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  $query_RSStones = "SELECT * FROM tbl_gStones WHERE tbl_id=".$_SESSION["id"];
  $RSStones = mysql_query($query_RSStones, $Wisdom_Mcr) or die(mysql_error());
  $row_RSStones = mysql_fetch_assoc($RSStones);
  $totalRows_RSStones = mysql_num_rows($RSStones);
  $_SESSION["pic"] = $row_RSStones['tbl_stoneImg'];
  mysql_free_result($RSStones);
} else {
  header("location:index.php");
}
?>
<?php
//Constants
//You can alter these options
$upload_dir = "../../images/"; 		// The directory for the images to be saved in
$upload_path = $upload_dir."/";				// The path to where the image will be saved
$large_image_name = "resized_pic.jpg"; 		// New name of the large image
$thumb_image_name = "thumbnail_pic.jpg"; 	// New name of the thumbnail image
$max_file = "5242880"; 					    // Approx 1MB
$max_width = "240";						    // Max width allowed for the large image
$thumb_width = "120";						// Width of thumbnail image
$thumb_height = "120";						// Height of thumbnail image
//Image functions
//You do not need to alter these functions
function resizeImage($image,$width,$height,$scale) {
  $newImageWidth = ceil($width * $scale);
  $newImageHeight = ceil($height * $scale);
  $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
  $source = imagecreatefromjpeg($image);
  imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
  imagejpeg($newImage,$image,90);
  chmod($image, 0777);
  return $image;
}
//You do not need to alter these functions
function resizeThumbnailImage($thumb_image_name, $image, $width, $height, $start_width, $start_height, $scale){
  $newImageWidth = ceil($width * $scale);
  $newImageHeight = ceil($height * $scale);
  $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
  $source = imagecreatefromjpeg($image);
  imagecopyresampled($newImage,$source,0,0,$start_width,$start_height,$newImageWidth,$newImageHeight,$width,$height);
  imagejpeg($newImage,$thumb_image_name,90);
  chmod($thumb_image_name, 0777);
  return $thumb_image_name;
}
//You do not need to alter these functions
function getHeight($image) {
  $sizes = getimagesize($image);
  $height = $sizes[1];
  return $height;
}
//You do not need to alter these functions
function getWidth($image) {
  $sizes = getimagesize($image);
  $width = $sizes[0];
  return $width;
}
//Image Locations
$large_image_location = $upload_path.$large_image_name;
$thumb_image_location = $upload_path.$thumb_image_name;
//Create the upload directory with the right permissions if it doesn't exist
if(!is_dir($upload_dir)){
  mkdir($upload_dir, 0777);
  chmod($upload_dir, 0777);
}
//Check to see if any images with the same names already exist
if (file_exists($large_image_location)){
  if(file_exists($thumb_image_location)){
	$thumb_photo_exists = "<img src=\"".$upload_path.$thumb_image_name."\" alt=\"Thumbnail Image\"/>";
  }else{
	$thumb_photo_exists = "";
  }
  $large_photo_exists = "<img src=\"".$upload_path.$large_image_name."\" alt=\"Large Image\"/>";
} else {
  $large_photo_exists = "";
  $thumb_photo_exists = "";
}

if (isset($_POST["upload"])) { 
  //Get the file information
  $userfile_name = $_FILES['image']['name'];
  $userfile_tmp = $_FILES['image']['tmp_name'];
  $userfile_size = $_FILES['image']['size'];
  $filename = basename($_FILES['image']['name']);
  $file_ext = substr($filename, strrpos($filename, '.') + 1);
  //Only process if the file is a JPG and below the allowed limit
  if((!empty($_FILES["image"])) && ($_FILES['image']['error'] == 0)) {
	if (($file_ext!="jpg") && ($userfile_size > $max_file)) {
	  $error= "ONLY jpeg images under 5MB are accepted for upload";
	}
  }else{
	$error= "Select a jpeg image for upload";
  }
  //Everything is ok, so we can upload the image.
  if (strlen($error)==0){
	if (isset($_FILES['image']['name'])){
	  move_uploaded_file($userfile_tmp, $large_image_location);
	  chmod($large_image_location, 0777);
	  
	  $width = getWidth($large_image_location);
	  $height = getHeight($large_image_location);
	  //Scale the image if it is greater than the width set above
	  if ($width > $max_width){
		$scale = $max_width/$width;
		$uploaded = resizeImage($large_image_location,$width,$height,$scale);
	  }else{
		$scale = 1;
		$uploaded = resizeImage($large_image_location,$width,$height,$scale);
	  }
	  //Delete the thumbnail file so the user can create a new one
	  if (file_exists($thumb_image_location)) {
		unlink($thumb_image_location);
	  }
	}
	//Refresh the page to show the new uploaded image
	header("location:".$_SERVER["PHP_SELF"]);
	exit();
  }
}

if (isset($_POST["upload_thumbnail"]) && strlen($large_photo_exists)>0) {
  //Get the new coordinates to crop the image.
  $x1 = $_POST["x1"];
  $y1 = $_POST["y1"];
  $x2 = $_POST["x2"];
  $y2 = $_POST["y2"];
  $w = $_POST["w"];
  $h = $_POST["h"];
  //Scale the image to the thumb_width set above
  $scale = $thumb_width/$w;
  $cropped = resizeThumbnailImage($thumb_image_location, $large_image_location,$w,$h,$x1,$y1,$scale);
  //Reload the page again to view the thumbnail
  header("location:".$_SERVER["PHP_SELF"]);
  exit();
}

if(strlen($large_photo_exists)>0 && strlen($thumb_photo_exists)>0){
  $usrCode = mt_rand() ."". mt_rand();
  $file = '../../images/resized_pic.jpg';
  $newfile = '../../images/stones/main/'.$usrCode.".jpg";
  
  if (!copy($file, $newfile)) {
	echo "failed to copy $file...\n";
  }
  $file = '../../images/thumbnail_pic.jpg';
  $newfile = '../../images/stones/thumb/'.$usrCode.".jpg";
  
  if (!copy($file, $newfile)) {
	echo "failed to copy $file...\n";
  }
  unlink("../../images/resized_pic.jpg");
  unlink("../../images/thumbnail_pic.jpg");
  
  $insertSQL = "UPDATE tbl_gStones SET tbl_stoneImg ='".$usrCode.".jpg"."', tbl_stoneimg_thumb='".$usrCode.".jpg"."', tbl_isActive=1 WHERE tbl_id=".$_SESSION["id"];
  mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
  $Result1 = mysql_query($insertSQL, $Wisdom_Mcr) or die(mysql_error());
  
  unlink("../../images/stones/main/".$_SESSION["pic"]);
  unlink("../../images/stones/thumb/".$_SESSION["pic"]);
  
  $to = "";
  $subject = "A new Gratitude Stone has just been added: http://gratitudestonesonline.com/allgratitudestones.php";
  $message = "";
  $from = "new@gratitudestonesonline.com";
  $headers = "From:" . $from;
  mail($to,$subject,$message,$headers);
  
  header("location:index.php");
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
<script type="text/javascript" src="/scripts/cp/jquery-pack.js"></script>
<script type="text/javascript" src="/scripts/cp/jquery.imgareaselect-0.3.min.js"></script>
<!-- InstanceEndEditable -->
</head>

<body>
<div id="mainContainer">
  <div id="header"><?php require("../../scripts/design/cpheader.php"); ?></div>
  <div id="contentBox">
    <div id="contentContent"><!-- InstanceBeginEditable name="body" -->
  <?php
  //Only display the javacript if an image has been uploaded
  if(strlen($large_photo_exists)>0){
	$current_large_image_width = getWidth($large_image_location);
	$current_large_image_height = getHeight($large_image_location);?>
	<script type="text/javascript">
	function preview(img, selection) { 
	var scaleX = <?php echo $thumb_width;?> / selection.width; 
	var scaleY = <?php echo $thumb_height;?> / selection.height; 
	$('#thumbnail + div > img').css({ 
	  width: Math.round(scaleX * <?php echo $current_large_image_width;?>) + 'px', 
	  height: Math.round(scaleY * <?php echo $current_large_image_height;?>) + 'px',
	  marginLeft: '-' + Math.round(scaleX * selection.x1) + 'px', 
	  marginTop: '-' + Math.round(scaleY * selection.y1) + 'px' 
	});
	$('#x1').val(selection.x1);
	$('#y1').val(selection.y1);
	$('#x2').val(selection.x2);
	$('#y2').val(selection.y2);
	$('#w').val(selection.width);
	$('#h').val(selection.height);
	} 
	$(document).ready(function () { 
	  $('#save_thumb').click(function() {
		var x1 = $('#x1').val();
		var y1 = $('#y1').val();
		var x2 = $('#x2').val();
		var y2 = $('#y2').val();
		var w = $('#w').val();
		var h = $('#h').val();
		if(x1=="" || y1=="" || x2=="" || y2=="" || w=="" || h==""){
		  alert("You must make a selection first");
		  return false;
		}else{
		  return true;
		}
	  });
	}); 
	$(window).load(function () { 
	  $('#thumbnail').imgAreaSelect({ aspectRatio: '1:1', onSelectChange: preview }); 
	});
	</script>
  <?php }?>
  <h1>Edit Gratitude Stone</h1>
  <br><br>
  <div id="editstone">
  <?php
  //Display error message if there are any
  if(strlen($error)>0){
    echo "<ul><li><strong>Error!</strong></li><li>".$error."</li></ul>";
  }
  if(strlen($large_photo_exists)>0 && strlen($thumb_photo_exists)>0){
    echo "";
  }else{
	if(strlen($large_photo_exists)>0){?>
    <p class="aligncenter">Create Thumbnail</p>
	<div align="center">
	  <img src="<?php echo $upload_path.$large_image_name;?>" style="float: left; margin-right: 10px;" id="thumbnail" alt="Create Thumbnail" />
	  <div style="float:left; position:relative; overflow:hidden; width:<?php echo $thumb_width;?>px; height:<?php echo $thumb_height;?>px;">
		<img src="<?php echo $upload_path.$large_image_name;?>" style="position: relative;" alt="Thumbnail Preview" />
	  </div>
	  <br style="clear:both;"/>
      <br><br>
      <form name="thumbnail" action="<?php echo $_SERVER["../PHP_SELF"];?>" method="post">
		<input type="hidden" name="x1" value="" id="x1" />
		<input type="hidden" name="y1" value="" id="y1" />
		<input type="hidden" name="x2" value="" id="x2" />
		<input type="hidden" name="y2" value="" id="y2" />
		<input type="hidden" name="w" value="" id="w" />
		<input type="hidden" name="h" value="" id="h" />
		<button name="upload_thumbnail" id="save_thumb" type="submit">SAVE THUMB</button>
	  </form>
	</div>
    <br><br>
    <hr />
    <br><br>
	<?php } ?>
    <img class="<?php if ($row_RSStones['tbl_isActive'] == 1) { echo "gstonesimg"; } else { echo "gstonesimg2"; } ?>" src='/images/stones/thumb/<?php echo $row_RSStones['tbl_stoneImg'] ?>' >
	<br><br>
    <p class="aligncenter">Upload New Stone Photo</p><br>
	<form name="photo" enctype="multipart/form-data" action="<?php echo $_SERVER["../PHP_SELF"];?>" method="post">
	<strong>Photo:</strong>	<input type="file" name="image" size="30" /> <button type="submit" name="upload">UPLOAD</button>
  </form>
  <?php } ?>
  </div>
<!-- InstanceEndEditable --></div>
  </div>
  <div id="footer"><?php require("../../scripts/design/footer.php"); ?></div>
</div>
</body>
<!-- InstanceEnd --></html>
