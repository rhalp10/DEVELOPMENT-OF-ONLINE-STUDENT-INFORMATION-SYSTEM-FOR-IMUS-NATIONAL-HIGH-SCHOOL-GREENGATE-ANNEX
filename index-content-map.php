<h1 itemprop="name"><strong>Map</strong></h1>

<hr />
<div id="googleMap" style="width:100%;height:400px;  position: relative;
    top: 0; right: 0; bottom: 0; left: 0;
    border: 2px solid green"></div>
<!-- /basic markers -->
<script>
  function initMap() {
        var myLatLng = {lat: 14.3737069, lng: 120.9240774};

        var map = new google.maps.Map(document.getElementById('googleMap'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfPKc1jcQM-i3bxv2ipJ6u9zJ1Jujh6yo&callback=initMap"></script>