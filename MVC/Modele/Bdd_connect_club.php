<?php 
    try {
        $db_connexion= new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
    } 
    catch (Exception $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    $reponse = $db_connexion ->exec("INSERT INTO club (`id_club`, `nom`, `Nom_proprietaire`, `adresse`, `Departement`, `sport`, `numero_club`, `telephone`, `descriptif`,'photo', `id_sport`) VALUES ('','$Nom_club','$Nom_proprietaire','$Adresse','$Departement','$Sport','$Numero_club','$Telephone','$Description','$name','')");

?>
