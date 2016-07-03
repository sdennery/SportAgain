<?php
function get_vignettes_evenement($premiereEntree, $vignettesParPage,$requete)
{
    global $bdd;
    $premiereEntree = (int) $premiereEntree;
    $vignettesParPage =(int) $vignettesParPage;
    $retour_vignettes=$bdd->prepare("SELECT * FROM planning WHERE titre LIKE '%$requete%' ORDER BY planning ASC LIMIT $premiereEntree, $vignettesParPage");
    $retour_vignettes->execute(array($requete));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}

function nb_total_vignettes_evenement($vignettesParPage,$requete)
{
    global $bdd;
    $vignettesParPage= (int) $vignettesParPage;
    $reponse = $bdd->prepare("SELECT * FROM planning WHERE titre LIKE '%$requete%' ORDER BY id_planning ASC");
    $reponse->execute(array($requete));
    $result = $reponse->fetchAll();
    $nbre = count($result);
    $nombreDePages=ceil($nbre/$vignettesParPage);
    return $nombreDePages;
}
?>