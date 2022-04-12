<?php
	class tickets{
		private $num_ticket=null;
		private $cin=null;
		private $nom=null;
		private $prenom=null;
		private $piece=null;
		private $datee;
		
		private $password=null;
		function __construct($num_ticket, $cin, $piece, $nom, $prenom, $datee){
			$this->num_ticket=$num_ticket;
			$this->cin=$cin;
			$this->piece=$piece;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->datee=$datee;
		}
		function getnum_ticket(){
			return $this->num_ticket;
		}
		function getcin(){
			return $this->cin;
		}
		function getpiece(){
			return $this->piece;
		}
		function getnom(){
			return $this->nom;
		}
		function getprenom(){
			return $this->prenom;
		}
		function getdatee(){
			return $this->datee;
		}
		function setnum_ticket(string $num_ticket){
			$this->num_ticket=$num_ticket;
		}
		function setcin(string $cin){
			$this->cin=$cin;
		}
		function setpiece(string $piece){
			$this->piece=$piece;
		}
		function setdatee(string $datee){
			$this->datee=$datee;
		}
		function setnom(string $nom){
			$this->nom=$nom;

		}
			function setprenom(string $prenom){
			$this->prenom=$prenom;
			
		}
	}


?>