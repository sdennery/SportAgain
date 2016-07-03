<?php

      
echo "je suis present!"; ?> </br

<?php


  print_r($_POST);
if (isset($_POST['type']) AND $_POST['type'] !== "")
    {  
  


     if (isset($_POST['nom']) AND $_POST['nom'] !== "") 

       {


         if (isset($_POST['sport']) AND $_POST['sport'] !== "")
            {    
	         


             if (isset($_POST['nombre']) AND $_POST['nombre'] !== "")
                {
				   			   
                   
                      if (isset($_POST['departement']) AND $_POST['departement'] !== ""){
                          
                      
                          
                               if (isset($_POST['departement']) AND $_POST['departement'] !== ""){
                                   
                               
                                       
                                      if (isset($_POST['niveau']) AND $_POST['niveau'] !== ""){
                                          
                                          
                                          if (isset($_POST['description']) AND $_POST['description'] !== ""){
                                              
                                          
                                      
                               
	
	//try
	//	{
            echo "plop";
			$bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
		
		
	

/*cette requètte préparée sert à modifier les données j'ai rajouté "nouveau" et "nouvelle" au nom des variables mais vous n'êtes pas obligé des faire pareil, c'est juste pour mieux me repérer et comprendre ce que je fais.*/
	
	$req = $bdd->prepare('UPDATE groupe SET etat = :etat, sport = :sport, nombre_place = :nombre_place, niveau = :niveau, descriptif = :descriptif, nom = :nom, departement = :departement WHERE id_groupe = \'19\' ');
		
	$req->execute(array( 
			':etat' => $_POST['type'],
			':sport' => $_POST['sport'],
                        ':nombre_place' => $_POST['nombre'],
			':niveau' => $_POST['niveau'],
                        ':descriptif' => $_POST['description'],
                        ':nom' => $_POST['nom'],
                        
			':departement' => $_POST['departement']
			));			
	//    }
	//catch(Exception $e)
	//	{
	//		die('Erreur:'.$e->getMessage());
	//	}
	$req->closeCursor();
	        
			    }
            }
          
       }  }}}}
	
	echo'<p> votre groupe a bien été modifié</p>';
    }
 
 else
    {  	
	echo '<p>Vous n\'avez pas remplis touts les champs demandés</p>';
	}
