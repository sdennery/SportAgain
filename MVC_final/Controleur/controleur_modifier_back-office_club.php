<?php session_start(); ?>
<?php
    include "../Modele/connect.php";
    include "../Modele/modele_administrateur.php";
 $status=TRUE; 
if(isset($_POST)){
        if(!empty($_POST)){
                if(isset($_POST['id_club'])){
                    $id=$_POST['id_club'];
                while ($status){
                    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
                    $req = $bdd->prepare('UPDATE club SET adresse = :adresse, sport = :sport, numero_club = :numero_club, telephone = :telephone, descriptif = :descriptif, nom = :nom, Departement = :Departement WHERE id_club ='.$id);
                    if(isset($req)){		
	                   $req->execute(array( 
			             ':adresse' => $_POST['adresse'],
			             ':sport' => $_POST['sport'],
                        ':numero_club' => $_POST['numero_club'],
			            ':telephone' => $_POST['telephone'],
                        ':descriptif' => $_POST['descriptif'],
                        ':nom' => $_POST['nom'],            
			             ':Departement' => $_POST['departement']
			         ));
                    $status=FALSE;
                    }else{
                        $error_message2="Aucun résultat !";
                    }
                }
            }else{
                echo "erreur";  
            }
            $vignettes_modifier_club = afficher_club();
        }else{
            $error_message2="Vous devez remplir tous les champs!";
        }
    }else{
        $error_message2= "";
    }
    include "../Controleur/choix_header.php";   
    include "../Vue/vue_back-office_modifier_club.php";
?>