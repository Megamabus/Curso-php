<?php 
	Class MiClase{
		//Declaracion de propiedades
		//variable comun
		public $var = "PHP POO ... ";
		//variable static
		public static $mi_static = "-PDHN.";
		//variable privada
		private $php = "php..";

		//Metodo
		public function Mostrar(){

			//Muestra variable comun
			echo $this->var;//referencia al objeto invocador
			//Muestra variable privada
			echo $this->php;//referencia al objeto invocador



			/*A partir de PHP 5.3.0, es posible hacer referencia a una clase usando una variable. El valor de la variable no puede ser una palabra reselvada (p.ej, self, parent y static).*/
			echo self::$mi_static;
		}

		public static function MetodoEstatico(){ //en este metodo solo vamos a invocar propiedades de tipo static
			echo self::$mi_static;
		}
	}
	//Para crear una instancia de una clase, se debe emplear la palabra reservada new. Un objeto se creara
	$obj = new MiClase();
	//Ejecutar el metodo Mostrar()
	$obj -> Mostrar();

	//forma de poder invocar nuestro metodo estatico
	MiClase::MetodoEstatico();
	//Otra forma de hacer esto tambien es
	$obj::MetodoEstatico();
 ?>