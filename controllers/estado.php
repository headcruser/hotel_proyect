<?php
/***
controllers/estado
Gestiona los estados del hotel 
Clase: CEstado
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CEstado extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER UN SOLO estado  
      parametro           tipo        Descripcion
@param $p_idestado        int      Identificador del estado
  ****************************************************************/ 

  function getEstado($p_idestado)
  {
      $estados=array(); //Arreglo vacio
      if( is_numeric($p_idestado) )
      {
        $statement=$this->conDB->Prepare('select * from estado where id_estado='.$p_idestado);
        $statement->Execute();
        $estados=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $estados;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN estado DE LA BASE DE DATOS 
        parametro           tipo      Descripcion
        @param $p_Idestado       INT       Nombre de la tabla
  *****************************************************************/
    function deleteEstado($p_idestado)
    {

      $deleteestado = 'DELETE FROM estado where id_estado = :idestado';

      $stmt2 = $this->conDB->Prepare($deleteestado);
      $stmt2->bindParam(':idestado', $p_idestado, PDO::PARAM_INT);
      $stmt2->Execute();

    } //fin de la funcion

}// Fin de la clase 
?>
