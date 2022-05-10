<?php
	include_once 'pieceC.php';
	include_once '../Model/acteur.php';
	class acteurC {
		function afficherListeacteur(){
			$sql="SELECT * FROM acteur";
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

				$acteur=$query->fetch();
				return $acteur;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function supprimeracteur($id_acteur){
			$sql="DELETE FROM acteur WHERE id_acteur=:id_acteur";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_acteur', $id_acteur);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouteracteur($acteur){
			$sql="INSERT INTO acteur (id_login, cv, etat_demande) 
			VALUES (:id_login,:cv,:etat_demande)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_login' => $acteur->getid_login(),
					'cv' => $acteur->getcv(),
					'etat_demande' => $acteur->getetat_demande()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereracteur($id_acteur){
			$sql="SELECT * from acteur where id_acteur=$id_acteur";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$acteur=$query->fetch();
				return $acteur;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function rechercheracteur($id_login){
			$sql="SELECT * from acteur where id_login=$id_login";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$acteur=$query->fetch();
				return $acteur;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieracteur($acteur, $id_acteur){
			try {
				$a="accepter";
				echo $a;
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE acteur SET 
						etat_demande= :etat_demande
					WHERE id_acteur= :id_acteur"
				);
				$query->execute([
					'etat_demande' => $a,
					'id_acteur' => $id_acteur
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>