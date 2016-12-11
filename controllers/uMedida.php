<?php
/***
controllers/uMedida
Gestiona los uMedidas disponibles del hotel
Clase: CuMedida
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CuMedida extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER Una uMedida 
      parametro           tipo        Descripcion
@param $p_iduMedida        int      Identificador del pago
  ****************************************************************/ 

  function getuMedida($p_iduMedida)
  {
      $uMedida=array(); //Arreglo vacio
      if( is_numeric($p_iduMedida) )
      {
        $statement=$this->conDB->Prepare('select * from uMedida where id_uMedida='.$p_iduMedida);
        $statement->Execute();
        $uMedida=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $uMedida;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN uMedida DE LA BASE DE DATOS 
        parametro                     tipo      Descripcion
        @param $p_iduMedida   INT    identificador del uMedida
  *****************************************************************/
    function deleteuMedida($p_iduMedida)
    {
      $delete = 'DELETE FROM uMedida where id_uMedida = :id_uMedida';
      $stmt2 = $this->conDB->Prepare($delete);
      $stmt2->bindParam(':id_uMedida', $p_iduMedida, PDO::PARAM_INT);
      $stmt2->Execute();
    } //fin de la funcion

}// Fin de la clase 
?>
