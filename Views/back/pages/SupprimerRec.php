<?php
include '../../../Controller/reclamationC.php';
$reclam=new reclamC();
$reclam->supprimerRec($_GET["numrec"]);
header('Location:listRec.php');
?>