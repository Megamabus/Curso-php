<?php 
//Tipos de acceso


	CLass Clase2{

		//propiedad public, 
		public $public= 'Public...';
		//propiedad private, A estas variables solo se pueden tener acceso desde la calse o eredando las propiedades
		protected $protected= 'Protected..';
		//propiedad private
		Private $private;

		//Metodo public
		public function MyPublic(){
			echo $this -> public;//invocamos a la propedad de tipo public
		}

		//Metodo protected
		protected function MyProtected(){
			echo $this -> protected;//invocamos a la propedad de tipo protected

		}

		//Metodo private
		private function MyPrivate(){
			echo $this -> private;//invocamos a la propedad de tipo private

		}

		//Metodo
		function Metodos(){
			//Con este metodo invocamos a todos los metodos
			$this -> MyPublic();
			$this -> MyProtected();
			$this -> MyPrivate();
		}

		//Definicion de constructor public
		public function __construct($valor){
			$this -> private = $valor;//Esto significa que el dato que venga por el parameto $valor se va almacenar en la propiead de tipo private
		}
	}

	


//instancia de objeto
	$obj = new Clase2("Hola"); //parametro para la p´ropiedad private
	$obj -> Metodos();

//Si llamo a las propiedades fuera del metodo pasa lo siguiente con cada una:
	$obj -> MyPublic();//Esta lo muestra porque es de tipo public y no genera problemas
	//$obj -> MyProtected();//Esta genera error y no permite abrir el archivo 
	//$obj->Mypublic(new Clase2("otro"));
?>