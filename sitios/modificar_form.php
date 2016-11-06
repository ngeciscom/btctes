<?php

require('_login.php');
$cant_notif = count(glob("../sitios/faucet/reportes/{*.html}",GLOB_BRACE));
$cant_f_xapo = count(glob("../sitios/faucet/xapo/{*.html}",GLOB_BRACE));
$cant_f_faucetbox = count(glob("../sitios/faucet/faucetbox/{*.html}",GLOB_BRACE));
$cant_f_epay = count(glob("../sitios/faucet/epay/{*.html}",GLOB_BRACE));
$cant_total = $cant_f_xapo + $cant_f_epay + $cant_f_faucetbox;
include_once('config.php');
include_once('..'.$lang);
include_once('header_panel.php');

echo '
<html>
<head>
<style>

input[type=checkbox],input[type=radio]{display:none}input[type=checkbox]+label,input[type=radio]+label{display:inline-block;margin:-2px -2px 0;padding:4px 12px;font-size:12px;line-height:20px;
    color:#333;text-align:center;text-shadow:0 1px 1px rgba(255,255,255,.75);vertical-align:middle;cursor:pointer;background-color:#f5f5f5;background-image:-moz-linear-gradient(top,#fff,#e6e6e6);
    background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));background-image:-webkit-linear-gradient(top,#fff,#e6e6e6);background-image:-o-linear-gradient(top,#fff,#e6e6e6);
    background-image:linear-gradient(to bottom,#fff,#e6e6e6);background-repeat:repeat-x;border:1px solid #ccc;border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-color:rgba(0,0,0,.1)rgba(0,0,0,.1)rgba(0,0,0,.25);
    border-bottom-color:#b3b3b3;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffffff", endColorstr="#ffe6e6e6", GradientType=0);filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);
    -webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05);
    box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05)}input[type=checkbox]:checked+label,input[type=radio]:checked+label{background-image:none;outline:0;
        -webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);
        box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05);background-color:#FFA914}
</style>
</head>
<body>

<div class="container">
	<form name="form1" method="post" action="modificar.php">
	<h3>'.$selec_list.'</h3><br>
		
				<input type="radio" id="radio1" name="wallet" value="faucetbox" checked> 
				&nbsp;&nbsp;<label for="radio1"><h4>FaucetBox ('.$cant_f_faucetbox.')</h4></label> 

				<input type="radio" id="radio2" name="wallet" value="epay"> 
				&nbsp;&nbsp;<label for="radio2"><h4> ePay ('.$cant_f_epay.')</h4> </label>

				<input type="radio" id="radio3" name="wallet" value="xapo">
				&nbsp;&nbsp;<label for="radio3"><h4>Xapo ('.$cant_f_xapo.')</h4></label> <br><br>

	<h3>'.$id_fau.'
	  <input size="2" style="font-size:20px; overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="text" name="faucet" value="01" require> </h3>
      '.$id_fau_desc.' <br><br><br>
	  	<input class="btn btn-success" value="'.$reemp.'" type="submit"/></form>

</div>';

?>