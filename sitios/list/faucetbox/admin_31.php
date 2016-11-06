
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_31.php");

if ($status == "enabled") {$t31faucetbox = "2CCC1B"; $output31faucetbox = ""; $b31faucetbox= "";

} else {	$b31faucetbox = '<a href="#">Balance:</a>';
			$t31faucetbox = "F23427";

                  function getBetween31faucetbox($content31faucetbox,$start31faucetbox,$end31faucetbox){
                  $r31faucetbox = explode($start31faucetbox, $content31faucetbox);
                  if (isset($r31faucetbox[1])){
                  $r31faucetbox = explode($end31faucetbox, $r31faucetbox[1]);
                  return $r31faucetbox[0];
                  };
                  return '';
                  }

                  $cadena31faucetbox = "";

                  //metemos la url en una variable

                  $enlace31faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo31faucetbox= fopen("$enlace31faucetbox","r") or die ("error #404");
                  while (!feof($fo31faucetbox)) {
                  $cadena31faucetbox .= fgets($fo31faucetbox, 1024);
                  }
                  fclose ($fo31faucetbox); 

                  $content31faucetbox = $cadena31faucetbox;
                  $start31faucetbox = "Balance:";
                  $end31faucetbox = "satoshi";
                  $output31faucetbox = getBetween31faucetbox($content31faucetbox,$start31faucetbox,$end31faucetbox);


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
			<td style="width:20px;background:#'.$t31faucetbox.'"><b>31</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b31faucetbox.$output31faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>