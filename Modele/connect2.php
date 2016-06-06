<?php
    $reponse = $bdd->prepare("SELECT * FROM club WHERE nom LIKE '%$requete%' ORDER BY id_club ASC");
    $reponse->execute(array($_GET['requete']));
?>

