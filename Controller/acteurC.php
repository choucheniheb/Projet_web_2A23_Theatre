<?php
	include '../config.php';
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
			$sql="INSERT INTO acteur (id_acteur, nom_acteur, prenom_acteur, adress_acteur, categorie) 
			VALUES (:id_acteur,:Nom_acteur,:Prenom_acteur, :Adresse_acteur,:categorie)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_acteur' => $acteur->getid_acteur(),
					'Nom_acteur' => $acteur->getnom_acteur(),
					'Prenom_acteur' => $acteur->getprenom_acteur(),
					'Adresse_acteur' => $acteur->getadresse_acteur(),
					'categorie' => $acteur->getcategorie()
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
		
		function modifieracteur($acteur, $id_acteur){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE acteur SET 
						nom_acteur= :Nom_acteur, 
						prenom_acteur= :Prenom_acteur, 
						adress_acteur= :Adresse_acteur, 
						categorie= :categorie
					WHERE id_acteur= :id_acteur"
				);
				$query->execute([
					'Nom_acteur' => $acteur->getnom_acteur(),
					'Prenom_acteur' => $acteur->getprenom_acteur(),
					'Adresse_acteur' => $acteur->getadresse_acteur(),
					'categorie' => $acteur->getcategorie(),
					'id_acteur' => $id_acteur
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>