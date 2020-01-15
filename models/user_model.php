<?php
require 'db.php';
class user_model{
    private $db;

    public function __construct(){
        $this->db=conexion::conectarDB();
    }

    public function login($user,$password){
        $sql="SELECT * FROM users WHERE user='$user' AND pass='$password' LIMIT 1";
        $res=$this->db->query($sql);
        $existe=mysqli_num_rows($res);
        if ($existe==1) {
            return 1;
        }else{
            return 0;
        }
    }

    


}





?>