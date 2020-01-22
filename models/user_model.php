<?php
session_start();
require 'db.php';
class user_model{
    private $db;

    public function __construct(){
        $this->db=conexion::conectarDB();
    }

    public function login($user,$password){
        $sql="SELECT * FROM users INNER JOIN empleados ON users.idEmpleado=empleados.idEmpleado WHERE user='$user' AND pass='$password' LIMIT 1";
        $res=$this->db->query($sql);
        $existe=mysqli_num_rows($res);
        $user=$res->fetch_assoc();
        if ($existe==1) {
            $this->tomarRol(1);
            $_SESSION['idEmp']=$user['idEmpleado'];
            $_SESSION['idRol']=$user['idRol'];
            $_SESSION['nombre']=$user['nombre'];
            return 1;
        }else{
            return 0;
        }
    }

    public function tomarRol($idRol){
        $sql="SELECT nombre FROM roles WHERE idRoles='$idRol'";
        $res=$this->db->query($sql);
        $rol=$res->fetch_assoc();
        $_SESSION['nombreRol']=$rol['nombre'];
    }

    public function totalUsuarios(){
        $sql="SELECT COUNT(*) as total FROM users";
        $res=$this->db->query($sql);
        $total=$res->fetch_assoc();
        return $total['total'];
    }

    public function agregadosRrhh(){
        $idEmp=$_SESSION['idEmp'];
        $sql="SELECT COUNT(*) as total FROM users WHERE rrhhAlta='$idEmp'";
        $res=$this->db->query($sql);
        $total=$res->fetch_assoc();
        return $total['total'];
    }

}





?>