<?php
/***
controllers/consumo
Controla los cosumos de un cliente
Clase: CConsumo
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CConsumo extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER UN SOLO CONSUMO 
      parametro           tipo        Descripcion
@param $p_idConsumo        int      Identificador del consumo
  ****************************************************************/ 

  function getConsumo($p_idConsumo)
  {
      $consumo=array(); //Arreglo vacio
      if( is_numeric($p_idConsumo) )
      {
        $statement=$this->conDB->Prepare('select * from consumo where id_consumo='.$p_idConsumo);
        $statement->Execute();
        $consumo=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $consumo;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN CONSUMO DE LA BASE DE DATOS 
      parametro           tipo      Descripcion
        @param $p_idConsumo       INT       Nombre de la tabla
  *****************************************************************/
    function deleteConsumo($p_idConsumo)
    {

      $deleteCliente = 'DELETE FROM consumo where id_consumo = :idConsumo';
      $stmt2 = $this->conDB->Prepare($deleteCliente);
      $stmt2->bindParam(':idConsumo', $p_idConsumo, PDO::PARAM_INT);
      $stmt2->Execute();

    } //fin de la funcion


}// Fin de la clase consumo 
?>
