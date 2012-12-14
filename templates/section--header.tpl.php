<header<?php print $attributes; ?>>
  <div id="osu-Navbar-Container">
    <div id="osu-Navbar" class="container-12" style="clear: none;">
      <h2 class="osu-semantic">OSU Navigation Bar</h2>
      <div id="osu-NavbarBreadcrumb">
        <p id="osu">
          <a title="The Ohio State University homepage" href="http://www.osu.edu/">The Ohio State University</a>
        </p>
      </div>
      <div id="osu-NavbarLinks">
        <ul>
          <li><a href="http://www.osu.edu/help.php" title="OSU Help">Help</a></li>
          <li><a href="http://buckeyelink.osu.edu/" title="Buckeye Link">Buckeye Link</a></li>
          <li><a href="http://www.osu.edu/map/" title="Campus map">Map</a></li>
          <li><a href="http://www.osu.edu/findpeople.php" title="Find people at OSU">Find People</a></li>
          <li><a href="https://webmail.osu.edu" title="OSU Webmail">Webmail</a></li>
          <li><a href="http://www.osu.edu/search/" title="Search">Search</a></li>
        </ul>
      </div>
    </div>
  </div>

<?php print $content; ?>
<?php dsm($content); ?>
</header>
