<?php
	class login{
        private $id_login=null;
		private $nom=null;
		private $prenom=null;
		private $adresse_=null;
		private $date_naissance;
		private $categorie=null;
        
		function __construct($id_login, $nom, $prenom, $adresse, $categorie, $date_naissance){
            $this->id_login=$id_login;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->adresse=$adresse;
			$this->categorie=$categorie;
			$this->date_naissance=$date_naissance;
		}
        function getid_login(){
			return $this->id_login;
		}
		function getnom(){
			return $this->nom;
		}
		function getprenom(){
			return $this->prenom;
		}
		function getadresse(){
			return $this->adresse;
		}
		function getcategorie(){
			return $this->categorie;
		}
		function getdate_naissance(){
			return $this->$date_naissance;
		}
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setprenom(string $prenom){
			$this->Prenom_acteur=$prenom_acteur;
		}
		function setadresse(string $adresse){
			$this->adresse=$adresse;
		}
		function setcategorie(string $categorie){
			$this->categorie=$categorie;
		}
	}


?>