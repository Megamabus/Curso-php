<?php 
	/**
	 * /PHP 5 introduce clases y metodos abstractos. Las clases definidas como abstractas no se pueden instanciar y cualquier clase que contiene almenos un metodo abstract debe ser definida como tal. Los metodos definidos como abstractos simplemente declaran la firma del metodo, pero no pueden definir la implementacion
	 */
	abstract class Clase8{
		
		function __construct(){
			# code...
		}

		abstract protected function Valor();
		abstract protected function getValor($dato);
		public function metodoComun(){
			//Si invoco al metodo Valor()
			$this->Valor();
		}
	}

	/**
	 * 
	 */
	class MyClass extends Clase8{
		
		function __construct()
		{
			# code...
		}
	
		//Sobre escribo el metodo Valor()
		public function Valor(){
			echo "Metodo que esta en la clase abstracta";
		}

		//Si sobre escribo solo un metodo abstracto y lo invoco dara error, hay que sobreescribir tdos los abstract

		public function getValor($dato){
			echo "Metodo que recibe un argumento ".$dato." y que esta en la clase abstracta";
		}
	}

	$obj = new MyClass();
	$obj->Valor();
	//Estamos invocando el metodo getValor() fuera de la clase MyClass y, como es de tipo protected, hay que colo carle al metodo que lo sobre escribe como public
	$obj->getValor(5);
	$obj->metodoComun();
 ?>