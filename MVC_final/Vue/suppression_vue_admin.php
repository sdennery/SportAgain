<html>
<head>
    <link rel="stylesheet" href="affichage_administrateur.css">
    <meta charset="utf-8"/>
</head>
<?php
    if (isset($_GET['id_utilisateur'])){
        if(isset($suppression_utilisateur)){
        ?>
             <a href="../Controleur/controleur_administrateur.php"> <?php echo 'L\'utilisateur a bien été supprimé'; ?></a>
        <?php
        }
    }
     if (isset($_GET['id_groupe'])){
        if(isset($suppression_groupe)){
        ?>
             <a href="../Controleur/controleur_administrateur.php"> <?php echo "Le groupe a bien été supprimé"; ?></a>
        <?php
        }
     }
     if (isset($_GET['id_club'])){
        if(isset($suppression_club)){
        ?>
             <a href="../Controleur/controleur_administrateur.php"> <?php echo "Le club a bien été supprimé"; ?></a>
        <?php
        }
    }
    ?>
</html>