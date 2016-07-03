<html>
<head>
    <link rel="stylesheet" href="affichage_administrateur.css">
    <meta charset="utf-8"/>
</head>
<?php
if (isset($_GET['id_utilisateur'])){
    if(isset($_GET['requete'])){
        if(isset($suppression_utilisateur)){
?>
            <center><?php echo "<a href='../Controleur/controleur_recherche_back-office_utilisateur.php?requete=".$requete."&id_utilisateur=".$id." '>"?> <?php echo 'L\'utilisateur a bien été supprimé'; ?><?php "</a>" ?></center>
        <?php
        }
    }
}
if (isset($_GET['id_groupe'])){
    if(isset($_GET['requete'])){
        if(isset($suppression_groupe)){
        ?>
            <center><?php echo "<a href='../Controleur/controleur_recherche_back-office_groupe.php?requete=".$requete."&id_groupe=".$id." '>"?> <?php echo "Le groupe a bien été supprimé"; ?><?php "</a>" ?></center>
        <?php
        }
    }
}
if (isset($_GET['id_club'])){
    if(isset($_GET['requete'])){
        if(isset($suppression_club)){
        ?>
            <center><?php echo "<a href='../Controleur/controleur_recherche_back-office_club.php?requete=".$requete."&id_club=".$id." '>"?> <?php echo "Le club a bien été supprimé"; ?><?php "</a>" ?></center>
        <?php
        }
    }
}
if (isset($_GET['id_planning'])){
    if(isset($_GET['requete'])){
        if(isset($suppression_planning)){
        ?>
             <center><?php echo "<a href='../Controleur/controleur_recherche_back-office_evenement.php?requete=".$requete."&id_planning=".$id." '>"?> <?php echo 'L\'évènement a bien été supprimé'; ?><?php "</a>" ?></center>
        <?php
        }
    }
}
?>
</html>