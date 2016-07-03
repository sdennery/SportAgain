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
            $vignettes_evenement=get_vignettes_avancee_evenement();
            $nombre_total_vignette = nb_total_vignettes_avancee($vignettes_evenement);
            if($nombre_total_vignette!=0)
            {
                foreach($vignettes_evenement as $cle =>$vignette)
                {
                    $vignettes_evenement[$cle]['titre']=htmlspecialchars($vignette['titre']);
                    $vignettes_evenement[$cle]['nb_place']=htmlspecialchars($vignette['nb_place']);
                    $vignettes_evenement[$cle]['lieu']=htmlspecialchars($vignette['lieu']);
                    $vignettes_evenement[$cle]['horaire']=htmlspecialchars($vignette['horaire']);
                    $vignettes_evenement[$cle]['sport']=htmlspecialchars($vignette['sport']);
                    $vignettes_evenement[$cle]['description']=htmlspecialchars($vignette['description']);
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
include "../Vue/vue_recherche_avancee_modifier_evenement.php";
?>