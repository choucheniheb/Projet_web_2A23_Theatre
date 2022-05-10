<?php
	// header("Content-Type: application/xls");    
	// header("Content-Disposition: attachment; filename=file.xls");  
	// header("Pragma: no-cache"); 
	// header("Expires: 0");

	require_once '../config.php';
	
	
	// $output = "";
	
	// $output .="
	
	// ";
	{
		$config = config::getConnexion();
		
			$querry = $config->prepare('
			select nom_piece as nom_piece , categorie_piece as categorie_piece  , date_creation as date_creation , realisateur as realisateur , date_spectacle as date_spectacle ,prix as prix  ,duree as duree, img_src as img_src  ,description as description from piece');
			$querry->execute();
			$data = $querry->fetchAll();
			// print_r($data);exit();
			// $datas = array();
	// 		foreach($data as $article)
	// 		{
	// 			$datas[]= array (

					
    //                 'nom'=>$article->getNom(),
    //                 'categorie'=>$article->getCategorie(),
    //                 'description'=>$article->getDescription(),

	// 			);
			require_once 'XLS.php';
		XLS::export($data,'Export fichier');
		}

	

	

	
	// $output .="
	// 		</tbody>
			
	// 	</table>
	// ";
	
	// echo $output;
	
	
?>