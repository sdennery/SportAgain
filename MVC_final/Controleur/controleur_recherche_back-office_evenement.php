<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8"/>
</head>
</html>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
if(isset($_GET['requete']))
{
    if(!empty($_GET['requete']))
    {
        $req=$_GET['requete'];
        $requete=htmlspecialchars($req);
        $nombreDeVignette=nb_total_vignettes_planning($requete);
        if(isset($_GET['id_planning'])){
            $id=$_GET['id_planning'];
            $vignette_planning_unique =  afficher_planning_unique($id);
        }else{
            $error_message="Aucun résultat !";
        }
        if($nombreDeVignette!=0){
            $vignettes=get_vignettes_planning($requete);
            foreach($vignettes as $cle => $vignette) 
            {
                $vignettes[$cle]['titre']=htmlspecialchars($vignette['titre']);
                
                $vignettes[$cle]['lieu']=htmlspecialchars($vignette['lieu']);
                $vignettes[$cle]['date']=htmlspecialchars($vignette['date']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettes[$cle]['descriptif_event']=htmlspecialchars($vignette['descriptif_event']);
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
include '../Controleur/choix_header.php';
include "../Vue/vue_back-office_supprimer_evenement.php";
?>