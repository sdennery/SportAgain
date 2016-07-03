<?php
$reponse4 = $bdd->query('SELECT id_utilisateur, prenom, departement, sport_favori, date_inscription FROM utilisateur ORDER BY id_utilisateur DESC LIMIT 0,3 ');

while ($donnees = $reponse4->fetch())
{
?>
<p>
<?php echo $donnees['prenom'].' ('.$donnees['departement'].') passioné par '.$donnees['sport_favori'].' inscrit le '.$donnees['date_inscription']; ?> <br />
</p>
<?php
    }

$reponse4->closeCursor(); 
?>