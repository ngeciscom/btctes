
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/xapo/conf_03.php");

if ($status == "enabled") {$t03xapo = "2CCC1B"; $output03xapo = ""; $b03xapo= "";

} else {	$b03xapo = '<a href="#">Balance:</a>';
			$t03xapo = "F23427";

                  function getBetween03xapo($content03xapo,$start03xapo,$end03xapo){
                  $r03xapo = explode($start03xapo, $content03xapo);
                  if (isset($r03xapo[1])){
                  $r03xapo = explode($end03xapo, $r03xapo[1]);
                  return $r03xapo[0];
                  };
                  return '';
                  }

                  $cadena03xapo = "";

                  //metemos la url en una variable

                  $enlace03xapo="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo03xapo= fopen("$enlace03xapo","r") or die ("error #404");
                  while (!feof($fo03xapo)) {
                  $cadena03xapo .= fgets($fo03xapo, 1024);
                  }
                  fclose ($fo03xapo); 

                  $content03xapo = $cadena03xapo;
                  $start03xapo = "Balance:";
                  $end03xapo = "satoshi";
                  $output03xapo = getBetween03xapo($content03xapo,$start03xapo,$end03xapo);


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
			<td style="width:20px;background:#'.$t03xapo.'"><b>03</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b03xapo.$output03xapo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>