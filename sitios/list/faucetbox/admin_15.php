
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_15.php");

if ($status == "enabled") {$t15faucetbox = "2CCC1B"; $output15faucetbox = ""; $b15faucetbox= "";

} else {	$b15faucetbox = '<a href="#">Balance:</a>';
			$t15faucetbox = "F23427";

                  function getBetween15faucetbox($content15faucetbox,$start15faucetbox,$end15faucetbox){
                  $r15faucetbox = explode($start15faucetbox, $content15faucetbox);
                  if (isset($r15faucetbox[1])){
                  $r15faucetbox = explode($end15faucetbox, $r15faucetbox[1]);
                  return $r15faucetbox[0];
                  };
                  return '';
                  }

                  $cadena15faucetbox = "";

                  //metemos la url en una variable

                  $enlace15faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo15faucetbox= fopen("$enlace15faucetbox","r") or die ("error #404");
                  while (!feof($fo15faucetbox)) {
                  $cadena15faucetbox .= fgets($fo15faucetbox, 1024);
                  }
                  fclose ($fo15faucetbox); 

                  $content15faucetbox = $cadena15faucetbox;
                  $start15faucetbox = "Balance:";
                  $end15faucetbox = "satoshi";
                  $output15faucetbox = getBetween15faucetbox($content15faucetbox,$start15faucetbox,$end15faucetbox);


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
			<td style="width:20px;background:#'.$t15faucetbox.'"><b>15</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b15faucetbox.$output15faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>