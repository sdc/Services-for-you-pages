<?php 
  if (empty($result['body_background_image'])) {
    echo '<body>';
  } else {
    echo '<body style="background-image: url(\'images/' . $result['body_background_image'] .'\'); background-repeat: repeat-x;">';
  }
?>
<div id="wrapper">
  <div id="header">
      <div id="logo" style="height:<?php echo $result['logo_div_height']; ?>; margin:<?php echo $result['logo_margin']; ?>; float:<?php echo $result['logo_float']; ?>;">
        <a href="<?php echo $result['logo_link']; ?>">
          <img src="images/logo.png" alt="<?php echo $result['logo_alt']; ?>" title="<?php echo $result['logo_title']; ?>"></a>
      </div>
      <div id="email" style="float:<?php echo $result['email_float']; ?>;">
        <?php 
          if (empty($result['logo_link'])) {
            echo '';
          } else {
            echo '<a href="' . $result['logo_link'] . '"></a>';
          }
        ?>

          <a href="mailto:<?php echo $result['email_url']; ?>"><?php echo $result['email_text']; ?></a>
      </div>
    <div id="nav">
      <ul>
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
  <div id="slideshow">
    <div id="slides">
      <?php
        $slide = $result['slide_number'];
        for ($s=1; $s <= $slide; $s++) {
          echo '<img src="images/slideshow/' . $s . '.jpg" alt="slide' . $s .'" />';
         }
        ?>
    </div>
  </div>
  <div id="main_content">  
    <div class="left">
      <h1 style="font-family:<?php echo $result['google_font']; ?>; color:#<?php echo $result['h1_color']; ?>;font-size:<?php echo $result['h1_font_size']; ?>em; text-shadow:<?php echo $result['main_h1_drop_shadow']; ?>; margin: <?php echo $result['content_header_margin']; ?>;"><?php echo $result['main_content_header']; ?></h1>
      <?php echo $result['main_content_text']; ?>
      <a href="<?php echo $result['main_content_readmore_url']; ?>"><?php echo $result['main_content_readmore_title']; ?></a>
      
    </div>
    <div class="right">
      <h1 style="font-family:<?php echo $result['google_font']; ?>; color:#<?php echo $result['h1_color']; ?>;font-size:<?php echo $result['h1_font_size']; ?>em; text-shadow:<?php echo $result['main_h1_drop_shadow']; ?>; margin: <?php echo $result['content_header_margin']; ?>;"><?php echo $result['latest_news_header']; ?></h1>
      <div id="twitter-widget">
        <script type="text/javascript" src="http://widgets.twimg.com/j/2/widget.js"></script>
        <script type="text/javascript">
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
      <div id="social_media_buttons">
          <?php 
            if (empty($result['sm_button_1'])) {
              echo '';
            } else {
              echo '
                <div class="sm_button" id="1">
                  <a href="' . $result['sm_button_1_link'] . '" target="_blank">
                    <img src="images/' . $result['sm_button_1'] . '" /> 
                  </a>
                </div>';
            }
          ?>
          <?php 
            if (empty($result['sm_button_2'])) {
              echo '';
            } else {
              echo '
                <div class="sm_button" id="2">
                  <a href="' . $result['sm_button_2_link'] . '" target="_blank">
                    <img src="images/' . $result['sm_button_2'] . '" /> 
                  </a>
                </div>';
            }
          ?>
          <?php 
            if (empty($result['sm_button_3'])) {
              echo '';
            } else {
              echo '
                <div class="sm_button" id="3">
                  <a href="' . $result['sm_button_3_link'] . '" target="_blank">
                    <img src="images/' . $result['sm_button_3'] . '" /> 
                  </a>
                </div>';
            }
          ?>
          <?php 
            if (empty($result['sm_button_4'])) {
              echo '';
            } else {
              echo '
                <div class="sm_button" id="4">
                  <a href="' . $result['sm_button_4_link'] . '" target="_blank">
                    <img src="images/' . $result['sm_button_4'] . '" /> 
                  </a>
                </div>';
            }
          ?>
      </div>
    </div>
  </div>
  <?php if ($result['footer_required'] == 'true') { ?>
    <div id="footer">
      <div id="footer_content">
        <?php echo $result['footer_image']; ?>
        <?php echo $result['footer_text']; ?>
      </div>
    </div>      
  <?php } else { ?>
    <style type="text/css">
    <!-- 
      #main_content {
           height: 500px;
           margin-bottom: 30px;
      
      -->
    </style>
  <?php } ?>  
</div>
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
</body>

</html> 
