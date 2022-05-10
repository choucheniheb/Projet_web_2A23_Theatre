<?php
	include_once 'pieceC.php';
	include_once '../Model/affect.php';
	class affectC {
		function afficherListeaffect(){
			$sql="SELECT * FROM contenir";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouteraffect($affect){
			$sql="INSERT INTO contenir (id_acteur, nom_piece) 
			VALUES (:id_acteur, :nom_piece)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_acteur' => $affect->getid_acteur(),
					'nom_piece' => $affect->getnom_piece()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereraffect($id_acteur){
			$sql="SELECT * from contenir where id_acteur=$id_acteur";
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
	}
?>