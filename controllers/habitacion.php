<?php
/***
controllers/Habitacion 
Gestiona las habitaciones del hotel 
Clase: Habitacion 
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CHabitacion extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER UNA SOLA HABITACION   
      parametro           tipo        Descripcion
@param $p_idHabitacion        int      Identificador de la habitacion
  ****************************************************************/ 

  function getHabitacion($p_idHabitacion)
  {
      $habitacion=array(); //Arreglo vacio
      if( is_numeric($p_idHabitacion) )
      {
        $statement=$this->conDB->Prepare('select * from habitacion where id_habitacion='.$p_idHabitacion);
        $statement->Execute();
        $habitacion=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $habitacion;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UNA HABITACION 
            parametro                 tipo      Descripcion
        @param $o_idHabitacion        INT       Nombre de la tabla
  *****************************************************************/
    function deleteHabitacion($p_idHabitacion)
    {

      $deleteHabitacion = 'DELETE FROM habitacion where id_habitacion = :idhabitacion';
      $stmt2 = $this->conDB->Prepare($deleteHabitacion);
      $stmt2->bindParam(':idhabitacion', $p_idHabitacion, PDO::PARAM_INT);
      $stmt2->Execute();
    } //fin de la funcion

}// Fin de la clase habitacion
?>
