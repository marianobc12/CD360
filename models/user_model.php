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
            $_SESSION['idUser']=$user['idUser'];
            $_SESSION['idEmp']=$user['idEmpleado'];
            $this->tomarRol($user['idRol']);
            $_SESSION['idRol']=$user['idRol'];
            $_SESSION['nombre']=$user['nombre'];
            return 1;
        }else{
            return 0;
        }
    }


    public function tomarDatos(){
        $idUser=$_SESSION['idUser'];
        $sql="SELECT * FROM users INNER JOIN empleados ON users.idEmpleado=empleados.idEmpleado WHERE idUser='$idUser'";
        $res=$this->db->query($sql);
        $emp=$res->fetch_assoc();
        return $emp;
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

    public function ultimos5Usuarios(){
        $sql="SELECT *,empleados.nombre as emp_nombre,roles.nombre as rol_nombre FROM users INNER JOIN empleados ON users.idEmpleado=empleados.idEmpleado INNER JOIN roles ON users.idRol=roles.idRoles WHERE fechaAlta=(SELECT MAX(fechaAlta) FROM users) LIMIT 5";
        $res=$this->db->query($sql);
        return $res;
    }

    public function listarEmpleados(){
        $sql="SELECT *,empleados.nombre as emp_nombre,roles.nombre as rol_nombre FROM users INNER JOIN empleados ON users.idEmpleado=empleados.idEmpleado INNER JOIN roles ON users.idRol=roles.idRoles WHERE idRol!=1";
        $res=$this->db->query($sql);
        return $res;
    }
}





?>