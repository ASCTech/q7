<footer<?php print $attributes; ?>>
<?php print $content; ?>
<div class="container-12">
  <div id="copyright" class="grid-12">
    &copy; 2012, The Ohio State University, Designed by·
    <a href="http://asccomm.osu.edu" title="ASC Communications website">Arts and Sciences Communications Services</a>.
    <?php if(!user_is_logged_in()) { ?>·
    <a href="<?php print shib_auth_generate_login_url(); ?>" title="Site Administrator Login"><img src="<?php print base_path() . drupal_get_path('theme', 'q7') . '/images/user.gif' ?>" alt="Log In" class="user-auth-btn" /></a>
    <?php } else { ?>
    <a href="/user/logout"><img src="<?php print base_path() . drupal_get_path('theme', 'q7') . '/images/user_out.gif' ?>" alt="Log Out" class="user-auth-btn" /><?php print $user->name ?></a>
    // <a href="http://appservices.asc.ohio-state.edu:8080/shot/<?php print base64_encode('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']) ?>" style="text-decoration: none; border-bottom: none;">Page Screenshot</a>
    <?php } ?>
  </div>
</div>
