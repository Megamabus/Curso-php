<?php
//El que tiene acceso a los datos

//Mismo nombre que el archivo
class Index_model
{
  private $data = array();
  function __construct()
  {
    $this->data = array("PHP",
    "C#", "ANDROID",
    "HTML");
  }

  function datosPersonales(){
    return $this->data;//retorna el objeto data. con los datos que estan en el metodo constructor de esta clase
  }
}

 ?>
