<?php
 require'connexion.php';
if(isset($_GET['id'])){
    $message="Modification avec succes";
$message1="Erreur de modification";
 $nom=$_POST['nom'];
 $contenu=$_POST['contenu'];
 $sujet=$_POST['sujet'];
 $id=$_POST['id'];
$sql="UPDATE post set nom='$nom',contenu='$contenu',sujet='$sujet' where id='$id'";
$q=mysqli_query($con,$sql);
if(isset($q)){
    header("location:posts.php");
    echo "<script type='text/javascript'>alert('$message');</script>";
 }else{
    echo "<script type='text/javascript'>alert('$message1');</script>";
 }

}else{
$message="Ajout avec succes";
$message1="Erreur d'ajout";
 $nom=$_POST['nom'];
 $contenu=$_POST['contenu'];
 $sujet=$_POST['sujet'];
 require 'connexion.php';
 $requette="INSERT INTO `post`(`nom`, `contenu`, `sujet`) VALUES('$nom','$contenu','$sujet')";
 $query=mysqli_query($con,$requette);
 if(isset($query)){
    
    header("location:posts.php");
    echo "<script type='text/javascript'>alert('$message');</script>";
 }else{
    echo "<script type='text/javascript'>alert('$message1');</script>";
 }
}
?>