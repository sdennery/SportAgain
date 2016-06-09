<!DOCTYPE html> 
<html> 
   <head> 
      <title>Blog</title> 
      <meta charset="utf-8" /> 
   </head> 
<body> 
<?php 
$connect = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');



$requete = $connect->prepare("INSERT INTO forum (id_forum, Titre,  Commentaire, Date_post, Sujet) VALUES ('',?, ?, NOW(), ?)");
$requete->execute(array($_POST['titre'],  $_POST['commentaire'], $_POST['sujet']));

?> 
    <a href="../Modele/blog2.php" >VISITEZ LE BLOG</a>
</body> 
</html>