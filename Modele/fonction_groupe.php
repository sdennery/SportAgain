
<?php
function get_vignettes($premiereEntree, $vignettesParPage,$requete)
{
    global $bdd;
    $premiereEntree = (int) $premiereEntree;
    $vignettesParPage =(int) $vignettesParPage;
    $retour_vignettes=$bdd->prepare("SELECT * FROM groupe WHERE nom LIKE '%$requete%' ORDER BY id_groupe ASC LIMIT $premiereEntree, $vignettesParPage");
    $retour_vignettes->execute(array($requete));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}

function nb_total_vignettes($vignettesParPage,$requete)
{
    global $bdd;
    $vignettesParPage= (int) $vignettesParPage;
    $reponse = $bdd->prepare("SELECT * FROM groupe WHERE nom LIKE '%$requete%' ORDER BY id_groupe ASC");
    $reponse->execute(array($requete));
    $result = $reponse->fetchAll();
    $nbre = count($result);
    $nombreDePages=ceil($nbre/$vignettesParPage);
    return $nombreDePages;
}

function nb_total_vignettes_avancee($vignettesParPage)
{
    global $bdd;
    $vignettesParPage =(int) $vignettesParPage;
    $reponse = $bdd->prepare('SELECT * FROM groupe WHERE sport=? AND niveau=? AND etat=? AND departement=?');
    $reponse->execute(array($_GET['sport'],$_GET['niveau'],$_GET['etat'],$_GET['departement']));
    $SELECT_COUNT = $reponse->fetchAll();
    $nbre = count($SELECT_COUNT);
    $nombreDePages=ceil($nbre/$vignettesParPage);
    return $nombreDePages;
}
function get_vignettes_avancee($premiereEntree, $vignettesParPage){
    global $bdd;
    $premiereEntree = (int) $premiereEntree;
    $vignettesParPage =(int) $vignettesParPage;
    $retour_vignettes=$bdd->prepare("SELECT * FROM groupe WHERE sport= ? AND niveau=? AND etat=? AND departement=? LIMIT $premiereEntree, $vignettesParPage");
    $retour_vignettes->execute(array($_GET['sport'],$_GET['niveau'],$_GET['etat'],$_GET['departement']));
    $vignettes = $retour_vignettes->fetchAll();
    return $vignettes;
}
?>