
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_27.php");

if ($status == "enabled") {$t27faucetbox = "2CCC1B"; $output27faucetbox = ""; $b27faucetbox= "";

} else {	$b27faucetbox = '<a href="#">Balance:</a>';
			$t27faucetbox = "F23427";

                  function getBetween27faucetbox($content27faucetbox,$start27faucetbox,$end27faucetbox){
                  $r27faucetbox = explode($start27faucetbox, $content27faucetbox);
                  if (isset($r27faucetbox[1])){
                  $r27faucetbox = explode($end27faucetbox, $r27faucetbox[1]);
                  return $r27faucetbox[0];
                  };
                  return '';
                  }

                  $cadena27faucetbox = "";

                  //metemos la url en una variable

                  $enlace27faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo27faucetbox= fopen("$enlace27faucetbox","r") or die ("error #404");
                  while (!feof($fo27faucetbox)) {
                  $cadena27faucetbox .= fgets($fo27faucetbox, 1024);
                  }
                  fclose ($fo27faucetbox); 

                  $content27faucetbox = $cadena27faucetbox;
                  $start27faucetbox = "Balance:";
                  $end27faucetbox = "satoshi";
                  $output27faucetbox = getBetween27faucetbox($content27faucetbox,$start27faucetbox,$end27faucetbox);


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
			<td style="width:20px;background:#'.$t27faucetbox.'"><b>27</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b27faucetbox.$output27faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>