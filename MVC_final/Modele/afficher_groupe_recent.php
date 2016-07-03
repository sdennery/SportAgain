<?php
$reponse = $bdd->query('SELECT id_groupe, nom, sport, photo_groupe, departement FROM groupe ORDER BY id_groupe LIMIT 0,5 ');

while ($donnees = $reponse->fetch())
{
?>
<p>
<?php echo $donnees['nom'].', '.$donnees['departement'].', '.$donnees['sport']; ?> <br />
</p>
<?php
    }

$reponse->closeCursor(); 
?>