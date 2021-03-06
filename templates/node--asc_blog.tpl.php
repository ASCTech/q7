<article<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <header>
    <div id="blog-page-title"><span><?php print (variable_get('asc_blog_name') != '' ? variable_get('asc_blog_name') : 'Blog') ?><span></div>
    <?php ($teaser) ? print '<h2' : print '<h1' ?><?php print $title_attributes; ?>><?php ($teaser) ? print '<a href="' . $node_url . '" title="' . $title . '">' : ''?><?php print $title ?><?php ($teaser) ? print '</a></h2>' : print '</h1>' ?>
  </header>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print format_date($node->created, 'custom', 'F j, Y'); ?></footer>
  <?php endif; ?>

  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>
