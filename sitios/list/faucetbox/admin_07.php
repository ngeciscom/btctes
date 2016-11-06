
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_07.php");

if ($status == "enabled") {$t07faucetbox = "2CCC1B"; $output07faucetbox = ""; $b07faucetbox= "";

} else {	$b07faucetbox = '<a href="#">Balance:</a>';
			$t07faucetbox = "F23427";

                  function getBetween07faucetbox($content07faucetbox,$start07faucetbox,$end07faucetbox){
                  $r07faucetbox = explode($start07faucetbox, $content07faucetbox);
                  if (isset($r07faucetbox[1])){
                  $r07faucetbox = explode($end07faucetbox, $r07faucetbox[1]);
                  return $r07faucetbox[0];
                  };
                  return '';
                  }

                  $cadena07faucetbox = "";

                  //metemos la url en una variable

                  $enlace07faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo07faucetbox= fopen("$enlace07faucetbox","r") or die ("error #404");
                  while (!feof($fo07faucetbox)) {
                  $cadena07faucetbox .= fgets($fo07faucetbox, 1024);
                  }
                  fclose ($fo07faucetbox); 

                  $content07faucetbox = $cadena07faucetbox;
                  $start07faucetbox = "Balance:";
                  $end07faucetbox = "satoshi";
                  $output07faucetbox = getBetween07faucetbox($content07faucetbox,$start07faucetbox,$end07faucetbox);


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
			<td style="width:20px;background:#'.$t07faucetbox.'"><b>07</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b07faucetbox.$output07faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>