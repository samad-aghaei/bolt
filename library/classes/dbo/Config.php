<?php
	namespace Bolt\Dbo;

	class Config extends \Bolt\Base
	{
		public $type;
		public $host;
		public $port;
		public $database;
		public $username;
		public $password;
		public $auto;
		
		public function __construct($data = null)
		{
			parent::__construct($data);
			
			$this->auto((bool)$this->auto());
		}
	}
?>
