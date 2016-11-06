
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_17.php");

if ($status == "enabled") {$t17faucetbox = "2CCC1B"; $output17faucetbox = ""; $b17faucetbox= "";

} else {	$b17faucetbox = '<a href="#">Balance:</a>';
			$t17faucetbox = "F23427";

                  function getBetween17faucetbox($content17faucetbox,$start17faucetbox,$end17faucetbox){
                  $r17faucetbox = explode($start17faucetbox, $content17faucetbox);
                  if (isset($r17faucetbox[1])){
                  $r17faucetbox = explode($end17faucetbox, $r17faucetbox[1]);
                  return $r17faucetbox[0];
                  };
                  return '';
                  }

                  $cadena17faucetbox = "";

                  //metemos la url en una variable

                  $enlace17faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo17faucetbox= fopen("$enlace17faucetbox","r") or die ("error #404");
                  while (!feof($fo17faucetbox)) {
                  $cadena17faucetbox .= fgets($fo17faucetbox, 1024);
                  }
                  fclose ($fo17faucetbox); 

                  $content17faucetbox = $cadena17faucetbox;
                  $start17faucetbox = "Balance:";
                  $end17faucetbox = "satoshi";
                  $output17faucetbox = getBetween17faucetbox($content17faucetbox,$start17faucetbox,$end17faucetbox);


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
			<td style="width:20px;background:#'.$t17faucetbox.'"><b>17</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b17faucetbox.$output17faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>