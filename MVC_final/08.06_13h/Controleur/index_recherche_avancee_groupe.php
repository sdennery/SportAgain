<?php session_start();?>  

<?php require '../Controleur/choix_header.php';?>  
<?php
include "../Modele/connect.php";
include "../Modele/fonction_groupe.php";
$a=0;
$nombreDePages=0;
if (isset($_GET))
{
    if(!empty($_GET))
    {
       if (($_GET['sport'] && $_GET['niveau'] && $_GET['etat'] && $_GET['departement'])!="0")
       {
            global $bdd;
            $vignettesParPage=2;
            $nombreDePages=nb_total_vignettes_avancee($vignettesParPage);
            if($nombreDePages!=0)
            {
                if(isset($_GET['p']) && !empty($_GET['p']))
                {
                    $_GET['p']=intval($_GET['p']);
                    if($_GET['p']>$nombreDePages){
                        $pageActuelle = $nombreDePages;
                    }else{
                        $pageActuelle=$_GET['p'];
                    }
                }else{
                    $pageActuelle = 1;
                }
                $premiereEntree=($pageActuelle-1)*$vignettesParPage; // On calcul la première entrée à lire
                $vignettes=get_vignettes_avancee($premiereEntree,$vignettesParPage);
                foreach($vignettes as $cle =>$vignette)
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
            $error_message= "Vous devez remplir tous les champs!";
            $a++;
        }
    }else{$error_message= "";
}
}
include "../Vue/affichage_recherche_avancee_groupe.php";
?>
<?php include '../Vue/footer.php';?>  