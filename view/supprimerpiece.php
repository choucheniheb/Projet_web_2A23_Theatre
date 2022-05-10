<?php
	include '../Controller/pieceC.php';
	$pieceC=new pieceC();
	$pieceC->supprimerpiece($_GET["nom_piece"]);
	header('Location:afficherpiece.php');
?>