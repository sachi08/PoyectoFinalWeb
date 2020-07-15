<?php

require_once "Controllers\controller.php";

if(true){
    $mvc = new MvcController();
    $mvc -> juego();
}
else{
    $mvc = new MvcController();
    $mvc -> SinAcceso();
}
?>