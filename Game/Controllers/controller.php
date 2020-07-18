<?php

class MvcController2{
    public function SinAcceso(){
        include "views/SinAcceso.php";
    }
    public function juego(){
        include "views/Game.php";
    }
    public function NavLogin_game(){
        include "views/NavLogin_game.php";
    }
    public function NavLogout_game(){
        include "views/NavLogout_game.php";
    }
}

?>