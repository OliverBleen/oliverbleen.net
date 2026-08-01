<!DOCTYPE HTML>

<!-- I see you're looking at the code! Nice :3 -->
<!-- Look at the HTML for the Home page for a bit more text ^w^ -->

<html>
  <head>
    <meta name="viewport" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/styles/variables.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/images.css">
    <link rel="stylesheet" type="text/css" href="/styles/topnav.css">
    <link rel="stylesheet" type="text/css" href="/styles/links.css">
    <title>Oliver Bleen - Projects</title>
  </head>
  <body>
    <?php
      $hostname = trim(file_get_contents('../../../../secrets/tip_api_hostname'));
      $api_key = trim(file_get_contents('../../../../secrets/tip_api_token'));
      $headers = [
        'X-Api-Key: ' . $api_key,
      ];

      $ch = curl_init($hostname . '/api/Albums/GetAll');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // Makes it so curl_exec returns
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      $server_output = curl_exec($ch);

      if($server_output === FALSE) {
        print '<div class="text-box"><p>Error connecting to API... Sowwy &gt;w&lt;</p></div>';
        //print curl_error($ch);  // Don't print error for now
        goto end;
      }

      $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      if($httpcode != 200) {
        print '<div class="text-box"><p>';
        print 'Error getting data from API: ' . $httpcode;
        print '<br>';
        print $server_output;
        print '</p></div>';
        goto end;
      }

      curl_close($ch);
      $json = json_decode($server_output, true);

      print '<div class="text-box">';
      if(count($json) > 0) {
        foreach($json as $album) {
          print '<div class="link-container">';
          print '<a href=../albums?name=' . urlencode($album['title']) . ' target="_top">' . '<h3 class="link-container">' . $album['title'] . '</h3>';
          print '<p class="sidenote">Images: ' . $album['imageCount'] . '<br>';
          print 'Created: ' . str_replace('T', ' ', $album['timestampCreated']) . '<br>';
          print 'Last Update: ' . str_replace('T', ' ', $album['timestampLastUpdate']) . '<br>';
          foreach($album['albumPreviewImages'] as $image_id) {
            $img_url = $hostname . '/api/Images/GetPreviewSmall/' . urlencode($image_id);
            print '<img class="tip-small-preview" src="' . $img_url . '">';
          }
          print '</p></a></div>';
        }
      }
      else {
        print '<p>No albums have been uploaded yet...<br>Check back later!</p>';
      }
      print '</div>';

      end:
    ?>
  </body>
</html>
