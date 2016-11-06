
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_06.php");

if ($status == "enabled") {$t06faucetbox = "2CCC1B"; $output06faucetbox = ""; $b06faucetbox= "";

} else {	$b06faucetbox = '<a href="#">Balance:</a>';
			$t06faucetbox = "F23427";

                  function getBetween06faucetbox($content06faucetbox,$start06faucetbox,$end06faucetbox){
                  $r06faucetbox = explode($start06faucetbox, $content06faucetbox);
                  if (isset($r06faucetbox[1])){
                  $r06faucetbox = explode($end06faucetbox, $r06faucetbox[1]);
                  return $r06faucetbox[0];
                  };
                  return '';
                  }

                  $cadena06faucetbox = "";

                  //metemos la url en una variable

                  $enlace06faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo06faucetbox= fopen("$enlace06faucetbox","r") or die ("error #404");
                  while (!feof($fo06faucetbox)) {
                  $cadena06faucetbox .= fgets($fo06faucetbox, 1024);
                  }
                  fclose ($fo06faucetbox); 

                  $content06faucetbox = $cadena06faucetbox;
                  $start06faucetbox = "Balance:";
                  $end06faucetbox = "satoshi";
                  $output06faucetbox = getBetween06faucetbox($content06faucetbox,$start06faucetbox,$end06faucetbox);


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
			<td style="width:20px;background:#'.$t06faucetbox.'"><b>06</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b06faucetbox.$output06faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>