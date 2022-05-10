<?php
	class reclamation{
		private $numrec=null;
		private $typerec=null;
		private $daterec=null;
		private $email=null;
		private $texte=null;
		private $comment=null;
		function __construct($numrec, $typerec, $daterec, $email,$texte){
			$this->numrec=$numrec;
			$this->typerec=$typerec;
			$this->daterec=$daterec;
			$this->email=$email;
			$this->texte=$texte;
		
		}

		
		function getNumrec(){
			return $this->numrec;
		}
		function gettyperec(){
			return $this->typerec;
		}
		function getdaterec(){
			return $this->daterec;
		}
		
		function getEmail(){
			return $this->email;
		}
		function getTexte(){
			return $this->texte;
		}


		function settyperec(string $typerec){
			$this->typerec=$typerec;
		}
		function setdaterec(string $daterec){
			$this->daterec=$daterec;
		}
		
		function setEmail(string $email){
			$this->email=$email;
		}
		function setTexte(string $texte){
			$this->texte=$texte;
		}
		function getComment(){
			return $this->comment;
		}
	}


?>