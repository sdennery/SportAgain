<html> 
    <head>  
        <link rel="stylesheet" href="Page_connexion.css">
        <meta charset="utf-8"/>
    </head>
    <?php include("header_connecte.php")?>   
    
    <body id="body">
        
<?php

// Connexion à la base de données

try
{
    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>


<?php

//Afficher les informations du profil connecté

$req = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = ?');
$req->execute(array($_SESSION['id']));
$resultat = $req->fetch();
?>
        
        <h1>Profil de l'utilisateur </h1> </br></br>
        <p>Nom d'utilisateur  :  <?php echo $resultat['nom_utilisateur']   ?> </p>  </br></br>   
        <p>Nom  :  <?php echo $resultat['nom']   ?> </p>  </br></br> 
        <p>Prénom  :  <?php echo $resultat['prenom']   ?> </p>  </br></br> 
        <p>Email  :  <?php echo $resultat['mail']   ?> </p>  </br></br> 
        <p>Adresse  :  <?php echo $resultat['adresse']   ?> </p>  </br></br> 
        <p>Date de naissance  :  <?php echo $resultat['date_de_naissance']   ?> </p>  </br></br> 
        
        

<?php include'footer.php'?>
</body>
</html>

