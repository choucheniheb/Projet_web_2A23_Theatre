<?php
	include '../Controller/ticketsc.php';
	$ticketsc=new ticketsc();
	$ticketsc->supprimertickets($_GET["num_ticket"]);
	header('Location:afficherListetickets.php');
?>