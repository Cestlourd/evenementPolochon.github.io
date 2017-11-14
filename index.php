<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>PolochWar 2018</title>

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro|Russo+One|Open+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Fichiers CSS -->

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <link href="css/MyCss.css" rel="stylesheet">

    <!-- Fichiers JS -->

    <script>
        function initMap() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 15,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(48.8559, 2.2981), // Champ de Mars

                // Disables the default Google Maps UI components
                disableDefaultUI: true,
                scrollwheel: false,
                draggable: false,

                styles: [{
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 17
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 29
                    }, {
                        "weight": 0.2
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 18
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 21
                    }]
                }, {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    }, {
                        "color": "#000000"
                    }, {
                        "lightness": 16
                    }]
                }, {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    }, {
                        "color": "#000000"
                    }, {
                        "lightness": 40
                    }]
                }, {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 19
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 20
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#000000"
                    }, {
                        "lightness": 17
                    }, {
                        "weight": 1.2
                    }]
                }]
            };

            var mapElement = document.getElementById('map');
            map = new google.maps.Map(mapElement, mapOptions);

            // Marqueur sur la carte
            var image = 'img/map-marker.svg';
            var myLatLng = new google.maps.LatLng(48.8559, 2.2981);
            var beachMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image
            });
        }
        
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuIIpLcse3ijTlt22e6uXO1ZmH6XcWR0Q&callback=initMap"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PolochWar</a>

    </div>
</nav>

<div class="container">
    <!-- Intro Header -->
    <header class="masthead">
    </header>

    <div class="row">
        <main>
            <section id="FormulaireInscription">
                <form name="form_inscription" method="post" action="inscription.php">

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="nomParticipant">Nom</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" class="form-control" id="nomParticipant" placeholder="Nom...">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="prenomParticipant">Prenom</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" class="form-control" id="prenomParticipant" placeholder="Prenom...">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="emailParticipant">Email</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="email" class="form-control" id="emailParticipant" placeholder="Email...">
                        </div>
                    </div>

                    <div class=" row form-group">
                        <div class="col-xs-12 col-md-offset-2 col-md-1">
                            <label for="telephoneParticipant">Telephone</label>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <input type="text" name="telephone" class="form-control" id="telephoneParticipant"
                                   placeholder="Enter Phone Number">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-offset-5 col-md-2">
                            <input type="submit" value="Participer" onclick="return val();"/>
                        </div>
                    </div>
                </form>
            </section>

            <section id="lieu">
                <div id="map" style="width:400px;height:400px;"></div>
            </section>


        </main>
    </div>
</div>


</body>
</html>