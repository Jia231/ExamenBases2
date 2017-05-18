<?php

/**
 * User short summary.
 *
 * User description.
 *
 * @version 1.0
 * @author Jia Ming Liou
 */
class Employee_Model
{
    public $nombre;
    public $cedula;
    public $apellido;
    public $telefono;
    public $edad;

    public function __construct($cedula,$nombre,$apellido,$telefono,$edad)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->cedula=$cedula;
        $this->telefono=$telefono;
        $this->edad=$edad;

    }
}