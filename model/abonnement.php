<?php
	class abonnement{
		private $num_a=null;
        private $id_login=null;
		private $delay=null;
        private $type=null;
				
		function __construct($num_a, $id_login, $delay, $type){
			$this->id_login=$id_login;
			$this->delay=$delay;
            $this->type=$type;
		}
		function getnum_a(){
			return $this->num_a;
		}
		function getid_login(){
			return $this->id_login;
		}
		function getdelay(){
			return $this->delay;
		}
    	function gettype(){
			return $this->type;
		}
		function setnum_a(string $num_a){
			$this->num_a=$num_a;
		}
		function setid_login(string $id_login){
			$this->id_login=$id_login;
		}
		function setdelay(string $delay){
			$this->delay=$delay;
		}
        function settype(string $type){
			$this->type=$type;
		}
	}


?>