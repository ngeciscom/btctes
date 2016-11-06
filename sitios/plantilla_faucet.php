<?php
require('_login.php');
include_once('config.php');
include_once('variables.php');
include_once('..'.$lang);
$next_rotador = "";
$next = "";
$ant_fau ="";
$fau_number ="";

  switch($ruta_dest)
  {
    case 'xapo':
          $next_rotador = "faucetbox";
          $ant_fau = "epay"; 
    break;

    case 'faucetbox':
         $next_rotador = "epay";
         $ant_fau = "xapo"; 
    break; 

    case 'epay':
        $next_rotador = "xapo";
        $ant_fau = "faucetbox";  
    break;
  }

fwrite($fp, ' 
<?php
include_once($_SERVER[\'DOCUMENT_ROOT\']."/sitios/config.php");
include_once($_SERVER[\'DOCUMENT_ROOT\']."/sitios/pg/'.$ruta_dest.'/conf_'.$IDfaucet.'.php");
include_once($_SERVER[\'DOCUMENT_ROOT\'].$lang);
$ant_fau = "";
$ant_faucet = "'.$ant_faucet.'";
$fau_number = count(glob($_SERVER[\'DOCUMENT_ROOT\']."/sitios/faucet/'.$ant_fau.'/{*.php}",GLOB_BRACE));
$lim = "9";
if ($fau_number <= $lim) {$fau_number = "0".$fau_number;
          if ($fau_number == "010") { $fau_number = "10"; }       
} else { $fau_number = $fau_number;}
          if ($fau_number == "9") { $fau_number = "09"; }
$siguiente_fau = "../'.$ruta_dest.'/'.$sig_faucet.'.php";
$total_'.$ruta_dest.' = count(glob("../'.$ruta_dest.'/{*.php}",GLOB_BRACE));
$next = "../'.$ruta_dest.'/'.$sig_faucet.'.php";
$siguiente_fau = "../'.$ruta_dest.'/'.$sig_faucet.'.php";
if (file_exists($siguiente_fau)) {$next = $next ;} else {$next = $url_base."sitios/faucet/'.$next_rotador.'/01.php";};

if ($ant_faucet > "00") {
	$ant_faucet = $url_base."sitios/faucet/'.$ruta_dest.'/'.$ant_faucet.'";

} else {
	$ant_faucet =  $url_base."sitios/faucet/'.$ant_fau.'/".$fau_number;
};

if ($status == "enabled") {

echo\'
<html><head><title>\'.$site_title.\'</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta name="viewport" content="width-device-width, initial-scale=1">
<meta name="robots" content="index,nofollow">
<meta name="revisit-after" content="2 days">
<link rel="shortcut icon" type="image/ico" href="../favicon.ico">
<link rel="stylesheet" href="\' . $url_base .\'css/bootstrap.css">
<link rel="stylesheet" href="\' . $url_base .\'css/default.css">
<link rel="stylesheet" href="\'.$url_base.\'css/index.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $(".loader").fadeOut("slow");
})
</script>
</script>
<script type="text/javascript">
myvar = window.parent.location;
myVar2 = document.URL;
$(function(){
      if (myVar2 == myvar) {$("#botonera").show(); $("#ads").hide();} else { $("#botonera").hide(); $("#ads").show();}
 });
</script>

<style>
#ads {position:absolute; top:0px; padding-top:25px; \'.$ubic.\':0px; width:\'.$ancho.\'px; height:100%; background:\'.$color.\'; }
#botonera {position:absolute; margin:auto;color:white; text-align:center;top:0px; padding-top:25px; \'.$ubic.\':0px; width:\'.$ancho2.\'px; height:100%; background:\'.$color.\'; overflow:hide;}
</style>

</head>
</body>
<div class="loader">
  <div id="msj">Loading...</div>
</div>
     <!-- IFRAME DE LA FAUCET  -->
     <iframe src="'.$refer.'" name="faucet" border="0" width="100%" height="100%"></iframe>

<div id="botonera">
				<p> <font size="6px">\'.$title.\'</font> </p>
				<p> <font size="4px">\'.$pago.\'sat. / \'.$tiempo.\' min.</font> </p>
				<p> \'.$s_pago.\' - Faucet '.$IDfaucet.'/\'.$total_'.$ruta_dest.'.\'</p>
				
				<a href="\'.$ant_faucet.\'.php" class="btn btn-primary"><img border=0 height="25" width="25" hspace=1 vspace=1 src="\'.$url_base.\'img/ant-ico.png"></a> 
				
				<a class="btn btn-warning" href="\'.$url_base.\'" title="\'.$home.\'" target="_self">
				<img border=0 height="25" width="25" hspace=1 vspace=1 src="\'.$url_base.\'img/home-ico.png"></a>
				<a href="\'.$next.\'" class="btn btn-primary"><img border=0 height="25" width="25" hspace=1 vspace=1 src="\'.$url_base.\'img/sig-ico.png"></a></p><br>

				\'.$ad1.\'
				\'.$ad2.\'
</div>

<div id="ads">
\'.$ad1.\' <br>
\'.$ad2.\' <br>
\'.$ad3.\' <br>
</div>


</body> 
</html> \'; } else {header ("Location: /sitios/faucet/'.$ruta_dest.'/'.$sig_faucet.'.php");};
?>');

?>