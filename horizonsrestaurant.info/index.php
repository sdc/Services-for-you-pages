<?php require_once("includes/connection.php"); ?>
<?php require_once("../assets/includes/functions.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<?php require_once("../assets/includes/head.php"); ?>

<?php 
  if (empty($result['body_background_image'])) {
    echo '<body>';
  } else {
    echo '<body style="background-image: url(\'images/' . $result['body_background_image'] .'\');">';
  }
?>
  
<div id="wrapper" style="width:749px; height:198px;"><!-- Custom Width for Horizons Page -->
  <div id="header" style="height:198px;"><!-- Custom Height for Horizons Page -->
      <!-- Not required for Horizons page
      <div id="logo">
        <a href="<?php echo $result['logo_link']; ?>">
          <img src="images/logo.png" alt="<?php echo $result['logo_alt']; ?>" title="<?php echo $result['logo_title']; ?>"></a>
      </div>
      -->
      <div id="email">
        <a href="<?php echo $result['logo_link']; ?>">
          <a href="mailto:<?php echo $result['email_url']; ?>"><?php echo $result['email_text']; ?></a>
      </div>
    <div id="nav" class="horizons" style="width:749px; height: 40px;"><!-- Custom Width &amp; height for Horizons Page -->
      <ul style="margin: 0 0 0 76px">
        <?php
        // for ($j=0; $j <=count($url)-1; $j++) {
        //  echo '<li><a href="' . $url[$j] . '">' . $url_title[$j] . '</a> </li>';
        // }
        ?>
        <li><a href="<?php echo $result['link_one_url']; ?>"><?php echo $result['link_one_title']; ?></a></li>
        <li><a href="<?php echo $result['link_two_url']; ?>"><?php echo $result['link_two_title']; ?></a></li>
        <li><a href="<?php echo $result['link_three_url']; ?>"><?php echo $result['link_three_title']; ?></a></li>
        <li><a href="<?php echo $result['link_four_url']; ?>"><?php echo $result['link_four_title']; ?></a></li>
      </ul>
    </div>
  </div>
  <div id="slideshow" style="width:749px;">
    <div id="slides">
      <?php
        $slide = $result['slide_number'];
        for ($s=1; $s <= $slide; $s++) {
          echo '<img src="images/slideshow/' . $s . '.jpg" "alt="slide' . $s .'" />';
         }
        ?>
    </div>
  </div>
  <div id="main_content" style="width:749px;">  
    <div class="left" style="width:300px;margin: 30px 0 0 77px;">
      <h1 style="font-family:<?php echo $result['google_font']; ?>; color:#<?php echo $result['h1_color']; ?>;font-size:<?php echo $result['h1_font_size']; ?>em"><?php echo $result['main_content_header']; ?></h1>
      <?php echo $result['main_content_text']; ?>
      <a href="<?php echo $result['main_content_readmore_url']; ?>"><?php echo $result['main_content_readmore_title']; ?></a>
      
    </div>
    <div class="right" style="width:282px; margin: 30px 0 0 90px;">
      <h1 style="font-family:<?php echo $result['google_font']; ?>; color:#<?php echo $result['h1_color']; ?>;font-size:<?php echo $result['h1_font_size']; ?>em"><?php echo $result['latest_news_header']; ?></h1>
      <div style="">
        <script src="http://widgets.twimg.com/j/2/widget.js"></script>
          <script>
            new TWTR.Widget({
              version: 2,
              type: 'profile',
              rpp: 4,
              interval: 6000,
              width: 250,
              height: 180,
              theme: {
                shell: {
                  background: '#<?php echo $result['theme_background_color']; ?>',
                  color: '#<?php echo $result['theme_font_color']; ?>'
                },
                tweets: {
                  background: '#<?php echo $result['tweet_background_color']; ?>',
                  color: '#<?php echo $result['tweet_font_color']; ?>',
                  links: '#<?php echo $result['twiter_link_color']; ?>'
                }
              },
              features: {
                scrollbar: true,
                loop: false,
                live: false,
                hashtags: true,
                timestamp: true,
                avatars: false,
                behavior: 'list'
              }
            }).render().setUser('<?php echo $result['twitter_user']; ?>').start();
        </script>
      </div>
    </div>
  </div>
  <div id="footer" style="width:749px; height:62px;">
    <div id="footer_image" style="width: 45px; margin:10px 0pt 0pt 75px;">
      <?php echo '<img src="images/' . $result['footer_image'] .'" />' ?>
    </div>
    <div id="footer_content" style="width: 579px; text-align:left;">
      <?php echo $result['footer_text']; ?>
    </div>
    </div>
  </div>
</div>
</body>

</html> 
