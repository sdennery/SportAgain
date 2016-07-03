<?php session_start() ;?>

<html>
    <head>
        <link rel="stylesheet" href="Page_club.css">
        <meta charset="utf-8"/>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
        
        <?php require '../Controleur/choix_header.php';?> 
        
        <?php if (empty($_SESSION['id']))
{
    include '../Vue/vue_visiteur.php';
}
else {
    include '../Vue/vue_body_Page_club.php';
}
?>
       
        <?php include("footer.php") ?> 
</html>