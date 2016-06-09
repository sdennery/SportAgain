<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$vignettesclub = afficher_club();
if(isset($vignettesclub))
{
    if(!empty($vignettesclub))
    {
        if(isset($_GET['id_club']))
        {
            $id=htmlspecialchars($_GET['id_club']);
            $vignette_club_unique = afficher_club_unique($id);
            foreach($vignettesclub as $cle =>$vignette)
            {
                $vignettesclub[$cle]['id_club']=htmlspecialchars($vignette['id_club']);
                $vignettesclub[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettesclub[$cle]['Nom_proprietaire']=htmlspecialchars($vignette['Nom_proprietaire']);
                $vignettesclub[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                $vignettesclub[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $vignettesclub[$cle]['numero_club']=htmlspecialchars($vignette['numero_club']);
                $vignettesclub[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $vignettesclub[$cle]['telephone']=htmlspecialchars($vignette['telephone']);
                $vignettesclub[$cle]['Departement']=htmlspecialchars($vignette['Departement']);
            }
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message="Aucun club trouvé!";
    }
}
include "../Controleur/choix_header.php";     
include "../Vue/vue_back-office_supprimer_club.php";
?>