
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/epay/conf_01.php");

if ($status == "enabled") {$t01epay = "2CCC1B"; $output01epay = ""; $b01epay= "";

} else {	$b01epay = '<a href="#">Balance:</a>';
			$t01epay = "F23427";

                  function getBetween01epay($content01epay,$start01epay,$end01epay){
                  $r01epay = explode($start01epay, $content01epay);
                  if (isset($r01epay[1])){
                  $r01epay = explode($end01epay, $r01epay[1]);
                  return $r01epay[0];
                  };
                  return '';
                  }

                  $cadena01epay = "";

                  //metemos la url en una variable

                  $enlace01epay="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo01epay= fopen("$enlace01epay","r") or die ("error #404");
                  while (!feof($fo01epay)) {
                  $cadena01epay .= fgets($fo01epay, 1024);
                  }
                  fclose ($fo01epay); 

                  $content01epay = $cadena01epay;
                  $start01epay = "Balance:";
                  $end01epay = "satoshi";
                  $output01epay = getBetween01epay($content01epay,$start01epay,$end01epay);


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
			<td style="width:20px;background:#'.$t01epay.'"><b>01</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b01epay.$output01epay.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>