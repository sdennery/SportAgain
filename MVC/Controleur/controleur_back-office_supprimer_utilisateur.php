<?php session_start(); ?>
<?php
include "../Modele/connect.php";
include "../Modele/modele_administrateur.php";
$vignettesutilisateur = afficher_utilisateur();
if(isset($vignettesutilisateur)){
    if(!empty($vignettesutilisateur)){
        if(isset($_GET['id_utilisateur']))
        {
            $id=htmlspecialchars($_GET['id_utilisateur']);
            $vignette_utilisateur_unique = afficher_utilisateur_unique($id);
            foreach ($vignettesutilisateur as $cle =>$vignette)
            {
                $vignettesutilisateur[$cle]['id_utilisateur']=htmlspecialchars($vignette['id_utilisateur']);
                $vignettesutilisateur[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $vignettesutilisateur[$cle]['prenom']=htmlspecialchars($vignette['prenom']);
                $vignettesutilisateur[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                $vignettesutilisateur[$cle]['mail']=htmlspecialchars($vignette['mail']);
                $vignettesutilisateur[$cle]['date_de_naissance']=htmlspecialchars($vignette['date_de_naissance']);
                $vignettesutilisateur[$cle]['sport_favori']=htmlspecialchars($vignette['sport_favori']);
                $vignettesutilisateur[$cle]['nom_utilisateur']=htmlspecialchars($vignette['nom_utilisateur']);
                $vignettesutilisateur[$cle]['departement']=htmlspecialchars($vignette['departement']);
                $vignettesutilisateur[$cle]['mot_de_passe']=htmlspecialchars($vignette['mot_de_passe']);
            }
        }else{
            $error_message= "Aucun résultat trouvé!";
        }
    }else{
        $error_message="Aucun utilisateur trouvé!";
    }
}
include "../Controleur/choix_header.php";     
include "../Vue/vue_back-office_supprimer_utilisateur.php";
?>