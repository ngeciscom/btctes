
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_11.php");

if ($status == "enabled") {$t11faucetbox = "2CCC1B"; $output11faucetbox = ""; $b11faucetbox= "";

} else {	$b11faucetbox = '<a href="#">Balance:</a>';
			$t11faucetbox = "F23427";

                  function getBetween11faucetbox($content11faucetbox,$start11faucetbox,$end11faucetbox){
                  $r11faucetbox = explode($start11faucetbox, $content11faucetbox);
                  if (isset($r11faucetbox[1])){
                  $r11faucetbox = explode($end11faucetbox, $r11faucetbox[1]);
                  return $r11faucetbox[0];
                  };
                  return '';
                  }

                  $cadena11faucetbox = "";

                  //metemos la url en una variable

                  $enlace11faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo11faucetbox= fopen("$enlace11faucetbox","r") or die ("error #404");
                  while (!feof($fo11faucetbox)) {
                  $cadena11faucetbox .= fgets($fo11faucetbox, 1024);
                  }
                  fclose ($fo11faucetbox); 

                  $content11faucetbox = $cadena11faucetbox;
                  $start11faucetbox = "Balance:";
                  $end11faucetbox = "satoshi";
                  $output11faucetbox = getBetween11faucetbox($content11faucetbox,$start11faucetbox,$end11faucetbox);


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
			<td style="width:20px;background:#'.$t11faucetbox.'"><b>11</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b11faucetbox.$output11faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>