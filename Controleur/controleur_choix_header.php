<?php


if ( $_SESSION['pseudo']=='admin'){
    include "../Vue/header_admin.php";
}
else if (isset ($_SESSION['id']) and  $_SESSION['pseudo']!='admin'){
    include "../Vue/header_connecte.php";
}
else {
    include "../Vue/header.php";
}