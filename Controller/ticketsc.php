<?php
	include '../config.php';
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
			$sql="INSERT INTO tickets(num_ticket, cin, piece, datee, nom,prenom) 
			VALUES (:num_ticket, :cin, :piece, :datee, :nom,:prenom)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'num_ticket' => $tickets->getnum_ticket(),
					'cin' => $tickets->getcin(),
					'piece' => $tickets->getPiece(),
					'nom' => $tickets->getnom(),
					'prenom' => $tickets->getprenom(),
					'datee' => $tickets->getdatee()
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
						cin= :cin, 
						nom= :nom, 
						piece= :Emaprixil, 
						datee= :datee,
						prenom=prenom,
					WHERE num_ticket= :num_ticket'
				);
				$query->execute([
					'nom' => $tickets->getnom(),
					'cin' => $tickets->getcin(),
					'prenom' => $tickets->getprenom(),
					'piece' => $tickets->getpiece(),
					'datee' => $tickets->getdatee(),
					'num_ticket' => $num_ticket
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>