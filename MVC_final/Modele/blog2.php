<?php session_start() ;?>

<!DOCTYPE html> 
<html> 
   <head> 
      <title>Blog</title>
      <meta charset="utf-8" /> 
      <link rel="stylesheet" href="Forum1.css" />
   </head> 
   <?php require '../Controleur/choix_header.php';?>
<body> 
   <h2 style="margin-left: 600px">Forum</h2> 
   <hr /> 
   <?php 
   $connect = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');


   $requete = $connect->query('SELECT Titre, Commentaire, Sujet, DAY(Date_post) AS jour, MONTH(Date_post) AS mois, YEAR(Date_post) AS annee, HOUR(Date_post) AS heure, MINUTE(Date_post) AS minute, SECOND(Date_post) AS seconde FROM forum'); 

      while ($ligne = $requete->fetch()) 
      {?> 
    <div id="banniere_image" href="">

<?php
         echo '<p><strong>' . htmlspecialchars($ligne['Sujet']) . '</strong> : ';
         echo '<p><strong>' . htmlspecialchars($ligne['Titre']) . '</strong> : ';         
         echo "<div style='margin-left: 100px ; margin-top: -10px'>". htmlspecialchars($ligne['Commentaire'])." </div>"; 
         echo "<div style='margin-left: 1050px'>".'le ' . $ligne['jour'] . '/' . $ligne['mois'] . '/' . $ligne['annee'] . ' à ' . $ligne['heure'] . ' h ' . $ligne['minute'] . ' min et ' . $ligne['seconde'] . ' sec' ." </div>";
         echo "<a href='sousBlog.php' input type = 'button'>Voir l'article </a>";
         echo "<hr />";

    } 
   
   ?>
   <br /> 
   <a href="../Vue/formulaireAjout.php" >RETOUR A LA PAGE D'INSERTION</a>

   </div>
   </br>
            </br>

<footer>
<?php include('../Vue/footer.php'); ?>
</footer>
</body> 
</html>