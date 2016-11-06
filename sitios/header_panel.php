<?php



// ARCHIVO DE CONFIGURACIONES
include_once('variables.php');

include_once('config.php');
include_once($_SERVER['DOCUMENT_ROOT'].$lang);

$titulo = "BTCF4. Admin area";
if ($cant_notif >= 1) {$titulo = '('.$cant_notif.') BTCF4. Admin area';} else {$titulo = $titulo;};



echo '    <html><head><title>'.$titulo.' </title>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="shortcut icon" type="image/ico" href="favicon.ico">
          <link rel="stylesheet" href="' . $url_base .'css/bootstrap.css">
          <link rel="stylesheet" href="' . $url_base .'css/default.css">
			</head><body>

			<div class="navbar-wrapper">
			<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">

			
			<a class="btn btn-warning navbar-element pull-right" href="logout.php" title="'.$salir.'">
			<img border=0 height="35" width="35" hspace=1 vspace=1 src="../img/salir-ico.png"></a>	

			<a class="btn btn-warning navbar-element pull-right" href="config_form.php" title="'.$conf.'">
			<img border=0 height="35" width="35"hspace=1 vspace=1 src="../img/config.png"></a>			

			<a class="btn btn-warning navbar-element pull-right" href="../sitios/panel_reportes.php" title="'.$notific.'">
			<img border=0 height="35" width="35" hspace=1 vspace=1 src="../img/notif-ico.png"> &nbsp;' .$cant_notif .'</font></a>

			<a class="btn btn-warning navbar-element pull-right" href="'.$url_base.'" title="'.$home.'" target="_blank">
			<img border=0 height="35" width="35" hspace=1 vspace=1 src="../img/home-ico.png"></a>
	
			<a class="btn btn-warning navbar-element pull-right" href="../sitios/faucets.php" title="'.$list_fau_desc.'">
     		<img border=0 height="35" width="35" hspace=1 vspace=1 src="../img/list.png"> <b><font color="#fff"</b> ' .$cant_total .'</font></a>

			<a class="btn btn-success navbar-element pull-left" href="../sitios/index.php" title="'.$add_fau_btn.'">
			<img border=0 height="35" width="35"hspace=1 vspace=1 src="../img/add.png">'.$add_fau.'
			</a>

				<a class="btn btn-success navbar-element pull-left" href="../sitios/modificar_form.php" title="'.$edit_btn_desc.'">
				<img border=0 height="35" width="35"hspace=1 vspace=1 src="../img/edit.png">'.$edit_btn.'</a>
			<!--		<a class="btn btn-success navbar-element pull-left" href="../sitios/FormEdit.php" title="'.$reemp_btn.'">'.$reemp.'</a> -->

			</div></div></div><br><br><br>';


?>