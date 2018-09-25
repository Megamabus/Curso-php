<?php 
	/**
	 * Operador doble 
	 dos puntos and self, parent
	 */
	class Clase7{

		const CONST_VALUE = 'Un valor constante';

		//metodo
		protected function myMetodo(){
			echo "myMetodo que esta en la clase7\n";
		}

		function __construct(){
			# code...
		}
	}

	$classname = 'Clase7';

	//tres tipos de invocaciones:

	/*1-*///echo $classname::CONST_VALUE; // :: es un operador //$classname sirve para acceder a una clase con el nombre de la clase dentro de la variable

	/*2-*///echo Clase7::CONST_VALUE;
 
	/**
	 * Clase que hereda
	 */
	class MyClass extends Clase7{
		
		public static $my_static = 'variable estatica';

		public function myMetodo(){
			/*Las tres palabras claves especiales self, parent(padre) y static son utilizadas para acceder a propiedades y metodos desde el interior de la definicion de la clase.*/
			parent::myMetodo();
		}

		public static function mostrarDatos(){
			echo self::$my_static."\n";
		}

		function __construct(){
			# code...
		}
	}

	$classname2 = 'MyClass';
	echo $classname2::CONST_VALUE;//Acceder mediante nombre de clase dentro de variable, con el operador ::, y a la variable CONST_VALUE

	echo $classname2::myMetodo();//Entrando al metodo de la clase 7 desde la clase que hereda, esto no va a funcionar y dara error ya que el metodo es protected, esta protegido. Para estrar lo sobreescribo en la clase que hereda, (ver clase MyClass)
	$classname2::mostrarDatos();//muestra la variable static invocada con el operador self 
	//tambien se puede hacer lo miso asi
	MyClass::mostrarDatos();
 ?>