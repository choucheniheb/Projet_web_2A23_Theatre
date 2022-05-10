<?php
	include_once 'pieceC.php';
	include_once '../Model/abonnement.php';
	class abonnementc {
		function afficherabonnement(){
			$sql="SELECT * FROM abonnement";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerabonnement($num_a){
			$sql="DELETE FROM abonnement WHERE num_a=:num_a";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':num_a', $num_a);
			try{
				$req->execute();
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
		function ajouterabonnement($abonnement){
			$sql="INSERT INTO abonnement(id_login,delay_a,type_a) 
			VALUES (:id_login, :delay_a, :type_a) ";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_login' => $abonnement->getid_login(),
					'delay_a' => $abonnement->getdelay(),
					'type_a' => $abonnement->gettype(),
				]);	
			}    
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereabonnement($num_a){
			$sql="SELECT * from abonnement where num_a=$num_a";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$abonnement=$query->fetch();
				return $abonnement;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierabonnement($abonnement, $num_a){
			try {
				
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE abonnement SET 
                        type_a= :type_a
					WHERE num_a= :num_a'
				);
				$query->execute([
                    'type_a' => $abonnement->gettype(),
					'num_a' => $num_a
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function statistiques(){
			$sql="SELECT type_a,count(*) FROM abonnement group by type_a";
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