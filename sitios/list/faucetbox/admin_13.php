
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_13.php");

if ($status == "enabled") {$t13faucetbox = "2CCC1B"; $output13faucetbox = ""; $b13faucetbox= "";

} else {	$b13faucetbox = '<a href="#">Balance:</a>';
			$t13faucetbox = "F23427";

                  function getBetween13faucetbox($content13faucetbox,$start13faucetbox,$end13faucetbox){
                  $r13faucetbox = explode($start13faucetbox, $content13faucetbox);
                  if (isset($r13faucetbox[1])){
                  $r13faucetbox = explode($end13faucetbox, $r13faucetbox[1]);
                  return $r13faucetbox[0];
                  };
                  return '';
                  }

                  $cadena13faucetbox = "";

                  //metemos la url en una variable

                  $enlace13faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo13faucetbox= fopen("$enlace13faucetbox","r") or die ("error #404");
                  while (!feof($fo13faucetbox)) {
                  $cadena13faucetbox .= fgets($fo13faucetbox, 1024);
                  }
                  fclose ($fo13faucetbox); 

                  $content13faucetbox = $cadena13faucetbox;
                  $start13faucetbox = "Balance:";
                  $end13faucetbox = "satoshi";
                  $output13faucetbox = getBetween13faucetbox($content13faucetbox,$start13faucetbox,$end13faucetbox);


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
			<td style="width:20px;background:#'.$t13faucetbox.'"><b>13</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b13faucetbox.$output13faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>