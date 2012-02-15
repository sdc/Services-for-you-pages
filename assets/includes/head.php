<?php require_once("includes/connection.php"); ?>
<?php require_once("../assets/includes/functions.php"); ?>
<?php 
  $ip=$_SERVER['REMOTE_ADDR'];
  if ($ip == '127.0.0.1') {
    $file_link = "../assets";
  } else {
    $file_link = "http://static.southdevon.ac.uk/s4u/current/assets";
  }  
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $result['page_title']; ?></title>
<meta name="description" content="<?php echo $result['meta_description']; ?>" />
<link rel="icon" type="image/png" href="<?php echo $file_link; ?>/images/favicon.ico" />
<link rel="stylesheet" href="http://blank-css-template.googlecode.com/svn-history/r1/files/template/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $file_link; ?>/css/layout.css" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<link href="http://fonts.googleapis.com/css?family=<?php echo $result['google_font_url']; ?>" rel="stylesheet" type="text/css"> 
<script src="<?php echo $file_link; ?>/js/slideshow.js" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $result['google_analytics']; ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php require_once("stylesheet.php"); ?>  

</head>
