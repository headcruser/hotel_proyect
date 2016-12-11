<?php
/***
controllers/Reserva
Gestiona los Reservas disponibles del hotel
Clase: CReserva
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class Creserva extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER Una reserva 
      parametro           tipo        Descripcion
@param $p_idreserva        int      Identificador del pago
  ****************************************************************/ 

  function getreserva($p_idreserva)
  {
      $reserva=array(); //Arreglo vacio
      if( is_numeric($p_idreserva) )
      {
        $statement=$this->conDB->Prepare('select * from reserva where id_reserva='.$p_idreserva);
        $statement->Execute();
        $reserva=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $reserva;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN Reserva DE LA BASE DE DATOS 
        parametro                  tipo      Descripcion
        @param $p_idReserva       INT       identificador del Reserva
  *****************************************************************/
    function deleteReserva($p_idReserva)
    {
      $deletePago = 'DELETE FROM reserva where id_reserva = :id_reserva';
      $stmt2 = $this->conDB->Prepare($deletePago);
      $stmt2->bindParam(':id_reserva', $p_idReserva, PDO::PARAM_INT);
      $stmt2->Execute();
    } //fin de la funcion

}// Fin de la clase 
?>
