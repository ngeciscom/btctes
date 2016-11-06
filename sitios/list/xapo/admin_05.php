
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/xapo/conf_05.php");

if ($status == "enabled") {$t05xapo = "2CCC1B"; $output05xapo = ""; $b05xapo= "";

} else {	$b05xapo = '<a href="#">Balance:</a>';
			$t05xapo = "F23427";

                  function getBetween05xapo($content05xapo,$start05xapo,$end05xapo){
                  $r05xapo = explode($start05xapo, $content05xapo);
                  if (isset($r05xapo[1])){
                  $r05xapo = explode($end05xapo, $r05xapo[1]);
                  return $r05xapo[0];
                  };
                  return '';
                  }

                  $cadena05xapo = "";

                  //metemos la url en una variable

                  $enlace05xapo="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo05xapo= fopen("$enlace05xapo","r") or die ("error #404");
                  while (!feof($fo05xapo)) {
                  $cadena05xapo .= fgets($fo05xapo, 1024);
                  }
                  fclose ($fo05xapo); 

                  $content05xapo = $cadena05xapo;
                  $start05xapo = "Balance:";
                  $end05xapo = "satoshi";
                  $output05xapo = getBetween05xapo($content05xapo,$start05xapo,$end05xapo);


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
			<td style="width:20px;background:#'.$t05xapo.'"><b>05</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b05xapo.$output05xapo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>