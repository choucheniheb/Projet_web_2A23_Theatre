<?php
	include '../Controller/abonnementc.php';
	$abonnementc=new abonnementc();
    $login=$abonnementc->recupererlogin(1);
	$abonnement=null;
    $abonnement = new abonnement(null,$login['id_login'],7,"gold");
    $abonnementc->ajouterabonnement($abonnement);
	header('Location:ajouterabonnement.php');
?>