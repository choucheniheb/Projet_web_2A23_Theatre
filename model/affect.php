<?php
	class affect{
		private $id_acteur=null;
		private $nom_piece=null;
        
		function __construct($id_acteur, $nom_piece){
			$this->id_acteur=$id_acteur;
			$this->nom_piece=$nom_piece;
		}
		function getid_acteur(){
			return $this->id_acteur;
		}
		function getnom_piece(){
			return $this->nom_piece;
		}
	}


?>