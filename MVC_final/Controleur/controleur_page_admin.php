
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$nbre_groupe = nb_total_groupe();
$nbre_club = nb_total_club();
$nbre_utilisateur = nb_total_utilisateur();
$nbre_planning = nb_total_planning();
if(isset($nbre_groupe)){
    $nbre_total_groupe =htmlspecialchars($nbre_groupe);
}else{
    $err_message="0";
}

if(isset($nbre_club)){
        $nbre_total_club =htmlspecialchars($nbre_club);
}else{
    $err_message="0";
}
if(isset($nbre_utilisateur)){
    $nbre_total_utilisateur =htmlspecialchars($nbre_utilisateur);
}else{
    $err_message="0";
}

if(isset($nbre_planning)){
    $nbre_total_planning =htmlspecialchars($nbre_planning);
}else{
    $err_message="0";
}

?>