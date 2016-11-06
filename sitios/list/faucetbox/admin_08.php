
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_08.php");

if ($status == "enabled") {$t08faucetbox = "2CCC1B"; $output08faucetbox = ""; $b08faucetbox= "";

} else {	$b08faucetbox = '<a href="#">Balance:</a>';
			$t08faucetbox = "F23427";

                  function getBetween08faucetbox($content08faucetbox,$start08faucetbox,$end08faucetbox){
                  $r08faucetbox = explode($start08faucetbox, $content08faucetbox);
                  if (isset($r08faucetbox[1])){
                  $r08faucetbox = explode($end08faucetbox, $r08faucetbox[1]);
                  return $r08faucetbox[0];
                  };
                  return '';
                  }

                  $cadena08faucetbox = "";

                  //metemos la url en una variable

                  $enlace08faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo08faucetbox= fopen("$enlace08faucetbox","r") or die ("error #404");
                  while (!feof($fo08faucetbox)) {
                  $cadena08faucetbox .= fgets($fo08faucetbox, 1024);
                  }
                  fclose ($fo08faucetbox); 

                  $content08faucetbox = $cadena08faucetbox;
                  $start08faucetbox = "Balance:";
                  $end08faucetbox = "satoshi";
                  $output08faucetbox = getBetween08faucetbox($content08faucetbox,$start08faucetbox,$end08faucetbox);


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
			<td style="width:20px;background:#'.$t08faucetbox.'"><b>08</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b08faucetbox.$output08faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>