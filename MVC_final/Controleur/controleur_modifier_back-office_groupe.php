<?php session_start(); ?>
<?php
    include "../Modele/connect.php";
    include "../Modele/modele_administrateur.php";
 $status=TRUE; 
if(isset($_POST)){
        if(!empty($_POST)){
                if(isset($_POST['id_groupe'])){
                    $id=$_POST['id_groupe'];
                while ($status){
                    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
		
		
	

/* cette requête préparée sert à modifier les données j'ai rajouté "nouveau" et "nouvelle" au nom des variables mais vous n'êtes pas obligé des faire pareil, c'est juste pour mieux me repérer et comprendre ce que je fais. */
	
	$req = $bdd->prepare('UPDATE groupe SET etat = :etat, sport = :sport, nombre_place = :nombre_place, niveau = :niveau, descriptif = :descriptif, nom = :nom, departement = :departement WHERE id_groupe ='.$id);
	$req->execute(array( 
			':etat' => $_POST['type'],
			':sport' => $_POST['sport'],
                        ':nombre_place' => $_POST['nombre'],
			':niveau' => $_POST['niveau'],
                        ':descriptif' => $_POST['description'],
                        ':nom' => $_POST['nom'],
                        
			':departement' => $_POST['departement']
			));
                    $status=FALSE;
                }
                }else{
                        $error_message2="Aucun résultat !";
                    }
            $vignettes_modifier_groupe = afficher_groupe();
        }else{
            $error_message2="Vous devez remplir tous les champs!";
        }
    }else{
        $error_message2= "";
    }
    include "../Controleur/choix_header.php";     
    include "../Vue/vue_back-office_modifier_groupe.php";
?>