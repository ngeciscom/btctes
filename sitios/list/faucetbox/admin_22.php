
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_22.php");

if ($status == "enabled") {$t22faucetbox = "2CCC1B"; $output22faucetbox = ""; $b22faucetbox= "";

} else {	$b22faucetbox = '<a href="#">Balance:</a>';
			$t22faucetbox = "F23427";

                  function getBetween22faucetbox($content22faucetbox,$start22faucetbox,$end22faucetbox){
                  $r22faucetbox = explode($start22faucetbox, $content22faucetbox);
                  if (isset($r22faucetbox[1])){
                  $r22faucetbox = explode($end22faucetbox, $r22faucetbox[1]);
                  return $r22faucetbox[0];
                  };
                  return '';
                  }

                  $cadena22faucetbox = "";

                  //metemos la url en una variable

                  $enlace22faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo22faucetbox= fopen("$enlace22faucetbox","r") or die ("error #404");
                  while (!feof($fo22faucetbox)) {
                  $cadena22faucetbox .= fgets($fo22faucetbox, 1024);
                  }
                  fclose ($fo22faucetbox); 

                  $content22faucetbox = $cadena22faucetbox;
                  $start22faucetbox = "Balance:";
                  $end22faucetbox = "satoshi";
                  $output22faucetbox = getBetween22faucetbox($content22faucetbox,$start22faucetbox,$end22faucetbox);


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
			<td style="width:20px;background:#'.$t22faucetbox.'"><b>22</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b22faucetbox.$output22faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>