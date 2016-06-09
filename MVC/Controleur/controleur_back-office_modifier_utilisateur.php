<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$vignettesutilisateur = afficher_utilisateur();
if(isset($vignettesgroupe))
{
    if(!empty($vignettesgroupe))
    {
        if(isset($_GET['id_utilisateur']))
        {
            $id=htmlspecialchars($_GET['id_utilisateur']);
            $vignette_utilisateur_unique = afficher_utilisateur_unique($id);
            foreach ($vignettesutilisateur as $cle =>$vignette)
            {
                $vignettesutilisateur[$cle]['id_utilisateur']=htmlspecialchars($vignette['id_utilisateur']);
                $vignettesutilisateur[$cle]['nom_utilisateur']=htmlspecialchars($vignette['nom_utilisateur']);
            }
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message="Aucun utilisateur trouvé!";
    }
}
include "../Controleur/choix_header.php";     
include "../Vue/vue_back-office_modifier_utilisateur.php";
?>