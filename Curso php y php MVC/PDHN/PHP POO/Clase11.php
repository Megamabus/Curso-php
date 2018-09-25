<?php 
/**
  * 
  */
 class Clase11{
 	private $nombre;
 	private $apellido;
 	private $edad;

 	function __construct()
 	{
 		$this->nombre = "Alex";
 		$this->apellido = "Pagoada";
 		$this->edad = 30;
 	}

 	/*Este metodo se llama cuando la funcion var_export() se aplica sobre el objeto. Esta funcion se utiliza para obtener informacion estructurada sobre unavariable dada.
 	El unico parametro de este metodo es un array que contiene las propiedades exportadas en la forma array('property' => value,...).*/
 	public static function __set_state($data){
 		//Obtiene el nombre de la clase desde la que se llama al metodo estatico.
 		$class = get_called_class();
 		$object = new $class();
 		foreach ($data as $property => $value){
 			$object->{$property} = $value;
 		}
 		return $object;
 	}
 } 
$a = new Clase11;
//eval - Evaluar una cadena como codigo PHP
//var_export - Imprime o devuelve una representacion string de una variable analizable
eval('$new_a = ' . var_export($a, true) . ';');
//var_dump($new_a);
 
/**
 * 
 */
class ClassName{
	static $candida = 0;
	public $numero;

	function __construct()
	{
		$this->numero = ++self::$candida;//self:: se usa porque $candida es de tipo static
	}

	public function __clone(){
		$this->numero = ++self::$candida;
	}
}
$b = new ClassName();
echo "Numero " . $b -> numero . "<br>";

$b2 = clone $b;
echo "Numero " . $b2 -> numero . "<br>";
 ?>