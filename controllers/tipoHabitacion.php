<?php
/***
controllers/TipoHabitacion
Gestiona los TipoHabitacions disponibles del hotel
Clase: CTipoHabitacion
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CTipoHabitacion extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER Una TipoHabitacion 
      parametro           tipo        Descripcion
@param $p_idTipoHabitacion        int      Identificador del pago
  ****************************************************************/ 

  function getTipoHabitacion($p_idTipoHabitacion)
  {
      $TipoHabitacion=array(); //Arreglo vacio
      if( is_numeric($p_idTipoHabitacion) )
      {
        $statement=$this->conDB->Prepare('select * from tipoHabitacion where id_tipoHab='.$p_idTipoHabitacion);
        $statement->Execute();
        $tipoHabitacion=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $tipoHabitacion;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN tipoHabitacion DE LA BASE DE DATOS 
        parametro                     tipo      Descripcion
        @param $p_idTipoHabitacion   INT    identificador del tipoHabitacion
  *****************************************************************/
    function deleteTipoHabitacion($p_idTipoHabitacion)
    {
      $delete = 'DELETE FROM tipoHabitacion where id_tipoHab = :id_tipoHabitacion';
      $stmt2 = $this->conDB->Prepare($delete);
      $stmt2->bindParam(':id_tipoHabitacion', $p_idTipoHabitacion, PDO::PARAM_INT);
      $stmt2->Execute();
    } //fin de la funcion

}// Fin de la clase 
?>
