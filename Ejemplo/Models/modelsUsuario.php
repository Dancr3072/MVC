<?php

require_once 'config/database.php';

class Usuario{

    public $id_usuario;
    public $nombre;
    public $apellido;
    public $email;
    public $password;

    private $db;

    public function __construct(){
        $this -> db = database::conectar();
        
    }

     function getid_usuario(){
        return $this->id_usuario;
    }


    function getnombre(){
        return $this->nombre;
    }

     function getapellido(){
        return $this->apellido;
    }

     function getemail(){
        return $this->email;
    }

     function getpassword(){
        return $this->password;
    }

     function setid_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    function setnombre($nombre){
        $this->nombre = $nombre;
    }

    function setapellido($apellido){
        $this->apellido = $apellido;
    }

    function setemail($email){
        $this->email = $email;
    }

    function setpassword($password){
        $this->password = $password;
    }


    public function conseguirTodos(){

        //var_dump($this -> db);
        
        $query = $this->db->query("SELECT * FROM t_usuario");
        return $query;

        echo "IMPRIMIENDO TODO LOS USUARIOS ACTIVOS...";
    }

    public function crear(){
        $sql = "INSERT INTO t_usuario(id_usuario,nombre,apellido,email,password,id_rol) VALUES({$this->id_usuario},'{$this->nombre}','{$this->apellido}','{$this->email}','{$this->password}',1);";

        $guardar = $this ->db->query($sql);

        require_once 'views/usuarios/crear.php';

    }

}

