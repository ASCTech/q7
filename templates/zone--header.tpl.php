<?php if ($wrapper): ?><div<?php print $attributes; ?> style="position: relative;"><?php endif; ?>  
    <?php if ($is_front): ?>
      <div id="header-tile">&nbsp;</div>
    <?php endif; ?>    
  <div<?php print $content_attributes; ?>>
    <?php if (($is_front) && (theme_get_setting('q7_remove_asc_branding') != 1)) : ?>
      <div id="banner-container"><a id="ascbanner" href="http://asc.osu.edu/">College of Arts and Sciences</a></div>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
