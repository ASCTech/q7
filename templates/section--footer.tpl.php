<footer<?php print $attributes; ?>>
  <?php print $content; ?>
  <div class="container-12">
    <div id="copyright" class="grid-12">
    &copy; 2012, The Ohio State University, Designed by 
    <a href="http://asccomm.osu.edu" title="ASC Communications website">Arts and Sciences Communications Services</a>.
    <?php if(!user_is_logged_in()) { ?> 
      <a href="/Shibboleth.sso/Login?target=<?php print urlencode("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>" title="Site Administrator Login">Login</a>
    <?php } else { ?>
      <a href="/user/logout">Log Out</a>
<?php } ?>
  </div>
</footer>
