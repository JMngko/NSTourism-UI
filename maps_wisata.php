<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Map Wisata Rekreasi NSTourism</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>


    <?php include "dest_maps2.php"; ?>
  </head>
  <body>

  <div id="map"></div>

  <div class="modal" tabindex="-1" role="dialog" id="tesmodal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-titles" id="judul_wisata"></h5> &nbsp; &nbsp;
          <i id="daerah_wisata"></i>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="smodal-body" id="content_wisata">
          
        </div>
        <div class="modal-footer">
          <i id="alamat_wisata"></i>
        </div>
      </div>
    </div>
  </div>
    

  </body>
</html>