<!DOCTYPE HTML>

<!-- I see you're looking at the code! Nice :3 -->
<!-- Did you know that I wrote all of the HTML, CSS and JavaScript of this page by hand? -->
<!-- There are probably easiers ways to do this, but I didn't bother looking any up -->
<!-- Also, I am way more comfortable with writing back-end code, so making this as pretty as it is was quite a challenge for me >w< Please don't be too mean if anything breaks down x3 -->
<!-- Well, I don't think I have anything more to say, thanks for reading this. Here, have a cookie:  🍪 -->

<?php
  session_start();
  $counter_name = '/home/WH540322993/wwwroot/VisitsCounter-Index.txt';

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
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="/styles/footer.css">
    <link rel="icon" type="image/svg" href="/icon/favicon.svg">
    <script src="/scripts/topnav.js"></script>
    <title>Oliver Bleen</title>
  </head>
  <body>
    <div class="background-image">
        <img src=/images/oliver.png alt="Cute fursuit picture">
    </div>

    <div class="text-box">
      <h1>Oliver Bleen</h1>
      <p>
        Welcome stranger :3
        <br>This site is just a hobby I've been working on, and is still under construction >w<
      </p>
    </div>

    <div class ="topnav" id="TopNav">
      <a href="/" class="active">Home</a>
      <a href="/links">Links</a>
      <a href="/fursonas">Fursonas</a>
      <a href="/projects">Projects</a>
      <a href="https://github.com/OliverBleen/oliverbleen.net">Code</a>
      <a href="javascript:void(0);" class="icon" onclick="openTopNav()">
        <i class="ico ico-burger-menu"></i>
            &NonBreakingSpace;
      </a>
    </div>

    <!-- Footer -->
    <div class="footer">
      <p>Website v1.3.0</p>
    </div>
  </body>
</html>