
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_04.php");

if ($status == "enabled") {$t04faucetbox = "2CCC1B"; $output04faucetbox = ""; $b04faucetbox= "";

} else {	$b04faucetbox = '<a href="#">Balance:</a>';
			$t04faucetbox = "F23427";

                  function getBetween04faucetbox($content04faucetbox,$start04faucetbox,$end04faucetbox){
                  $r04faucetbox = explode($start04faucetbox, $content04faucetbox);
                  if (isset($r04faucetbox[1])){
                  $r04faucetbox = explode($end04faucetbox, $r04faucetbox[1]);
                  return $r04faucetbox[0];
                  };
                  return '';
                  }

                  $cadena04faucetbox = "";

                  //metemos la url en una variable

                  $enlace04faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo04faucetbox= fopen("$enlace04faucetbox","r") or die ("error #404");
                  while (!feof($fo04faucetbox)) {
                  $cadena04faucetbox .= fgets($fo04faucetbox, 1024);
                  }
                  fclose ($fo04faucetbox); 

                  $content04faucetbox = $cadena04faucetbox;
                  $start04faucetbox = "Balance:";
                  $end04faucetbox = "satoshi";
                  $output04faucetbox = getBetween04faucetbox($content04faucetbox,$start04faucetbox,$end04faucetbox);


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
			<td style="width:20px;background:#'.$t04faucetbox.'"><b>04</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b04faucetbox.$output04faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>