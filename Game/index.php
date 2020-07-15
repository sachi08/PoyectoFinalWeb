<?php

require_once "Controllers\controller.php";

if(isset($_POST['user'])){
    $mvc = new MvcController();
    $mvc -> juego();
}
else{
    $mvc = new MvcController();
    $mvc -> SinAcceso();
}
?>