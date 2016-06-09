<head>
    <link rel="stylesheet" href="../Vue/header.css">
        <meta charset="utf-8"/>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
        <header> 
            <div id="structure">
            <div id="header">
                <div id="teteG">              <img src="../Vue/Images/logofinish1%20(3).png" style="height:118px">      <img src="../Vue/Images/fairplay.jpg" style="margin-left:280px;height:118px"/> </div>
                <div id="teteD"> <a href="../Vue/Page_profil1.php" class="design2"><?php echo  $_SESSION['pseudo'] ; ?> </a>  <span> | </span> <a class="design2" href="../Vue/controleur_deconnexion.php"> Déconnexion </a> </div>
            </div> 
            <div id="gris">     
                <nav id="menu">    
                <ul>
                	<li>
                            <a href="../Vue/body-acceuil.php">Accueil</a>
                	</li>
					<li>
						<a href="#">Sport</a>
						<ul>
                                                    <li><a href="../Vue/Sport.php" style="width:235px"> Liste des sports</a></li>
							
						
						</ul>
					</li>
                	<li>
                    	<a href="">Groupes</a>
                    	<ul>
                            <li><a href="../Controleur/index_recherche_groupe2.php" style="width:235px"> Rechercher un groupe  </a></li>
                        	<li><a href="../Vue/creergroupe.php" style="width:235px" > Créer un groupe </a></li>
                    	</ul>
                	</li>
                	<li>
                	    <a href="">Clubs</a>
                	    <ul>
                                <li><a href="../Vue/Page_club.php" style="width:235px">Inscrire son club</a></li>
                                <li><a href="../Vue/rechercheclub2.php" style="width:235px">Voir les clubs</a></li>
                	    </ul>
                	</li>
                	<li>
                        <a href="#">Forum</a>
                        
                        <ul>
                	<li>
                            <a href="../Modele/index.php">Catégories Forum</a>
                	</li>
                        </ul>
                        </li>
                	<li>
                    	<a href="#">Aide</a>
                    	<ul>
                            <li><a href="../Vue/nouscontacter.php">Nous contacter</a></li>
                                <li><a href="../Vue/FAQ.php">F.A.Q.</a></li>
                    	</ul>
                	</li>
        	</ul>
                    <img src="../Vue/Image/loupe.png" style="width:20px;min-width:20px;height:20px;min-height: 20px" id="loupe"/><input type="search"  placeholder="Rechercher" class="BarreRecherche"/>
                    </div>
                </nav> 
            </div>     
    </header>