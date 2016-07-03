<?php include '../Modele/BDD_connexion.php'; ?>
<?php session_start(); ?>

<html>
	<head>
        <link rel="stylesheet" href="FAQ.css">
        <meta charset="utf-8"/>
    </head>
 	<header>
		<?php include('../Controleur/choix_header.php'); ?>
	</header>	
	<body>
		<div id="faq">
		</div>
		<div>
			<?php include '../Modele/modele_FAQ.php'; ?>
		</div>	
	</body>
	<br>
	<br>
	<?php include('../Vue/footer.php')?>
</html>