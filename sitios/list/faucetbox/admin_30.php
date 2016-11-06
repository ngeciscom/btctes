
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_30.php");

if ($status == "enabled") {$t30faucetbox = "2CCC1B"; $output30faucetbox = ""; $b30faucetbox= "";

} else {	$b30faucetbox = '<a href="#">Balance:</a>';
			$t30faucetbox = "F23427";

                  function getBetween30faucetbox($content30faucetbox,$start30faucetbox,$end30faucetbox){
                  $r30faucetbox = explode($start30faucetbox, $content30faucetbox);
                  if (isset($r30faucetbox[1])){
                  $r30faucetbox = explode($end30faucetbox, $r30faucetbox[1]);
                  return $r30faucetbox[0];
                  };
                  return '';
                  }

                  $cadena30faucetbox = "";

                  //metemos la url en una variable

                  $enlace30faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo30faucetbox= fopen("$enlace30faucetbox","r") or die ("error #404");
                  while (!feof($fo30faucetbox)) {
                  $cadena30faucetbox .= fgets($fo30faucetbox, 1024);
                  }
                  fclose ($fo30faucetbox); 

                  $content30faucetbox = $cadena30faucetbox;
                  $start30faucetbox = "Balance:";
                  $end30faucetbox = "satoshi";
                  $output30faucetbox = getBetween30faucetbox($content30faucetbox,$start30faucetbox,$end30faucetbox);


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
			<td style="width:20px;background:#'.$t30faucetbox.'"><b>30</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b30faucetbox.$output30faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>