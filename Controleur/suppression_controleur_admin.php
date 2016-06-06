<?php session_start(); ?> 

<html>
<head>
    <meta charset="utf-8"/>
</head>


<?php
require "../Controleur/choix_header.php";
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
if (isset($_GET['id_utilisateur'])){
    $id=htmlspecialchars($_GET["id_utilisateur"]);
    $suppression_utilisateur=suppression_utilisateur($id); 
    }
    
if (isset($_GET['id_groupe'])){
    $id=htmlspecialchars($_GET["id_groupe"]);
    $suppression_groupe=suppression_groupe($id);
    }
    
if (isset($_GET['id_club'])){
    $id=htmlspecialchars($_GET["id_club"]);
    $suppression_club = suppression_club($id);
    }
if (isset($_GET['id_evenement'])){
    $id=htmlspecialchars($_GET["id_evenement"]);
    $suppression_club = suppression_evenement($id);
    }
    include "../Vue/suppression_vue_admin.php";
?>

</html>