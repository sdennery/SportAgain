<DOCTYPE html>
    <head>
        <link rel="stylesheet" href="map.css">
        <meta charset="utf-8" name="viewport" content="initial-scale=1.0, user-scalable=no"/>
        <title>map</title>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
            function initialize() {
            map = new google.maps.Map(document.getElementById("map_canvas"), {
            zoom: 19,
            center: new google.maps.LatLng(48.8247486,2.2797225),
            mapTypeId: google.maps.MapTypeId.ROADMAP
            });   
} 
</script>
    </head>
    <body onload="initialize()">   
        <div id="map_canvas"></div>
        <div id="retour"> <a href="nouscontacter.php"> RETOUR </a></div>
    </body>
</DOCTYPE>