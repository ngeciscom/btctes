<?php


// CUENTA LA CANTIDAD DE NOTIFICACIONES
$cant_notif = count(glob("../sitios/reportes/{*.html}",GLOB_BRACE));

$cant_archivos = count(glob("../sitios/faucet/" .$ruta_dest ."/{*.php}",GLOB_BRACE))+1;
//$cant_faucet = count(glob("../sitios/faucet/{*.php}",GLOB_BRACE));

// CUENTA LA CANTIDAD DE FAUCET DE CADA ROTADOR
$cant_f_faucetbox = count(glob("../sitios/faucet/faucetbox/{*.php}",GLOB_BRACE));
$cant_f_epay = count(glob("../sitios/faucet/epay/{*.php}",GLOB_BRACE));
$cant_f_xapo = count(glob("../sitios/faucet/xapo/{*.php}",GLOB_BRACE));
$cant_total = $cant_f_faucetbox + $cant_f_epay + $cant_f_xapo;

?>