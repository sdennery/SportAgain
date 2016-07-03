<?php
$reponse3 = $bdd->query('SELECT * FROM planning ORDER BY id_planning desc LIMIT 0,5 ');
//$reponse3 -> execute(array());
while ($donnees = $reponse3->fetch())
{
?>
<p>
<?php echo $donnees['titre'].', '.$donnees['lieu']; ?> <br />
</p>
<?php
    }

$reponse3->closeCursor(); 
?>