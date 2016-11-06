
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_10.php");

if ($status == "enabled") {$t10faucetbox = "2CCC1B"; $output10faucetbox = ""; $b10faucetbox= "";

} else {	$b10faucetbox = '<a href="#">Balance:</a>';
			$t10faucetbox = "F23427";

                  function getBetween10faucetbox($content10faucetbox,$start10faucetbox,$end10faucetbox){
                  $r10faucetbox = explode($start10faucetbox, $content10faucetbox);
                  if (isset($r10faucetbox[1])){
                  $r10faucetbox = explode($end10faucetbox, $r10faucetbox[1]);
                  return $r10faucetbox[0];
                  };
                  return '';
                  }

                  $cadena10faucetbox = "";

                  //metemos la url en una variable

                  $enlace10faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo10faucetbox= fopen("$enlace10faucetbox","r") or die ("error #404");
                  while (!feof($fo10faucetbox)) {
                  $cadena10faucetbox .= fgets($fo10faucetbox, 1024);
                  }
                  fclose ($fo10faucetbox); 

                  $content10faucetbox = $cadena10faucetbox;
                  $start10faucetbox = "Balance:";
                  $end10faucetbox = "satoshi";
                  $output10faucetbox = getBetween10faucetbox($content10faucetbox,$start10faucetbox,$end10faucetbox);


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
			<td style="width:20px;background:#'.$t10faucetbox.'"><b>10</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b10faucetbox.$output10faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>