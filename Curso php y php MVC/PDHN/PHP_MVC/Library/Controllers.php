<?php
//Controla los controladores que tengamos en la carpeta Controllers
//echo "Hola soy el controlador que controla los controladores.";
//Eso se ejecuta cuando se llama al controllador principal

class Controllers //Tiene que llamarse igual al archivo
{

  function __construct()
  {
    $this->view = new Views();//Invoca in objeto view para que funcione el metodo index() del controlador Index()
    $this->loadClassmodels();//Instanciamos para que cargue el metodo cuando se ejecute esta clasee
  }
  public function loadClassmodels(){
    $model = get_class($this).'_model';//get_class() - captura una clase, y le agrega a $this(es la clase que captura) la cadena de texto ."_model"
    //$model lo usamos para referirnos a nuestro archivo con el modelo
    $path = "Models/".$model.".php";//Esta es la ruta completa guardada
    if(file_exists($path)){
      require $path;
      $this->model = new $model();//Instanciamos un objeto de la clase que este en la variable model
    }
  }
}
 ?>
