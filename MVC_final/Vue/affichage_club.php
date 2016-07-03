<?php session_start() ;?>
<html>
   <head>
        <link rel="stylesheet" href="affichage_club.css">
        <meta charset="utf-8"/>
    </head>
        <!--Mise en place du logo et connexion/inscription-->
        <?php require '../Controleur/choix_header.php';?> 
    <body>
        <div class="fondBleu">
            <br>
            <br>
            <div class="bordure">
                <form method="GET" action="../Controleur/mini_moteur_recherche_club.php">
                    <br>
                    <br>
                <p>  <center> <input type="text" name="requete" placeholder="Recherchez le nom d'un club" size="30">
                    <input type="submit" value="Ok"></center></p>
                    <br>
                    <br>
                    <p> <a href="rechercheclub2.php" class="recherche" > <center>Recherche Avancée  </center></a></p>
                </form>
            </div>
        </div>               
<?php include("footer.php") ?> 
</body>      
</html>