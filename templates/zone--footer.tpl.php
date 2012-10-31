<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
  <div<?php print $content_attributes; ?> style="position: relative">    
    <?php if ($is_front && (variable_get('q7_asc_branding')) != 1) : ?>
      <div id="footer-banner-container"><a id="ascfooterbanner" href="http://asc.osu.edu/"></a></div>
    <?php endif; ?>    
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
