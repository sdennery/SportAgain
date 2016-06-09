<html>
<head>
    <link rel="stylesheet" href="affichage_administrateur.css">
    <meta charset="utf-8"/>
</head>
<?php
    if (isset($_GET['id_utilisateur'])){
        if(isset($suppression_utilisateur)){
        ?>
    <center><a href="../Controleur/controleur_back-office_supprimer_utilisateur.php"> <?php echo 'L\'utilisateur a bien été supprimé'; ?></a></center>
        <?php
        }
    }
     if (isset($_GET['id_groupe'])){
        if(isset($suppression_groupe)){
        ?>
    <center><a href="../Controleur/controleur_back-office_supprimer_groupe.php"> <?php echo "Le groupe a bien été supprimé"; ?></a></center>
        <?php
        }
     }
     if (isset($_GET['id_club'])){
        if(isset($suppression_club)){
        ?>
            <center> <a href="../Controleur/controleur_back-office_supprimer_club.php"><?php echo "Le club a bien été supprimé"; ?></a></center>
        <?php
        }
    }
    if (isset($_GET['id_planning'])){
        if(isset($suppression_planning)){
        ?>
            <center> <a href="../Controleur/controleur_back-office_supprimer_evenement.php"><?php echo 'L\'évènement a bien été supprimé'; ?></a></center>
        <?php
        }
    }
    ?>
</html>