<?php if ($wrapper): ?><div<?php print $attributes; ?><?php (theme_get_setting('use_sublogo')) ?  print " style=\"background: url('" . file_create_url(theme_get_setting('sublogo_path')) . "'); background-repeat: no-repeat; background-position: center;\"" : print "" ?>><?php endif; ?>
<div id="logo-tile">&nbsp;</div>
  <div<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
