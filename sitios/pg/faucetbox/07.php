<?php
            include_once($_SERVER['DOCUMENT_ROOT']."/sitios/config.php");
            include_once($_SERVER['DOCUMENT_ROOT'].$lang);
            include_once("conf_07.php");

            if ($status == "enabled") {       

echo'
<html>
<head>
<title>'.$site_title.'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/bootstrap.css"> 
<link rel="stylesheet" href="../css/default.css"> 

<style> 
#DDfaucetbox07 {display: none; position:absolute; z-index:200; width:245px; height:130px; border:2px solid #000; background:#F2F2F2; margin-left:5px; margin-top:5px;
-webkit-box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75); -moz-box-shadow:7px 7px 5px 0px rgba(50, 50, 50, 0.75); box-shadow:7px 7px 5px 0px rgba(50, 50, 50, 0.75);}
#PDfaucetbox07 {width:200px;display: inline;}
</style> 

</head>
<body>

<script type="text/javascript"> 

        function EFfaucetbox07() {
        document.getElementById("PDfaucetbox07").style.display = "none";
        document.getElementById("DDfaucetbox07").style.display = "none";}

        function MDfaucetbox07() {
        document.getElementById("DDfaucetbox07").style.display = "inline";}

        function countDownfaucetbox07(){
        var cdown = new CDown();
        cdown.add(new Date((new Date()).getTime()+(30*60*1000)), "countboxfaucetbox07");} 

        function cBtnfaucetbox07(btn)
        {btn.style.background = "#FAFAFA"; btn.style.color = "#BDBDBD"; return;}

        function Cfaucetbox07() {
        document.getElementById("DDfaucetbox07").style.display = "none";}

</script>
<div id="PDfaucetbox07">
 
<div id="cont"> 


<div id="numero">  

07

</div>


  <div id="eliminar"> 
  <img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png" onclick="EFfaucetbox07()"> <br>
  <img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reportar_ico.png" onclick="MDfaucetbox07()">
  </div>

    <div id="faucet">
    <a class="Ntooltip" href="../sitios/faucet/faucetbox/07.php" target="main_frame" onclick="countDownfaucetbox07();cBtnfaucetbox07(this)"> 


    '.$ID_name .'

      
    <span>
    '.$reco_fau.'


    '.$ID_name .'


    <br>
    
    <img height="25" width="25" border=0 hspace=1 vspace=1 src="../img/bit_ico.png"> '.$tiempo.' <br>
    <img height="25" width="25" border=0 hspace=1 vspace=1 src="../img/reloj_ico.png"> '.$pago .' 
    </span> </a> 
    </div>

      <div id="timer">
      <span id="countboxfaucetbox07"/>
      <img height="35" width="35" border=0 hspace=1 vspace=1 src="../img/flecha_ico.png"> </span>
      </div>

<!-- FORMULARIO DE DENUNCIA  -->


</div> 

<div id="DDfaucetbox07">

<div id="cancelar">
</div>


<div id="formulario">
    <form name="denuncia" align="left" method="post" action="'.$url_base.'sitios/reporte.php" target="main_frame">
    <input placeholder="'.$nom_cont .'" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="MiMail@btfc4.com" size="25" name="mail" value=""> 
    <input placeholder="'.$motivo .'" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="text" name="motivo" size="25" value="" required> <br>
    <input type="text" size="5" style="visibility:hidden; border: none; background: transparent" name="nombre_faucet" value="faucetbox/07" readonly>
</div>

<div id="btn-form">

<div id="cancelar">
<img height="25" width="25" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png" onclick="Cfaucetbox07()">
</div>

<div id="enviar">
  <input class="pull-right" height="39" width="39" type="image" src="../img/flecha_ico.png"  onclick="EFfaucetbox07()"  alt=""> </form>
</div>

</div>

</div> 

</div> 
<br>
</body>
</html>'; 

    } else {echo $nota;}; ?>