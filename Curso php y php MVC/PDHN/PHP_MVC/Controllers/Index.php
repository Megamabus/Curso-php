<?php
//Controlador de la pagina index.php
//Intermediario entre el modelo y la vista
//echo "Hola soy el controlador Index";


//Tiene que llamarse igual que el archivo
class Index extends Controllers //Hereda del controlador que controla todos los controlladores. Este esta en la carpeta Library
{

  function __construct()
  {
    $response = "";
    parent::__construct();//Hereda el constructor de la clase que hereda
  }
  
  public function index(){
    $this->view->render($this,'index');
    /*$this->views - Invocamos al objeto views qe invoca
     las vistas y esta en la carpeta Library.
     y llamamos a su metodo render().
     y con this para referirnos a esta clase: Index{}. 
      y obtenemos el nombre de la clase y se lo pasamos al metodo render().
      y con 'index' 
      */
    
  }
}

 ?>
