<?php
	class piece{
		private $nom_piece=null;
		private $date_spectacle=null;
		private $categorie_piece=null;
		private $date_creation;
		private $realisateur;
		private $prix=null;
		private $duree=null;
		private $img_src=null;
		private $description=null;
		function __construct($nom_piece, $date_spectacle, $prix, $realisateur, $categorie_piece, $date_creation,$duree,$img_src, $description){
			$this->prix=$prix;
			$this->nom_piece=$nom_piece;
			$this->realisateur=$realisateur;
			$this->date_spectacle=$date_spectacle;
			$this->categorie_piece=$categorie_piece;
			$this->date_creation=$date_creation;
			$this->img_src=$img_src;
			$this->duree=$duree;
			$this->description=$description;
		}
		function getdate_creation(){
			return $this->date_creation;
		}
		function getprix(){
			return $this->prix;
		}
		function getnom_piece(){
			return $this->nom_piece;
		}
		function getrealisateur(){
			return $this->realisateur;
		}
		function getdate_spectacle(){
			return $this->date_spectacle;
		}
		function getcategorie_piece(){
			return $this->categorie_piece;
		}
		function getduree(){
			return $this->duree;
		}
		function getdescription(){
			return $this->description;
		}
		function getimg_src(){
			return $this->img_src;
		}
		function setnom_piece(string $nom_piece){
			$this->nom_piece=$nom_piece;
		}
		function setnum_piece(string $num_piece){
			$this->num_piece=$num_piece;
		}
		function setrealisateur(string $realisateur){
			$this->realisateur=$realisateurr;
		}
		function setcategorie_piece(string $categorie_piece){
			$this->categorie_piece=$categorie_piece;
		}
	}


?>