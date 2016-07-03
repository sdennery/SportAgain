<?php
    try {
            $db_recherche = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', ''); 
         }
            
     catch(exception $e) {
                die('Erreur : ' . $e->getMessage());
     }

?>    