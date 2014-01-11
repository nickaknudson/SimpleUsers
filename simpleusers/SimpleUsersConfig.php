<?php

namespace simpleusers;

	/**
	* Configuration file
	*
	* This should be the only file you need to edit in, regarding the original script.
	* Please provide your MySQL login information below.
	*/

	class SimpleUsersConfig
	{

		public $mysql_hostname;
		public $mysql_username;
		public $mysql_password;
		public $mysql_database;

		public function __construct($hostname, $username, $password, $database)
		{
			$this->mysql_hostname = $hostname;
			$this->mysql_username = $username;
			$this->mysql_password = $password;
			$this->mysql_database = $database;
		}

	}


?>