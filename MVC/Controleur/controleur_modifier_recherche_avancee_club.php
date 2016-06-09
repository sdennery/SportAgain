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
        if (($_POST['sport'] && $_POST['departement'])!="0")
        {
            if(isset($_POST['id_club'])){
                $id=$_POST['id_club'];
                while ($status){
                    $bdd = new PDO("mysql:host=localhost;dbname=sport'again;charset=utf8", 'root', '');
                    $req = $bdd->prepare('UPDATE club SET adresse = :adresse, sport = :sport, numero_club = :numero_club, telephone = :telephone, descriptif = :descriptif, nom = :nom, Departement = :Departement WHERE id_club ='.$id);
                    if(isset($req)){		
	                   $req->execute(array( 
			             ':adresse' => $_POST['adresse'],
			             ':sport' => $_POST['sport'],
                        ':numero_club' => $_POST['numero_club'],
			            ':telephone' => $_POST['telephone'],
                        ':descriptif' => $_POST['descriptif'],
                        ':nom' => $_POST['nom'],            
			             ':Departement' => $_POST['departement']
			         ));
                    $status=FALSE;
                    }else{
                        $error_message="Aucun résultat !";
                    }
                }
            }else{
                echo "erreur";  
            }
        $vignettes_modifier_club=get_vignettes_avancee_modifier_club();
        $nombre_total_modifier_vignette = nb_total_vignettes_avancee($vignettes_modifier_club);
        if($nombre_total_modifier_vignette!=0)
            {
                foreach($vignettes_modifier_club as $cle =>$vignettes)
                {
                    $vignettes_modifier_club[$cle]['nom']=htmlspecialchars($vignettes['nom']);
                    $vignettes_modifier_club[$cle]['Nom_proprietaire']=htmlspecialchars($vignettes['Nom_proprietaire']);
                    $vignettes_modifier_club[$cle]['adresse']=htmlspecialchars($vignettes['adresse']);
                    $vignettes_modifier_club[$cle]['descriptif']=htmlspecialchars($vignettes['descriptif']);
                    $vignettes_modifier_club[$cle]['numero_club']=htmlspecialchars($vignettes['numero_club']);
                    $vignettes_modifier_club[$cle]['sport']=htmlspecialchars($vignettes['sport']);
                    $vignettes_modifier_club[$cle]['telephone']=htmlspecialchars($vignettes['telephone']);
                    $vignettes_modifier_club[$cle]['Departement']=htmlspecialchars($vignettes['Departement']);
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
        $error_message2= "";
    }

include "../Vue/vue_recherche_avancee_modifier_club.php";