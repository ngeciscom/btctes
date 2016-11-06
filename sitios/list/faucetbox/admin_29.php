
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_29.php");

if ($status == "enabled") {$t29faucetbox = "2CCC1B"; $output29faucetbox = ""; $b29faucetbox= "";

} else {	$b29faucetbox = '<a href="#">Balance:</a>';
			$t29faucetbox = "F23427";

                  function getBetween29faucetbox($content29faucetbox,$start29faucetbox,$end29faucetbox){
                  $r29faucetbox = explode($start29faucetbox, $content29faucetbox);
                  if (isset($r29faucetbox[1])){
                  $r29faucetbox = explode($end29faucetbox, $r29faucetbox[1]);
                  return $r29faucetbox[0];
                  };
                  return '';
                  }

                  $cadena29faucetbox = "";

                  //metemos la url en una variable

                  $enlace29faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo29faucetbox= fopen("$enlace29faucetbox","r") or die ("error #404");
                  while (!feof($fo29faucetbox)) {
                  $cadena29faucetbox .= fgets($fo29faucetbox, 1024);
                  }
                  fclose ($fo29faucetbox); 

                  $content29faucetbox = $cadena29faucetbox;
                  $start29faucetbox = "Balance:";
                  $end29faucetbox = "satoshi";
                  $output29faucetbox = getBetween29faucetbox($content29faucetbox,$start29faucetbox,$end29faucetbox);


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
			<td style="width:20px;background:#'.$t29faucetbox.'"><b>29</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b29faucetbox.$output29faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>