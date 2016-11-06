<?php
require('_login.php');

$ID_modif = $_POST['faucet'];
$ID_lista = $_POST['wallet'];

$cant_notif = count(glob("../sitios/faucet/reportes/{*.html}",GLOB_BRACE));
$cant_f_xapo = count(glob("../sitios/faucet/xapo/{*.html}",GLOB_BRACE));
$cant_f_faucetbox = count(glob("../sitios/faucet/faucetbox/{*.html}",GLOB_BRACE));
$cant_f_epay = count(glob("../sitios/faucet/epay/{*.html}",GLOB_BRACE));
$cant_total = $cant_f_xapo + $cant_f_epay + $cant_f_faucetbox;
include_once('config.php');
include_once('..'.$lang);
include_once('header_panel.php');

include_once("pg/".$ID_lista."/conf_".$ID_modif.".php");

$refer = '\'.$dir_web.\''."/?r=".'\'.$wallet_addr.\'';
$NOrefer = '\'.$dir_web.\'';

$rad1 = "";$rad2 = "";$rad3 = "";$rad4 = "";$rad5 = "checked";$rad6 = "";$rad7 = "";$chk1 = "";$chk2 = "";$chk3 = "";

if ($tipo_ref == ''.$dir_web.'/?r='.$wallet_addr.'') {$rad4 = "checked"; $rad5 = "";};

if ($s_pago == "faucetbox") {$rad1 = "checked";};
if ($s_pago == "epay") {$rad2 = "checked";};
if ($s_pago == "xapo") {$rad3 = "checked";};


if ($ubic == "right") {$rad6 = "checked"; $rad7 = "";} else {$rad6 =""; $rad7 = "checked";};

if ($reco_fau == "") {$chk1 = "";} else {$chk1 = "checked";};
if ($status == "enabled") {$chk2 = "checked";} else {$chk2 ="";};
if ($no_ad == "yes") {$chk3 = "checked";} else {$chk3 ="";};




echo'
<html>
<head>
<style>
input[type=checkbox],input[type=radio]{display:none}input[type=checkbox]+label,input[type=radio]+label{display:inline-block;margin:-2px -2px 0;padding:4px 12px;font-size:12px;line-height:20px;color:#333;text-align:center;text-shadow:0 1px 1px rgba(255,255,255,.75);vertical-align:middle;cursor:pointer;background-color:#f5f5f5;background-image:-moz-linear-gradient(top,#fff,#e6e6e6);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));background-image:-webkit-linear-gradient(top,#fff,#e6e6e6);background-image:-o-linear-gradient(top,#fff,#e6e6e6);background-image:linear-gradient(to bottom,#fff,#e6e6e6);background-repeat:repeat-x;border:1px solid #ccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-color:rgba(0,0,0,.1)rgba(0,0,0,.1)rgba(0,0,0,.25);border-bottom-color:#b3b3b3;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffffff", endColorstr="#ffe6e6e6", GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05)}input[type=checkbox]:checked+label,input[type=radio]:checked+label{background-image:none;outline:0;-webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);background-color:#FFA914}
</style>
</head>
<body>
<script type="text/javascript" src="jscolor/jscolor.js"></script>
		<!-- FORMULARIO DE CREACION DE FAUCET -->  

				<div class="container">
				<table border="0">

				<td align="left" width="20%">

				<img border=0 hspace=1 vspace=1 src="../img/reemplazar.png">

				</td>

				 

				<td width="35%" align="left"> 



				<form name="formulario" method="post" action="" target="">
				
				<b>'.$id_fau.'</b><br>
				<input size="30" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="text" name="IDedit" value="'.$ID_modif.'"> <br>

				<b>'.$nom_fau.' </b><br>
				<input size="30" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="text" name="nombre" value="'.$ID_name.'" pattern="[^\'\x22]+" title="Aa-Zz / 0-9"> <br>
				<br>
				<b>'.$sist_pago.' </b><br>

				<input type="radio" id="radio1" name="wallet" value="faucetbox" '.$rad1.'> 
				&nbsp;&nbsp;<label for="radio1"></label> &nbsp;FaucetBox<br>

				<input type="radio" id="radio2" name="wallet" value="epay" '.$rad2.'> 
				&nbsp;&nbsp;<label for="radio2"></label> &nbsp;ePay<br>

				<input type="radio" id="radio3" name="wallet" value="xapo" '.$rad3.'>
				&nbsp;&nbsp;<label for="radio3"></label> &nbsp;Xapo<br><br>

				<b>'.$referer_type.' </b><br>
				<input type="radio" id="radio4" name="url_ref" value="'.$refer.'" '.$rad4.'> 
				&nbsp;&nbsp;<label for="radio4"> </label> &nbsp;/?r='.$wallet_addr.' <br>

				<input type="radio" id="radio5" name="url_ref" value="'.$NOrefer.'" '.$rad5.'> 
				&nbsp;&nbsp;<label for="radio5"> </label> &nbsp;'.$referer_type_.'<br><br>

				<b>Referer actual: </b><br> 
				&nbsp;&nbsp;<input size="39" style="color:#1895DE; overflow:auto; border-style:solid; border-color:#FFF; border-width: 1px;" type="text" value="'.$tipo_ref.'">
				<font color="#1895DE">...</font> <br><br>	

				<b>URL: </b><br> 
				<input size="30" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="url" name="url" value="'.$dir_web.'"> <br><br>

				<b>'.$tiempo_esp.' </b><br>
				<input size="30" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="number" name="t_espera" value="'.$tiempo.'"> <br><br>
				<b>'.$pago_min.' </b> <br> 
				<input size="30" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="number" name="pago" value="'.$pago.'"> <br><br><br>

				<input type="checkbox" name="reco" id="check1" '.$chk1.' > 
	    		<label for="check1">'.$reco_fau_.'</label> &nbsp;


				<input type="checkbox" name="estado" id="check2" '.$chk2.'> 
	    		<label for="check2">'.$active_faucet.'</label><br><br>

				</td>

				<td align="left" width="20%">

				<b>'.$publicidades.' </b>
				<br>


				<input type="checkbox" name="no_ads" id="check3" '.$chk3.'>  
	    		<label for="check3">'.$no_publicidad.'</label><br><br>

	    		<b>'.$ubicacion_panel.'</b><br>
				<input type="radio" id="radio6" name="ubicacion_" value="right" '.$rad6.'> 
				&nbsp;&nbsp;<label for="radio6"> </label> &nbsp;'.$u_panel_d.' <br>
				<input type="radio" id="radio7" name="ubicacion_" value="left" '.$rad7.'> 
				&nbsp;&nbsp;<label for="radio7"> </label> &nbsp;'.$u_panel_i.'<br><br>

				<b>'.$panel_config.'</b><br>
				<input style="width:245px;overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" class="color" name="div_color" value="'.$color.'"> 
				<input style="width:50px; overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="number" name="div_width" value="'.$ancho.'"> <br><br>

				<b>'.$html_cod_ad.' (200x200)</b><br>
				<textarea name="pub1" rows="2" cols="30" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;">'.$ad1.'</textarea> <br><br>
				<textarea name="pub2" rows="2" cols="30" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;">'.$ad2.'</textarea> <br><br>
				<textarea name="pub3" rows="2" cols="30" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;">'.$ad3.'</textarea> <br><br>

				<i>'.$adbit01.' <br> <a href="https://adbit.co/" target="_blank">'.$adbit02.'</a> </i><br><br><br>

				<input class="btn btn-primary " value="'.$preview_.'" type="submit" onclick=\'this.form.action="preview.php";this.form.target="_blank"\'/> 
				<input class="btn btn-success " value="'.$reemp_btn.'" type="submit" onclick=\'this.form.action="editar.php";this.form.target="_self"\'/>

				</form>  </td>
				</table> </div>

		</body></html>		 ';


?>