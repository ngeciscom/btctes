<?php 
require('_login.php');

include_once('config.php');
include_once('variables.php');
include_once('..'.$lang);

// MENU SUPERIOR
include_once('header_panel.php');

     echo'<html><body>
		  <div class="container"> 
		  <a class="btn navbar-element pull-left" href="../sitios/eliminar.php">'.$elim_rep.'</a>
		  </div><br></body></html>';

$directorio = opendir("../sitios/reportes/"); 
while ($archivo = readdir($directorio)) 
{
    if (is_dir($archivo))
    {
       
    }
    else
    {	
        include_once("../sitios/reportes/" .$archivo);


    }
}

?>