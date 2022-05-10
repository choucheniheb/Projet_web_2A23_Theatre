<?php
// Include Database connection
include '../config.php';
// Include SimpleXLSXGen library
include("SimpleXLSXGen.php");
$piece = [
  ['id piece', 'categorie_piece', 'date_creation', 'realisateur', 'date_spectacle','prix','duree','description']
];
$id = 0;
$sql = "SELECT * FROM piece";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
  foreach ($res as $row) {
    $id++;
    $piece = array_merge($piece, array(array($id,$row['id_piece'], $row['categorie_piece'], $row['realisateur'], $row['date_spectacle'],$row['prix'],$row['duree'],$row['description'] )));
  }
}
$xlsx = SimpleXLSXGen::fromArray($piece);
$xlsx->downloadAs('piece.xlsx'); // This will download the file to your local system
// $xlsx->saveAs('produit.xlsx'); // This will save the file to your server
echo "<pre>";
print_r($piece);
?>