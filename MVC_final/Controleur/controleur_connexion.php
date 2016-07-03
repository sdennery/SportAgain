<?php session_start(); ?>
<?php 

include '../Modele/BDD_connexion.php';
require_once '../Modele/modele_connexion.php';



if (isset($_POST)){ 
    if (!empty($_POST)){
    $pseudo=$_POST['pseudo'];
    $mdp=$_POST['motdepasse'];
    $resultat=get_utilisateur($pseudo, $mdp);


 if (empty($resultat))
{
    require '../Controleur/choix_header.php';
    include '../Vue/Page_connexion_refuse.php';
    
    
}
else
{
    //setcookie('pseudo', $resultat['nom_utilisateur'], time()+ 24*3600); //Durée de vie : 1 jour
    //setcookie('id', $resultat['id_utilisateur'], time()+ 24*3600);
    
    
    
 
  $_SESSION['id'] = $resultat['id_utilisateur'];
  $_SESSION['pseudo'] = $resultat['nom_utilisateur'];

  
    require '../Controleur/choix_header.php';
  if ($_SESSION['pseudo']== 'admin'){
    include '../Vue/vue_page_admin.php';
    
  }
  else {
      include '../Vue/Page_profil1.php';  
  }
}
}
}

   
?>






