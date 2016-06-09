<?php 
require_once("connectBDD.php");
 ?>
<?php session_start() ;?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Le Forum</title>
        <?php include('../Controleur/choix_header.php'); ?>
    <link href="../Vue/style.css" rel="stylesheet" /> 
    </head>
        
    <body class="fond">

<?php
// Connexion à la base de données

    connectBDD();


// Récupération des categories
$req = connectBDD()->prepare('SELECT id, titre, contenu, DAY(date_post) AS jour, MONTH(date_post) AS mois, YEAR(date_post) AS annee, HOUR(date_post) AS heure, MINUTE(date_post) AS minute, SECOND(date_post) AS seconde FROM categories WHERE id = ? ORDER BY id ');
$req->execute(array($_GET['categorie']));
$donnees = $req->fetch()
?>      
<!-- affichage du titre -->

        <h1 class="titre_commentaire"><?php echo htmlspecialchars($donnees['titre']); ?></h1>
        <p><a href="index.php">Retour à la liste des catégories</a></p>
 



<h2>Commentaires :</h2>

<?php
$req->closeCursor(); // Important : on libère le curseur pour la prochaine requête

// Récupération des commentaires ainsi que de l'id des catégories
$req = connectBDD()->prepare('SELECT auteur, commentaire, DAY(date_post) AS jour, MONTH(date_post) AS mois, YEAR(date_post) AS annee, HOUR(date_post) AS heure, MINUTE(date_post) AS minute, SECOND(date_post) AS seconde FROM commentaires WHERE id_categorie = ? ORDER BY date_post');
// Prend la valeur dans l'url du commentaire mis grâce à
$req->execute(array($_GET['categorie']));

while ($donnees = $req->fetch())
{
?>
<div class="banniere_image">
<p><strong><?php echo htmlspecialchars($donnees['auteur']); ?>:</strong></p>
<p><?php echo nl2br(htmlspecialchars($donnees['commentaire'])); ?></p>



<p class="date_commentaire">le <?php echo $donnees['jour']?> / <?php echo $donnees['mois'] ?> / <?php echo $donnees['annee'] ?> à <?php echo $donnees['heure'] ?> h  <?php echo $donnees['minute'] ?> min et <?php echo $donnees['seconde'] ?> sec </p> 

</div>
<?php
} // Fin de la boucle des commentaires
$req->closeCursor();
?>

<!-- Ajout dans l'url de l'id de la catégorie -->

<?php if(isset($_SESSION['id'])){ ?>
<a href="../Vue/formulaireAjoutCommentaire.php?nom_categorie=<?php echo $_GET['categorie']; ?>">Ajouter un commentaire</a>
 <?php } ?>
    
    </body>
	<br>
	<br>
	<br>
	<?php include('../Vue/footer.php')?>
</html>