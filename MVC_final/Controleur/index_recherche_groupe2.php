<?php session_start();?>   
<?php require '../Controleur/choix_header.php';?>   
<html>
<head>
    <link rel="stylesheet" href="../Vue/affichage_groupe.css">
    <meta charset="utf-8"/>
</head>
</html>
<?php
include "../Modele/connect.php";
include "../Modele/fonction_groupe.php";
$a=0;
$nombreDePages=0;
if(isset($_GET['requete'])){
    if(!empty($_GET['requete'])){
        $req=$_GET['requete'];
        $vignettesParPage=2;
        $requete=htmlspecialchars($req); 
        $nombreDePages=nb_total_vignettes($vignettesParPage,$requete);
        if($nombreDePages!=0){
            if(isset($_GET['p']) && !empty($_GET['p'])){
                $_GET['p']=intval($_GET['p']);
                if($_GET['p']>$nombreDePages){
                    $pageActuelle = $nombreDePages;
                    }else{
                        $pageActuelle=$_GET['p'];
                    }
            }else{
                $pageActuelle = 1;
            }
            $premiereEntree=($pageActuelle-1)*$vignettesParPage; 
            $vignettes=get_vignettes($premiereEntree,$vignettesParPage,$requete);
            //print_r($vignettes);
            foreach($vignettes as $cle => $vignette) 
            {
                $vignettes[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettes[$cle]['etat']=htmlspecialchars($vignette['etat']);
                $vignettes[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $vignettes[$cle]['nombre_inscrit']=htmlspecialchars($vignette['nombre_inscrit']);
                $vignettes[$cle]['nombre_place']=htmlspecialchars($vignette['nombre_place']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettes[$cle]['niveau']=htmlspecialchars($vignette['niveau']);
                $vignettes[$cle]['departement']=htmlspecialchars($vignette['departement']);
            }
            $a++;
        }else{
            $error_message= "Aucun résultat trouvé!";
            $a++;
        }
    }else{
        $error_message= "Vous n'avez saisi aucune information!";
        $a++;
    }
}
else{ 
    $error_message="";
}
include "../Vue/index_recherche_groupe.php";

?>
<?php include("../Vue/footer.php") ?> 