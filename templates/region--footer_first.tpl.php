<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
		<?php $theme_path = drupal_get_path('theme',$GLOBALS['theme']) ?>
    <img src="/<?php echo $theme_path ?>/images/d7-footer-wordmark-270px.png" width="270" height="24" alt="The Ohio State University">
    <?php print $content; ?>
  </div>
</div>