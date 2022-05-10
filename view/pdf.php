<?php
  $objectPdo = new PDO('mysql:host=localhost;alpha', 'root', '');
  $pdoStat = $objectPdo->prepare('SELECT * FROM tickets ORDER BY date_spect ASC ');
  $executeIsOK = $pdoStat->execute();
  $listeEvents= $pdoStat->fetchAll(); 
 ?>





  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <br>
        <?php
	include '../Controller/ticketsc.php';
	$ticketsc=new ticketsc();
	$listetickets=$ticketsc->affichertickets(); 
  $login= $ticketsc->recupererlogin(1);
?>
<html>
	<head></head>
	<body>
		<center><h1>votre ticket</h1></center>
		<table border="1" align="center">
			<tr>
      <th>>numero ticket</th>
      <th>nom</th>
      <th>prenom</th>
      <th>adresse</th>
      <th>date naissance</th>
      <th>email</th>
      <th>date spectacle</th>
      <th>nom de piece</th>
			</tr>
      <?php
			  foreach($listetickets as $tickets){
          $login1= $ticketsc->recupererlogin($tickets['id_login']);
          if($login['id_login']==$login1['id_login']){
			?>
			<tr>
      <th scope="row"><?php echo $tickets['num_ticket']; ?></th>
			  <td><?php echo $login1['nom']; ?></td>
			  <td><?php echo $login1['prenom']; ?></td>
			  <td><?php echo $login1['adresse']; ?></td>
			  <td><?php echo $login1['date_naissance']; ?></td>
			  <td><?php echo $login1['email']; ?></td>
			  <td><?php echo $tickets['date_spect']; ?></td>
			  <td><?php echo $tickets['nom_piece']; ?></td>
      </tr>
			<?php
				 }
        }
			?>
		</table>
	</body>
</html>
      