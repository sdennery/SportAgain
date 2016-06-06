<html>
<head>
    <link rel="stylesheet" href="../Vue/donnees_utilisateur.css">
    <meta charset="utf-8"/>
</head>
</html>
       <?php 
    include "../Modele/connect.php";
    include "../Vue/header.php";
    include "../Modele/modele_administrateur.php";
        if(isset($_GET['id_utilisateur']))
        {
        $id=htmlspecialchars($_GET['id_utilisateur']);
        $afficher_vignette = affichage_donnees_utilisateur($id);
        if(isset($afficher_vignette)){
            foreach ($afficher_vignette as $cle => $vignette){
                $afficher_vignette[$cle]['id_utilisateur']=htmlspecialchars($vignette['id_utilisateur']);
                $afficher_vignette[$cle]['nom_utilisateur']=htmlspecialchars($vignette['nom_utilisateur']);
                $afficher_vignette[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                $afficher_vignette[$cle]['mail']=htmlspecialchars($vignette['mail']);
                $afficher_vignette[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $afficher_vignette[$cle]['prenom']=htmlspecialchars($vignette['prenom']);
                $afficher_vignette[$cle]['date_de_naissance']=htmlspecialchars($vignette['date_de_naissance']);
            }
        }
        }
        include "../Vue/donnees_utilisateur_admin_vue.php";
        include "../Vue/footer.php";
       ?>
                