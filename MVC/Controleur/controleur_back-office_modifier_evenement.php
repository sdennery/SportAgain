<?php session_start(); ?>
    <?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$vignettesevenement = afficher_planning();
if(isset($vignettesclub))
{
    if(!empty($vignettesclub))
    {
        if(isset($_GET['id_evenement']))
        {
            $id=htmlspecialchars($_GET['id_evenement']);
            $vignette_evenement_unique = afficher_evenement_unique($id);
            foreach ($vignettesevenement as $cle =>$vignette){
                $vignettesevenement[$cle]['id_evenement']=htmlspecialchars($vignette['id_evenement']);
                $vignettesevenement[$cle]['titre']=htmlspecialchars($vignette['titre']);
            }
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message="Aucun évènement trouvé!";
    }
}
include "../Controleur/choix_header.php";     
include "../Vue/vue_back-office_modifier_evenement.php";
?>