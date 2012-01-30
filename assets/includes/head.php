<?php require_once("includes/connection.php"); ?>
<?php require_once("../assets/includes/functions.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $result['page_title']; ?></title>
<meta name="description" content="<?php echo $result['meta_description']; ?>" />
<link rel="icon" type="image/png" href="http://static.southdevon.ac.uk/s4u/assets/images/favicon.ico" />
<link rel="stylesheet" href="http://blank-css-template.googlecode.com/svn-history/r1/files/template/css/reset.css" type="text/css" />
<link rel="stylesheet" href="http://static.southdevon.ac.uk/s4u/assets/css/layout.css" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<link href="http://fonts.googleapis.com/css?family=<?php echo $result['google_font_url']; ?>" rel="stylesheet" type="text/css"> 
<link href="http://fonts.googleapis.com/css?family=<?php echo $result['email_google_font']; ?>" rel="stylesheet" type="text/css"> 
<script src="http://static.southdevon.ac.uk/s4u/assets/js/slideshow.js" type="text/javascript"></script>
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
