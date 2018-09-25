<?php
require 'config.php';

/*Partes de la url:
http://localhost/pdhn/PHP_MVC/
-Cuando esta es la direccion: "v"
 lo que se interpreta es que por defecto la direccion es:
 "http://localhost/pdhn/PHP_MVC/Index/index"
 -Lo que sigue en la direccion se interpreta como:
 "http://localhost/pdhn/PHP_MVC/Controlador(o clase)/metodo/dato"
*/

//region 1-Captura de datos de url
    $url = isset($_GET["url"]) ? $_GET["url"]:"Index/index";
    //$_GET["url"] - Captura el dato que pasa por la url
    //isset() - Verifica si estamos pasando trader_cdlrisefall3methods
    //? - Significa "En caso contrario"
    //: - con esto asignamos un valor
    $url = explode("/", $url);
    /*explode("", $variable) - Elimina lo que hay en "" de la variable ""
    y divide los datos y los guarda en un vector*/

    /*var_dump($url);//Muestra los datos de un vector,
    con la siguiente estructura array(2) {[0]=> string(5)"Index" [1]=> string(5)"index"}*/
    $method = "";
    $controller = "";
    if (isset($url[0])) {//Verifica si hay datos en la posicion 0
      $controller = $url[0];/*La posicion [0] - Contiene el nombre del controllador
       que es el que esta en la posicion 0.*/
      // Por defecto toma a Index de la url Index/index como clase
    }
    if (isset($url[1])) {//Verifica si hay datos en la posicion 1.La posicion de los metodos
      if ($url[1] != '') {
        $method = $url[1];
      }
    }
    if (isset($url[2])) {//Verifica si hay datos en la posicion 2. La posicion de los datos
      if ($url[1] != '') {
        $params = $url[2];
      }
    }
//endregion 1-Captura de datos de url

    /*//print() - Imprime datos en pantalla
    print($controller);
    print($method);*/


//region 2-Evalua su existencia
    //evaluamos si existe una clase que estemos invocando
    spl_autoload_register(function($class){
      if(file_exists(LBS.$class.".php")){//Verifica si existe el archivo
        require LBS.$class.".php";//Lo invocamos
      }
    });
//endregion 2-Evalua su existencia

//region 3-Invoca el controlador o clase obtenidxs de la url
    //Obtenemos el controlador que coloquemos en la barra de direcciones
    $controllersPath = 'Controllers/'.$controller.'.php';
    //Verificamos si existe el archivo en la carpeta /Controllers
    if (file_exists($controllersPath)) {
      require $controllersPath;//Lo invoca
      //Invocamos la clase. $controller: nombre de la clase. New $controller();: crea un objeto con la variable quecontiene el nombre de esa clase
      $controller = new $controller();
      //Evaluamos $method
      if(isset($method)){
          if(method_exists($controller,$method)){//Verificamos si el metodo existe en la clase que viene por el parametro $controller
            //Verificamos si esa variable contiene el parametro
            if(isset($params)){
              $controller->{$method}($params);//Invocamos al methodo que reciba un parametro
            }else{
              $controller->{$method}();//Entonces en ese controlador invocamos a ese metodo
            }
          }else{
            echo "Error no existe el metodo: "."/".$method;
          }
      }
    }else{
      echo "Error en al direccion."."<br>"." No existe el controlador: "."/".$controllersPath;//Muestra la capeta donde se encuentra el controlador y luego el controlador. En este caso: "Controller/Index.php";
    }
//endregion 3-Invoca el controlador obtenido de la url
 ?>
