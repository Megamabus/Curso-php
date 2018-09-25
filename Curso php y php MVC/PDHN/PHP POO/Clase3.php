<?php 
	/*
-invocar a la constante dentro de una clase
-hacer referencia usando una variable o metodo $clase
	*/


	Class MiClase{
		//Variable constatante, estas se difieren de las variables comunes en que no utlizan el simbolo $ al declararlas o emplearlas
		const CONSTANTE = "Hol soy una constante...";

		//Metodo
		function mostrarConstante(){
			echo self::CONSTANTE;
		}
	}

	$nombreClase = "MiClase";//variable para hacer referencia a una clase
	echo $nombreClase::CONSTANTE;//referencia a la clase con la variable
	$nombreClase::mostrarConstante();//tambien sirve para invocar el metodo de la clase
	echo MiClase::CONSTANTE;//asi tambien funciona


	//Ahora creo una instancia de la clase
	$clase = new MiClase();
	$clase->mostrarConstante();
	echo $clase::CONSTANTE;//tambien se puede invocar a la constante invocante el objeto de la clase  con ::

 ?>