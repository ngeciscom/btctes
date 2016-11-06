<?php

$causa = $_POST['motivo'];
$mail = $_POST['mail'];
$faucet = $_POST['nombre_faucet']; 
$fecha = strftime( "%d-%m-%Y %H:%M:%S", time() ); //Determina la fecha y hora del envio del reporte

$cant_archivos = count(glob("reportes/{*.html}",GLOB_BRACE))+1;
$sig_faucet = $cant_archivos+1;
$fp = fopen("plantilla.html", "w+") or die ($fail); 
fwrite($fp, '
    <html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/default.css">

    <div class="container"> 
    <table class="table table-bordered table-striped"> <td>
		<font size="4"><font color="000000"><b>'.$fecha .'</b> &nbsp;| '.$rep_de .$faucet .' <br>
		<b>'.$send_by.' </b>' .$mail . '<br> <b> '.$motivo_rep.' </b>' .$causa . ' &nbsp; &nbsp; 
    <a href="../sitios/faucet/'.$faucet .'.php" target="_blank"> '.$check.'</a> </font> 
    </td></table></div></br>');

    	$nombreActual= "plantilla.html";
  		$nombreNuevo = "reportes/" . $cant_archivos .".html";

if (file_exists($nombreActual))
    {
     rename($nombreActual, $nombreNuevo);

     echo  '<html><head>
            <title>'.$site_title.'</title>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            </head>
            <body>
            <div class="container"> 
            <h1>'.$envio_ok.'</h1>
            <h3>'.$env_ok_.' </h3>
            </div>
            </body>
            </html>
            ';

}
   else
    {
     echo $envio_fail;
    }
?>