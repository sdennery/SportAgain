
<?php 
session_start();
include '../Modele/BDD_connexion.php';
require_once '../Modele/modele_connexion.php';
include '../Controleur/choix_header.php';

?>

<?php if ($_SESSION['pseudo']== 'admin') {
    include '../Vue/vue_page_admin.php';
}
else {
    include '../Vue/body_membre.php';
}
