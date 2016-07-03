<?php

$status=true;

while ($status){
    


$bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));


$req = $bdd->prepare('UPDATE club SET adresse = :adresse, sport = :sport, numero_club = :numero_club, telephone = :telephone, descriptif = :descriptif, nom = :nom, Departement = :Departement WHERE id_club = \'26\' ');
		
	$req->execute(array( 
			':adresse' => $_POST['adresse'],
			':sport' => $_POST['sport'],
                        ':numero_club' => $_POST['Numero_association'],
			':telephone' => $_POST['telephone_du_club'],
                        ':descriptif' => $_POST['Descriptif'],
                        ':nom' => $_POST['nom'],
                        
			':Departement' => $_POST['departement']
			));
        
        $req->closeCursor();
        
        echo'<p> votre club a bien été modifié</p>';
        
        $status=FALSE;
}