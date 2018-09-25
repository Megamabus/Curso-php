<?php
//Controlador de la pagina index.php
//Intermediario entre el modelo y la vista
//echo "Hola soy el controlador Index";


//Tiene que llamarse igual que el archivo
class Index extends Controllers //Hereda del controlador que controla todos los controlladores. Este esta en la carpeta Library
{
  /*Se comenta en el video #20
  public $response;//para el contructor*/
  function __construct()
  {
    $response = "";
    parent::__construct();//Hereda el constructor de la clase que hereda
  }
  
  public function index(){
    $this->views->render($this,'index');
  }

//  //*Se comenta todo en el video #20
//
//        /*Este guarda en $dato los datos como array
//        No funciona con parametros de datos en la url*/
//        public function index(){
//          $this->response = $this->model->datosPersonales();
//          /*$this->response invocamos ala propiedad, $this se refiere a este clase Index(), en la classe Controller
//          se captura Index() y se le agrega  "_model" para invocar al archivo del modelo, y una vez invocada la clase del modelo
//          colo camos el objeto que creamos en el objeto model(por el archivo Controllers.php), y con model->datosPersonales()
//          invocamos al metodo datosPersonales() y obtenemos los datos que esta retornando datosPersonales() y se almacena en
//          $response*/
//
//          $dato = $this->response;//A datos le almacenamos los datos de response. y datos toma las caracteristicas de array de response.
//          require VIEWS."index.php";//Manda la vista
//        }
//
//          /*Este guarda en $dato los datos en la posicion de un array
//          Funciona con parametros de datos en la url*/
//          public function index2($valor){
//          $dato = NULL;
//          $i = 0;
//          $this->response = $this->model->datosPersonales();
//          /*$this->response invocamos ala propiedad, $this se refiere a este clase Index(), en la classe Controller
//          se captura Index() y se le agrega  "_model" para invocar al archivo del modelo, y una vez invocada la clase del modelo
//          colo camos el objeto que creamos en el objeto model(por el archivo Controllers.php), y con model->datosPersonales()
//          invocamos al metodo datosPersonales() y obtenemos los datos que esta retornando datosPersonales() y se almacena en
//          $response*/
//          $datos = $this->response;//A datos le almacenamos los datos de response. y datos toma las caracteristicas de array de response
//          foreach($datos as  $value){//Recorre los datos del arreglo
//            if($datos[$i] == $datos[$valor]){
//              $dato = $datos[$i];
//            }
//            $i++;
//          }
//          require VIEWS."index.php";//Manda la vista
//        }
// *//

  
}

 ?>
