<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/63444330a5.js" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <?php
    require'connexion.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT * from post where id='$id'";
        $q=mysqli_query($con,$sql);
        $rows=mysqli_fetch_assoc($q);
        $nom=$rows['nom'];
        $contenu=$rows['contenu'];
        $sujet=$rows['sujet'];
    }
    ?>
    <form method="POST" action="Fajoutp.php?<?php if(isset($_GET['id'])){
        echo "id=update";} ?>">
      <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
      <input type="text" name="nom" placeholder="Entrer le nom du forum" value="<?php if(isset($_GET['id'])){
          echo $nom;
      }?>")>  <br><br>
      <input type="text" name="contenu" placeholder="Entrer votre nom"value="<?php if(isset($_GET['id'])){
          echo $contenu;
      }?>">  <br><br>
      <input type="text" name="sujet" placeholder="Entrer le numero des postes" value="<?php if(isset($_GET['id'])){
          echo $sujet;
      }?>">  <br><br>   
    <button type="submit"> <?php
    if(isset($_GET['id'])){
        echo"Modifier";
    }else{
        echo"Ajouter";}
    
    ?></button>
</form>
</body> 
</html> 
<?php 
?>