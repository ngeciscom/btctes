// AGREGAR EL SCRIPT PARA CONSULTAR EL BALANCA DE LA FAUCET
    if (isset($_POST['consultar'])){

    $arc = $cant_archivos + 1;
    
    $con_saldo = '// FUNCION PARA COMPROBAR EL BALANCE DE LA FAUCET -------------------

                  function getBetween'.$arc.'($content'.$arc.',$start'.$arc.',$end'.$arc.'){
                  $r'.$arc.' = explode($start'.$arc.', $content'.$arc.');
                  if (isset($r'.$arc.'[1])){
                  $r'.$arc.' = explode($end'.$arc.', $r'.$arc.'[1]);
                  return $r'.$arc.'[0];
                  };
                  return \'\';
                  }

                  $cadena'.$arc.' ="";

                  //metemos la url en una variable

                  $enlace'.$arc.'="'.$URL.'";

                  //abrimos la url y que la lea que contiene

                  $fo'.$arc.'= fopen("$enlace'.$arc.'","r") or die ("'.$URL.' - error #404");
                  while (!feof($fo'.$arc.')) {
                  $cadena'.$arc.' .= fgets($fo'.$arc.', 2048);
                  }
                  fclose ($fo'.$arc.'); 

                  $content'.$arc.' = $cadena'.$arc.';
                  $start'.$arc.' = "Balance:";
                  $end'.$arc.' = "satoshi";
                  $output'.$arc.' = getBetween'.$arc.'($content'.$arc.',$start'.$arc.',$end'.$arc.');
                    
                    // CANTIDAD MINIMA DE SATOSHI ACEPTADA
                    $min'.$arc.' = 50001 ;

                      // SE DETERMINA SI LA FAUCET TIENE FONDOS SUFICIENTES COMO PARA MOSTRARLA
                      if ($output'.$arc.' > $min'.$arc.') {';

    $cierre_cod =";} else {}; ?>";

  } else {

    $con_saldo ='// NO CHECK BALANCE ----
                $arc = "";
                $output ="N/A";';

    $cierre_cod =";?>";
    $arc = "";
};

------------------------------------------------------------------------------------------------------------------------------------------------------------------

$consultar ="";
$con_saldo = "";
$cierre_cod ="?>'";

------------------------------------------------------------------------------------------------------------------------------------------------------------------

<img height="25" width="25" border=0 hspace=1 vspace=1 src="../img/balance_ico.png"> \' .$output'.$arc.'.\'<br>

------------------------------------------------------------------------------------------------------------------------------------------------------------------

        <div class="checkB">
        <input type="checkbox" name="reco" class="checkB-checkbox" id="1" checked > 
            <label class="checkB-label" for="1"> &nbsp; <font size="2">Recomendar Faucet</font>
              <span class="checkB-inner"></span>
              <span class="checkB-switch"></span>
            </label>
          </div>
        <br>
        
        <div class="checkB">
        <input type="checkbox" name="estado" class="checkB-checkbox" id="2" checked> 
            <label class="checkB-label" for="2"> &nbsp; <font size="2">Faucet Habilitada</font>
              <span class="checkB-inner"></span>
              <span class="checkB-switch"></span>
            </label>
          </div>
<br>
        <div class="checkB">
        <input type="checkbox" name="no_ads" class="checkB-checkbox" id="3">  
            <label class="checkB-label" for="3"> &nbsp;<font size="2"> Deshabilitar ADs</font>
              <span class="checkB-inner"></span> 
              <span class="checkB-switch"></span>
            </label>
          </div>  
