<?php
	include '../Controller/acteurC.php';
	$acteurC=new acteurC();
	$acteurC->supprimeracteur($_GET["id_acteur"]);
	header('Location:afficheracteurenattente.php');
?>