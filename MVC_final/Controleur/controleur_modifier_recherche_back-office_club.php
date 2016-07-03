<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8"/>
</head>
</html>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$status=TRUE;
if(isset($_GET['requete']))
{
    if(!empty($_GET['requete']))
    {
        $req=$_GET['requete'];
        $requete2=htmlspecialchars($req);
        $nombreDeVignette=nb_total_vignettes_club($requete2);
        if(isset($_GET['id_club']))
        {
           $id=$_GET['id_club'];
                while ($status){
                    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
                    $req = $bdd->prepare('UPDATE club SET adresse = :adresse, sport = :sport, numero_club = :numero_club, telephone = :telephone, descriptif = :descriptif, nom = :nom, Departement = :Departement WHERE id_club ='.$id);
                    if(isset($req)){		
	                   $req->execute(array( 
			             ':adresse' => $_GET['adresse'],
			             ':sport' => $_GET['sport'],
                        ':numero_club' => $_GET['numero_club'],
			            ':telephone' => $_GET['telephone'],
                        ':descriptif' => $_GET['descriptif'],
                        ':nom' => $_GET['nom'],            
			             ':Departement' => $_GET['departement']
			         ));
                    $status=FALSE;
                    }else{
                        $error_message="Aucun résultat !";
                    }
                }
            }else{
                echo "erreur";  
            }
        if($nombreDeVignette!=0)
        {
            $vignettes=get_vignettes_club($requete2);
            foreach($vignettes as $cle => $vignette) 
            {
                $vignettes[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettes[$cle]['Nom_proprietaire']=htmlspecialchars($vignette['Nom_proprietaire']);
                $vignettes[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $vignettes[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                $vignettes[$cle]['Departement']=htmlspecialchars($vignette['Departement']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettes[$cle]['numero_club']=htmlspecialchars($vignette['numero_club']);
                $vignettes[$cle]['telephone']=htmlspecialchars($vignette['telephone']);
            }
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message= "Vous n'avez saisi aucune information!";
    }
}
else{ 
    $error_message="Vous n'avez saisi aucune information!";
}
include "../Controleur/choix_header.php";  
include "../Vue/vue_back-office_modifier_club.php";
?>