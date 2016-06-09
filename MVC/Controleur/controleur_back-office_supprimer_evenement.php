<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$vignettesplanning = afficher_planning();
if (isset($vignettesplanning))
{
    if(!empty($vignettesplanning))
    {
        if(isset($_GET['id_planning']))
        {
            $id=htmlspecialchars($_GET['id_planning']);
            $vignette_planning_unique = afficher_planning_unique($id);
            foreach ($vignettesplanning as $cle =>$vignette){
                $vignettesplanning[$cle]['id_planning']=htmlspecialchars($vignette['id_planning']);
                $vignettesplanning[$cle]['titre']=htmlspecialchars($vignette['titre']);
                $vignettesplanning[$cle]['lieu']=htmlspecialchars($vignette['lieu']);
                $vignettesplanning[$cle]['date']=htmlspecialchars($vignette['date']);
                $vignettesplanning[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettesplanning[$cle]['descriptif_event']=htmlspecialchars($vignette['descriptif_event']);    
            }
        }else{
            $error_message="Aucun résultat trouvé!";
        }
    }else{
        $error_message="Aucun évènement trouvé!";
    }
}
include "../Controleur/choix_header.php";     
include "../Vue/vue_back-office_supprimer_evenement.php";
?>