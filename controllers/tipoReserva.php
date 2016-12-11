<?php
/***
controllers/TipoReserva
Gestiona los TipoReservas disponibles del hotel
Clase: CTipoReserva
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CTipoReserva extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER Una TipoReserva 
      parametro           tipo        Descripcion
@param $p_idTipoReserva        int      Identificador del pago
  ****************************************************************/ 

  function getTipoReserva($p_idTipoReserva)
  {
      $TipoReserva=array(); //Arreglo vacio
      if( is_numeric($p_idTipoReserva) )
      {
        $statement=$this->conDB->Prepare('select * from tipoReserva where id_tipoReserva='.$p_idTipoReserva);
        $statement->Execute();
        $tipoReserva=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $tipoReserva;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN tipoReserva DE LA BASE DE DATOS 
        parametro                     tipo      Descripcion
        @param $p_idTipoReserva   INT    identificador del tipoReserva
  *****************************************************************/
    function deleteTipoReserva($p_idTipoReserva)
    {
      $delete = 'DELETE FROM tipoReserva where id_tipoReserva = :id_tipoReserva';
      $stmt2 = $this->conDB->Prepare($delete);
      $stmt2->bindParam(':id_tipoReserva', $p_idTipoReserva, PDO::PARAM_INT);
      $stmt2->Execute();
    } //fin de la funcion

}// Fin de la clase 
?>
