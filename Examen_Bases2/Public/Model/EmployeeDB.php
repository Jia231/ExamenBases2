<?php

/**
 * EmployeeDB short summary.
 *
 * EmployeeDB description.
 *
 * @version 1.0
 * @author Jia Ming Liou
 */
class EmployeeDB
{
    public static  function Agregar_Empleado (Employee_Model $empleado,$db){

        $connectionControl = new ConnectionControl();
        $ConnectionString = $db;


        $query ="INSERT INTO Empleados (cedula,nombre,apellido,edad,telefono) VALUES ('$empleado->cedula','$empleado->nombre','$empleado->apellido','$empleado->edad',$empleado->telefono)";
        try{
            if ($result=mysqli_query($ConnectionString, $query))
            {
                $connectionControl->Desconectar();
                $connectionControl = null;
                return true;
            }
            $connectionControl->Desconectar();
            $connectionControl = null;
            return false;
        }
        catch (Exception $exception)
        {
            return false;
        }



    }

    public static function getAll($db){
        $connectionControl = new ConnectionControl();
        $ConnectionString = $db;
        $query ="SELECT * FROM `empleados`";
        $employeeArray = [];
        if($resultado = mysqli_query($ConnectionString, $query))
        {
            $employee="";
            while($row = $resultado->fetch_array())
            {
                $employee = new Employee_Model($row["Cedula"],$row["Nombre"],$row["Apellido"],$row["Edad"],$row["Telefono"]);
                array_push($employeeArray,$employee);
            }
            $connectionControl->Desconectar();
            $connectionControl=null;
            if(sizeof($employeeArray)>0){
                return $employeeArray;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


}