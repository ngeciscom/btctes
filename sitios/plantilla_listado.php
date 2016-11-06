<?php
//require('_login.php');

// ARCHIVO DE CONFIGURACIONES
include_once('config.php');
$output ="";

fwrite($fp, '<?php
            include_once($_SERVER[\'DOCUMENT_ROOT\']."/sitios/config.php");
            include_once($_SERVER[\'DOCUMENT_ROOT\'].$lang);
            include_once("conf_'.$IDfaucet.'.php");

            if ($status == "enabled") {       

echo\'
<html>
<head>
<title>\'.$site_title.\'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/bootstrap.css"> 
<link rel="stylesheet" href="../css/default.css"> 

<style> 
#DD'.$Descrip3.$IDfaucet.' {display: none; position:absolute; z-index:200; width:245px; height:130px; border:2px solid #000; background:#F2F2F2; margin-left:5px; margin-top:5px;
-webkit-box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75); -moz-box-shadow:7px 7px 5px 0px rgba(50, 50, 50, 0.75); box-shadow:7px 7px 5px 0px rgba(50, 50, 50, 0.75);}
#PD'.$Descrip3.$IDfaucet.' {width:200px;display: inline;}
</style> 

</head>
<body>

<script type="text/javascript"> 

        function EF'.$Descrip3.$IDfaucet.'() {
        document.getElementById("PD'.$Descrip3.$IDfaucet.'").style.display = "none";
        document.getElementById("DD'.$Descrip3.$IDfaucet.'").style.display = "none";}

        function MD'.$Descrip3.$IDfaucet.'() {
        document.getElementById("DD'.$Descrip3.$IDfaucet.'").style.display = "inline";}

        function countDown'.$Descrip3.$IDfaucet.'(){
        var cdown = new CDown();
        cdown.add(new Date((new Date()).getTime()+('.$Descrip1.'*60*1000)), "countbox'.$Descrip3.$IDfaucet.'");} 

        function cBtn'.$Descrip3.$IDfaucet.'(btn)
        {btn.style.background = "#FAFAFA"; btn.style.color = "#BDBDBD"; return;}

        function C'.$Descrip3.$IDfaucet.'() {
        document.getElementById("DD'.$Descrip3.$IDfaucet.'").style.display = "none";}

</script>
<div id="PD'.$Descrip3.$IDfaucet.'">
 
<div id="cont"> 


<div id="numero">  

'.$IDfaucet.'

</div>


  <div id="eliminar"> 
  <img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png" onclick="EF'.$Descrip3.$IDfaucet.'()"> <br>
  <img height="18" width="18" border=0 hspace=1 vspace=1 src="../img/reportar_ico.png" onclick="MD'.$Descrip3.$IDfaucet.'()">
  </div>

    <div id="faucet">
    <a class="Ntooltip" href="../sitios/faucet/'.$ruta_dest.'/'.$IDfaucet.'.php" target="main_frame" onclick="countDown'.$Descrip3.$IDfaucet.'();cBtn'.$Descrip3.$IDfaucet.'(this)"> 


    \'.$ID_name .\'

      
    <span>
    \'.$reco_fau.\'


    \'.$ID_name .\'


    <br>
    
    <img height="25" width="25" border=0 hspace=1 vspace=1 src="../img/bit_ico.png"> \'.$tiempo.\' <br>
    <img height="25" width="25" border=0 hspace=1 vspace=1 src="../img/reloj_ico.png"> \'.$pago .\' 
    </span> </a> 
    </div>

      <div id="timer">
      <span id="countbox'.$Descrip3.$IDfaucet.'"/>
      <img height="35" width="35" border=0 hspace=1 vspace=1 src="../img/flecha_ico.png"> </span>
      </div>

<!-- FORMULARIO DE DENUNCIA  -->


</div> 

<div id="DD'.$Descrip3.$IDfaucet.'">

<div id="cancelar">
</div>


<div id="formulario">
    <form name="denuncia" align="left" method="post" action="\'.$url_base.\'sitios/reporte.php" target="main_frame">
    <input placeholder="\'.$nom_cont .\'" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="MiMail@btfc4.com" size="25" name="mail" value=""> 
    <input placeholder="\'.$motivo .\'" style="overflow:auto; border-style:solid; border-color:#FF8000; border-width: 1px;" type="text" name="motivo" size="25" value="" required> <br>
    <input type="text" size="5" style="visibility:hidden; border: none; background: transparent" name="nombre_faucet" value="'.$Descrip3.'/'.$IDfaucet.'" readonly>
</div>

<div id="btn-form">

<div id="cancelar">
<img height="25" width="25" border=0 hspace=1 vspace=1 src="../img/eliminar_ico.png" onclick="C'.$Descrip3.$IDfaucet.'()">
</div>

<div id="enviar">
  <input class="pull-right" height="39" width="39" type="image" src="../img/flecha_ico.png"  onclick="EF'.$Descrip3.$IDfaucet.'()"  alt=""> </form>
</div>

</div>

</div> 

</div> 
<br>
</body>
</html>\'; 

    } else {echo $nota;}; ?>' ); 
 
?>
