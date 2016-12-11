<?php
/***
controllers/Cliente
Gestiona los clientes de Hotel
Clase: Clientes
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class Clientes extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER UN SOLO CLIENTE  
      parametro           tipo        Descripcion
@param $p_idCliente        int      Identificador del cliente
  ****************************************************************/ 

  function getCliente($p_idCliente)
  {
      $clientes=array(); //Arreglo vacio
      if( is_numeric($p_idCliente) )
      {
        $statement=$this->conDB->Prepare('select * from cliente where id_cliente='.$p_idCliente);
        $statement->Execute();
        $clientes=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $clientes;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN CLIENTE DE LA BASE DE DATOS 
      parametro           tipo      Descripcion
        @param $idcliente       INT       Nombre de la tabla
  *****************************************************************/
    function deleteCliente($p_idPersona)
    {

      $deleteCliente = 'DELETE FROM cliente where id_cliente = :id_cliente';
      $stmt2 = $this->conDB->Prepare($deleteCliente);
      $stmt2->bindParam(':id_cliente', $p_idPersona, PDO::PARAM_INT);
      $stmt2->Execute();
    } //fin de la funcion

}// Fin de la clase clientes
?>
