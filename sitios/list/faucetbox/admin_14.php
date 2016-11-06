
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_14.php");

if ($status == "enabled") {$t14faucetbox = "2CCC1B"; $output14faucetbox = ""; $b14faucetbox= "";

} else {	$b14faucetbox = '<a href="#">Balance:</a>';
			$t14faucetbox = "F23427";

                  function getBetween14faucetbox($content14faucetbox,$start14faucetbox,$end14faucetbox){
                  $r14faucetbox = explode($start14faucetbox, $content14faucetbox);
                  if (isset($r14faucetbox[1])){
                  $r14faucetbox = explode($end14faucetbox, $r14faucetbox[1]);
                  return $r14faucetbox[0];
                  };
                  return '';
                  }

                  $cadena14faucetbox = "";

                  //metemos la url en una variable

                  $enlace14faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo14faucetbox= fopen("$enlace14faucetbox","r") or die ("error #404");
                  while (!feof($fo14faucetbox)) {
                  $cadena14faucetbox .= fgets($fo14faucetbox, 1024);
                  }
                  fclose ($fo14faucetbox); 

                  $content14faucetbox = $cadena14faucetbox;
                  $start14faucetbox = "Balance:";
                  $end14faucetbox = "satoshi";
                  $output14faucetbox = getBetween14faucetbox($content14faucetbox,$start14faucetbox,$end14faucetbox);


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
			<td style="width:20px;background:#'.$t14faucetbox.'"><b>14</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b14faucetbox.$output14faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>