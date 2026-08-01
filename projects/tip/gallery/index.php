<!DOCTYPE HTML>

<!-- I see you're looking at the code! Nice :3 -->
<!-- Look at the HTML for the Home page for a bit more text ^w^ -->

<?php
  /*session_start();
  $counter_name = '/home/WH540322993/wwwroot/VisitsCounter-Projects.txt';

  // Check if a text file exists. If not create one and initialize it to zero.
  if (!file_exists($counter_name)) {
    $f = fopen($counter_name, "w");
    fwrite($f,"0");
    fclose($f);
  }

  // Read the current value of our counter file
  $f = fopen($counter_name,"r");
  $counterVal = fread($f, filesize($counter_name));
  fclose($f);

  // Increment counter value by one
  if(empty($_SESSION['visited'])){
    $counterVal++;
    $f = fopen($counter_name, "w");
    fwrite($f, $counterVal);
    fclose($f);
  }
  $_SESSION['visited'] = true;*/
?>

<script type="text/javascript">
  function iframeLoaded(actually_loaded = false) {
      var iFrameID = document.getElementById('iframe-albums-list');
      if(iFrameID) {
          iFrameID.width = document.body.scrollWidth;
          var newHeight = iFrameID.contentWindow.document.body.children[0].scrollHeight + 51 ;
          if(newHeight > 600)
            iFrameID.height = newHeight + "px";
          else
            iFrameID.height = "601px";
      }
      if(actually_loaded) {
        loading_indicators = document.getElementsByClassName('loading-indicator-gallery');
        for(i = 0; i < loading_indicators.length; i++) {
          loading_indicators[i].remove();
        }
      }
  }
  window.addEventListener('resize', iframeLoaded);
</script>

<html>
  <head>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/variables.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/images.css">
    <link rel="stylesheet" type="text/css" href="/styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="/styles/links.css">
    <link rel="stylesheet" type="text/css" href="/styles/loading-indicator.css">
    <link rel="icon" type="image/svg" href="/icon/favicon.svg">
    <script src="/scripts/topnav.js"></script>
    <script src="/scripts/loading-indicator.js" onload="loading_indicator()"></script>
    <title>Oliver Bleen - Projects - T.I.P - Gallery</title>
  </head>
  <body>
    <div class="text-box projects">
      <div id="Table_of_contents">
        <h1 class="link-container"><a href="../../">Projects</a> / <a href="../">T.I.P</a> / Gallery</h1>
      </div>
      <div class="loading-indicator-gallery loading-indicator-container">
          <h3 class="loading-indicator-text">Loading</h3>
      </div>
      <div id="T_I_P">
          <?php // Important: Give the content of the iframe enough height to render with big font (here setting height to 1000),
                //  because if height <600, then the small font is used (based on css rules).
                //  If the small font were to be used first, the call to get the divs height (in the iframeLoaded() method) would return
                //  the height with the small font, then set it to a height >600, so the content of the iframe
                //  content would change to the big font again, leading to the div taking up more space and the
                //  iframe scrollbar to be visible again ?>
          <iframe src="albums-list.php" title="Albums list sub-view" id="iframe-albums-list" width="601" height="1000" onload="iframeLoaded(true)" frameBorder="0"></iframe>
      </div>
    </div>

    <div class ="topnav" id="TopNav">
      <a href="/">Home</a>
      <a href="/links">Links</a>
      <a href="/fursonas">Fursonas</a>
      <a href="/projects" class="active">Projects</a>
      <a href="https://github.com/OliverBleen/oliverbleen.net" class="ico-link-external ico-link-external-dark-on-hover" target="_blank">Code</a>
      <a href="javascript:void(0);" class="icon" onclick="openTopNav()">
        <i class="ico ico-burger-menu"></i>
            &NonBreakingSpace;
      </a>
    </div>
  </body>
</html>
