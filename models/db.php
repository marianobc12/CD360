<?php

class conexion{
    public static function conectarDB()
    {
        $link=mysqli_connect('localhost','root','','cd360');
        return $link;
    }
}

?>