<?php session_start(); ?>  
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="creergroupe.css">
    </head>
    <?php include('../Controleur/choix_header.php'); ?>  
    
    <?php if (empty($_SESSION['id'])){
     include '../Vue/vue_visiteur.php';
    }else {
        include'../Vue/vue_body_creer_groupe.php';
    } ?> 

    <?php include("footer.php") ?> 

</html>