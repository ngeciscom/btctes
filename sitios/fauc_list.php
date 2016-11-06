<?php

$directorio="list/faucetbox/";
if ($gestor = opendir($directorio))
   
{
    $list=array();
    while (false !== ($arch = readdir($gestor)))
    {
        if ($arch != "." && $arch != "..")
        {
            $list[]=$arch;
        }
    }
    sort($list);
        foreach($list as $fileName)
        {   

        include_once("list/faucetbox/" .$fileName);
// sleep(3);
        }
    closedir($gestor);

}
?>
