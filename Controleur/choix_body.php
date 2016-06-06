<?php session_start(); ?>  
<?php if ($_SESSION['pseudo']=="admin")
{
    include '../Vue/vue_admin.php';
    
}
else {
    include '../Vue/vue_membre.php';
}
?>


