<?php
function connectBDD(){
try
{
    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');

    return($bdd);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
}
?>