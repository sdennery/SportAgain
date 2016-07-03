<html>
<head>
    <link rel="stylesheet" href="../Vue/donnees_club.css">
    <meta charset="utf-8"/>
</head>
</html>
       <?php 
    include "../Modele/connect.php";
    include "../Vue/header.php";
    include "../Modele/modele_administrateur.php";
        if(isset($_GET['id_club']))
        {
        $id=htmlspecialchars($_GET['id_club']);
        $afficher_vignette = affichage_donnees_club($id);
        if(isset($afficher_vignette)){
            foreach ($afficher_vignette as $cle => $vignette){
                $afficher_vignette[$cle]['id_club']=htmlspecialchars($vignette['id_club']);
                $afficher_vignette[$cle]['adresse']=htmlspecialchars($vignette['adresse']);
                $afficher_vignette[$cle]['descriptif']=htmlspecialchars($vignette['descriptif']);
                $afficher_vignette[$cle]['nom']=htmlspecialchars($vignette['nom']);
                $afficher_vignette[$cle]['Nom_proprietaire']=htmlspecialchars($vignette['Nom_proprietaire']);
                $afficher_vignette[$cle]['numero_club']=htmlspecialchars($vignette['numero_club']);
                $afficher_vignette[$cle]['sport']=htmlspecialchars($vignette['sport']);
                $afficher_vignette[$cle]['telephone']=htmlspecialchars($vignette['telephone']);
                $afficher_vignette[$cle]['Departement']=htmlspecialchars($vignette['Departement']);
            }
        }
        }
        include "../Vue/donnees_club_admin_vue.php";
        include "../Vue/footer.php";
       ?>