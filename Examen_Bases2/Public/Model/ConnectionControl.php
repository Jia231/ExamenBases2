<?php
class ConnectionControl
{

    private $Server;
    private $Usu;
    private $pass;
    private $NombreDB;
    private $Link;
    

    function __construct() {
        $this->Server="localhost";
        $this->Usu="root";
        $this->pass="root";
        $this->NombreDB="bases";
        $this->Link="";

    }


    function Conectar(){

        if(!($this->Link=  mysqli_connect($this->Server,$this->Usu,$this->pass))){
            echo "Error Conectando...";
            exit;

        }


        if(!(mysqli_select_db($this->Link,$this->NombreDB))){
            echo "Error Seleccionando la DB...";
            exit;

        }
        return $this->Link;
    }

    function Desconectar(){
        //mysqli_close($this->Link);
        $mysqli = new mysqli($this->Server,$this->Usu,$this->pass,$this->NombreDB);
        mysqli_close($mysqli);
    }






}

