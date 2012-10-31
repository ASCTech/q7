<?php if ($wrapper): ?><div<?php print $attributes; ?> style="position: relative;"><?php endif; ?>  
    <?php if ($is_front): ?>
      <div id="header-tile"><div id="header-tile-bar">&nbsp;</div></div>
    <?php endif; ?>    
  <div<?php print $content_attributes; ?>>    
    <?php if ($is_front)  && (get_variable('q7_remove_asc_branding') != 1): ?>
      <div id="banner-container"><a id="ascbanner" href="http://asc.osu.edu/"></a></div>
    <?php endif; ?>    
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
