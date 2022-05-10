<?php
	include '../Controller/abonnementc.php';
	$abonnementc=new abonnementc();
	$abonnementc->supprimerabonnement($_GET["num_a"]);
	header('Location:affichageabonnementfront.php');
?>