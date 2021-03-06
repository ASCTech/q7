<?php if (!$is_front && !$is_landing_page && $breadcrumb) : ?>
  <div id="breadcrumb-extension">&nbsp;</div>
<?php endif; ?>    
<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
  <div<?php print $content_attributes; ?>>    
    <?php if (isset($breadcrumb) && $breadcrumb != ''): ?>
      <div class="breadcrumb-wrapper">
        <div class="grid-8 breadcrumb-left"> 
          <?php print $breadcrumb; ?>
        </div>
        <div class="grid-4" id="breadcrumb-right-wrapper">
          <div id="breadcrumb-right-inner">&nbsp;</div>
        </div>
      </div>
    <?php endif; ?>    
    <?php if ($messages): ?>
      <div id="messages" class="grid-<?php print $columns; ?>"><?php print $messages; ?></div>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
