<?php

// ARCHIVO DE CONFIGURACIONES
include_once('config.php');
include_once('variables.php');
include_once('..'.$lang);

fwrite($fp, '<?php

// ESTADO DE LA FAUCET (HABILITADA/DESHABILITADA)
$status ="'.$active.'";

// DATOS DE LA FAUCET --------
$s_pago = "'.$ruta_dest.'";

$ID_name = "'.$nombre_.'";
$dir_web = "'.$URL.'";

$tipo_ref = \''.$refer.'\';

$pago = "'.$Descrip2.'";
$tiempo = "'.$Descrip1.'";
$reco_fau = \''.$reco.'\';

// ADS -----------------------
$ad1 = \''.$pub01.'\';
$ad2 = \''.$pub02.'\';
$ad3 = \''.$pub03.'\';
$ubic = "'.$ubicacion.'";
$ancho = "'.$d_width.'";
$color = "#'.$d_color.'";
$ancho2 = "220";
$no_ad = "'.$disable_ads.'";
$nota = "";
?>'

);

?>