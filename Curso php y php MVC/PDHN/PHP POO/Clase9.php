<?php 
	/*Las interfaces de objetos permiten crear codigo con el cual especificamos que metodos deben ser implementados por una clase, sin tener que definir como estos metodos son manipulados.

	Las interfaces son definidas utilizando la palabra clave interface, de la misma forma que con lcases estandar, pero sin metodos que tengan su contenido definido.

	Todos los metodos declarados en una interfaz deben ser públicos, ya que esta es la naturaleza de una interfaz.*/

	//Declarar la interfaz
	interface Clase9{
		//Todos los metodos que declaremos dentro de la interface deben ser de tipo public
		public function variable($name, $var);
	}
	interface b extends Clase9{
		public function metodo();//si no sobre escribo este metodo en la clase donde lo implemento dara error
	}

	interface c extends Clase9,b{//Herencia multiple
		public function otroMetodo();//Para no tener error hay que sobreescribir este metodo en la clase donde se use
	}

	/**
	 * Implementar interface para usar los metodos en ella
	 */
	class ClassName implements c{// con implements se implementa la clase9 a la ClassName
		
		private $var = array();
		public function variable($name, $var){
			print_r($this->vars[$name] = $var);
			echo '<br>';
			$this->vars[$name] = $var;
			print_r($this->vars);
			echo '<br>';
			//Mostrar posicion exacta que queramos
			print_r($this->vars["b"]);
			echo '<br>';
		}

		public function metodo(){
			echo "<br>";
			echo "Metodo que esta en la interface b";
			echo "<br>";
		}

		public function otroMetodo(){
			echo "<br>";
			echo "Metodo que esta en la interface c";
			echo "<br>";
		}
	}
 
	$obj = new ClassName();
	$obj -> variable("a",5);
	$obj -> variable("b",6);
	$obj -> variable("c",7);

	$obj -> metodo();

	$obj -> otroMetodo();//Como ven una vez sobreescrita el metodo de la clase c no genera error y todo funciona
 ?>