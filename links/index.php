<!DOCTYPE HTML>

<!-- I see you're looking at the code! Nice :3 -->
<!-- Look at the HTML for the Home page for a bit more text ^w^ -->

<?php
  /*session_start();
  $counter_name = '/home/WH540322993/wwwroot/VisitsCounter-Links.txt';

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

<html>
  <head>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/variables.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="/styles/links.css">
    <link rel="icon" type="image/svg" href="/icon/favicon.svg">
    <script src="/scripts/topnav.js"></script>
    <title>Oliver Bleen - Links</title>
  </head>
  <body>
    <div class="text-box">
      <h1>Links</h1>
      <p class="link-container">
        <img src="/logos/Bluesky.svg"></img>
        BlueSky:
        <a href="https://bsky.app/profile/oliverbleen.net" class="ico-link-external-normal" target="_blank">@oliverbleen.net</a>
      </p>
      <p class="link-container">
        <img src="/logos/Bluesky.svg"></img>
        BlueSky (TheStairs):
        <a href="https://bsky.app/profile/thestairs.oliverbleen.net" class="ico-link-external-normal" target="_blank">@thestairs.oliverbleen.net</a>
      </p>
      <p class="link-container">
        <img src="/logos/Twitter.svg"></img>
        Twitter:
        <a href="https://twitter.com/OliverBleen" class="ico-link-external-normal" target="_blank">@OliverBleen</a>
      </p>
      <p class="link-container">
        <img src="/logos/Instagram.svg"></img>
        Instagram:
        <a href="https://www.instagram.com/oliver.bleen/" class="ico-link-external-normal" target="_blank">oliver.bleen</a>
      </p>
      <p class="link-container">
        <img src="/logos/Telegram.svg"></img>
        Telegram:
        <a href="https://t.me/OliverBleen" class="ico-link-external-normal" target="_blank">@OliverBleen</a>
      </p>
      <p class="link-container">
        <a href="/ad-links/18-plus-verify.php">🔞 AD Links 🔞</a>
      </p>
    </div>

    <div class ="topnav" id="TopNav">
      <a href="/">Home</a>
      <a href="/links" class="active">Links</a>
      <a href="/fursonas">Fursonas</a>
      <a href="/projects">Projects</a>
      <a href="https://github.com/OliverBleen/oliverbleen.net" class="ico-link-external ico-link-external-dark-on-hover" target="_blank">Code</a>
      <a href="javascript:void(0);" class="icon" onclick="openTopNav()">
        <i class="ico ico-burger-menu"></i>
            &NonBreakingSpace;
      </a>
    </div>
  </body>
</html>
