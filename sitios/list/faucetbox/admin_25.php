
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_25.php");

if ($status == "enabled") {$t25faucetbox = "2CCC1B"; $output25faucetbox = ""; $b25faucetbox= "";

} else {	$b25faucetbox = '<a href="#">Balance:</a>';
			$t25faucetbox = "F23427";

                  function getBetween25faucetbox($content25faucetbox,$start25faucetbox,$end25faucetbox){
                  $r25faucetbox = explode($start25faucetbox, $content25faucetbox);
                  if (isset($r25faucetbox[1])){
                  $r25faucetbox = explode($end25faucetbox, $r25faucetbox[1]);
                  return $r25faucetbox[0];
                  };
                  return '';
                  }

                  $cadena25faucetbox = "";

                  //metemos la url en una variable

                  $enlace25faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo25faucetbox= fopen("$enlace25faucetbox","r") or die ("error #404");
                  while (!feof($fo25faucetbox)) {
                  $cadena25faucetbox .= fgets($fo25faucetbox, 1024);
                  }
                  fclose ($fo25faucetbox); 

                  $content25faucetbox = $cadena25faucetbox;
                  $start25faucetbox = "Balance:";
                  $end25faucetbox = "satoshi";
                  $output25faucetbox = getBetween25faucetbox($content25faucetbox,$start25faucetbox,$end25faucetbox);


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
			<td style="width:20px;background:#'.$t25faucetbox.'"><b>25</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b25faucetbox.$output25faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>