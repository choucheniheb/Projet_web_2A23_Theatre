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
		function triListepiece(){
			$sql="SELECT * FROM piece ORDER BY date_spectacle DESC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerpiece($nom_piece){
			$sql="DELETE FROM piece WHERE nom_piece=:nom_piece";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':nom_piece', $nom_piece);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterpiece($piece){
			$sql="INSERT INTO piece (prix, nom_piece, realisateur, date_spectacle, categorie_piece, date_creation, duree , img_src , description) 
			VALUES (:prix, :nom_piece, :realisateur, :date_spectacle, :categorie_piece, :date_creation, :duree , :img_src, :description)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'prix' => $piece->getprix(),
					'nom_piece' => $piece->getnom_piece(),
					'realisateur' => $piece->getrealisateur(),
					'date_spectacle' => $piece->getdate_spectacle(),
					'categorie_piece' => $piece->getcategorie_piece(),
                    'date_creation' => $piece->getdate_creation(),
					'duree' => $piece->getduree(),
					'description'=> $piece->getdescription(),
					'img_src'=> $piece->getimg_src()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererpiece($nom_piece){
			$sql="SELECT * from piece where nom_piece =nom_piece";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->bindValue('nom_piece', $nom_piece);
				$query->execute();

				$piece=$query->fetch();
				return $piece;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererjoint($nom_piece){
			$sql="SELECT * from contenir where nom_piece = nom_piece";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->bindValue('nom_piece', $nom_piece);
				$query->execute();

				$piece=$query->fetch();
				return $piece;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierpiece($piece, $nom_piece){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE piece SET 
                        date_spectacle= :date_spectacle,
						categorie_piece= :categorie_piece,
                        date_creation= :date_creation,
						realisateur= :realisateur,
						prix= :prix,
						duree= :duree,
						img_src= :img_src,
						description= :description
					WHERE nom_piece= :nom_piece"
				);
				$query->execute([
					'prix' => $piece->getprix(),
					'date_spectacle' => $piece->getdate_spectacle(),
					'categorie_piece' => $piece->getcategorie_piece(),
					'duree' => $piece->getduree(),
					'date_creation' => $piece->getdate_creation(),
					'realisateur' => $piece->getrealisateur(),
					'img_src' => $piece->getimg_src(),
					'description' => $piece->getdescription(),
					'nom_piece' => $nom_piece
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function rechercherpiece($nom_piece)
        {
            $requete = "select * from piece where nom_piece like '%$nom_piece%'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
	}
?>