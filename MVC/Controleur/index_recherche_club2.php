<html>
<head>
    <link rel="stylesheet" href="../Vue/affichage_groupe.css">
    <meta charset="utf-8"/>
</head>
</html>
<?php
include "../Modele/connect.php";
include "../Modele/fonction_club.php";
$a=0;
$nombreDePages=0;
if(isset($_GET['requete'])){
    if(!empty($_GET['requete'])){
        $req=$_GET['requete'];
        $vignettesParPage=2;
        $requete=htmlspecialchars($req); 
        $nombreDePages=nb_total_vignettes_club($vignettesParPage,$requete);
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
            $vignettes=get_vignettes_club($premiereEntree,$vignettesParPage,$requete);
            //print_r($vignettes);
            foreach($vignettes as $cle => $vignette) 
            {
               $vignettes[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettes[$cle]['Nom_proprietaire']=htmlspecialchars($vignette['Nom_proprietaire']);
                $vignettes[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $vignettes[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                $vignettes[$cle]['Departement']=htmlspecialchars($vignette['Departement']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettes[$cle]['numero_club']=htmlspecialchars($vignette['numero_club']);
                $vignettes[$cle]['telephone']=htmlspecialchars($vignette['telephone']);
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
include "../Vue/index_recherche_club.php";
?>