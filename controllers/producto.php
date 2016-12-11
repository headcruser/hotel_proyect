<?php
/***
controllers/Producto
Gestiona los productos disponibles del hotel
Clase: CProducto
autor: Daniel
version : 0.1
fecha : 2016-09-21*/

include('../hotel_class.php');

class CProducto extends Chotel
{  

/******************************************************************
            METODO PARA OBTENER UN SOLO PRODUCTO 
      parametro           tipo        Descripcion
@param $p_idProducto        int      Identificador del pago
  ****************************************************************/ 

  function getProducto($p_idProducto)
  {
      $producto=array(); //Arreglo vacio
      if( is_numeric($p_idProducto) )
      {
        $statement=$this->conDB->Prepare('select * from producto where id_producto='.$p_idProducto);
        $statement->Execute();
        $producto=$statement->FetchAll(PDO::FETCH_ASSOC);
      }
      return $producto;
  } // Fin de la funcion



/******************************************************************
        METODO PARA ELIMINAR UN PRODUCTO DE LA BASE DE DATOS 
        parametro                  tipo      Descripcion
        @param $p_idProducto       INT       identificador del producto
  *****************************************************************/
    function deleteProducto($p_idProducto)
    {
      $deletePago = 'DELETE FROM producto where id_producto = :idProducto';
      $stmt2 = $this->conDB->Prepare($deletePago);
      $stmt2->bindParam(':idProducto', $p_idProducto, PDO::PARAM_INT);
      $stmt2->Execute();
    } //fin de la funcion

}// Fin de la clase 
?>
