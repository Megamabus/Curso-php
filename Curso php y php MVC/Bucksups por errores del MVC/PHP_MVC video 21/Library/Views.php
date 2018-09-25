<?php
//Esta clase nos ayuda a ejecutar todas las vistas que tengmos en nuestro projecto

class Views //Se tiene que llamar igual al archivo
{
    function __construct(){

    }

    //Ejecuta las vistas
    //$views captura las vistas desde url
    //$controller captura el metodo que lo llama, o tambien dicho "invocar"
    function render($controller,$view){
        $controllers = get_class($controller);//Obtenemos el nombre de la clase que viene por el parametro controller
        require VIEWS.DFT."head.php";//Invocamos el archivo de cabecera para las vistas
        
        require VIEWS.$controllers.'/'.$view.'.php';
    
        require VIEWS.DFT."footer.php";//Invocamos el archivo de cierre de pagina para las vistas
    }
}
      
?>
