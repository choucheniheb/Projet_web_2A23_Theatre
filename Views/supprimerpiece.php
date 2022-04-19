<?php
	include '../Controller/pieceC.php';
	$pieceC=new pieceC();
	$pieceC->supprimerpiece($_GET["num_piece"]);
	header('Location:afficherListepiece.php');
?>