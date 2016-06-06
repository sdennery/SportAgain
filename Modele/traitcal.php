<?php



try {
    $DB = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8",'root','');
    
}
catch(exception $e) {
    die ('erreur : ' . $e->getMessage());
}

?>

