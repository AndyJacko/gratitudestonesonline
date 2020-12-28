<div id="adsBox">
  <div id="adsContent">
   <ul>
   <?php do{ ?>
     <li>
       <a href="<?php echo $row_Ads["ad_code"]; ?>" target="_blank"><img src="<?php echo $row_Ads["ad_image"]; ?>"></a>
       <br>
       <a href="<?php echo $row_Ads["ad_code"]; ?>" target="_blank"><?php echo $row_Ads["ad_name"]; ?></a>
     </li>
   <?php } while($row_Ads = mysql_fetch_assoc($Ads)); ?>
   </ul>
  </div>
</div>
