<?php

/**
 * User_Model short summary.
 *
 * User_Model description.
 *
 * @version 1.0
 * @author Jia Ming Liou
 */
class User_Model
{
    public $usuario;
    public $contrasena;
    public $email;
    public $nombre;
    public $apellido;


    public function __construct($usuario,$contrasena,$email,$nombre,$apellido)
    {
        $this->usuario=$usuario;
        $this->contrasena=$contrasena;
        $this->email=$email;
        $this->nombre=$nombre;
        $this->apellido=$apellido;


    }
}