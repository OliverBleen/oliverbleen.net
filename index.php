<!DOCTYPE HTML>

<!-- I see you're looking at the code! Nice :3 -->
<!-- Did you know that I wrote all of the HTML, CSS and JavaScript of this page by hand? -->
<!-- There are probably easiers ways to do this, but I didn't bother looking any up -->
<!-- Also, I am way more comfortable with writing back-end code, so making this as pretty as it is was quite a challenge for me >w< Please don't be too mean if anything breaks down x3 -->
<!-- Well, I don't think I have anything more to say, thanks for reading this. Here, have a cookie:  🍪 -->

<?php
  /*session_start();
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
  $_SESSION['visited'] = true;*/
?>

<html>
  <head>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/variables.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="/styles/footer.css">
    <link rel="icon" type="image/svg" href="/icon/favicon.svg">
    <script src="/scripts/topnav.js"></script>
    <title>Oliver Bleen</title>
  </head>
  <body>
    <div class="background-image">
        <img src=/images/oliver_highres.png alt="Cute fursuit picture">
    </div>

    <div class="text-box">
      <h1>Oliver Bleen</h1>
      <p>
        Hi! I'm Oliver, a <a id="ageText">[YEAR]</a> y/o furry from Austria ^^<br>
        Feel free to look around a bit :3<br>
        (Also, this site is just a hobby and not everything is finished yet >w<)
      </p>
    </div>

    <div class ="topnav" id="TopNav">
      <a href="/" class="active">Home</a>
      <a href="/links">Links</a>
      <a href="/fursonas">Fursonas</a>
      <a href="/projects">Projects</a>
      <a href="https://github.com/OliverBleen/oliverbleen.net" class="ico-link-external ico-link-external-dark-on-hover" target="_blank">Code</a>
      <a href="javascript:void(0);" class="icon" onclick="openTopNav()">
        <i class="ico ico-burger-menu"></i>
            &NonBreakingSpace;
      </a>
    </div>

    <!-- Footer -->
    <div class="footer">
      <p>Website v1.7.0</p>
    </div>


    <script>
     function calculateAge(birthday) {
      const nowDate = new Date(Date.now());

      if (nowDate.getMonth() > birthday.getMonth()) {
        return nowDate.getFullYear() - birthday.getFullYear();
      }
      else if (nowDate.getMonth() == birthday.getMonth()) {
        if(nowDate.getDate() < birthday.getDate()) {
          return nowDate.getFullYear() - birthday.getFullYear() - 1;
        }
      }
      else if (nowDate.getMonth() < birthday.getMonth()) {
        return nowDate.getFullYear() - birthday.getFullYear() - 1;
      }
      return nowDate.getFullYear() - birthday.getFullYear();
    }
    //Birthday: 2005 MAY 11
    //Note: Months in new Date(...) are zero based
    document.getElementById("ageText").innerHTML = calculateAge(new Date(2005, 04, 11));
    </script>


  </body>
</html>
