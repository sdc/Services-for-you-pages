<?php require_once("../assets/includes/head.php"); ?>
<?php 
  if ($result['offline'] == 1) {
    require_once("../assets/includes/offline.php");
  } else {
    require_once("../assets/includes/main_page.php");
  }
?>
 
