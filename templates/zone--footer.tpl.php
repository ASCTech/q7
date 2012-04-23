<?php if ($wrapper): ?><div<?php print $attributes; ?> style="position: relative;"><?php endif; ?>  
  <div<?php print $content_attributes; ?>>    
    <?php if ($is_front): ?>
      <div id="footer-banner-container"><a id="ascfooterbanner" href="http://asc.osu.edu/">&nbsp;</a></div>
    <?php endif; ?>    
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
