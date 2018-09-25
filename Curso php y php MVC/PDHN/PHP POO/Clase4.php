<?php 
//autocarga de clases

	Class AutoLoader{
		function __construct(){
			spl_autoload_register(array($this,'Loader'));
		}

		private function Loader($className){
			include $className.'.php';//archivo que vamos a cargar
			//Si los archivos se encuentran en otra carpeta esta este codigo:
			//include "nombredelacarpeta/".$className.'.php';

		}
	}

$loader = new AutoLoader();
new Clase();
new Clase2("Auto cargador");
 ?>