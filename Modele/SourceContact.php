<html>
<head>
        <link rel="stylesheet" href="nouscontacter.css">
        <meta charset="utf-8"/>
        <title Nous Contacter></title>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
        <header> 
            <div id="structure">
            <div id="header">
                <div id="teteG"> <img src="logofinish1%20(3).png"/> <img src="fairplay.jpg" style="margin-left:280px"/> </div>
                <div id="teteD"> <a class= "design2" href='Page%20de%20connexion.html'> Connexion </a> <span> | </span> <a class= "design2" href="Page%20d'inscription.html"> Inscription </a> </div>
            </div> 
            <div id="gris">     
                <nav id="menu">    
                <ul>
                	<li>
                    	<a href="#">Accueil</a>
                	</li>
                	<li>
                    	<a href="#">Sports</a>
                    	<ul>
                        	<li><a href="#">connexion</a></li>
                        	<li><a href="#">inscription</a></li>
                    	</ul>
                	</li>
                	<li>
                    	<a href="">Groupes</a>
                    	<ul>
                        	<li><a href="groupe(NC).html" style="width:235px"> Rechercher un groupe  </a></li>
                        	<li><a href="creergroupe.html" style="width:235px" > Créer un groupe </a></li>
                    	</ul>
                	</li>
                	<li>
                    	<a href="#">Forum</a>
                	</li>
                	<li>
                    	<a href="#">plus</a>
                    	<ul>
                        	<li><a href="nouscontacter.php">nous contacter</a></li>
                        	<li><a href="#">team</a></li>
                        	<li><a href="#">recherche</a></li>
                    	</ul>
                	</li>
        	</ul>
                <img src="loupe.png" style="width:15px;height:18px"/> <input type="search"  placeholder="Rechercher" style="width:153px;height:25px"> 
                    </div>
                </nav> 
            </div>     
    </header>
    <body>
        <?php
        $test1 = $_POST['nom'];
        $test2 = $_POST['prenom'];
        $test3 = $_POST['email'];
        $test4 = $_POST['message'];
        if (!empty($test1)) {
            if (!empty($test2)) {
                if (!empty($test3)) {
                    if (!empty($test4)) {
                        extract($_POST);
                        echo "vos données on bien été envoyés ! ";
                        try {
                            $DB_eve = new PDO ("mysql:host=localhost;dbname=sport'again;charset=utf8",'root','');
                            }
                            catch (exeption $e) {
                                die ('erreur : '. $e ->getMessage());
                            }
                        
                            $reponse=$DB_eve->prepare('INSERT INTO contact (nom, prenom, email, message) VALUES (:nom, :prenom,:email :message)');
                            $reponse->execute(array('nom' => $test1,'prenom' => $test2,'email' => $test3,'message' => $test4));
                        }
                        }
                        }
                        }
    
        ?>
        
        <a href="../Vue/nouscontacter.php"> <strong> <h5> RETOUR </h5></strong>  </a>
    </body>
</html>