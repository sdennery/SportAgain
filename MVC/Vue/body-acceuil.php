<?php include '../Modele/BDD_connexion.php' ?>  
<?php session_start(); ?> 
<html>
	<head>
        <link rel="stylesheet" href="../Vue/body-acceuil.css">
        <meta charset="utf-8"/>
    </head>
 	<header>
		<?php include('../Controleur/choix_header.php'); ?>
	</header>	
	<body>
            <div id="recherche_body">
			<div id="cadre_recherche">
				<p class="titre_recherche">Trouver en un clic !</p>
			    <form method="GET" action="../Controleur/controleur_body-accueil.php">
			        <input type="search" name="requete" placeholder="Rechercher" id="barre">
			        <select id=select_choix name="choix" size="1">
                  <option value="0" style="text-align:center;"> Choix </option> 
                   <option value="club" style="text-align:center;"> club </option> 
                   <option value="groupe" style="text-align:center;"> groupe </option> 
                   <option value="evenement" style="text-align:center;"> evenement </option> 
                    </select> 
                    <input id="valider_recherche" type="submit" value="Valider"/>
			    </form>
			</div>
		</div>
		<section id="banniere">
				<img src="../Vue/Images/passion.png" style="height:200px;width:500px;margin-left:200px;">
				<img  class="gratuit" src="../Vue/Images/f432480a48-devis-gratuit1.png" style="margin-left:320px; margin-top:-20px;";>
			<a class="more" href="#">Rejoins nous maintenant</a>
		</section>
            
            
		
		<div id="slider">
			<figure>
				<img src="../Vue/Images/vollyball.jpg">
				<img src="../Vue/Images/sccor.jpg">
				<img src="../Vue/Images/imaNews.gif.png">
				<img src="../Vue/Images/icehockey.jpg">
				<img src="../Vue/Images/TENNISH.jpg">
			</figure>
		</div>
		<section id="info">
                 <div>
				<center>	 <h1 class="a2_titre">Les Dernieres Actualités</h1></center>
					 </div>
                     <div id="info_text">
                    <div class="a2">
                        <center><h2 class="a2_titre">GROUPES</h2></center>
                              <center> <strong>   <div class="a2_box"> <?php include '../Modele/afficher_groupe_recent.php'?>  </strong> </center>  </div>           
			</div>
			<div class="a2">
                            
				 <center><h2 class="a2_titre">CLUBS</h2></center>
                          <center>  <strong> <div class="a2_box">     <?php include '../Modele/afficher_club_recent.php'?> </strong> </center></div>
                                
			</div>
                    <div class="a2">
				 <center><h2 class="a2_titre">EVENEMENTS</h2></center>
                             <center>  <strong> <div class="a2_box"><?php include '../Modele/afficher_evenement_recent.php'?> </strong> </center></div>
			</div>
                    <div class="a2">
				 <center><h2 class="a2_titre">UTILISATEURS</h2></center>
                             <center> <strong> <div class="a2_box"><?php include '../Modele/afficher_utilisateur_recent.php'?> </strong></center></div>  
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
                                <br/>
			</div>
                            </div>
               
		</section>
		<section id="banniere2">
			<div id="b1">
				<div id="content-logo1">
					<center><i class="logo1"><img src="../Vue/Images/logo1.png"></i></center>
					<center><h1 class="text-box">Rencontre</h1></center>
					<center><p>Rejoignez notre communauté passioné par le sport</p></center>
					</div>
				<div id="content-logo2">
				<center><i class="logo1"><img src="../Vue/Images/logo4.png"></i></center>
					<center><h1 class="text-box">Connecté</h1></center>
					<center><p>Restez connecté avec les membres du site</p></center>
					</div>
				<div id="content-logo3">
					<center><i class="logo1"><img src="../Vue/Images/logo3.png"></i></center>
					<center><h1 class="text-box">Securité</h1></center>
					<center><p>Un site 100% sécurisé</p></center>
					</div>
				<div id="content-logo4">
					<center><i class="logo1"><img src="../Vue/Images/logo2.png"></i></center>
					<center><h1 class="text-box">Rapide</h1></center>
					<center><p>Trouvez immédiatement votre sport préféré près de chez vous !</p></center>
					</div>
			</div>
		</section>
		<section id="banniere3">
			<div class="text-box3" >
				<p>Ce site web permet à ses utilisateurs de partager leur passion pour un sport en formant des groupes et en créant des évènements. 				</p>
                                <p>Simple & Rapide</p>
                                <p>En moins de 3 clics, trouvez un partenaire pour faire du sport ! </p>
                        </div>
		</section>
		<section id="banniere4">
			<p id="join">JOIN US</p>		
		</section>
	</body>
	 <?php include("footer.php") ?> 
</html>