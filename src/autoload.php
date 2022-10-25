<?php
spl_autoload_register(function ($class){
    $ruta=$class;
    $ruta.=".php";
    $ruta=str_replace("\\","/",$ruta);

    echo "<br>Se ha detectado la clase: ".$ruta."</br>";
    include_once($ruta);
});
