<?php

require_once 'ConnectionManager.php';
require_once 'Tipo.php';

class Casa
{
	const SELECT_SQL = "SELECT * FROM casa ";
	
	function __construct()
	{
		$this->id = NULL;
		$this->nombre="";
		$this->tipo = new Tipo();
		$this->plantas=0;
		$this->dormitorios=0;
		$this->banos=0;
		$this->vehiculos=0;
		$this->frente=0;
		$this->cubierta=0;
		$this->semicubierta=0;
		$this->total=0;
		$this->legajo_municipal=0;
		$this->proyecto_ejecutivo=0;
		$this->computo=0;
		$this->proyecto_mobiliario=0;
		$this->proyecto_paisajistico=0;
		$this->proyecto_sustentabilidad=0;
		$this->modificacion_superficie=0;
		$this->modificacion_materialidad=0;
		$this->modificacion_color=0;
		$this->etapas=0;
		$this->descripcion="";
		$this->carpeta_imagenes="";
	}
	
	public static function load($row)
	{
		$instance = new Casa();
		$instance->tipo = Tipo::get($row->id_tipo);
		$instance->id = $row->id;
		$instance->nombre = $row->nombre;
		$instance->plantas = $row->plantas;
		$instance->dormitorios = $row->dormitorios;
		$instance->banos = $row->banos;
		$instance->vehiculos = $row->vehiculos;
		$instance->frente = $row->frente;
		$instance->cubierta = $row->cubierta;
		$instance->semicubierta = $row->semicubierta;
		$instance->total = $row->total;
		$instance->legajo_municipal = $row->legajo_municipal;
		$instance->proyecto_ejecutivo = $row->proyecto_ejecutivo;
		$instance->computo = $row->computo;
		$instance->proyecto_mobiliario = $row->proyecto_mobiliario;
		$instance->proyecto_paisajistico = $row->proyecto_paisajistico;
		$instance->proyecto_sustentabilidad = $row->proyecto_sustentabilidad;
		$instance->modificacion_superficie = $row->modificacion_superficie;
		$instance->modificacion_materialidad = $row->modificacion_materialidad;
		$instance->modificacion_color = $row->modificacion_color;
		$instance->carpeta_imagenes = $row->carpeta_imagenes;
		$instance->etapas = $row->etapas;
		$instance->descripcion = $row->descripcion;
		$instance->carpeta_imagenes = $row->carpeta_imagenes;
		return $instance;
	}
	
	public static function getAll()
	{
		$query = self::SELECT_SQL . " ORDER BY nombre ASC ";
		$resultSet = ConnectionManager::executeSelect($query);

		$objetcs = array();
        while ($row = mysqli_fetch_object($resultSet)) 
        {
        	$instance = self::load($row);
            array_push($objetcs, $instance);
		}
		
		$resultSet->close();
		return $objetcs;
	}	
	
	public static function get($id)
	{
		$query = self::SELECT_SQL . " WHERE id = '$id'";
		$resultSet = ConnectionManager::executeSelect($query);
		$casa = NULL;
        if ($row = mysqli_fetch_object($resultSet)) 
        {
        	$casa = self::load($row);
		}
		$resultSet->close();
		return $casa;
	}
	
	public static function getWhere($where)
	{
		$query = self::SELECT_SQL . " WHERE " . $where . " ORDER BY nombre ASC";
		$resultSet = ConnectionManager::executeSelect($query);
	
		$objetcs = array();
		while ($row = mysqli_fetch_object($resultSet))
		{
			$instance = self::load($row);
			array_push($objetcs, $instance);
		}
	
		$resultSet->close();
		return $objetcs;
	}
	
	public static function getWhereLimit($where, $limit)
	{
		$query = self::SELECT_SQL . " WHERE " . $where . " ORDER BY nombre ASC LIMIT 0, " . $limit;
		$resultSet = ConnectionManager::executeSelect($query);
	
		$objetcs = array();
		while ($row = mysqli_fetch_object($resultSet))
		{
			$instance = self::load($row);
			array_push($objetcs, $instance);
		}
	
		$resultSet->close();
		return $objetcs;
	}
}