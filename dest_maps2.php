<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>NSTourism</title>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkAt6vVfSO1p63nFvDGS3fklbjQbXhctQ&callback=initMap" async defer></script>

    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 1.370903, lng: 124.889422},
              zoom: 9
            });

            //  for loop data from api
            getMarker(map);
        }

        async function getMarker(map) {
            try {
                var apiUri = 'http://localhost/nstourism/mapsjson2.php?id=<?php echo $_GET['id']; ?>'
                const apiUrl = await(fetch(apiUri))
                const markers = await apiUrl.json()
                markers.forEach(function(entry) {
                    var image ='admin/admin/'+entry.gambarx;
                    var location = {lat: parseFloat(entry.latitude), lng: parseFloat(entry.longitude)}
                    //var marker = new google.maps.Marker({position: location, map: map, icon: 'admin/admin/images/kabkota/manado.png', width: '100px'});
                    var marker = new google.maps.Marker({position: location, map: map});
                    var contentString = '<div style="width: 200px">'+
                        '<font size="3"><b>'+entry.nama+'</b></font><br>'+
                        '<font size="2">'+entry.daerah+'</font><hr>'+
                        '<a href="maps.php?id='+entry.id_wisata+'"><img src="admin/admin/'+entry.gambarx+'" width="200px"></a>'+
                        '</div>';

                    var infowindow = new google.maps.InfoWindow({
                      content: contentString
                    });
                    google.maps.event.addListener(marker, "click", function(e) { 
                      infowindow.open(map, marker);
                    });
                });
            }
            catch(err) { console.log(err) }
        }
    </script>
  </head>
  <body>

    <div id="map"></div>

    

  </body>
</html>