<?php
require'connexion.php';
$id=$_GET['id'];
$message="Supression avec succes";
$message1="Erreur de supression ";
$sql="DELETE FROM post where id='$id'";
$query=mysqli_query($con,$sql);
if(isset($query)){
    header("location:posts.php");
}
?>