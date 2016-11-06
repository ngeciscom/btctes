 
<?php
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
$ubicacion = $_POST['ubicacion_'];

include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT'].$lang);


echo'
<html><head><title>'.$preview_.'</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta name="viewport" content="width-device-width, initial-scale=1">
<meta name="robots" content="index,nofollow">
<meta name="revisit-after" content="2 days">
<link rel="shortcut icon" type="image/ico" href="../favicon.ico">
<link rel="stylesheet" href="' . $url_base .'css/bootstrap.css">
<link rel="stylesheet" href="' . $url_base .'css/default.css">
<link rel="stylesheet" href="'.$url_base.'css/index.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>

<style>
#ads {position:absolute; top:0px; padding-top:25px; '.$ubicacion.':0px; width:'.$d_width.'px; height:100%; background:#'.$d_color.'; }
#botonera {position:absolute; margin:auto;color:white; text-align:center;top:0px; padding-top:25px; '.$ubicacion.':0px; width:'.$d_width.'px; height:100%; background:#'.$d_color.'; overflow:hide;}
</style>

</head>
</body>
<div class="loader">
  <div id="msj"><h2>Loading Preview...</h2></div>
</div>
     <!-- IFRAME DE LA FAUCET  -->
     <iframe src="'.$URL.'" name="faucet" border="0" width="100%" height="100%"></iframe>

<div id="botonera">
				<p> <font color="red"><u>'.$preview_.'</u></font></p>
				<p> <font size="6px">'.$nombre_.'</font> </p>
				<p> <font size="4px">'.$Descrip2.'sat. / '.$Descrip1.' min.</font> </p>
				<p> '.$Descrip3.' - Faucet 01/01</p>

				<a href="#" class="btn btn-primary"><img border=0 height="25" width="25" hspace=1 vspace=1 src="'.$url_base.'img/ant-ico.png"></a> 
				
				<a class="btn btn-warning" href="#" title="'.$home.'" target="_self">
				<img border=0 height="25" width="25" hspace=1 vspace=1 src="'.$url_base.'img/home-ico.png"></a>
				<a href="#" class="btn btn-primary"><img border=0 height="25" width="25" hspace=1 vspace=1 src="'.$url_base.'img/sig-ico.png"></a></p><br>

				'.$pub01.'
				'.$pub02.'
				'.$pub03.'
</div>


</body> 
</html> '; 
?>