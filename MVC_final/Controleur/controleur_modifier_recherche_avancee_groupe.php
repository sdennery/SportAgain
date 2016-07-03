<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$status=true;
$error_message="";
if(isset($_GET)){
    $error_message2="";
}
if (isset($_POST))
{
    if(!empty($_POST))
    {
        if (($_POST['sport'] && $_POST['departement'] && $_POST['etat'] && $_POST['niveau'])!="0"){
            if(isset($_POST['id_groupe'])){
                $id=$_POST['id_groupe'];
                while ($status){
                    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
		
		
	

/* cette requête préparée sert à modifier les données j'ai rajouté "nouveau" et "nouvelle" au nom des variables mais vous n'êtes pas obligé des faire pareil, c'est juste pour mieux me repérer et comprendre ce que je fais. */
	
	$req = $bdd->prepare('UPDATE groupe SET etat = :etat, sport = :sport, nombre_place = :nombre_place, niveau = :niveau, descriptif = :descriptif, nom = :nom, departement = :departement WHERE id_groupe ='.$id);
	$req->execute(array( 
			':etat' => $_POST['etat'],
			':sport' => $_POST['sport'],
                        ':nombre_place' => $_POST['nombre'],
			':niveau' => $_POST['niveau'],
                        ':descriptif' => $_POST['description'],
                        ':nom' => $_POST['nom'],
                        
			':departement' => $_POST['departement']
			));
                    $status=FALSE;
                    }
            }else{
                        $error_message="Aucun résultat !";
                    }
        $vignettes_modifier_groupe=get_vignettes_avancee_modifier_groupe();
        $nombre_total_modifier_vignette = nb_total_vignettes_avancee($vignettes_modifier_groupe);
        if($nombre_total_modifier_vignette!=0)
            {
            echo "trou";
            echo $nombre_total_modifier_vignette;
                foreach($vignettes_modifier_groupe as $cle =>$vignettes)
                {
                    $vignettes_modifier_groupe[$cle]['etat']=htmlspecialchars($vignettes['etat']);
                    $vignettes_modifier_groupe[$cle]['sport']=htmlspecialchars($vignettes['sport']);
                    $vignettes_modifier_groupe[$cle]['nombre_place']=htmlspecialchars($vignettes['nombre_place']);
                    $vignettes_modifier_groupe[$cle]['niveau']=htmlspecialchars($vignettes['niveau']);
                    $vignettes_modifier_groupe[$cle]['descriptif']=htmlspecialchars($vignettes['descriptif']);
                    $vignettes_modifier_groupe[$cle]['departement']=htmlspecialchars($vignettes['departement']);
                }
            }else{
                $error_message2="Aucun résultat trouvé!";
            }
        }else{
            $error_message2="Vous devez remplir tous les champs!";
        }
        }else{
            $error_message2="Aucun résultat trouvé!";
        }
}else{
    $error_message2="";
}

include "../Vue/vue_recherche_avancee_modifier_groupe.php";