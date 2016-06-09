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
        $nombreDeVignette=nb_total_vignettes_evenement($requete);
        if(isset($_GET['id_evenement'])){
            $id=$_GET['id_evenement'];
            $vignette_evenement_unique =  afficher_evenement_unique($id);
        }else{
            $error_message="Aucun résultat !";
        }
        if($nombreDeVignette!=0)
        {
            $vignettes=get_vignettes_evenement($requete);
            foreach($vignettes as $cle => $vignette) 
            {
                $vignettes[$cle]['titre']=htmlspecialchars($vignette['titre']);
                $vignettes[$cle]['nb_place']=htmlspecialchars($vignette['nb_place']);
                $vignettes[$cle]['lieu']=htmlspecialchars($vignette['lieu']);
                $vignettes[$cle]['horaire']=htmlspecialchars($vignette['horaire']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettes[$cle]['description']=htmlspecialchars($vignette['description']);
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
include "../Vue/vue_back-office_modifier_evenement.php";
?>