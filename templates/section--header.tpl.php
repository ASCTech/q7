<header<?php print $attributes; ?>>
  <div id="osu-Navbar-Container">
    <div id="redleft"> </div>
    <div id="osu-Navbar" style="clear: none;">
      <p>
        <a href="#page-content" id="skip" class="osu-semantic">skip to main content</a>
      </p>
      <h2 class="osu-semantic">OSU Navigation Bar</h2>
      <div id="osu-NavbarBreadcrumb">
        <p id="osu">
          <a title="The Ohio State University homepage" href="http://www.osu.edu/">The Ohio State University</a>
        </p>
        <p id="site-name">
           Site Name
        </p>
      </div>
      <div id="osu-NavbarLinks">
        <ul>
          <li><a href="http://www.osu.edu/help.php" title="OSU Help">Help</a></li>
          <li><a href="http://buckeyelink.osu.edu/" title="Buckeye Link">Buckeye Link</a></li>
          <li><a href="http://www.osu.edu/map/" title="Campus map">Map</a></li>
          <li><a href="http://www.osu.edu/findpeople.php" title="Find people at OSU">Find People</a></li>
          <li><a href="https://webmail.osu.edu" title="OSU Webmail">Webmail</a></li>
          <li id="searchbox">
          <form action="http://www.osu.edu/search/index.php" method="post">
            <fieldset>
              <legend><span class="osu-semantic">Search</span></legend>
              <label class="osu-semantic overlabel" for="search-field">Search Ohio State</label><
              <input type="text" alt-attribute="Search Ohio State" value="" name="searchOSU" class="textfield headerSearchInput" id="search-field"/>
              <button name="go" type="submit">Go</button>
            </fieldset>·········
          </form>
        </li>·······
        </ul>
      </div>
    </div>
    </div>           

<?php print $content; ?>
</header>
