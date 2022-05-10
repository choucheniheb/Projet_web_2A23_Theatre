<?php
	include 'C:/xampp/phpMyAdmin/htdocs/mod/config.php';
	include_once 'C:/xampp/phpMyAdmin/htdocs/mod/Model/Adherent.php';
	
	class AdherentC {
		function afficheradherents(){
			$sql="SELECT * FROM adherent";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimeradherent($NumAdherent){
			$sql="DELETE FROM adherent WHERE NumAdherent=:NumAdherent";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':NumAdherent', $NumAdherent);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouteradherent($adherent){
			$sql="INSERT INTO adherent (NumAdherent, rep, comment, DateInscription) 
			VALUES (:NumAdherent,:rep,:comment, :DateInscription)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'NumAdherent' => $adherent->getNumadherent(),
					'rep' => $adherent->getrep(),
					'comment' => $adherent->getcomment(),
					'DateInscription' => $adherent->getDateinscription()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereradherent($NumAdherent){
			$sql="SELECT * from adherent where NumAdherent=$NumAdherent";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adherent=$query->fetch();
				return $adherent;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieradherent($adherent, $numadherent){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE adherent SET 
						rep= :rep, 
						comment= :comment, 
						DateInscription= :DateInscription
					WHERE NumAdherent= :NumAdherent'
				);
				$query->execute([
					'rep' => $adherent->getrep(),
					'comment' => $adherent->getcomment(),
					'DateInscription' => $adherent->getDateinscription(),
					'NumAdherent' => $numadherent
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	function affichertriRep(){
			$sql="SELECT * FROM adherent order by DateInscription DESC ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

		 function afficherRecDetail(int $rech)
    {
        $sql="select * from adherent where NumAdherent=".$rech."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

	}
?>