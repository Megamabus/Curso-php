<?php
//Se encarga de las vistas 

class Views //Se tiene que llamar igual al archivo
{
    function __construct(){

    }

    //Ejecuta las vistas
    function render($controller,$view){
        $controllers = get_class($controller);//Obtenemos el nombre de la clase que viene por el parametro controller
        require VIEWS.$controllers.'/'.$views.'.php';
    }
}
      
?>
