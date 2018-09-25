<?php 
	class Clase6{

		protected $protected= 'Protected';


		public function mostrarDatos($dato){
			echo "El dato es ".$dato."\n";
		}

		public function mostrar(){
			echo "\n"."Metodo que esta en la clase6";
		}

		function __construct(){

		}
	}

	/**
	 *Cuando se extiende una clase, la subclase heredatodos los metodos publicos y protegidos de la clase padre 
	 */
	class MyClass extends Clase6 //Ereda de la clase6
	{
		
		//Este metodo se llama igual a uno de los metodos de la clase padre, en consecuencia, este metodo reemplaza al original y se usa este antes de usar la clase que se llama igual pero que pertenece a la clase de origen (clase padre)
		public function mostrarDatos($dato){
			echo "El dato obtenido es ".$dato;
		}

		public function propiedad(){
			echo "\n".$this->protected;//Como la MyClass herea de la clase 6 tiene permiso de usar las propiedades protected
			//Para invocar al apropiedad se debe agregar $this->$protected;
			//Ya que de escribirlo asi: echo $protected; //esto daria error
		}

		function __construct()
		{
			# code...
		}
	}

	$obj1 = new MyClass();
	$obj1 -> mostrarDatos(41);
	$obj1 -> mostrar();
	$obj1 -> propiedad();
 ?>