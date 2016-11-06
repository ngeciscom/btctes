
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_16.php");

if ($status == "enabled") {$t16faucetbox = "2CCC1B"; $output16faucetbox = ""; $b16faucetbox= "";

} else {	$b16faucetbox = '<a href="#">Balance:</a>';
			$t16faucetbox = "F23427";

                  function getBetween16faucetbox($content16faucetbox,$start16faucetbox,$end16faucetbox){
                  $r16faucetbox = explode($start16faucetbox, $content16faucetbox);
                  if (isset($r16faucetbox[1])){
                  $r16faucetbox = explode($end16faucetbox, $r16faucetbox[1]);
                  return $r16faucetbox[0];
                  };
                  return '';
                  }

                  $cadena16faucetbox = "";

                  //metemos la url en una variable

                  $enlace16faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo16faucetbox= fopen("$enlace16faucetbox","r") or die ("error #404");
                  while (!feof($fo16faucetbox)) {
                  $cadena16faucetbox .= fgets($fo16faucetbox, 1024);
                  }
                  fclose ($fo16faucetbox); 

                  $content16faucetbox = $cadena16faucetbox;
                  $start16faucetbox = "Balance:";
                  $end16faucetbox = "satoshi";
                  $output16faucetbox = getBetween16faucetbox($content16faucetbox,$start16faucetbox,$end16faucetbox);


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
			<td style="width:20px;background:#'.$t16faucetbox.'"><b>16</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b16faucetbox.$output16faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>