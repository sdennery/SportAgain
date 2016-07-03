<html>
<head>
    <link rel="stylesheet" href="../Vue/affichage_groupe.css">
    <meta charset="utf-8"/>
</head>
</html>
<?php
include "../Modele/connect.php";
include "../Modele/fonction_evenement.php";
$a=0;
$nombreDePages=0;
if(isset($_GET['requete'])){
    if(!empty($_GET['requete'])){
        $req=$_GET['requete'];
        $vignettesParPage=2;
        $requete=htmlspecialchars($req); 
        $nombreDePages=nb_total_vignettes_evenement($vignettesParPage,$requete);
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
            $vignettes=get_vignettes_evenement($premiereEntree,$vignettesParPage,$requete);
            //print_r($vignettes);
            foreach($vignettes as $cle => $vignette) 
            {
                $vignettes[$cle]['titre']=htmlspecialchars($vignette['titre']);
                $vignettes[$cle]['lieu']=htmlspecialchars($vignette['lieu']);
                $vignettes[$cle]['horaire']=htmlspecialchars($vignette['horaire']);
                $vignettes[$cle]['description']=htmlspecialchars($vignette['description']);
                $vignettes[$cle]['nb_place']=htmlspecialchars($vignette['nb_place']);
                $vignettes[$cle]['sport']=htmlspecialchars($vignette['sport']);
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
include "../Vue/body-accueil.php";
?>