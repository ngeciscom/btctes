
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/xapo/conf_04.php");

if ($status == "enabled") {$t04xapo = "2CCC1B"; $output04xapo = ""; $b04xapo= "";

} else {	$b04xapo = '<a href="#">Balance:</a>';
			$t04xapo = "F23427";

                  function getBetween04xapo($content04xapo,$start04xapo,$end04xapo){
                  $r04xapo = explode($start04xapo, $content04xapo);
                  if (isset($r04xapo[1])){
                  $r04xapo = explode($end04xapo, $r04xapo[1]);
                  return $r04xapo[0];
                  };
                  return '';
                  }

                  $cadena04xapo = "";

                  //metemos la url en una variable

                  $enlace04xapo="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo04xapo= fopen("$enlace04xapo","r") or die ("error #404");
                  while (!feof($fo04xapo)) {
                  $cadena04xapo .= fgets($fo04xapo, 1024);
                  }
                  fclose ($fo04xapo); 

                  $content04xapo = $cadena04xapo;
                  $start04xapo = "Balance:";
                  $end04xapo = "satoshi";
                  $output04xapo = getBetween04xapo($content04xapo,$start04xapo,$end04xapo);


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
			<td style="width:20px;background:#'.$t04xapo.'"><b>04</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b04xapo.$output04xapo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>