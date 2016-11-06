
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_05.php");

if ($status == "enabled") {$t05faucetbox = "2CCC1B"; $output05faucetbox = ""; $b05faucetbox= "";

} else {	$b05faucetbox = '<a href="#">Balance:</a>';
			$t05faucetbox = "F23427";

                  function getBetween05faucetbox($content05faucetbox,$start05faucetbox,$end05faucetbox){
                  $r05faucetbox = explode($start05faucetbox, $content05faucetbox);
                  if (isset($r05faucetbox[1])){
                  $r05faucetbox = explode($end05faucetbox, $r05faucetbox[1]);
                  return $r05faucetbox[0];
                  };
                  return '';
                  }

                  $cadena05faucetbox = "";

                  //metemos la url en una variable

                  $enlace05faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo05faucetbox= fopen("$enlace05faucetbox","r") or die ("error #404");
                  while (!feof($fo05faucetbox)) {
                  $cadena05faucetbox .= fgets($fo05faucetbox, 1024);
                  }
                  fclose ($fo05faucetbox); 

                  $content05faucetbox = $cadena05faucetbox;
                  $start05faucetbox = "Balance:";
                  $end05faucetbox = "satoshi";
                  $output05faucetbox = getBetween05faucetbox($content05faucetbox,$start05faucetbox,$end05faucetbox);


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
			<td style="width:20px;background:#'.$t05faucetbox.'"><b>05</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b05faucetbox.$output05faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>