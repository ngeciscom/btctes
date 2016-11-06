<?php
require('_login.php');

// CUENTA LA CANTIDAD DE NOTIFICACIONES
$cant_notif = count(glob("../sitios/faucet/reportes/{*.html}",GLOB_BRACE));

// CUENTA LA CANTIDAD DE FAUCET DE CADA ROTADOR
$cant_f_xapo = count(glob("../sitios/faucet/xapo/{*.html}",GLOB_BRACE));
$cant_f_faucetbox = count(glob("../sitios/faucet/faucetbox/{*.html}",GLOB_BRACE));
$cant_f_epay = count(glob("../sitios/faucet/epay/{*.html}",GLOB_BRACE));
$cant_total = $cant_f_xapo + $cant_f_epay + $cant_f_faucetbox;

// MENU SUPERIOR
include_once('header_panel.php');

echo '		
	
	<table width="15%" height="70%" cellspacing="2" border="0">

	<td width="15%" height="100%" style="text-align:center"> <h1> Faucetbox </h1>
	<span class="label label-success"><fotn size ="14">'.$cant_f_faucetbox .$activ.'</font> </span><br> <br> 
	<iframe src="fauc_list.php" frameborder="0" width="90%" height="100%" scrolling="yes"> </iframe> 
	</td>

	<td width="15%" height="100%" style="text-align:center"> <h1> Xapo </h1>
	<span class="label label-success"><fotn size ="14">'.$cant_f_xapo .$activ.'</span><br> <br> 
	 <iframe src="xapo_list.php" frameborder="0" width="90%" height="100%" scrolling="yes"> </iframe> 
	</td>

	<td width="15%" height="80%" style="text-align:center"> <h1> ePay </h1>
	<span class="label label-success"><fotn size ="14">'.$cant_f_epay .$activ.'</span><br> <br> 
	<iframe src="epay_list.php" frameborder="0" width="90%" height="95%" scrolling="yes"> </iframe> <br>
	 </td>

	</table>

';

?>