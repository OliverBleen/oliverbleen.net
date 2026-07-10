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
          if(!isset($_GET['name'])) {
            print '<p class="link-container">No album name was specified in the URL parameter.<br>Go back to the <a href="../gallery">gallery</a></p>';
            goto end;
          }

          $hostname = trim(file_get_contents('../../../../secrets/tip_api_hostname'));
          $api_key = trim(file_get_contents('../../../../secrets/tip_api_token'));
          $headers = [
            'X-Api-Key: ' . $api_key,
          ];

          $album_url = $hostname . '/api/Albums/Get/' . str_replace('+', '%20', urlencode($_GET['name']));
          $ch = curl_init($album_url);
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
          $album = json_decode($server_output, true);

          print '<h3>' . $album['title'] . '</h3>';
          print '<p class="sidenote">Images: ' . count($album['images']) . '<br>';
          print 'Created: ' . str_replace('T', ' ', $album['timestampCreated']) . '<br>';
          print 'Last Update: ' . str_replace('T', ' ', $album['timestampLastUpdate']) . '</p>';


          if(count($album['images'])  == 0) {
            print '<p>No images in this album...<br>You know, this shouldn&apos;t even happen x3</p>';
            goto end;
          }
          foreach($album['images'] as $image) {
            $img_url = $hostname . '/api/Images/Get/' . urlencode($image['id']);
            $img_meta_url = $hostname . '/api/Images/GetMetadata/' . urlencode($image['id']);
            $img_meta_ch = curl_init($img_meta_url);

            curl_setopt($img_meta_ch, CURLOPT_RETURNTRANSFER, 1);  // Makes it so curl_exec returns
            curl_setopt($img_meta_ch, CURLOPT_HTTPHEADER, $headers);

            $img_meta_server_output = curl_exec($img_meta_ch);

            if($img_meta_server_output === FALSE) {
              print '<div><p>Error connecting to API... Sowwy &gt;w&lt;</p></div>';
              //print curl_error($img_meta_ch);  // Don't print error for now
              goto end;
            }

            $img_meta_httpcode = curl_getinfo($img_meta_ch, CURLINFO_HTTP_CODE);
            if($img_meta_httpcode != 200) {
              print '<p>';
              print 'Error getting data from API: ' . $img_meta_httpcode;
              print '<br>';
              print $img_meta_server_output;
              print '</p>';
              goto end;
            }
            curl_close($img_meta_ch);
            $metadata = json_decode($img_meta_server_output, true);

            print '<a href="../images?id=' .  $metadata['id'] . '"><img src="' . $img_url . '"></a>';
            //print $img_server_output;
          }

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
