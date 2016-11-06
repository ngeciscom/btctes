
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/xapo/conf_06.php");

if ($status == "enabled") {$t06xapo = "2CCC1B"; $output06xapo = ""; $b06xapo= "";

} else {	$b06xapo = '<a href="#">Balance:</a>';
			$t06xapo = "F23427";

                  function getBetween06xapo($content06xapo,$start06xapo,$end06xapo){
                  $r06xapo = explode($start06xapo, $content06xapo);
                  if (isset($r06xapo[1])){
                  $r06xapo = explode($end06xapo, $r06xapo[1]);
                  return $r06xapo[0];
                  };
                  return '';
                  }

                  $cadena06xapo = "";

                  //metemos la url en una variable

                  $enlace06xapo="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo06xapo= fopen("$enlace06xapo","r") or die ("error #404");
                  while (!feof($fo06xapo)) {
                  $cadena06xapo .= fgets($fo06xapo, 1024);
                  }
                  fclose ($fo06xapo); 

                  $content06xapo = $cadena06xapo;
                  $start06xapo = "Balance:";
                  $end06xapo = "satoshi";
                  $output06xapo = getBetween06xapo($content06xapo,$start06xapo,$end06xapo);


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
			<td style="width:20px;background:#'.$t06xapo.'"><b>06</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b06xapo.$output06xapo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>