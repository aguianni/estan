<?php

require_once 'ConnectionManager.php';

class Tipo
{
	const SELECT_SQL = "SELECT * FROM tipo ";
	
	function __construct()
	{
		$this->id = NULL;
		$this->nombre="";
	}
	
	public static function load($row)
	{
		$instance = new Tipo();
		$instance->id = $row->id;
		$instance->nombre = $row->nombre;
		return $instance;
	}
	
	public static function get($id)
	{
		$query = self::SELECT_SQL . " WHERE id = $id";
		$resultSet = ConnectionManager::executeSelect($query);
		$note = NULL;
        if ($row = mysqli_fetch_object($resultSet)) 
        {
        	$note = self::load($row);
		}
		$resultSet->close();
		return $note;
	}
}