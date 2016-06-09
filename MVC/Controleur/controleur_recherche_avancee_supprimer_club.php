<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
if (isset($_GET))
{
    if(!empty($_GET))
    {
        if (($_GET['sport'] && $_GET['departement'])!="0")
        {
            if (isset($_GET['id_club']))
            {
                $id=$_GET['id_club'];
                $vignette_club_unique =  afficher_club_unique($id);
            }else{
                $error_message="Aucun résultat !";
            }
            $vignettes_club=get_vignettes_avancee_club();
            $nombre_total_vignette = nb_total_vignettes_avancee($vignettes_club);
            if($nombre_total_vignette!=0)
            {
                foreach($vignettes_club as $cle =>$vignette)
                {
                    $vignettes_club[$cle]['nom']=htmlspecialchars($vignette['nom']);
                    $vignettes_club[$cle]['Nom_proprietaire']=htmlspecialchars($vignette['Nom_proprietaire']);
                    $vignettes_club[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                    $vignettes_club[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                    $vignettes_club[$cle]['numero_club']=htmlspecialchars($vignette['numero_club']);
                    $vignettes_club[$cle]['sport']=htmlspecialchars($vignette['sport']);
                    $vignettes_club[$cle]['telephone']=htmlspecialchars($vignette['telephone']);
                    $vignettes_club[$cle]['Departement']=htmlspecialchars($vignette['Departement']);
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
include "../Vue/vue_recherche_avancee_supprimer_club.php";
?>