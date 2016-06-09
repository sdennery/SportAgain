<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
if (isset($_GET))
{
    if(!empty($_GET))
    {
        if (($_GET['sport'])!="0")
        {
            if (isset($_GET['id_planning']))
            {
                $id=$_GET['id_planning'];
                $vignette_planning_unique =  afficher_planning_unique($id);
            }else{
                $error_message="Aucun résultat !";
            }
            $vignettes_planning=get_vignettes_avancee_planning();
            $nombre_total_vignette = nb_total_vignettes_avancee($vignettes_planning);
            if($nombre_total_vignette!=0)
            {
                foreach($vignettes_planning as $cle =>$vignette)
                {
                    $vignettes_planning[$cle]['titre']=htmlspecialchars($vignette['titre']);
                    
                    $vignettes_planning[$cle]['lieu']=htmlspecialchars($vignette['lieu']);
                    $vignettes_planning[$cle]['horaire']=htmlspecialchars($vignette['date']);
                    $vignettes_planning[$cle]['sport']=htmlspecialchars($vignette['sport']);
                    $vignettes_planning[$cle]['descriptif_event']=htmlspecialchars($vignette['descriptif_event']);
                }
            }else{
                $error_message="Aucun résultat trouvé!";
            }
        }else{
            $error_message="Vous devez remplir tous les champs!";
        }
    }else{
        $error_message= "Vous devez remplir tous les champs!";
    }
}else{
    $error_message= "";
}
include "../Vue/vue_recherche_avancee_supprimer_evenement.php";
?>