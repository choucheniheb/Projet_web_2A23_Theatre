<?php
	class Adherent{
		private $numadherent=null;
		private $rep=null;
		private $comment=null;
		private $dateinscription;
		
	
		function __construct($numadherent, $rep, $comment,$dateinscription){
			$this->numadherent=$numadherent;
			$this->rep=$rep;
			$this->comment=$comment;
			$this->dateinscription=$dateinscription;
		}
		function getNumadherent(){
			return $this->numadherent;
		}
		function getrep(){
			return $this->rep;
		}
		


		function getcomment(){
			return $this->comment;
		}
		function getDateinscription(){
			return $this->dateinscription;
		}
		function setrep(string $rep){
			$this->rep=$rep;
		}
	
		function setcomment(string $comment){
			$this->comment=$comment;
		}
		function setdateinscription(string $dateinscription){
			$this->dateinscription=$dateinscription;
		}
		
	}


?>