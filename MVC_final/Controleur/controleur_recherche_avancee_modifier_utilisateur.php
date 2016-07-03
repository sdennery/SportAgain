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
            if (isset($_GET['id_utilisateur'])){
                $id=$_GET['id_utilisateur'];
                $vignette_utilisateur_unique =  afficher_utilisateur_unique($id);
            }else{
                $error_message="Aucun résultat !";
            }
            $vignettes_utilisateur=get_vignettes_avancee_utilisateur();
            $nombre_total_vignette = nb_total_vignettes_avancee($vignettes_utilisateur);
            if($nombre_total_vignette!=0){
                foreach($vignettes_utilisateur as $cle =>$vignette)
                {
                    $vignettes_utilisateur[$cle]['nom']=htmlspecialchars($vignette['nom']);
                    $vignettes_utilisateur[$cle]['prenom']=htmlspecialchars($vignette['prenom']);
                    $vignettes_utilisateur[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                    $vignettes_utilisateur[$cle]['mail']=htmlspecialchars($vignette['mail']);
                    $vignettes_utilisateur[$cle]['date_de_naissance']=htmlspecialchars($vignette['date_de_naissance']);
                    $vignettes_utilisateur[$cle]['sport_favori']=htmlspecialchars($vignette['sport_favori']);
                    $vignettes_utilisateur[$cle]['nom_utilisateur']=htmlspecialchars($vignette['nom_utilisateur']);
                    $vignettes_utilisateur[$cle]['departement']=htmlspecialchars($vignette['departement']);
                    $vignettes_utilisateur[$cle]['mot_de_passe']=htmlspecialchars($vignette['mot_de_passe']);
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
include "../Vue/vue_recherche_avancee_modifier_utilisateur.php";
?>