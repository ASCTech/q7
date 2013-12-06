<header<?php print $attributes; ?>>
  <div id="osu_navbar" role="navigation">
      <div class="container">
        <h2 class="osu-semantic">Ohio State nav bar</h2>
      <a href="#zone-content" id="skip" class="osu-semantic">Skip to main content</a>
        <div class="univ_info">
          <p class="univ_name"><a href="http://osu.edu" title="The Ohio State University">The Ohio State University</a></p>
        </div><!-- /univ_info -->
        <div class="univ_links">
          <div class="links">
            <ul>
              <li><a href="http://www.osu.edu/help.php" class="help">Help</a></li>
              <li><a href="http://buckeyelink.osu.edu/" class="buckeyelink" >BuckeyeLink</a></li>
              <li><a href="http://www.osu.edu/map/" class="map">Map</a></li>
              <li><a href="http://www.osu.edu/findpeople.php" class="findpeople">Find People</a></li>
              <li><a href="https://email.osu.edu/" class="webmail">Webmail</a></li> 
              <li><a href="http://www.osu.edu/search/" class="search">Search Ohio State</a></li>
            </ul>
          </div><!-- /links -->
        </div><!-- /univ_links -->
      </div><!-- /container -->
  </div><!-- /osu_navbar -->

  <?php print $content; ?>
</header>
