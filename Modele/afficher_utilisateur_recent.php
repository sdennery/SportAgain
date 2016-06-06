<?php
$reponse4 = $bdd->query('SELECT id_utilisateur, prenom, departement, sport_favori FROM utilisateur ORDER BY id_utilisateur LIMIT 0,5 ');

while ($donnees = $reponse4->fetch())
{
?>
<p>
<?php echo $donnees['prenom'].'('.$donnees['departement'].') passioné par '.$donnees['sport_favori'].'inscrit le'; ?> <br />
</p>
<?php
    }

$reponse4->closeCursor(); 
?>