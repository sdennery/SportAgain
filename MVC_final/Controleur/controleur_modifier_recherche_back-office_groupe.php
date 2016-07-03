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
        $nombreDeVignette=nb_total_vignettes_groupe($requete2);
        if(isset($_GET['id_groupe']))
        {
           $id=$_GET['id_groupe'];
                while ($status){
                    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
		
		
	

/* cette requête préparée sert à modifier les données j'ai rajouté "nouveau" et "nouvelle" au nom des variables mais vous n'êtes pas obligé des faire pareil, c'est juste pour mieux me repérer et comprendre ce que je fais. */
	
	$req = $bdd->prepare('UPDATE groupe SET etat = :etat, sport = :sport, nombre_place = :nombre_place, niveau = :niveau, descriptif = :descriptif, nom = :nom, departement = :departement WHERE id_groupe ='.$id);
	$req->execute(array( 
			':etat' => $_GET['etat'],
			':sport' => $_GET['sport'],
                        ':nombre_place' => $_GET['nombre'],
			':niveau' => $_GET['niveau'],
                        ':descriptif' => $_GET['description'],
                        ':nom' => $_GET['nom'],
                        
			':departement' => $_GET['departement']
			));
                    $status=FALSE;
                    }
        }else{
                        $error_message="Aucun résultat !";
                    }
                }
        if($nombreDeVignette!=0)
        {
            $vignettes=get_vignettes_groupe($requete2);
            foreach($vignettes as $cle => $vignette) 
            {
                $vignettes[$cle]['etat']=htmlspecialchars($vignette['etat']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettes[$cle]['nombre_place']=htmlspecialchars($vignette['nombre_place']);
                $vignettes[$cle]['niveau']=htmlspecialchars($vignette['niveau']);
                $vignettes[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $vignettes[$cle]['departement']=htmlspecialchars($vignette['departement']);
            }
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{ 
    $error_message="Vous n'avez saisi aucune information!";
}
include "../Controleur/choix_header.php";  
include "../Vue/vue_back-office_modifier_groupe.php";
?>