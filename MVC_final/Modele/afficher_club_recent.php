<?php
$reponse2 = $bdd->query('SELECT id_club, nom, sport, Departement FROM club ORDER BY id_club LIMIT 0,5 ');

while ($donnees = $reponse2->fetch())
{
?>
<p>
<?php echo $donnees['nom'].', '.$donnees['Departement'].', '.$donnees['sport']; ?> <br />
</p>
<?php
    }

$reponse2->closeCursor(); 

?>