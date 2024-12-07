<!DOCTYPE HTML>

<!-- I see you're looking at the code! Nice :3 -->
<!-- Look at the HTML for the Home page for a bit more text ^w^ -->

<html>
  <head>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/styles/colors.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="/styles/links.css">
    <link rel="stylesheet" type="text/css" href="/styles/tables.css">
    <link rel="icon" type="image/svg" href="/icon/favicon.svg">
    <script src="/scripts/topnav.js"></script>
    <title>Oliver Bleen - Stats</title>
  </head>
  <body>

    <div class="text-box">
      <h1>Stats</h1>
      <p>A rough count of how often each page has been accessed</p>
      <table>
        <tr>
          <th>Page</th>
          <th>Visits</th>
        </tr>
        <tr>
          <td>Index</td>
          <td><?php
          $counter_name_index = '/home/WH540322993/wwwroot/VisitsCounter-Index.txt';
          $counter_name_links = '/home/WH540322993/wwwroot/VisitsCounter-Links.txt';
          $counter_name_ad_links = '/home/WH540322993/wwwroot/VisitsCounter-AdLinks.txt';
          $counter_name_fursonas = '/home/WH540322993/wwwroot/VisitsCounter-Fursonas.txt';
          $counter_name_projects = '/home/WH540322993/wwwroot/VisitsCounter-Projects.txt';

          $counter_name = $counter_name_index;

          if (file_exists($counter_name)) {
            // Viewcount for Indexpage
            $f = fopen($counter_name,"r");
            $counterVal = fread($f, filesize($counter_name));
            fclose($f);
            echo $counterVal;
          }
          else
            echo 'Counter file not found';

          echo "</td>\n        </tr>\n        <tr>\n          <td>Links</td>\n          <td>";
          // Viewcount for Links page

          $counter_name = $counter_name_links;
          if (file_exists($counter_name)) {
            // Viewcount for Indexpage
            $f = fopen($counter_name,"r");
            $counterVal = fread($f, filesize($counter_name));
            fclose($f);
            echo $counterVal;
          }
          else
            echo 'Counter file not found';

          echo "</td>\n        </tr>\n        <tr>\n          <td>AD-Links</td>\n          <td>";
          // Viewcount for AD-Links page

          $counter_name = $counter_name_ad_links;
          if (file_exists($counter_name)) {
            // Viewcount for Indexpage
            $f = fopen($counter_name,"r");
            $counterVal = fread($f, filesize($counter_name));
            fclose($f);
            echo $counterVal;
          }
          else
            echo 'Counter file not found';

          echo "</td>\n        </tr>\n        <tr>\n          <td>Fursonas</td>\n          <td>";
          // Viewcount for Fursonas page

          $counter_name = $counter_name_fursonas;
          if (file_exists($counter_name)) {
            // Viewcount for Indexpage
            $f = fopen($counter_name,"r");
            $counterVal = fread($f, filesize($counter_name));
            fclose($f);
            echo $counterVal;
          }
          else
            echo 'Counter file not found';

          echo "</td>\n        </tr>\n        <tr>\n          <td>Projects</td>\n          <td>";
          // Viewcount for Projects page

          $counter_name = $counter_name_projects;
          if (file_exists($counter_name)) {
            // Viewcount for Indexpage
            $f = fopen($counter_name,"r");
            $counterVal = fread($f, filesize($counter_name));
            fclose($f);
            echo $counterVal;
          }
          else
            echo 'Counter file not found';

          ?></td>
        </tr>
      </table>
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
