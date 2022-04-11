<?php
	class acteur{
		private $id_acteur=null;
		private $nom_acteur=null;
		private $prenom_acteur=null;
		private $adresse_acteur=null;
		private $categorie=null;
        
		function __construct($id_acteur, $nom_acteur, $prenom_acteur, $adresse_acteur, $categorie){
			$this->id_acteur=$id_acteur;
			$this->nom_acteur=$nom_acteur;
			$this->prenom_acteur=$prenom_acteur;
			$this->adresse_acteur=$adresse_acteur;
			$this->categorie=$categorie;
		}
		function getid_acteur(){
			return $this->id_acteur;
		}
		function getnom_acteur(){
			return $this->nom_acteur;
		}
		function getprenom_acteur(){
			return $this->prenom_acteur;
		}
		function getadresse_acteur(){
			return $this->adresse_acteur;
		}
		function getcategorie(){
			return $this->categorie;
		}
		function setnom_acteur(string $nom_acteur){
			$this->nom_acteur=$nom_acteur;
		}
		function setprenom_acteur(string $prenom_acteur){
			$this->Prenom_acteur=$prenom_acteur;
		}
		function setadresse_acteur(string $adresse_acteur){
			$this->adresse_acteur=$adresse_acteur;
		}
		function setcategorie(string $categorie){
			$this->categorie=$categorie;
		}
	}


?>