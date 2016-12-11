<?php
/***
controllers/TipoComprobante
Gestiona los TipoComprobantes disponibles del hotel
Clase: CTipoComprobante
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CTipoComprobante extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER Una TipoComprobante 
      parametro           tipo        Descripcion
@param $p_idTipoComprobante        int      Identificador del pago
  ****************************************************************/ 

  function getTipoComprobante($p_idTipoComprobante)
  {
      $tipoComprobante=array(); //Arreglo vacio
      if( is_numeric($p_idTipoComprobante) )
      {
        $statement=$this->conDB->Prepare('select * from tipoComprobante where id_comprobante='.$p_idTipoComprobante);
        $statement->Execute();
        $tipoComprobante=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $tipoComprobante;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN tipoComprobante DE LA BASE DE DATOS 
        parametro                     tipo      Descripcion
        @param $p_idTipoComprobante   INT    identificador del tipoComprobante
  *****************************************************************/
    function deleteTipoComprobante($p_idTipoComprobante)
    {
      $delete = 'DELETE FROM tipoComprobante where id_comprobante = :id_tipoComprobante';
      $stmt2 = $this->conDB->Prepare($delete);
      $stmt2->bindParam(':id_tipoComprobante', $p_idTipoComprobante, PDO::PARAM_INT);
      $stmt2->Execute();
    } //fin de la funcion

}// Fin de la clase 
?>
