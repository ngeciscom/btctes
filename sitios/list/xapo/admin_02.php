
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
include_once($_SERVER['DOCUMENT_ROOT']."/sitios/pg/xapo/conf_02.php");

if ($status == "enabled") {$t02xapo = "2CCC1B"; $output02xapo = ""; $b02xapo= "";

} else {	$b02xapo = '<a href="#">Balance:</a>';
			$t02xapo = "F23427";

                  function getBetween02xapo($content02xapo,$start02xapo,$end02xapo){
                  $r02xapo = explode($start02xapo, $content02xapo);
                  if (isset($r02xapo[1])){
                  $r02xapo = explode($end02xapo, $r02xapo[1]);
                  return $r02xapo[0];
                  };
                  return '';
                  }

                  $cadena02xapo = "";

                  //metemos la url en una variable

                  $enlace02xapo="$dir_web";

                  //abrimos la url y que la lea que contiene

                  $fo02xapo= fopen("$enlace02xapo","r") or die ("error #404");
                  while (!feof($fo02xapo)) {
                  $cadena02xapo .= fgets($fo02xapo, 1024);
                  }
                  fclose ($fo02xapo); 

                  $content02xapo = $cadena02xapo;
                  $start02xapo = "Balance:";
                  $end02xapo = "satoshi";
                  $output02xapo = getBetween02xapo($content02xapo,$start02xapo,$end02xapo);


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
			<td style="width:20px;background:#'.$t02xapo.'"><b>02</b></span></td>
			<td style="vertical-align: middle;width:200px">'.$ID_name .'<br>'.$b02xapo.$output02xapo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/reloj_ico.png"> '.$tiempo.'</td>
			<td style="vertical-align: middle;width:100px"><img height="25" width="25" border=0 hspace=1 vspace=1 src="'.$url_base.'img/bit_ico.png"> '.$pago .'</td>
			<td style="vertical-align: middle;width:100px"><a href="'.$dir_web.'" target="_blank">Visitar</a></td>

		</tr>
	</tbody>
</table>
<br>
</body>
</html>'; ?>