<?php session_start(); ?>

<html>
	<head>
        <link rel="stylesheet" href="Sport.css">
        <meta charset="utf-8"/>
    </head>
 	<header>
		<?php include('../Controleur/choix_header.php'); ?>
	</header>
         
<body>
	<div id="menu_sport">
			<ul id="menude">
				<li><a href="#">Sport de raquette</a>
					<ul>
						<li class="separation"><img class="image_sport" src="../Vue/Images/tennis-ball.png"><span class="gauche"></span><a href="#">Tennis</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/ping-pong.png"><span class="gauche"></span><a href="#">Tennis de table</a></span></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/shuttlecock.png"><span class="gauche"></span><a href="#">Badminton</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/squash.png"><span class="gauche"></span><a href="#">Squash</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/ping-pong-silhouettes.png"><span class="gauche"></span><a href="#">Paddle</a></li>
					</ul>
				</li>
				<li><a href="#">Sport collectif</a>
					<ul>
						<li class="separation"><img class="image_sport" src="../Vue/Images/football.png"><span class="gauche"></span><a href="#">Football</a><span class="droite"></span></span><img class="image_sport" src="../Vue/Images/american-football.png"><span class="gauche"></span><a href="#">Football US</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/ball-of-rugby.png"><span class="gauche"></span><a href="#">Rugby</a><span class="droite"></span></span><img class="image_sport" src="../Vue/Images/basketball.png"><span class="gauche"></span><a href="#">Basket</a></li>
						<li class="separation"><a href="#"><img class="image_sport" src="../Vue/Images/volleyball.png"><span class="gauche"></span>Volley ball</a><span class="droite"></span></span><img class="image_sport" src="../Vue/Images/hockey.png"><span class="gauche"></span><a href="#">Hockey</a></li>
					</ul>
					</li>
				<li><a href="#">Sport nautique</a>
					<ul>
						<li class="separation"><img class="image_sport" src="../Vue/Images/swimming-silhouette.png"><span class="gauche"></span><a href="#">Natation</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/diving-silhouette.png"><span class="gauche"></span><a href="#">Plongée</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/waterpolo.png"><span class="gauche"></span><a href="#">Waterpolo</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/surf.png"><span class="gauche"></span><a href="#">Surf</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/windsurf.png"><span class="gauche"><a href="#">Kite surf</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/sailing-boat.png"><span class="gauche"></span><a href="#">Voile</a><li>
					</ul>
					</li>
				<li><a href="#">Fitness</a>
					<ul>
						<li class="separation"><img class="image_sport" src="../Vue/Images/ballerina-pose.png"><span class="gauche"></span><a href="">Danse</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/barbell.png"><span class="gauche"></span><a href="#">Musculation</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/pulse.png"><span class="gauche"></span><a href="#">Cardio</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/boxing.png"><span class="gauche"></span><a href="#">Boxe</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/working-out-silhouette.png"><span class="gauche"></span><a href="#">Aérobie</a></li>
					</ul>
					</li>
				<li><a href="#">Nature</a>
					<ul>
						<li class="separation"><img class="image_sport" src="../Vue/Images/target.png"><span class="gauche"></span><a href="#">Tir à l'arc</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/petanque.png"><span class="gauche"></span><a href="#">Pétanque</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/fishing-rod.png"><span class="gauche"></span><a href="#">Pêche</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/horseriding.png"><span class="gauche"></span><a href="#">Equitation</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/climbing-silhouette.png"><span class="gauche"></span><a href="#">Escalade</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/paragliding.png"><span class="gauche"></span><a href="#">Parachute</a></li>
					</ul>
				</li>
				<li><a href="#">Montagne</a>
					<ul>
						<li class="separation"><img class="image_sport" src="../Vue/Images/climbing.png"><span class="gauche"></span><a href="#">Randonnée</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/skier-going-down-a-hill.png"><span class="gauche"></span><a href="#">Ski</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/snowboard.png"><span class="gauche"></span><a href="#"></span>Snowboard</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/canoe.png"><span class="gauche"></span><a href="#">Kayak</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/cave.png"><span class="gauche"></span><a href="#">Spéléologie</a></li>
					</ul>
				</li>
				<li><a href="#"><a href="#">Sport de glisse</a>
					<ul>
						<li class="separation"><img class="image_sport" src="../Vue/Images/man-cycling.png"><span class="gauche"></span><a href="#">Vélo</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/skateboard.png"><span class="gauche"></span><a href="#">Skateboard</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/scooter.png"><span class="gauche"></span><a href="#">Trottinette</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/roller-skate.png"><span class="gauche"></span><a href="#">Roller</a></li>
					</ul>
				</li>
				<li><a href="#">Athlétisme</a>
					<ul>
						<li class="separation"><img class="image_sport" src="../Vue/Images/man-walking-to-right.png"><span class="gauche"></span><a href="#">Marche Rapide</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/winner-runner-arriving-to-end-line.png"><span class="gauche"></span><a href="#">Course</a></li>
						<li class="separation"><img class="image_sport" src="../Vue/Images/mountain-running-silhouette.png"><span class="gauche"></span><a href="#">Running</a><span class="droite"></span><img class="image_sport" src="../Vue/Images/hiking.png"><span class="gauche"></span><a href="#">Marche Nordique</a></li>
					</ul>
				</li>
			</ul>
	</div>
</body>
<br>
<br>
<br>
<?php include('../Vue/footer.php')?>
</html>