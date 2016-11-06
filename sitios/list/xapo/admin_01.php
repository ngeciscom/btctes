
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/xapo/conf_01.php");

if ($status == "enabled") {$t01xapo = "2CCC1B"; $output01xapo = ""; $b01xapo= "";

} else {	$b01xapo = '<a href="#">Balance:</a>';
			$t01xapo = "F23427";

                  function getBetween01xapo($content01xapo,$start01xapo,$end01xapo){
                  $r01xapo = explode($start01xapo, $content01xapo);
                  if (isset($r01xapo[1])){
                  $r01xapo = explode($end01xapo, $r01xapo[1]);
                  return $r01xapo[0];
                  };
                  return '';
                  }

                  $cadena01xapo = "";

                  //metemos la url en una variable

                  $enlace01xapo="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo01xapo= fopen("$enlace01xapo","r") or die ("error #404");
                  while (!feof($fo01xapo)) {
                  $cadena01xapo .= fgets($fo01xapo, 1024);
                  }
                  fclose ($fo01xapo); 

                  $content01xapo = $cadena01xapo;
                  $start01xapo = "Balance:";
                  $end01xapo = "satoshi";
                  $output01xapo = getBetween01xapo($content01xapo,$start01xapo,$end01xapo);


}





echo'
<!DOCTYPE html>
<html>
<head>

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="'.$url_base.'css/bootstrap.css">
      <link rel="stylesheet" href="'.$url_base.'css/default.css">
</head>
<body>
<table border="1" cellpadding="1" cellspacing="1" style="background:#F0F0F0;height:55px; width:100%">
	<tbody>
		<tr>
			<td style="width:20px;background:#'.$t01xapo.'"><b>01</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b01xapo.$output01xapo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>