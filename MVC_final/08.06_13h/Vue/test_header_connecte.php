<head>
        <link rel="stylesheet" href="header.css">
        <meta charset="utf-8"/>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
        <header> 
            <div id="structure">
            <div id="header">
                <div id="teteG">              <img src="../Vue/Image/logofinish1 (3).png">      <img src="../Vue/Image/fairplay.jpg" style="margin-left:280px"/> </div>
                <div id="teteD"> <a href="vue_gestion_profil" class="design2"> <?php echo $_SESSION['pseudo'] ?>    </a>  <span> | </span> <a class="design2" href="../Controleur/controleur_deconnexion.php"> Deconnexion</a> </div>
                

                
            </div> 
            <div id="gris">     
                <nav id="menu">    
                <ul>
                	<li>
                            <a href="../Vue/body-acceuil.php">Accueil</a>
                	</li>
                	<li>
                    	<a href="">Groupes</a>
                    	<ul>
                            <li><a href="../Vue/affichage_groupe.php" style="width:235px"> Rechercher un groupe  </a></li>
                            <li><a href="../Vue/creergroupe.php" style="width:235px" > Créer un groupe </a></li>
                    	</ul>
                	</li>
                	<li>
                	    <a href="">Clubs</a>
                	    <ul>
                                <li><a href="../Vue/Page_club.php" style="width:235px">Inscrire son club</a></li>
                                <li><a href="../Vue/affichage_club.php" style="width:235px">Voir les clubs</a></li>
                	    </ul>
                	</li>
                	<li>
                            <a href="../Modele/blog2.php">Forum</a>
                	</li>
                	<li>
                    	<a href="#">plus</a>
                    	<ul>
                        	<li><a href="#">nous contacter</a></li>
                        	<li><a href="#">team</a></li>
                        	<li><a href="#">recherche</a></li>
                    	</ul>
                	</li>
        	</ul>
                    <img src="../Vue/Image/loupe.png" style="width:20px;min-width:20px;height:20px;min-height: 20px" id="loupe"/><input type="search"  placeholder="Rechercher" class="BarreRecherche"/>
                    </div>
                </nav> 
            </div>     
    </header>