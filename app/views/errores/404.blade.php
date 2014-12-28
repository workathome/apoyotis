<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $code_error }}</title>
    <style>
        ul{
            list-style: none;
        }
        ul>li{
            padding: 0.25em;
            font-weight: bold;
        }
        #map-canvas {
            height: 400px;
            width: 600px;
            margin: 0px;
            padding: 0px
        }
    </style>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
        function initialize() {
          var myLatlng = new google.maps.LatLng( {{ $location['lat'] }} , {{ $location['lon'] }} );
          var mapOptions = {
            zoom: 4,
            center: myLatlng,
          }
          var map = new google.maps.Map( document.getElementById('map-canvas') , mapOptions );

          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Ubicacion de la Ip'
          });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>
    <center>  
        <div>
            <h1>{{ $message }}</h1>
            <ul>
                <li> {{ $remote_addr }} </li>
                <li> {{ $query_string }} </li>
                <li> {{ $http_user_agent }} </li>
                <!--<li> {{ $request_method }} </li>-->
            </ul>
        </div>
        <img src="/404.svg" alt="">
        <div id="map-canvas"></div>
    </center>
    
</body>
</html>