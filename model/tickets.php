<?php
	class tickets{
		private $num_ticket=null;
		private $id_login=null;
		private $nom_piece=null;
		private $date_spect=null;
		
		
		function __construct($num_ticket, $date_spect,$nom_piece,$id_login){
			$this->nom_piece=$nom_piece;
			$this->date_spect=$date_spect;
			$this->id_login=$id_login;
		}
		
		function getnum_ticket(){
			return $this->num_ticket;
		}
		function getdate_spect(){
			return $this->date_spect;
		}
		function getnom_piece(){
			return $this->nom_piece;
		}
		function getid_login(){
			return $this->id_login;
		}
		function setnum_tickets(string $num_ticket){
			$this->num_ticket=$num_ticket;
		}
		function setdate_spect(string $date_spect){
			$this->date_spect=$date_spect;
		}
		function setid_login(string $id_login){
			$this->id_login=$id_login;
		}
		function setnom_piece(string $nom_piece){
			$this->nom_piece=$nom_piece;
	}
}


?>