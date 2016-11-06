
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_32.php");

if ($status == "enabled") {$t32faucetbox = "2CCC1B"; $output32faucetbox = ""; $b32faucetbox= "";

} else {	$b32faucetbox = '<a href="#">Balance:</a>';
			$t32faucetbox = "F23427";

                  function getBetween32faucetbox($content32faucetbox,$start32faucetbox,$end32faucetbox){
                  $r32faucetbox = explode($start32faucetbox, $content32faucetbox);
                  if (isset($r32faucetbox[1])){
                  $r32faucetbox = explode($end32faucetbox, $r32faucetbox[1]);
                  return $r32faucetbox[0];
                  };
                  return '';
                  }

                  $cadena32faucetbox = "";

                  //metemos la url en una variable

                  $enlace32faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo32faucetbox= fopen("$enlace32faucetbox","r") or die ("error #404");
                  while (!feof($fo32faucetbox)) {
                  $cadena32faucetbox .= fgets($fo32faucetbox, 1024);
                  }
                  fclose ($fo32faucetbox); 

                  $content32faucetbox = $cadena32faucetbox;
                  $start32faucetbox = "Balance:";
                  $end32faucetbox = "satoshi";
                  $output32faucetbox = getBetween32faucetbox($content32faucetbox,$start32faucetbox,$end32faucetbox);


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
			<td style="width:20px;background:#'.$t32faucetbox.'"><b>32</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b32faucetbox.$output32faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>