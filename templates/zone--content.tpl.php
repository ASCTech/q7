<?php if ($wrapper): ?><div<?php print $attributes; ?>><?php endif; ?>  
  <div<?php print $content_attributes; ?>>    
    <?php if ($breadcrumb): ?>
      <div class="breadcrumb-wrapper" class="container-12">
      <div class="grid-8 breadcrumb-left"> 
        <?php print $breadcrumb; ?>
      </div>
      <div class="grid-4 breadcrumb-right">&nbsp;</div>
      </div>
    <?php endif; ?>    
    <?php if ($messages): ?>
      <div id="messages" class="grid-<?php print $columns; ?>"><?php print $messages; ?></div>
    <?php endif; ?>
    <?php print $content; ?>
  </div>
<?php if ($wrapper): ?></div><?php endif; ?>
