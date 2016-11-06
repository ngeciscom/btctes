
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_12.php");

if ($status == "enabled") {$t12faucetbox = "2CCC1B"; $output12faucetbox = ""; $b12faucetbox= "";

} else {	$b12faucetbox = '<a href="#">Balance:</a>';
			$t12faucetbox = "F23427";

                  function getBetween12faucetbox($content12faucetbox,$start12faucetbox,$end12faucetbox){
                  $r12faucetbox = explode($start12faucetbox, $content12faucetbox);
                  if (isset($r12faucetbox[1])){
                  $r12faucetbox = explode($end12faucetbox, $r12faucetbox[1]);
                  return $r12faucetbox[0];
                  };
                  return '';
                  }

                  $cadena12faucetbox = "";

                  //metemos la url en una variable

                  $enlace12faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo12faucetbox= fopen("$enlace12faucetbox","r") or die ("error #404");
                  while (!feof($fo12faucetbox)) {
                  $cadena12faucetbox .= fgets($fo12faucetbox, 1024);
                  }
                  fclose ($fo12faucetbox); 

                  $content12faucetbox = $cadena12faucetbox;
                  $start12faucetbox = "Balance:";
                  $end12faucetbox = "satoshi";
                  $output12faucetbox = getBetween12faucetbox($content12faucetbox,$start12faucetbox,$end12faucetbox);


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
			<td style="width:20px;background:#'.$t12faucetbox.'"><b>12</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b12faucetbox.$output12faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>