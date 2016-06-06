<html>
<head>
    <meta charset="utf-8"/>
    <script language="javascript">
    function confirme(identifiant)
    {
        var confirmation = confirm("Voulez vous vraiment supprimer ce club?")
        if (confirmation){
            document.location.href= "../Controleur/suppression_controleur_admin.php?id_club="+identifiant;    
        }
    }
        
    function confirme2(identifiant)
    {
        var confirmation_utilisateur = confirm("Voulez vous vraiment supprimer cet utilisateur?")
        if (confirmation_utilisateur){
            document.location.href="../Controleur/suppression_controleur_admin.php?id_utilisateur="+identifiant;
        }
    }
    function confirme3(identifiant)
    {
        var confirmation_groupe = confirm("Voulez vous vraiment supprimer ce groupe?")
        if (confirmation_groupe){
            document.location.href="../Controleur/suppression_controleur_admin.php?id_groupe="+identifiant;
        }
    }
        
    function confirme4(identifiant)
    {
        var confirmation_evenement = confirm("Voulez vous vraiment supprimer cet évènement?")
        if (confirmation_evenement){
            document.location.href="../Controleur/suppression_controleur_admin.php?id_evenement="+identifiant;
        }
    }    
    </script>
</head>
</html>
<?php
    function afficher_utilisateur()
{
    global $bdd;
    $req=$bdd->prepare("SELECT * FROM utilisateur");
    $req->execute();
    $vignette = $req->fetchAll();
    return $vignette;
}
    function afficher_groupe()
{
    global $bdd;
    $req2=$bdd->prepare("SELECT * FROM groupe");
    $req2->execute();
    $vignette2 = $req2->fetchAll();
    return $vignette2;
}
function afficher_club()
{
    global $bdd;
    $req3=$bdd->prepare("SELECT * FROM club");
    $req3->execute();
    $vignette3 = $req3->fetchAll();
    return $vignette3;
}
function afficher_evenement()
{
    global $bdd;
    $req4=$bdd->prepare("SELECT * FROM evenement");
    $req4->execute();
    $vignette4 = $req4->fetchAll();
    return $vignette4;
}
function suppression_utilisateur($id)
{
   global $bdd;
   $suppression = $bdd->prepare('DELETE from utilisateur WHERE id_utilisateur='. $id);
   $suppression->execute(array($id));
   return $suppression;
    
}

function suppression_groupe($id)
{
    global $bdd;
    $suppression = $bdd->prepare('DELETE from groupe WHERE id_groupe='. $id);
    $suppression->execute(array($id));
    return $suppression;
}

function suppression_club($id)
{
    global $bdd;
    $suppression = $bdd->prepare('DELETE from club WHERE id_club='. $id);
    $suppression->execute(array($id));
    return $suppression;
}

function suppression_evenement($id)
{
    global $bdd;
    $suppression = $bdd->prepare('DELETE from evenement WHERE id_evenement='. $id);
    $suppression->execute(array($id));
    return $suppression;
}

function affichage_page_groupe($id)
{
    global $bdd;
    $reponse = $bdd->prepare('SELECT * FROM groupe WHERE id_groupe='. $id);
    $reponse->execute();
    $req = $reponse->fetchAll();
    return $req;  
}

function affichage_donnees_utilisateur($id)
{
    global $bdd;
    $afficher = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur='. $id);
    $afficher->execute(array($_GET['id_utilisateur']));
    $afficher_vignette=$afficher->fetchAll();
    return $afficher_vignette;
}

function affichage_donnees_club($id)
{
    global $bdd;
    $afficher = $bdd->prepare('SELECT * FROM club WHERE id_club='. $id);
    $afficher->execute(array($id));
    $afficher_vignette=$afficher->fetchAll();
    return $afficher_vignette;
}