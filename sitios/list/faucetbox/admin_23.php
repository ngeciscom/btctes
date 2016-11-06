
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_23.php");

if ($status == "enabled") {$t23faucetbox = "2CCC1B"; $output23faucetbox = ""; $b23faucetbox= "";

} else {	$b23faucetbox = '<a href="#">Balance:</a>';
			$t23faucetbox = "F23427";

                  function getBetween23faucetbox($content23faucetbox,$start23faucetbox,$end23faucetbox){
                  $r23faucetbox = explode($start23faucetbox, $content23faucetbox);
                  if (isset($r23faucetbox[1])){
                  $r23faucetbox = explode($end23faucetbox, $r23faucetbox[1]);
                  return $r23faucetbox[0];
                  };
                  return '';
                  }

                  $cadena23faucetbox = "";

                  //metemos la url en una variable

                  $enlace23faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo23faucetbox= fopen("$enlace23faucetbox","r") or die ("error #404");
                  while (!feof($fo23faucetbox)) {
                  $cadena23faucetbox .= fgets($fo23faucetbox, 1024);
                  }
                  fclose ($fo23faucetbox); 

                  $content23faucetbox = $cadena23faucetbox;
                  $start23faucetbox = "Balance:";
                  $end23faucetbox = "satoshi";
                  $output23faucetbox = getBetween23faucetbox($content23faucetbox,$start23faucetbox,$end23faucetbox);


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
			<td style="width:20px;background:#'.$t23faucetbox.'"><b>23</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b23faucetbox.$output23faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>