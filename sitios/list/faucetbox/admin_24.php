
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_24.php");

if ($status == "enabled") {$t24faucetbox = "2CCC1B"; $output24faucetbox = ""; $b24faucetbox= "";

} else {	$b24faucetbox = '<a href="#">Balance:</a>';
			$t24faucetbox = "F23427";

                  function getBetween24faucetbox($content24faucetbox,$start24faucetbox,$end24faucetbox){
                  $r24faucetbox = explode($start24faucetbox, $content24faucetbox);
                  if (isset($r24faucetbox[1])){
                  $r24faucetbox = explode($end24faucetbox, $r24faucetbox[1]);
                  return $r24faucetbox[0];
                  };
                  return '';
                  }

                  $cadena24faucetbox = "";

                  //metemos la url en una variable

                  $enlace24faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo24faucetbox= fopen("$enlace24faucetbox","r") or die ("error #404");
                  while (!feof($fo24faucetbox)) {
                  $cadena24faucetbox .= fgets($fo24faucetbox, 1024);
                  }
                  fclose ($fo24faucetbox); 

                  $content24faucetbox = $cadena24faucetbox;
                  $start24faucetbox = "Balance:";
                  $end24faucetbox = "satoshi";
                  $output24faucetbox = getBetween24faucetbox($content24faucetbox,$start24faucetbox,$end24faucetbox);


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
			<td style="width:20px;background:#'.$t24faucetbox.'"><b>24</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b24faucetbox.$output24faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>