<!DOCTYPE HTML>

<!-- I see you're looking at the code! Nice :3 -->
<!-- Look at the HTML for the Home page for a bit more text ^w^ -->

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
    <title>Oliver Bleen - Projects - T.I.P - Gallery</title>
  </head>
  <body>
    <div class="text-box projects">
      <div id="Table_of_contents">
        <h1 class="link-container"><a href="../../">Projects</a> / <a href="../">T.I.P</a> / <a href="../gallery">Gallery</a></h1>
      </div>
      <div>
        <?php
          if(!isset($_GET['id'])) {
            print '<p class="link-container">No image ID was specified in the URL parameter.<br>Go back to the <a href="../gallery">gallery</a></p>';
            goto end;
          }

          $hostname = trim(file_get_contents('../../../../secrets/tip_api_hostname'));
          $api_key = trim(file_get_contents('../../../../secrets/tip_api_token'));
          $headers = [
            'X-Api-Key: ' . $api_key,
          ];

          $img_url = $hostname . '/api/Images/Get/' . urlencode($_GET['id']);
          $img_meta_url = $hostname . '/api/Images/GetMetadata/' . urlencode($_GET['id']);
          $ch = curl_init($img_meta_url);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // Makes it so curl_exec returns
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

          $server_output = curl_exec($ch);

          if($server_output === FALSE) {
            print '<p>Error connecting to API... Sowwy &gt;w&lt;</p>';
            //print curl_error($ch);  // Don't print error for now
            goto end;
          }
          $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          if($httpcode != 200) {
            print '<p>';
            print 'Error getting data from API: ' . $httpcode;
            print '<br>';
            print $server_output;
            print '</p>';
            goto end;
          }

          curl_close($ch);
          $image_metadata = json_decode($server_output, true);

          print '<h3 class="link-container">Album: <a href="../albums?name=' . $image_metadata['albumTitle'] . '">' . $image_metadata['albumTitle'] . '</a></h3>';
          print '<p class="sidenote">Created: ' . str_replace('T', ' ', $image_metadata['timestampCreated']) . ' UTC</p>';
          print '<img class="screen-size-limit" src="' . $img_url . '">';

          end:
        ?>
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
