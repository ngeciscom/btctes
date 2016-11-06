
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_20.php");

if ($status == "enabled") {$t20faucetbox = "2CCC1B"; $output20faucetbox = ""; $b20faucetbox= "";

} else {	$b20faucetbox = '<a href="#">Balance:</a>';
			$t20faucetbox = "F23427";

                  function getBetween20faucetbox($content20faucetbox,$start20faucetbox,$end20faucetbox){
                  $r20faucetbox = explode($start20faucetbox, $content20faucetbox);
                  if (isset($r20faucetbox[1])){
                  $r20faucetbox = explode($end20faucetbox, $r20faucetbox[1]);
                  return $r20faucetbox[0];
                  };
                  return '';
                  }

                  $cadena20faucetbox = "";

                  //metemos la url en una variable

                  $enlace20faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo20faucetbox= fopen("$enlace20faucetbox","r") or die ("error #404");
                  while (!feof($fo20faucetbox)) {
                  $cadena20faucetbox .= fgets($fo20faucetbox, 1024);
                  }
                  fclose ($fo20faucetbox); 

                  $content20faucetbox = $cadena20faucetbox;
                  $start20faucetbox = "Balance:";
                  $end20faucetbox = "satoshi";
                  $output20faucetbox = getBetween20faucetbox($content20faucetbox,$start20faucetbox,$end20faucetbox);


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
			<td style="width:20px;background:#'.$t20faucetbox.'"><b>20</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b20faucetbox.$output20faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>