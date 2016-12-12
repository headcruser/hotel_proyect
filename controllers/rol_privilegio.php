<?php
/***
controllers/rol_privilegio
Gestiona los rol_privilegios de
Clase: rol_privilegio
autor: Daniel
version : 0.1
fecha : 2016-11-03
*/

include('../hotel_class.php'); //Incluye a la clase

class rol_privilegio extends Chotel
{

	/***********************************************************************************
						METODO PARA OBTENER UN ROL_PRIVILEGIO
			parametro 					tipo 	 		Descripcion

	**********************************************************************************/
	function getRolPrivilegio ($id_rol,$id_privilegio)
	{
		$rol_privilegio=array(); //Arreglo vacio
		 if(is_numeric($id_rol) && is_numeric($id_privilegio))
		 {
		 	$statement=$this->conDB->Prepare('select * from rol_privilegio where id_rol='.$id_rol.' AND '.' id_privilegio='.$id_privilegio );
		 	$statement->Execute();
		 	$rol_privilegio=$statement->FetchAll(PDO::FETCH_ASSOC);
		 }
		 	return $rol_privilegio;
	} // Fin del metodo



	function deleteRolPrivilegio($id_rol,$id_privilegio)
	{
		$sql = "DELETE FROM rol_privilegio WHERE id_rol = :id_rol AND id_privilegio = :id_privilegio";
		$stmt = $this->conDB->Prepare($sql);

		$stmt->bindParam(':id_rol', $id_rol, PDO::PARAM_INT);
		$stmt->bindParam(':id_privilegio', $id_privilegio, PDO::PARAM_INT);
		$this->verifyQuery($stmt);

	} //fin de la funcion


	/***********************************************************************************
							METODO PARA ACTUALIZAR EL DETALLE ROL-PRIVILEGIO
				parametro 								 tipo 	 			Descripcion
		  	@param $Actualizacion  	    Array 		  Lista con los nuevos elementos
				@param $id_usuario    	    Array 		  Recibe el id anterior
				@param $id_rol			  	    Array 		  recibe el id anterior
		**********************************************************************************/
		function updateRolPrivilegio($Actualizacion,$id_rol,$id_privilegio)
		{
			if(is_numeric($id_rol)&& is_numeric($id_privilegio)&&isset($Actualizacion))
			 {
						$updateIDrol=$Actualizacion['id_rol'];
				 		$updateIDprivilegio=$Actualizacion['id_privilegio'];

						$sql = "UPDATE rol_privilegio SET id_rol=$updateIDrol,id_privilegio=$updateIDprivilegio
														WHERE id_rol=$id_rol and id_privilegio=$id_privilegio";

						$statement=$this->conDB->Prepare($sql);
						$statement->Execute();
		    }
		} //fin de la funcion
} // Fin de la clase

?>
