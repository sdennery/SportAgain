
<?php
$reponse = $bdd->query('SELECT * FROM faq');

while ($donnees = $reponse->fetch())
{
?>

<h1 class="question"> <?php echo $donnees['question'] ?> </h1>
<p class="reponse"> <?php echo $donnees['reponse'] ?> </p>
<br>
<br>
<?php
    }
$reponse->closeCursor(); 
?>