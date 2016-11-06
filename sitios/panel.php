<?php
//require('_login.php');

// RECEPCION DE DATOS DEL FORMULARIO
$nombre_ = $_POST['nombre'];
$URL = $_POST['url'];
$Descrip1 = $_POST['t_espera'];
$Descrip2 = $_POST['pago'];
$Descrip3 = $_POST['wallet'];
$d_color = $_POST['div_color'];
$d_width = $_POST['div_width'];
$pub01 = $_POST['pub1'];
$pub02 = $_POST['pub2'];
$pub03 = $_POST['pub3'];
$refer = $_POST['url_ref'];
$ubicacion = $_POST['ubicacion_'];
$active = "";

$reco = "";
$ruta_dest = $Descrip3;


include_once('header_panel.php');
include_once('config.php');
include_once('variables.php');
include_once($_SERVER['DOCUMENT_ROOT'].$lang);

// DETERMINA SI LA FAUCET VA A ESTAR HABILITADA
if (isset($_POST['estado'])) {
    $active = "enabled";
      } else {
        $active = "disabled";
    };


// DESHABILITAR COLUMMNA DE AD'S EN LA FAUCET
if (isset($_POST['no_ads'])) {$disable_ads = "yes"; $pub01 = ""; $pub02 = ""; $pub03 = ""; $d_width = "0";} else {$disable_ads = "no"; $pub01 = $pub01; $pub02 = $pub02; $pub03 = $pub03; $d_width = $d_width;};

// DETERMINA SI ES UNA FAUCET RECOMENDADA
if (isset($_POST['reco'])) {
    $reco = '<img height="25" width="25" border=0 hspace=1 vspace=1 src="../img/reco_ico.png">';
      } else {
       $reco ="";
    };

// DETERMINA SI ES UNA DE LAS PRIMERAS 9 FAUCET, DE SER ASI LE ASIGNA UN "0" ADELANTE
$archivos = $cant_archivos;
$limite = "9";

if ($archivos <= $limite) {
    $IDfaucet = "0".$cant_archivos;

    $sig_ = $archivos + 1; 
        $sig_faucet = "0".$sig_;
          if ($sig_faucet == "010") { $sig_faucet = "10"; }  // CORRECCION DEL BUG DE LA FAUCET 9 Y 10

    $ant_ = $archivos - 1; 
        $ant_faucet = "0".$ant_;
        
} else {

    $IDfaucet = $cant_archivos;
    $sig_faucet = $cant_archivos + 1;
    $ant_faucet = $cant_archivos - 1;
      if ($ant_faucet == "9") { $ant_faucet = "09"; } // CORRECCION DEL BUG DE LA FAUCET 9 Y 10
  }






// ESCRIBE EL CODIGO DE FUENTE DENTRO DE LA PLANTILLA DE LA FAUCET -------------------------------------------
$fp = fopen("plantilla.php", "w+") or die ('No se pudo abrir el archivo'); 

  include('plantilla_faucet.php');
    
    // VARIABLES PARA ASIGNAR EL NOMBRE Y UBICACION AL ARCHIVO -----------------------------------------------
    $nombreActual= "plantilla.php";
    $nombreNuevo = "../sitios/faucet/" .$ruta_dest. "/" . $IDfaucet .".php";


      // RENOMBRA LA PLANTILLA DE LA FAUCET Y LA GUARDA EN EL DIRECTORIO FINAL -------------------------------
       if (file_exists($nombreActual))
        {rename($nombreActual, $nombreNuevo);

          // INFORMA QUE LA FAUCET SE CREO CORRECTAMENTE ---------------------------------------------------------------
echo '
      <table class="table table-bordered table-striped"><tr>
      <div class="container">';
echo '<h1>Se agregó la faucet: <font color="red"<b>' .$Descrip3 . ' - '.$nombre_ .'</b> </font>correctamente. </h1> <br>';
echo '<h3>Cantidad de faucets almacenadas: '.$cant_archivos ;
echo '</h3><br><br><br>
      <a class="btn btn-success navbar-element pull-right" href="../' .$ruta_dest . "/" .$nombreNuevo .'" target="_blank">Visitar nueva faucet</a>
      </table> </td></tr></div>';
   }
   else
    {
     echo "No se encontro el archivo $nombreActual";
    }

//************************************************************************************************************

// ESCRIBE EL CODIGO DE FUENTE DENTRO DE LA PLANTILLA DE LA FAUCET -------------------------------------------
$fp = fopen("plantilla.php", "w+") or die ('No se pudo abrir el archivo'); 

  include('plantilla_listado.php');
    
    // VARIABLES PARA ASIGNAR EL NOMBRE Y UBICACION AL ARCHIVO -----------------------------------------------
    $nombreActual= "plantilla.php";
    $nombreNuevo = "../sitios/pg/" .$ruta_dest . "/" . $IDfaucet .".php";


      // RENOMBRA LA PLANTILLA DE LA FAUCET Y LA GUARDA EN EL DIRECTORIO FINAL -------------------------------
       if (file_exists($nombreActual))
        {rename($nombreActual, $nombreNuevo);

            }
   else
    {
     echo "No se encontro el archivo $nombreActual";
    }

//************************************************************************************************************

// CREA EL ARCHIVO "CONF_" DE LA FAUCET -------------------------------------------

$fp = fopen("plantilla.php", "w+") or die ('No se pudo abrir el archivo'); 

  include('plantilla_conf.php');
    
    // VARIABLES PARA ASIGNAR EL NOMBRE Y UBICACION AL ARCHIVO -----------------------------------------------
    $nombreActual= "plantilla.php";
    $nombreNuevo = "../sitios/pg/" .$ruta_dest . "/conf_" . $IDfaucet .".php";


      // RENOMBRA LA PLANTILLA DE LA FAUCET Y LA GUARDA EN EL DIRECTORIO FINAL -------------------------------
       if (file_exists($nombreActual))
        {rename($nombreActual, $nombreNuevo);

            }
   else
    {
     echo "No se encontro el archivo $nombreActual";
    }

//************************************************************************************************************

// CREA EL ARCHIVO "ADMIN_" DE LA FAUCET -------------------------------------------

$fp = fopen("plantilla.php", "w+") or die ('No se pudo abrir el archivo'); 

  include('plantilla_adminList.php');
    
    // VARIABLES PARA ASIGNAR EL NOMBRE Y UBICACION AL ARCHIVO -----------------------------------------------
    $nombreActual= "plantilla.php";
    $nombreNuevo = "../sitios/list/" .$ruta_dest . "/admin_" . $IDfaucet .".php";


      // RENOMBRA LA PLANTILLA DE LA FAUCET Y LA GUARDA EN EL DIRECTORIO FINAL -------------------------------
       if (file_exists($nombreActual))
        {rename($nombreActual, $nombreNuevo);

            }
   else
    {
     echo "No se encontro el archivo $nombreActual";
    }
?>