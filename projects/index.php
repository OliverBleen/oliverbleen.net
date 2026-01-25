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

<html>
  <head>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/variables.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/images.css">
    <link rel="stylesheet" type="text/css" href="/styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="/styles/links.css">
    <link rel="icon" type="image/svg" href="/icon/favicon.svg">
    <script src="/scripts/topnav.js"></script>
    <title>Oliver Bleen - Projects</title>
  </head>
  <body>
    <div class="text-box projects">
      <div id="Table_of_contents">
        <h1>Projects</h1>
        <h2 class="link-container"><a href="tip">T.I.P</a></h2>
        <p>Get a small reminder of the event</p>
        <img src="tip/files/printout_example.png"></img>
        <h2 class="link-container"><a href="fursuit-glasses">Fursuit Glasses</a></h2>
        <p>3D-printed glasses for my fursuit!</p>
        <img src="fursuit-glasses/files/render_glasses.png"></img>
        <h2 class="link-container"><a href="fursuit-drying-stand">Fursuit Drying Stand</a></h2>
        <p>Self explanatory, right?</p>
        <img src="fursuit-drying-stand/files/render_stand.png"></img>
        <h2 class="link-container"><a href="3d-printer-bootscreen">3D Printer Bootscreen</a></h2>
        <p>Custom bootscreen for my Anet A8 Plus</p>
        <img src="3d-printer-bootscreen/files/3d_printer_bootscreen_irl.png"></img>
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
