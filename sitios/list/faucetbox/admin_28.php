
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_28.php");

if ($status == "enabled") {$t28faucetbox = "2CCC1B"; $output28faucetbox = ""; $b28faucetbox= "";

} else {	$b28faucetbox = '<a href="#">Balance:</a>';
			$t28faucetbox = "F23427";

                  function getBetween28faucetbox($content28faucetbox,$start28faucetbox,$end28faucetbox){
                  $r28faucetbox = explode($start28faucetbox, $content28faucetbox);
                  if (isset($r28faucetbox[1])){
                  $r28faucetbox = explode($end28faucetbox, $r28faucetbox[1]);
                  return $r28faucetbox[0];
                  };
                  return '';
                  }

                  $cadena28faucetbox = "";

                  //metemos la url en una variable

                  $enlace28faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo28faucetbox= fopen("$enlace28faucetbox","r") or die ("error #404");
                  while (!feof($fo28faucetbox)) {
                  $cadena28faucetbox .= fgets($fo28faucetbox, 1024);
                  }
                  fclose ($fo28faucetbox); 

                  $content28faucetbox = $cadena28faucetbox;
                  $start28faucetbox = "Balance:";
                  $end28faucetbox = "satoshi";
                  $output28faucetbox = getBetween28faucetbox($content28faucetbox,$start28faucetbox,$end28faucetbox);


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
			<td style="width:20px;background:#'.$t28faucetbox.'"><b>28</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b28faucetbox.$output28faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>