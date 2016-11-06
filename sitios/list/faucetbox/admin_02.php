
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/faucetbox/conf_02.php");

if ($status == "enabled") {$t02faucetbox = "2CCC1B"; $output02faucetbox = ""; $b02faucetbox= "";

} else {	$b02faucetbox = '<a href="#">Balance:</a>';
			$t02faucetbox = "F23427";

                  function getBetween02faucetbox($content02faucetbox,$start02faucetbox,$end02faucetbox){
                  $r02faucetbox = explode($start02faucetbox, $content02faucetbox);
                  if (isset($r02faucetbox[1])){
                  $r02faucetbox = explode($end02faucetbox, $r02faucetbox[1]);
                  return $r02faucetbox[0];
                  };
                  return '';
                  }

                  $cadena02faucetbox = "";

                  //metemos la url en una variable

                  $enlace02faucetbox="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo02faucetbox= fopen("$enlace02faucetbox","r") or die ("error #404");
                  while (!feof($fo02faucetbox)) {
                  $cadena02faucetbox .= fgets($fo02faucetbox, 1024);
                  }
                  fclose ($fo02faucetbox); 

                  $content02faucetbox = $cadena02faucetbox;
                  $start02faucetbox = "Balance:";
                  $end02faucetbox = "satoshi";
                  $output02faucetbox = getBetween02faucetbox($content02faucetbox,$start02faucetbox,$end02faucetbox);


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
			<td style="width:20px;background:#'.$t02faucetbox.'"><b>02</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b02faucetbox.$output02faucetbox.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>