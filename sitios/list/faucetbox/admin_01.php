
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_01.php");

if ($status == "enabled") {$t01faucetbox = "2CCC1B"; $output01faucetbox = ""; $b01faucetbox= "";

} else {	$b01faucetbox = '<a href="#">Balance:</a>';
			$t01faucetbox = "F23427";

                  function getBetween01faucetbox($content01faucetbox,$start01faucetbox,$end01faucetbox){
                  $r01faucetbox = explode($start01faucetbox, $content01faucetbox);
                  if (isset($r01faucetbox[1])){
                  $r01faucetbox = explode($end01faucetbox, $r01faucetbox[1]);
                  return $r01faucetbox[0];
                  };
                  return '';
                  }

                  $cadena01faucetbox = "";

                  //metemos la url en una variable

                  $enlace01faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo01faucetbox= fopen("$enlace01faucetbox","r") or die ("error #404");
                  while (!feof($fo01faucetbox)) {
                  $cadena01faucetbox .= fgets($fo01faucetbox, 1024);
                  }
                  fclose ($fo01faucetbox); 

                  $content01faucetbox = $cadena01faucetbox;
                  $start01faucetbox = "Balance:";
                  $end01faucetbox = "satoshi";
                  $output01faucetbox = getBetween01faucetbox($content01faucetbox,$start01faucetbox,$end01faucetbox);


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
			<td style="width:20px;background:#'.$t01faucetbox.'"><b>01</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b01faucetbox.$output01faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>