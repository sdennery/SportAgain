<?php 
require_once("connectBDD.php");
 ?>
<?php session_start() ;?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Forum</title>
 
       <?php include('../Controleur/choix_header.php'); ?>
        <link rel="stylesheet" href="../Vue/style.css" />
        
    
    </head>
            
        
    <body class="fond">
        <h1 class="titre1">Catégories du Forum</h1>
        
<?php
// Connexion à la base de données

    connectBDD();


// On récupère les categories triées par date
$req = connectBDD()->query('SELECT id, titre, contenu, DAY(date_post) AS jour, MONTH(date_post) AS mois, YEAR(date_post) AS annee, HOUR(date_post) AS heure, MINUTE(date_post) AS minute, SECOND(date_post) AS seconde FROM categories ORDER BY date_post ');

//affiche l'ensemble des données de la bdd
while ($donnees = $req->fetch())
{
?>
<div class="banniere_image">
    <h2 class="titre2">

    <!--On affiche le titre de la catégorie -->
    <?php echo htmlspecialchars($donnees['titre']); ?>
    
    </h2>
    
    <p class="contenu">
    <strong>
    <?php
    //On affiche le contenu de la catégorie 
        echo nl2br(htmlspecialchars($donnees['contenu']));
        ?>  
        </strong>
    </p>   

    <!--insert dans l'url l'identifiant de la catégorie -->
    <p class="lien_commentaire">
    <em><a href="../Modele/commentaires.php?categorie=<?php echo $donnees['id']; ?>">Commentaires</a></em>
    </p>

    <!-- affiche la date -->
    <p class="date">
        <em>le <?php echo $donnees['jour']?> / <?php echo $donnees['mois'] ?> / <?php echo $donnees['annee'] ?> à <?php echo $donnees['heure'] ?> h  <?php echo $donnees['minute'] ?> min et <?php echo $donnees['seconde'] ?> sec </em>
        </p>
</div>
<?php
} // Fin de la boucle des categories
$req->closeCursor();
?>

        <p><a href="../Vue/formulaireAjoutCategorie.php">Retour au formulaire d'ajout de catégorie</a></p>
</body>
<?php include('../Vue/footer.php'); ?>
</html>

