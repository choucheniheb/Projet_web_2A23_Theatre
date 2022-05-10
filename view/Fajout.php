<?php
 require'connexion.php';
if(isset($_GET['id'])){
    $message="Modification avec succes";
$message1="Erreur de modification";
 $nom=$_POST['nom'];
 $user=$_POST['user'];
 $number=$_POST['number'];
 $id=$_POST['id'];
$sql="UPDATE forum set nom='$nom',user='$user',number='$number' where id='$id'";
$q=mysqli_query($con,$sql);
if(isset($q)){
    header("location:Afficher.php");
    echo "<script type='text/javascript'>alert('$message');</script>";
 }else{
    echo "<script type='text/javascript'>alert('$message1');</script>";
 }

}else{
$message="Ajout avec succes";
$message1="Erreur d'ajout";
 $nom=$_POST['nom'];
 $user=$_POST['user'];
 $number=$_POST['number'];
 require 'connexion.php';
 $requette="INSERT INTO `forum`(`nom`, `user`, `number`) VALUES('$nom','$user','$number')";
 $query=mysqli_query($con,$requette);
 if(isset($query)){
    
    header("location:Afficher.php");
    echo "<script type='text/javascript'>alert('$message');</script>";
 }else{
    echo "<script type='text/javascript'>alert('$message1');</script>";
 }
}
?>