<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
<div id="header-tile">&nbsp;</div>
  <div<?php print $content_attributes; ?>>    
    <?php if ($is_front): ?>
      <div id="banner-container"><a id="ascbanner" href="http://asc.osu.edu/">&nbsp;</a></div>
    <?php endif; ?>    
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
