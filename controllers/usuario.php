<?php
/***
controllers/usuario
Gestiona los usuarios 
Clase: usuario
autor: Daniel
version : 0.1
fecha : 2016-09-21
*/

include('../hotel_class.php'); //Incluye a la clase Cpweb

class usuario extends Chotel
{

	/***********************************************************************************
						METODO PARA OBTENER UN ESTADO  
			parametro 					tipo 	 		Descripcion
	  		@param $idEstado  			 Int 		  Identificador del estado 
	**********************************************************************************/
	function getUsuario ($id_usuario)
	{
		$usuario=array(); //Arreglo vacio
		 if(is_numeric($id_usuario))
		 {
		 	$statement=$this->conDB->Prepare('select * from usuario where id_usuario='.$id_usuario);
		 	$statement->Execute();
		 	$usuario=$statement->FetchAll(PDO::FETCH_ASSOC);
		 }
		 	return $usuario;
	} // Fin del metodo 


	/***********************************************************************************
					METODO PARA ELIMINAR UN ESTADO DE LA BASE DE DATOS
			parametro 					tipo 	 		Descripcion
	  		@param $idEstado  			Int           Identificador del estado  		  
	**********************************************************************************/
	function deleteUsuario($id_usuario)
	{
		$sql = "DELETE FROM usuario WHERE id_usuario = :id_usuario";
		$stmt = $this->conDB->Prepare($sql);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		$this->verifyQuery($stmt);

	} //fin de la funcion
} // Fin de la clase 
?>