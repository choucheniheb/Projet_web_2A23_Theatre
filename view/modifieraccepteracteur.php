<?php
	include '../Controller/acteurC.php';
	$acteurC=new acteurC();
    $acteur=null;
	$acteurC->modifieracteur($acteur,$_GET["id_acteur"]);
	header('Location:afficheracteurenattente.php');
?>