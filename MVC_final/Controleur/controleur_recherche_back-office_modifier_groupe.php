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
        $nombreDeVignette=nb_total_vignettes_groupe($requete);
        if(isset($_GET['id_groupe'])){
            $id=$_GET['id_groupe'];
            $vignette_groupe_unique =  afficher_groupe_unique($id);
        }else{
            $error_message="Aucun résultat !";
        }
        if($nombreDeVignette!=0){
            $vignettes=get_vignettes_groupe($requete);
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
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message= "Vous n'avez saisi aucune information!";
    }
}else{ 
    $error_message="Vous n'avez saisi aucune information!";
}
include "../Controleur/choix_header.php";  
include "../Vue/vue_back-office_modifier_groupe.php";
?>