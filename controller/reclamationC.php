<?php
 include 'C:/xampp/htdocs/mod/config.php';
 include_once 'C:/xampp/htdocs/mod/Model/reclamation.php';
class reclamC
{

	        
		/*     -----------Supprimer------------- */
		function supprimerRec($numrec){
			$sql="DELETE FROM reclamation WHERE numrec=:numrec";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':numrec', $numrec);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}



	 /* -----------Afficher -----------*/
function afficher(){
			$sql="SELECT * FROM reclamation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

			 /* -----------Stat -----------*/
function statistiques(){
			$sql="SELECT typerec,count(*) FROM reclamation group by typerec";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}

			 /* -----------Afficher Tri -----------*/
function affichertri(){
			$sql="SELECT * FROM reclamation order by daterec DESC ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
        /* ----------- Ajouter -----------------*/
function ajouterRec($reclamation){
			$sql="INSERT INTO reclamation (numrec, typerec, daterec,email, texte) VALUES (:numrec,:typerec,:daterec,:email, :texte)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'numrec' => $reclamation->getNumrec(),
					'typerec'    => $reclamation->gettyperec(),
					'daterec' => $reclamation->getdaterec(),
					'email'  => $reclamation->getEmail(),
					'texte'  => $reclamation->getTexte()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recuperer_rec($numrec){
			$sql="SELECT * from reclamation where Numrec=$numrec";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reclamation=$query->fetch();
				return $reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}



      function afficherRecDetail(int $rech)
    {
        $sql="select * from reclamation where numrec=".$rech."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


            /*  -------moddifier----- */
		function modifier_rec($reclamation, $numrec){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET
					 typerec= :typerec,
					 daterec=:daterec,
					 email= :email, 
					 texte= :texte 
					 WHERE numrec= :numrec'
				);
				$query->execute([
				
					'typerec' => $reclamation->gettyperec(),
					'daterec' => $reclamation->getdaterec(),
					'email' => $reclamation->getEmail(),
					'texte' => $reclamation->getTexte(),
					'numrec'=>$numrec,
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
}

?>