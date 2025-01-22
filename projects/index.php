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
        <p class="link-container sidenote">Files:
          <a href="files/fursuit_glasses_frame.stl">STL (Frame)</a>,
          <a href="files/fursuit_glasses_earpiece.stl">STL (Earpiece)</a>,
          <a href="files/fursuit_glasses_frame.stp">STEP (Frame)</a>,
          <a href="files/fursuit_glasses_earpiece.stp">STEP (Earpiece)</a></p>
      </div>
      <div id="Fursuit_Stand" class="image-height-limited">
        <h2>Fursuit Stand</h2>
        <img src="files/render_stand.png"></img>
        <p>
          I designed this fursuit stand so I can easily dry my head after washing it. The left part goes on top of the right part. The base also has a fan builtin that can blow air up into the top part. The fan can be powered using a USB-C cable.
        </p>
      </div>
      <div id="3D_Printer_Bootscreen" class="image-width-limited">
        <h2>3D Printer Bootscreen</h2>
        <img src="files/3d_printer_bootscreen.png" class="pixelated"></img>
        <img src="files/3d_printer_bootscreen_irl.png"></img>
        <p class="link-container">For my 3D printer, I compiled and flashed a custom build of <a href="https://marlinfw.org/">Marlin</a>. One of the changes I made was this custom bootscreen that shows up every time the printer starts</p>
        <p class="sidenote">Sidenote: If you add a custom bootscreen to Marlin, normally the Marlin bootscreen shows
          as well. If you want to only show you custom bootscren you need to do the following things (For Marlin v2.1.2.2):</br>
          Define both <a class="code sidenote">SHOW_BOOTSCREEN</a> and <a class="code sidenote">SHOW_CUSTOM_BOOTSCREEN</a> (<a class="code sidenote">Marlin/Configuration.h</a>, Line 80):
        </p>

        <p class="code sidenote">
          <a class="comment">// Show the Marlin bootscreen on startup. ** ENABLE FOR PRODUCTION **</a></br>
          <a class="define">#define SHOW_BOOTSCREEN</a></br>
          </br>
          <a class="comment">// Show the bitmap in Marlin/_Bootscreen.h on startup.</a></br>
          <a class="define">#define SHOW_CUSTOM_BOOTSCREEN</a></br>
        </p>

        <p class="sidenote">Then, in the file <a class="code sidenote">Marlin/src/lcd/dogm/marlinui_DOGM.cpp</a>, Line 247, you have to change the function:</p>
        <p class="code sidenote">
          <a class="type">void</a> <a class="class">MarlinUI</a>::<a class="method">show_bootscreen</a><a class="parenthesis">() {</a></br>
          &nbsp&nbsp<a class="method">TERN_</a><a class="parenthesis">(</a><a class="define">SHOW_CUSTOM_BOOTSCREEN</a>, <a class="method">show_custom_bootscreen</a><a class="parenthesis">())</a>;</br>
          &nbsp&nbsp<a class="method">show_marlin_bootscreen</a><a class="parenthesis">()</a>;</br>
          <a class="parenthesis">}</a>
        </p>

        <p class="sidenote">to:</p>
        <p class="code sidenote">
          <a class="type">void</a> <a class="class">MarlinUI</a>::<a class="method">show_bootscreen</a><a class="parenthesis">() {</a></br>
          &nbsp&nbsp<a class="comment">//TERN_(SHOW_CUSTOM_BOOTSCREEN, show_custom_bootscreen());</a></br>
          &nbsp&nbsp<a class="method">show_custom_bootscreen</a><a class="parenthesis">()</a>;</br>
          &nbsp&nbsp<a class="comment">//show_marlin_bootscreen();</a></br>
          <a class="parenthesis">}</a>
        </p>

        <p class="sidenote">
          (you can leave out the comments)</br>
          Now, only the custom bootscreen will show up. But, it seems to display way too long (~5 seconds).</br>
          To fix this, I changed both the <a class="code sidenote">BOOTSCREEN_TIMEOUT</a> and the <a class="code sidenote">CUSTOM_BOOTSCREEN_TIMEOUT</a>
        </p>
        <p class="sidenote">
          <a class="code sidenote">#define BOOTSCREEN_TIMEOUT 250 // (ms) Total Duration to display the boot screen(s)</a> (File: <a class="code sidenote">Marlin/Configuration_adv.h</a>, Line 1442)
        </p>
        <p class="sidenote">
          <a class="code sidenote">#define CUSTOM_BOOTSCREEN_TIMEOUT 250</a> File: <a class="code sidenote">Marlin/src/lcd/dogm/marlinui_DOGM.cpp</a>, Line 172)<
        </p>
        <p class="sidenote">
          (Despite what the comment in <a class="code sidenote">BOOTSCREEN_TIMEOUT</a> says, from testing it seems that these two timeouts add up. Also, I haven't tried to set one of the Timeouts to 0, as I thought that that might break some stuff.)</br>
        </p>
      </div>
    </div>

  </body>
</html>
