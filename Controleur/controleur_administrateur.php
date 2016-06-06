
<?php
    include "../Modele/connect.php";
    include "../Modele/modele_administrateur.php";
    $vignette = afficher_utilisateur();
    foreach ($vignette as $cle =>$vignettes){
        $vignette[$cle]['id_utilisateur']=htmlspecialchars($vignettes['id_utilisateur']);
        $vignette[$cle]['nom_utilisateur']=htmlspecialchars($vignettes['nom_utilisateur']);
    }
    $vignette2 = afficher_groupe();
    foreach ($vignette2 as $cle =>$vignettes2){
        $vignette2[$cle]['id_groupe']=htmlspecialchars($vignettes2['id_groupe']);
        $vignette2[$cle]['nom']=htmlspecialchars($vignettes2['nom']);
    }
    $vignette3 = afficher_club();
    foreach ($vignette3 as $cle =>$vignettes3){
        $vignette3[$cle]['id_club']=htmlspecialchars($vignettes3['id_club']);
        $vignette3[$cle]['nom']=htmlspecialchars($vignettes3['nom']);
        
    }
    $vignette4 = afficher_evenement();
    foreach ($vignette4 as $cle =>$vignettes4){
         $vignette4[$cle]['id_evenement']=htmlspecialchars($vignettes4['id_evenement']);
        $vignette4[$cle]['titre']=htmlspecialchars($vignettes4['titre']);
    }
require_once '../Controleur/choix_header.php';
include "../Vue/administrateur_vue.php";
?>