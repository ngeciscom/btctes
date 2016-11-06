
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_18.php");

if ($status == "enabled") {$t18faucetbox = "2CCC1B"; $output18faucetbox = ""; $b18faucetbox= "";

} else {	$b18faucetbox = '<a href="#">Balance:</a>';
			$t18faucetbox = "F23427";

                  function getBetween18faucetbox($content18faucetbox,$start18faucetbox,$end18faucetbox){
                  $r18faucetbox = explode($start18faucetbox, $content18faucetbox);
                  if (isset($r18faucetbox[1])){
                  $r18faucetbox = explode($end18faucetbox, $r18faucetbox[1]);
                  return $r18faucetbox[0];
                  };
                  return '';
                  }

                  $cadena18faucetbox = "";

                  //metemos la url en una variable

                  $enlace18faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo18faucetbox= fopen("$enlace18faucetbox","r") or die ("error #404");
                  while (!feof($fo18faucetbox)) {
                  $cadena18faucetbox .= fgets($fo18faucetbox, 1024);
                  }
                  fclose ($fo18faucetbox); 

                  $content18faucetbox = $cadena18faucetbox;
                  $start18faucetbox = "Balance:";
                  $end18faucetbox = "satoshi";
                  $output18faucetbox = getBetween18faucetbox($content18faucetbox,$start18faucetbox,$end18faucetbox);


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
			<td style="width:20px;background:#'.$t18faucetbox.'"><b>18</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b18faucetbox.$output18faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>