
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_21.php");

if ($status == "enabled") {$t21faucetbox = "2CCC1B"; $output21faucetbox = ""; $b21faucetbox= "";

} else {	$b21faucetbox = '<a href="#">Balance:</a>';
			$t21faucetbox = "F23427";

                  function getBetween21faucetbox($content21faucetbox,$start21faucetbox,$end21faucetbox){
                  $r21faucetbox = explode($start21faucetbox, $content21faucetbox);
                  if (isset($r21faucetbox[1])){
                  $r21faucetbox = explode($end21faucetbox, $r21faucetbox[1]);
                  return $r21faucetbox[0];
                  };
                  return '';
                  }

                  $cadena21faucetbox = "";

                  //metemos la url en una variable

                  $enlace21faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo21faucetbox= fopen("$enlace21faucetbox","r") or die ("error #404");
                  while (!feof($fo21faucetbox)) {
                  $cadena21faucetbox .= fgets($fo21faucetbox, 1024);
                  }
                  fclose ($fo21faucetbox); 

                  $content21faucetbox = $cadena21faucetbox;
                  $start21faucetbox = "Balance:";
                  $end21faucetbox = "satoshi";
                  $output21faucetbox = getBetween21faucetbox($content21faucetbox,$start21faucetbox,$end21faucetbox);


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
			<td style="width:20px;background:#'.$t21faucetbox.'"><b>21</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b21faucetbox.$output21faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>