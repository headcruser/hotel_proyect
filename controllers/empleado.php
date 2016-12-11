<?php
/***
controllers/Empleado
Gestiona los empleados del hotel
Clase: CEmpleado
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CEmpleado extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER UN SOLO EMPLEADO  
      parametro           tipo        Descripcion
@param $p_idPersona        int      Identificador del empleado
  ****************************************************************/ 

  function getEmpleado($p_idEmpleado)
  {
      $empleados=array(); //Arreglo vacio
      if( is_numeric($p_idEmpleado) )
      {
        $statement=$this->conDB->Prepare('select * from empleado where id_empleado='.$p_idEmpleado);
        $statement->Execute();
        $empleados=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $empleados;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN EMPLEADO DE LA BASE DE DATOS 
      parametro           tipo      Descripcion
    @param $p_idPerspna       INT   identificador del empleado
  *****************************************************************/
    function deleteEmpleado($p_idEmpleado)
    {

      $deleteEmpleado = 'DELETE FROM empleado where id_empleado = :idEmpleado';
      $stmt2 = $this->conDB->Prepare($deleteEmpleado);
      $stmt2->bindParam(':idEmpleado', $p_idEmpleado, PDO::PARAM_INT);
      $stmt2->Execute();     
    } //fin de la funcion

}// Fin de la clase Empleado 
?>
