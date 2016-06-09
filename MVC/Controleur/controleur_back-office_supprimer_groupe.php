<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$vignettesgroupe = afficher_groupe();
if(isset($vignettesgroupe))
{
    if(!empty($vignettesgroupe))
    {
        if(isset($_GET['id_groupe']))
        {
            $id=htmlspecialchars($_GET['id_groupe']);
            $vignette_groupe_unique = afficher_groupe_unique($id);
            foreach($vignettesgroupe as $cle =>$vignette)
            {
                $vignettesgroupe[$cle]['id_groupe']=htmlspecialchars($vignette['id_groupe']);
                $vignettesgroupe[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettesgroupe[$cle]['etat']=htmlspecialchars($vignette['etat']);
                $vignettesgroupe[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $vignettesgroupe[$cle]['nombre_inscrit']=htmlspecialchars($vignette['nombre_inscrit']);
                $vignettesgroupe[$cle]['nombre_place']=htmlspecialchars($vignette['nombre_place']);
                $vignettesgroupe[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettesgroupe[$cle]['niveau']=htmlspecialchars($vignette['niveau']);
                $vignettesgroupe[$cle]['departement']=htmlspecialchars($vignette['departement']);
            }
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message="Aucun groupe trouvé!";
    }
}
include "../Controleur/choix_header.php";     
include "../Vue/vue_back-office_supprimer_groupe.php";
?>