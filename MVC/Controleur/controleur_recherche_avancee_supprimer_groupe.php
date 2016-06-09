<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
if (isset($_GET))
{
    if(!empty($_GET))
    {
        if (($_GET['sport'] && $_GET['niveau'] && $_GET['etat'] && $_GET['departement'])!="0")
        {
            if (isset($_GET['id_groupe'])){
                $id=$_GET['id_groupe'];
                $vignette_groupe_unique =  afficher_groupe_unique($id);
            }else{
                $error_message="Aucun résultat !";
            }
            $vignettes_groupe=get_vignettes_avancee_groupe();
            $nombre_total_vignette = nb_total_vignettes_avancee($vignettes_groupe);
            if($nombre_total_vignette!=0){
                foreach($vignettes_groupe as $cle =>$vignette)
                {
                    $vignettes_groupe[$cle]['nom']=htmlspecialchars($vignette['nom']);
                    $vignettes_groupe[$cle]['etat']=htmlspecialchars($vignette['etat']);
                    $vignettes_groupe[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                    $vignettes_groupe[$cle]['nombre_inscrit']=htmlspecialchars($vignette['nombre_inscrit']);
                    $vignettes_groupe[$cle]['nombre_place']=htmlspecialchars($vignette['nombre_place']);
                    $vignettes_groupe[$cle]['sport']=htmlspecialchars($vignette['sport']);
                    $vignettes_groupe[$cle]['niveau']=htmlspecialchars($vignette['niveau']);
                    $vignettes_groupe[$cle]['departement']=htmlspecialchars($vignette['departement']);
                }
            }else{
                $error_message="Aucun résultat trouvé!";
            }
        }else{
            $error_message="Vous devez remplir tous les champs!";
        }
    }else{
        $error_message= "Vous devez remplir tous les champs!";
    }
}else{
    $error_message= "";
}
include "../Vue/vue_recherche_avancee_supprimer_groupe.php";
?>