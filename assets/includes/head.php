<!DOCTYPE html>
<html>
<head>

<?php require_once("includes/connection.php"); ?>
<?php require_once("../assets/includes/functions.php"); ?>
<?php 
  $ip=$_SERVER['REMOTE_ADDR'];
  if ($ip == '127.0.0.1') {
    $file_link = "../assets";
  } else {
    $file_link = "http://sdc-servicesforyou/s4u-pages/current/assets";
  }  
?>

<title><?php echo $result['page_title']; ?></title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $result['meta_description']; ?>" />
<link rel="icon" type="image/png" href="<?php echo $file_link; ?>/images/favicon.ico" />
<link rel="stylesheet" href="http://blank-css-template.googlecode.com/svn-history/r1/files/template/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $file_link; ?>/css/layout.css" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $result['google_font']; ?>" /> 
<script src="<?php echo $file_link; ?>/js/slideshow.js" type="text/javascript"></script>
<meta name="google-site-verification" content="<?php echo $result['webmaster_verification']; ?>" />

<!-- CSS values set from Admin system -->
<?php require_once("stylesheet.php"); ?>  

</head>
