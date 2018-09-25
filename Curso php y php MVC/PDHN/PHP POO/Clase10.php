<?php 
/**
 * 
 */
class Clase10{
	
	private $data = array();//crear array

	public function __set($name, $value){//el metodo __set sirve para inicializar o asignar un dato a una propiedad
		//este metodo captura los datos que se le pasa a la clase y los captura con los parametros $name, $value y klos que les digamos

		echo"Estableciendo '$name' a '$value'\n";
		$this->data[$name] = $value;
		var_dump($this->data);//var_dump creo que muestra los datos de lo que le indiquemos
	}

	public function __get($name){//solo puede recibir un argumento
		echo"Consultando '$name'\n";
		if(array_key_exists($name, $this->data)){////array_key_exists($name, $this->data) ,verifica si existe el dato que viene por el parametro name por array data
			$this->data[$name];
			var_dump($this->data);
		}
	}

	public function __unset($name){//Elimina un dato almacenado en el array
		echo"Eliminando '$name'\n";//Muestra el parametro que vamos a eliminar
		unset($this->data[$name]);
	}

	public function __isset($name){//
		echo "¿Esta definido '$name'?\n";
		return isset($this->data[$name]);
	}
}

echo "<pre>\n";

$obj = new Clase10;
$obj -> b = 2;//esto significa que con el objeto de la clase 10 estamos pasando los siguientes datos a la clase 10, el dato a y el valor de 2, y el metodo__set lo camputa con los parametros del metodo

echo $obj->b . "\n\n";//esto lo usamos para pasarle los datos al metoedo get

echo $obj->a . "\n\n";//como no encuentra a no muestra nada

//Le asigno valores y comienza el ejemplo de unset
$obj -> b = 2;
$obj -> a = 1;

unset($obj->a);
echo $obj->a . "\n\n";
echo $obj->b . "\n\n";
//Para isset
var_dump(isset($obj->a));//verificamos si tenemos definido el valor de a /true significa que si
var_dump(isset($obj->f));//ah esto como f no esta definido muestra false
 ?>