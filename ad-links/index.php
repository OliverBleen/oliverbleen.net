<!DOCTYPE HTML>

<!-- I see you're looking at the code! Nice :3 -->
<!-- Look at the HTML for the Home page for a bit more text ^w^ -->

<?php
  session_start();
  $counter_name = '/home/WH540322993/wwwroot/VisitsCounter-AdLinks.txt';

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
  $_SESSION['visited'] = true;
?>

<html>
  <head>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/colors.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="/styles/links.css">
    <link rel="icon" type="image/svg" href="/icon/favicon.svg">
    <script src="/scripts/topnav.js"></script>
    <title>Oliver Bleen - Links</title>
  </head>
  <body>
    <div class="text-box">
      <h1>🔞 AD 🔞</h1>
      <p class="link-container">
        <img src="/logos/Bluesky.svg"></img>
        🔞 BlueSky:
        <a href="https://bsky.app/profile/ad.oliverbleen.net">@ad.oliverbleen.net</a>
      </p>
      <p class="link-container">
        <img src="/logos/Twitter.svg"></img>
        🔞 Twitter:
        <a href="https://twitter.com/PaddedOlli">@PaddedOlli</a>
      </p>
    </div>

    <div class ="topnav" id="TopNav">
      <a href="/">Home</a>
      <a href="/links">Links</a>
      <a href="/fursonas">Fursonas</a>
      <a href="/projects">Projects</a>
      <a href="https://github.com/OliverBleen/oliverbleen.net">Code</a>
      <a href="javascript:void(0);" class="icon" onclick="openTopNav()">
        <i class="ico ico-burger-menu"></i>
            &NonBreakingSpace;
      </a>
    </div>
  </body>
</html>
