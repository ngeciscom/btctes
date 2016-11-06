
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_26.php");

if ($status == "enabled") {$t26faucetbox = "2CCC1B"; $output26faucetbox = ""; $b26faucetbox= "";

} else {	$b26faucetbox = '<a href="#">Balance:</a>';
			$t26faucetbox = "F23427";

                  function getBetween26faucetbox($content26faucetbox,$start26faucetbox,$end26faucetbox){
                  $r26faucetbox = explode($start26faucetbox, $content26faucetbox);
                  if (isset($r26faucetbox[1])){
                  $r26faucetbox = explode($end26faucetbox, $r26faucetbox[1]);
                  return $r26faucetbox[0];
                  };
                  return '';
                  }

                  $cadena26faucetbox = "";

                  //metemos la url en una variable

                  $enlace26faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo26faucetbox= fopen("$enlace26faucetbox","r") or die ("error #404");
                  while (!feof($fo26faucetbox)) {
                  $cadena26faucetbox .= fgets($fo26faucetbox, 1024);
                  }
                  fclose ($fo26faucetbox); 

                  $content26faucetbox = $cadena26faucetbox;
                  $start26faucetbox = "Balance:";
                  $end26faucetbox = "satoshi";
                  $output26faucetbox = getBetween26faucetbox($content26faucetbox,$start26faucetbox,$end26faucetbox);


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
			<td style="width:20px;background:#'.$t26faucetbox.'"><b>26</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b26faucetbox.$output26faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>