<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
  <div<?php print $content_attributes; ?> style="position: relative">    
    <?php if (theme_get_setting('q7_remove_asc_branding') != 1) : ?>
      <div id="footer-banner-container"><a id="ascfooterbanner" href="http://asc.osu.edu/">College of Arts and Sciences</a></div>
    <?php endif; ?>    
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
