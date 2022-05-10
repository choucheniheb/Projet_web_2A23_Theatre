<?php
	include_once 'pieceC.php';
	include_once '../Model/tickets.php';
	class ticketsc {
		function affichertickets(){
			$sql="SELECT * FROM tickets";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

			function recupererlogin($id_login){
			$sql="SELECT * from login where id_login=$id_login";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$login=$query->fetch();
				return $login;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererpiece($nom_piece){
			$sql="SELECT * from piece where nom_piece= :nom_piece";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute(['nom_piece'=> $nom_piece]);

				$login=$query->fetch();
				return $login;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function supprimertickets($num_ticket){
			$sql="DELETE FROM tickets WHERE num_ticket=:num_ticket";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':num_ticket', $num_ticket);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutertickets($tickets){
			$sql="INSERT INTO tickets(nom_piece, id_login, date_spect) 
			VALUES (:nom_piece, :id_login, :date_spect)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_piece' => $tickets->getnom_piece(),
					'id_login' => $tickets->getid_login(),
					'date_spect' => $tickets->getdate_spect()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperetickets($num_ticket){
			$sql="SELECT * from tickets where num_ticket=$num_ticket";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$tickets=$query->fetch();
				return $tickets;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiertickets($tickets, $num_ticket){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE tickets SET
						date_spect= :date_spect
					WHERE num_ticket= :num_ticket'
				);
				
				$query->execute([
					'date_spect' => $tickets->getdate_spect(),
					'num_ticket' => $num_ticket
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function rechercherticket($num_ticket){
			$sql="SELECT * FROM tickets where num_ticket like '%$num_ticket%'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

	}
?>