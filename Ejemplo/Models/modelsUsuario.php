<?php

class Usuario{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;


    function getnombre(){
        return $this->nombre;
    }

     function getapellidos(){
        return $this->apellidos;
    }

     function getemail(){
        return $this->email;
    }

     function getpassword(){
        return $this->password;
    }

    function setnombre(){
        $this->nombre = $nombre;
    }

    function setapellido(){
        $this->apellido = $apellido;
    }

    function setemail(){
        $this->email = $email;
    }

    function setpassword(){
        $this->password = $password;
    }

    public function conseguirTodos(){
        echo "IMPRIMIENDO TODO LOS USUARIOS ACTIVOS...";
    }
}

