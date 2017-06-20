<?php

class MySQL
{
	var $host="localhost";
	var $user="root";
	var $password="";
	var $database="compraevenda";
	var $query;
	var $link;
 	var $result;

 	function connect()
	{
		$username = $this->user;
        $password = $this->password;
        $host 	  = $this->host;
        $dbname   = $this->database;
        $connection = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);
        return $connection;
	}

	//Esta função desconecta do Banco
	function disconnect(){
		return mysql_close($this->link);
	}


	//Esta função executa uma Query
	function executeQuery($sql, $insert = false)
	{
		try
		{
			$connection = $this->connect();
	        $connection->query($sql);
	        if($insert === false)
	        {
	        	$result = $connection->prepare($sql);
				$result->execute();
	        }
	        else
	        {
	        	$result = true;
	        }
	        
	        $connection = null;
	        return $result;
		} catch (Exception $e)
		{
			print_r($e);
		}
	 }


 
}