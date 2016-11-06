<?php
include_once('config.php');
include_once('variables.php');
include_once('..'.$lang);

fwrite($fp, '
<?php
include_once($_SERVER[\'DOCUMENT_ROOT\']."/sitios/config.php");
include_once($_SERVER[\'DOCUMENT_ROOT\']."/sitios/pg/'.$ruta_dest.'/conf_'.$IDfaucet.'.php");

if ($status == "enabled") {$t'.$IDfaucet.$ruta_dest.' = "2CCC1B"; $output'.$IDfaucet.$ruta_dest.' = ""; $b'.$IDfaucet.$ruta_dest.'= "";

} else {	$b'.$IDfaucet.$ruta_dest.' = \'<a href="#">Balance:</a>\';
			$t'.$IDfaucet.$ruta_dest.' = "F23427";

                  function getBetween'.$IDfaucet.$ruta_dest.'($content'.$IDfaucet.$ruta_dest.',$start'.$IDfaucet.$ruta_dest.',$end'.$IDfaucet.$ruta_dest.'){
                  $r'.$IDfaucet.$ruta_dest.' = explode($start'.$IDfaucet.$ruta_dest.', $content'.$IDfaucet.$ruta_dest.');
                  if (isset($r'.$IDfaucet.$ruta_dest.'[1])){
                  $r'.$IDfaucet.$ruta_dest.' = explode($end'.$IDfaucet.$ruta_dest.', $r'.$IDfaucet.$ruta_dest.'[1]);
                  return $r'.$IDfaucet.$ruta_dest.'[0];
                  };
                  return \'\';
                  }

                  $cadena'.$IDfaucet.$ruta_dest.' = "";

                  //metemos la url en una variable

                  $enlace'.$IDfaucet.$ruta_dest.'="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo'.$IDfaucet.$ruta_dest.'= fopen("$enlace'.$IDfaucet.$ruta_dest.'","r") or die ("error #404");
                  while (!feof($fo'.$IDfaucet.$ruta_dest.')) {
                  $cadena'.$IDfaucet.$ruta_dest.' .= fgets($fo'.$IDfaucet.$ruta_dest.', 1024);
                  }
                  fclose ($fo'.$IDfaucet.$ruta_dest.'); 

                  $content'.$IDfaucet.$ruta_dest.' = $cadena'.$IDfaucet.$ruta_dest.';
                  $start'.$IDfaucet.$ruta_dest.' = "Balance:";
                  $end'.$IDfaucet.$ruta_dest.' = "satoshi";
                  $output'.$IDfaucet.$ruta_dest.' = getBetween'.$IDfaucet.$ruta_dest.'($content'.$IDfaucet.$ruta_dest.',$start'.$IDfaucet.$ruta_dest.',$end'.$IDfaucet.$ruta_dest.');


}





echo\'
<!DOCTYPE html>
<html>
<head>

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="\'.$url_base.\'css/bootstrap.css">
      <link rel="stylesheet" href="\'.$url_base.\'css/default.css">
</head>
<body>
<table border="1" cellpadding="1" cellspacing="1" style="background:#F0F0F0;height:55px; width:100%">
	<tbody>
		<tr>
			<td style="width:20px;background:#\'.$t'.$IDfaucet.$ruta_dest.'.\'"><b>'.$IDfaucet.'</b></span></td>
			<td style="vertical-align: middle;width:200px">\'.$ID_name .\'<br>\'.$b'.$IDfaucet.$ruta_dest.'.$output'.$IDfaucet.$ruta_dest.'.\'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="\'.$url_base.\'img/reloj_ico.png"> \'.$tiempo.\'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="\'.$url_base.\'img/bit_ico.png"> \'.$pago .\'</td>
			<td style="vertical-align: middle;width:100px"><a href="\'.$dir_web.\'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>\'; ?>');
     
     


?>