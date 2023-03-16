<?php

class Config  
{	
	public $host;
	public $user;
	public $pass;
	public $db;
	function __construct() {
		$this->host = "mariadb";
		$this->user  = "root";
		$this->pass = "123456";
		$this->db = "players";
	}
}

?>