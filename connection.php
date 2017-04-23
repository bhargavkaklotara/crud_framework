<?php 
class connection
	{
		public function connect()
		{
			$connection = new mysqli('localhost','root','','doctorde_dp');
			return $connection;
		}
	}

 ?>