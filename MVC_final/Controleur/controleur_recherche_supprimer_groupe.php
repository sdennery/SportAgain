<?php session_start(); ?>
<html>
<head>
    <link rel="stylesheet" href="../Vue/affichage_groupe.css">
    <meta charset="utf-8"/>
</head>
</html>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
if(isset($_GET['requete'])){
    if(!empty($_GET['requete'])){
        $req=$_GET['requete'];
        $requete=htmlspecialchars($req);
         $nombreDeVignette=nb_total_vignettes($vignettesParPage,$requete);
            if (isset($_GET['id_groupe'])){
                $id=$_GET['id_groupe'];
                $vignette_groupe_unique =  afficher_groupe_unique($id);
            }else{
                $error_message="Aucun résultat !";
            }
            $vignettes=get_vignettes($requete);
            if($nombreDeVignette!=0){
            //print_r($vignettes);
            foreach($vignettes as $cle => $vignette) 
            {
                $vignettes[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettes[$cle]['etat']=htmlspecialchars($vignette['etat']);
                $vignettes[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $vignettes[$cle]['nombre_inscrit']=htmlspecialchars($vignette['nombre_inscrit']);
                $vignettes[$cle]['nombre_place']=htmlspecialchars($vignette['nombre_place']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettes[$cle]['niveau']=htmlspecialchars($vignette['niveau']);
                $vignettes[$cle]['departement']=htmlspecialchars($vignette['departement']);
            }
            $a++;
        }else{
            $error_message= "Aucun résultat trouvé!";
            $a++;
        }
    }else{
        $error_message= "Vous n'avez saisi aucune information!";
        $a++;
    }
}
else{ 
    $error_message="";
}
include "../Vue/index_recherche_groupe.php";
?>