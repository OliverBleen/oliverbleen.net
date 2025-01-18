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
    <link rel="stylesheet" type="text/css" href="/styles/colors.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/images.css">
    <link rel="stylesheet" type="text/css" href="/styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="/styles/links.css">
    <link rel="icon" type="image/svg" href="/icon/favicon.svg">
    <script src="/scripts/topnav.js"></script>
    <title>Oliver Bleen - Projects</title>
  </head>
  <body>
    <div class ="topnav" id="TopNav">
      <a href="/">Home</a>
      <a href="/links">Links</a>
      <a href="/fursonas">Fursonas</a>
      <a href="/projects" class="active">Projects</a>
      <a href="https://github.com/OliverBleen/oliverbleen.net">Code</a>
      <a href="javascript:void(0);" class="icon" onclick="openTopNav()">
        <i class="ico ico-burger-menu"></i>
            &NonBreakingSpace;
      </a>
    </div>

    <div class="text-box projects">
      <div id="Table_of_contents">
        <h1>Projects</h1>
        <p class="link-container"><a href="#Fursuit_Glasses">Fursuit Glasses</a></p>
        <p class="link-container"><a href="#Fursuit_Stand">Fursuit Head Drying Stand</a></p>
        <p class="link-container"><a href="#3D_Printer_Bootscreen">3D Printer Bootscreen</a></p>
      </div>
      <div id="Fursuit_Glasses" class="image-width-limited">
        <h2>Fursuit Glasses</h2>
        <img src="files/render_glasses.png"></img>
        <p>Because I wanted to have some sort of accessory for my fursuit, I designed and 3D-Printed these fursuit glasses.</p>
      </div>
      <div id="Fursuit_Stand" class="image-height-limited">
        <h2>Fursuit Stand</h2>
        <img src="files/render_stand.png"></img>
      </div>
      <div id="3D_Printer_Bootscreen" class="image-width-limited">
        <h2>3d Printer Bootscreen</h2>
        <img src="files/3d_printer_bootscreen.png" class="pixelated"></img>
      </div>
    </div>

  </body>
</html>
