<?php

Class Novedad extends Modelo{

	public $id;
	public $fecha;
	public $titulo;
	public $bajada;
	public $cuerpo;
	public $uri;

	public function url(){
		return $this->url = url('noticia', $this);
	}

	public function foto(){
		return $this->foto = Foto::obtener(array('id' => $this->foto_id), array(
		 	'medidas' => array(
		 		array(
		 			'ancho' 		=> 653,
		 			'alto'  		=> 433,
		 			'src_default'  	=> 'defecto-653.gif',
				),
				array(
		 			'ancho' 		=> 360,
		 			'alto'  		=> 240,
		 			'src_default'  	=> 'defecto-360.gif',
				),
		 	),
		 	'controlador' => array(
				'nombre' => 'novedades',
				'id'     => $this->id
		 	)
		));
	}


	/** Constructor
	* @param array Recibe todos los datos con los que se va a construir el objeto
	*
	*/
	function __construct($datos){

		$this->id = $datos->id;
		$this->fecha = new Fecha($datos->fecha);
		$this->cargar_traducciones(array('titulo','bajada','cuerpo','uri'), $datos);
		$this->foto_id = $datos->foto_id;		

		if(! $this->bajada){
			$this->bajada = recortarCadena(strip_tags($this->cuerpo), 100);
		}
	}

	
	/** SQL por defecto
	* Defino los valores por defecto para todas las cláusulas
	*/
	protected static function sql_defecto($tabla, $clausula, $sentencias){
		$sql = parent::sql_defecto($tabla, $clausula, $sentencias);
		switch($clausula){
			case 'order' :
				$sql = 'ORDER BY '.(!empty($sentencias) ? implode(',', $sentencias).',' : '').' '.$tabla.'.fecha DESC, '.$tabla.'.id DESC';
				break;
		}

		return $sql;
	}


	/** Obtener elementos filtrados desde la BD
	* @param filtros Puede ser: todos, id o un array con cualquiera de esos filtros
	*
	*/
	static function obtener( $filtros = array('todas' => ''), $dato = null, $modelo = '', $tabla = ''){
		
		$filtros = !is_array($filtros) ? array($filtros => $dato) : $filtros;
		if(! array_key_exists('vp', $filtros)){
			$filtros = array_merge($filtros, array('activa' => 1));
		}

		return parent::obtener($filtros, $dato, 'Novedad', 'novedades');
	}
	
}