<?php

/**
 * Partial_User short summary.
 *
 * Partial_User description.
 *
 * @version 1.0
 * @author Jia Ming Liou
 */
class Partial_User
{
    public $usuario;
    public $contrasena;
   


    public function __construct($user,$pass)
    {
        $this->usuario=$user;
        $this->contrasena=$pass;
        


    }
}