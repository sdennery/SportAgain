<html>
	<head>
        <link rel="stylesheet" href="body-acceuil.css">
        <meta charset="utf-8"/>
    </head>

<?php
    try
        {
           $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
        }
           catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }
?>
    
<?php
$reponse = $bdd->query('SELECT id_groupe, nom, sport, photo_groupe, departement FROM groupe ORDER BY id_groupe LIMIT 0,5 ');

while ($donnees = $reponse->fetch())
{
?>
<p>
    <strong>Groupe</strong> : <?php echo $donnees['nom'].', '.$donnees['departement'].', '.$donnees['sport']; ?> <br />
</p>
<?php
    }

$reponse->closeCursor(); 
?>




<?php
$reponse2 = $bdd->query('SELECT id_club, nom, sport, Departement FROM club ORDER BY id_club LIMIT 0,5 ');

while ($donnees = $reponse2->fetch())
{
?>
<p>
    <strong>Club</strong> : <?php echo $donnees['nom'].', '.$donnees['Departement'].', '.$donnees['sport']; ?> <br />
</p>
<?php
    }

$reponse2->closeCursor(); 
?>




<?php
$reponse3 = $bdd->query('SELECT id_evenement, titre, lieu, sport FROM evenement ORDER BY id_evenement LIMIT 0,5 ');

while ($donnees = $reponse3->fetch())
{
?>
<p>
    <strong>Evenement</strong> : <?php echo $donnees['titre'].', '.$donnees['lieu'].', '.$donnees['sport']; ?> <br />
</p>
<?php
    }

$reponse3->closeCursor(); 
?>

</html>
 

