<?php
	include '../config.php';
	include_once '../Model/piece.php';
	class pieceC {
		function afficherListepiece(){
			$sql="SELECT * FROM piece";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerpiece($num_piece){
			$sql="DELETE FROM piece WHERE num_piece=:num_piece";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':num_piece', $num_piece);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterpiece($piece){
			$sql="INSERT INTO piece (num_piece, nom_piece, realisateur, id_acteur, categorie_piece, date_creation) 
			VALUES (:num_piece, :nom_piece, :realisateur, :id_acteur, :categorie_piece, :date_creation)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_acteur' => $piece->getid_acteur(),
					'nom_piece' => $piece->getnom_piece(),
					'realisateur' => $piece->getrealisateur(),
					'num_piece' => $piece->getnum_piece(),
					'categorie_piece' => $piece->getcategorie_piece(),
                    'date_creation' => $piece->getdate_creation()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererpiece($num_piece){
			$sql="SELECT * from piece where num_piece=$num_piece";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$piece=$query->fetch();
				return $piece;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierpiece($piece, $num_piece){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE piece SET 
						nom_piece= :nom_piece, 
						realisateur= :realisateur,
                        date_creation= :date_creation,
						categorie_piece= :categorie_piece,
                        id_acteur= :id_acteur
					WHERE num_piece= :num_piece"
				);
				$query->execute([
					'nom_piece' => $piece->getnom_piece(),
					'id_acteur' => $piece->getid_acteur(),
					'realisateur' => $piece->getrealisateur(),
					'categorie_piece' => $piece->getcategorie_piece(),
					'date_creation' => $piece->getdate_creation(),
					'num_piece' => $num_piece
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>