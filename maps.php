<?php
  include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      #map-canvas {
        width: 100%;
        height: 1000px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADJ8pMntMDiPZQbmWpvbwrSGh9laoHoRg&callback=initialize"></script>
    
  <script>
    var marker;
      function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }     
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var infoWindow = new google.maps.InfoWindow;      
        var bounds = new google.maps.LatLngBounds();
 
    
 
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
          function addMarker(lat, lng, info) {
            var pt = new google.maps.LatLng(lat, lng);
            bounds.extend(pt);
            var marker = new google.maps.Marker({
                map: map,
                position: pt
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
          }
 
          <?php
            $id = $_GET['id'];
            $query = mysqli_query($konek,"select * from wisata where id='$id'");
          while ($data = mysqli_fetch_array($query)) {
            $lat = $data['lat'];
            $lon = $data['lng'];
            $nama = $data['nama_lokasi'];
      $alamat = $data['alamat'];
            echo ("addMarker($lat, $lon, '<b>$nama<br>$alamat</b>');\n");                        
          }
          ?>
        }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>