<?php
/***
controllers/Pago
Gestiona los pagos del hotel 
Clase: CPago
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CPago extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER UN SOLO PAGO  
      parametro           tipo        Descripcion
@param $p_idPago        int      Identificador del pago
  ****************************************************************/ 

  function getPago($p_idPago)
  {
      $pagos=array(); //Arreglo vacio
      if( is_numeric($p_idPago) )
      {
        $statement=$this->conDB->Prepare('select * from pago where id_pago='.$p_idPago);
        $statement->Execute();
        $pagos=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $pagos;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN PAGO DE LA BASE DE DATOS 
        parametro           tipo      Descripcion
        @param $p_IdPago       INT       Nombre de la tabla
  *****************************************************************/
    function deletePago($p_idPago)
    {

      $deletePago = 'DELETE FROM pago where id_pago = :idPago';
      $stmt2 = $this->conDB->Prepare($deletePago);
      $stmt2->bindParam(':idPago', $p_idPago, PDO::PARAM_INT);
      $stmt2->Execute();

    } //fin de la funcion

}// Fin de la clase 
?>
