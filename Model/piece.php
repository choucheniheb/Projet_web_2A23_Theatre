<?php
	class piece{
		private $num_piece=null;
		private $nom_piece=null;
		private $categorie_piece=null;
		private $date_creation;
		private $realisateur;
		private $id_acteur=null;
        
		function __construct($num_piece, $id_acteur, $nom_piece, $realisateur, $categorie_piece, $date_creation){
			$this->id_acteur=$id_acteur;
			$this->nom_piece=$nom_piece;
			$this->realisateur=$realisateur;
			$this->num_piece=$num_piece;
			$this->categorie_piece=$categorie_piece;
			$this->date_creation=$date_creation;
		}
		function getdate_creation(){
			return $this->date_creation;
		}
		function getid_acteur(){
			return $this->id_acteur;
		}
		function getnom_piece(){
			return $this->nom_piece;
		}
		function getrealisateur(){
			return $this->realisateur;
		}
		function getnum_piece(){
			return $this->num_piece;
		}
		function getcategorie_piece(){
			return $this->categorie_piece;
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