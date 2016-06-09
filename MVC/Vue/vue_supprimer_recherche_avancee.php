<html>
<head>
    <link rel="stylesheet" href="affichage_administrateur.css">
    <meta charset="utf-8"/>
</head>
<?php
if (isset($_GET['id_utilisateur']))
{
    if(isset($suppression_utilisateur))
    {
    ?>
        <center><?php echo "<a href='../Controleur/controleur_recherche_avancee_supprimer_utilisateur.php?sport=".$sport."&departement=".$departement."&id_utilisateur=".$id." '>"?> <?php echo "Le groupe a bien été supprimé"; ?><?php "</a>" ?></center>
    <?php
    }
}
    
if (isset($_GET['id_groupe']))
{
    if(isset($suppression_groupe))
    {
    ?>
        <center><?php echo "<a href='../Controleur/controleur_recherche_avancee_supprimer_groupe.php?sport=".$sport."&niveau=".$niveau."&etat=".$etat."&departement=".$departement."&id_groupe=".$id." '>"?> <?php echo "Le groupe a bien été supprimé"; ?><?php "</a>" ?></center>
    <?php
    }
}
    
if (isset($_GET['id_club']))
{
    if(isset($suppression_club))
    {
    ?>
        <center><?php echo "<a href='../Controleur/controleur_recherche_avancee_supprimer_club.php?sport=".$sport."&departement=".$departement."&id_club=".$id." '>"?> <?php echo "Le club a bien été supprimé"; ?><?php "</a>" ?></center>
    <?php
    }
}
    
if (isset($_GET['id_planning']))
{
    if(isset($suppression_planning))
    {
    ?>
        <center><?php echo "<a href='../Controleur/controleur_recherche_avancee_supprimer_evenement.php?sport=".$sport."&id_planning=".$id." '>"?> <?php echo 'L\'évènement a bien été supprimé'; ?><?php "</a>" ?></center>
    <?php
    }
}
?>
</html>