<?php if ($wrapper): ?><div<?php print $attributes; ?> style="position: relative;"><?php endif; ?>  
    <?php if ($is_front): ?>
      <div id="header-tile">&nbsp;</div>
      <div id="banner-container"><a id="ascbanner" href="http://asc.osu.edu/">&nbsp;</a></div>
    <?php endif; ?>    
  <div<?php print $content_attributes; ?>>    
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
