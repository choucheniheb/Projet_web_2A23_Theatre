<?php
	class acteur{
		private $id_acteur=null;
		private $id_login=null;
		private $cv=null;
		private $etat=null;
        
		function __construct($id_login, $cv, $etat){
			$this->id_login=$id_login;
			$this->cv=$cv;
			$this->etat=$etat;
		}
		function getid_acteur(){
			return $this->id_acteur;
		}
		function getid_login(){
			return $this->id_login;
		}
		function getcv(){
			return $this->cv;
		}
		function getetat_demande(){
			return $this->etat;
		}
		function setetat_demande($etat_demande){
			$this->etat=$etat;
		}
	}


?>