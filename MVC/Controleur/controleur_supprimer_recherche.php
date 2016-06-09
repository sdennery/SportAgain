<?php session_start(); ?>
<html>
<head>
    <meta charset="utf-8"/>
</head>
<?php
include "../Controleur/choix_header.php";
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
if (isset($_GET['id_utilisateur'])){
    $id=htmlspecialchars($_GET["id_utilisateur"]);
    $requete=$_GET['requete'];
    $suppression_utilisateur=suppression_utilisateur($id); 
    include "../Vue/vue_supprimer_recherche.php";
}

if (isset($_GET['id_groupe'])){
    $id=htmlspecialchars($_GET["id_groupe"]);
    $requete=$_GET['requete'];
    $suppression_groupe=suppression_groupe($id);
    include "../Vue/vue_supprimer_recherche.php";
}
    
if (isset($_GET['id_club'])){
    $id=htmlspecialchars($_GET["id_club"]);
    $requete=$_GET['requete'];
    $suppression_club = suppression_club($id);
    include "../Vue/vue_supprimer_recherche.php";
}
if (isset($_GET['id_planning'])){
    $id=htmlspecialchars($_GET["id_planning"]);
    $requete=$_GET['requete'];
    $suppression_planning = suppression_planning($id);
    include "../Vue/vue_supprimer_recherche.php";
}
?>
</html>