
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_03.php");

if ($status == "enabled") {$t03faucetbox = "2CCC1B"; $output03faucetbox = ""; $b03faucetbox= "";

} else {	$b03faucetbox = '<a href="#">Balance:</a>';
			$t03faucetbox = "F23427";

                  function getBetween03faucetbox($content03faucetbox,$start03faucetbox,$end03faucetbox){
                  $r03faucetbox = explode($start03faucetbox, $content03faucetbox);
                  if (isset($r03faucetbox[1])){
                  $r03faucetbox = explode($end03faucetbox, $r03faucetbox[1]);
                  return $r03faucetbox[0];
                  };
                  return '';
                  }

                  $cadena03faucetbox = "";

                  //metemos la url en una variable

                  $enlace03faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo03faucetbox= fopen("$enlace03faucetbox","r") or die ("error #404");
                  while (!feof($fo03faucetbox)) {
                  $cadena03faucetbox .= fgets($fo03faucetbox, 1024);
                  }
                  fclose ($fo03faucetbox); 

                  $content03faucetbox = $cadena03faucetbox;
                  $start03faucetbox = "Balance:";
                  $end03faucetbox = "satoshi";
                  $output03faucetbox = getBetween03faucetbox($content03faucetbox,$start03faucetbox,$end03faucetbox);


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
			<td style="width:20px;background:#'.$t03faucetbox.'"><b>03</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b03faucetbox.$output03faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>