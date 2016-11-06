
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_09.php");

if ($status == "enabled") {$t09faucetbox = "2CCC1B"; $output09faucetbox = ""; $b09faucetbox= "";

} else {	$b09faucetbox = '<a href="#">Balance:</a>';
			$t09faucetbox = "F23427";

                  function getBetween09faucetbox($content09faucetbox,$start09faucetbox,$end09faucetbox){
                  $r09faucetbox = explode($start09faucetbox, $content09faucetbox);
                  if (isset($r09faucetbox[1])){
                  $r09faucetbox = explode($end09faucetbox, $r09faucetbox[1]);
                  return $r09faucetbox[0];
                  };
                  return '';
                  }

                  $cadena09faucetbox = "";

                  //metemos la url en una variable

                  $enlace09faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo09faucetbox= fopen("$enlace09faucetbox","r") or die ("error #404");
                  while (!feof($fo09faucetbox)) {
                  $cadena09faucetbox .= fgets($fo09faucetbox, 1024);
                  }
                  fclose ($fo09faucetbox); 

                  $content09faucetbox = $cadena09faucetbox;
                  $start09faucetbox = "Balance:";
                  $end09faucetbox = "satoshi";
                  $output09faucetbox = getBetween09faucetbox($content09faucetbox,$start09faucetbox,$end09faucetbox);


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
			<td style="width:20px;background:#'.$t09faucetbox.'"><b>09</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b09faucetbox.$output09faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>