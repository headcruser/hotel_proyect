<?php
  include("../../cp_web_class.php");
  /**29 de noviembre del 2016
   * Esta Clase se encarga de grestionar los servicios Disponibles
   *Le dimos super poderes a nuestra clase*/
  class ContizacionControl extends Cpweb
  {
    function API()
    {
      $this->conexion();
      header('Content-Type: application/json');
      $metodo=$_SERVER['REQUEST_METHOD'];
      switch ($metodo)
      {
        case 'POST':
          $this-> APIinsert();
        break;

        case 'GET':
        default:
            if(isset($_GET['id']))
            {
                //echo "aqui voy a a consultar el servicio
                $this-> APIviewOne($_GET['id']);
            }else {
                //echo "Aqui voy a Mostrar todos los servicios";
                $this-> APIviewAll();
            }
        break;
        case 'PUT':
          $this->APIupdate($_GET['accion'], $_GET['id']);
          //echo "Aqui voy a acutualizar el servicio".$_GET['id'];
        break;

        case'DELETE':
          //echo "Aqui voy a Eliminar el servicio".$_GET['id'];
           $this->APIdelete($_GET['id']);
        break;
      }
    } // Fin del metodo

    /**Metodo para insertar un servicio*/
    function APIinsert()
    {
      $objeto =json_decode(file_get_contents('php://input'));
			$contador = 0;
			$id_cliente = $objeto->id_cliente;
			foreach ($objeto as $etiqueta => $obj)
      {
				if($etiqueta == 'cotizacion_detalle') {
					foreach ($obj as $servicio) {
						$cotizacion[$contador]['id_servicio'] = $servicio->id_servicio;
						$cotizacion[$contador]['cantidad'] = $servicio->cantidad;
						$contador++;
					}
				}
			}
			$fecha = date('Y-m-j');
			$this->conn->beginTransaction();
			$sql = "insert into cotizacion(id_cliente, fecha) values(".$id_cliente.", '".$fecha."')";
			$stmt = $this->conn->Prepare($sql);
			$stmt->execute();

			$sql = "select max(id_cotizacion) as id_cotizacion from cotizacion where id_cliente=".$id_cliente;
			$datos = $this->fetchAll($sql);
			$id_cotizacion = $datos[0]['id_cotizacion'];

      for ($i=0; $i < sizeof($cotizacion); $i++)
      {
				$id_servicio = $cotizacion[$i]['id_servicio'];
				$cantidad = $cotizacion[$i]['cantidad'];
				$sql = "insert into cotizacion_detalle(id_cotizacion, id_servicio, cantidad) values(".$id_cotizacion.", ".$id_servicio.", ".$cantidad.")";
				$stmt = $this->conn->Prepare($sql);
				$stmt->execute();
			}
			$this->conn->commit();
			$message['status'] = "OK";
			$message['message'] = "El registro se insertó correctamente";
			$message = json_encode($message);
			http_response_code(200);
			echo $message;
    } // FIN DEL METODO


    function APIupdate($accion,$id)
    {
      $objeto =json_decode(file_get_contents('php://input'));
			switch ($accion) {
				//Insertará un nuevo detalle
				case 'insert':
					foreach ($objeto as $etiqueta => $obj) {
						if($etiqueta == 'cotizacion_detalle') {
							foreach ($obj as $servicio) {
								$id_servicio = $servicio->id_servicio;
								$cantidad = $servicio->cantidad;
								$sql = "insert into cotizacion_detalle(id_cotizacion, id_servicio, cantidad) values(".$id.", ".$id_servicio.", ".$cantidad.")";
								$stmt = $this->conn->Prepare($sql);
								$stmt->execute();
							}
						}
					}
					break;
				//Eliminará un nuevo detalle
				case 'delete':
					foreach ($objeto as $etiqueta => $obj) {
						if($etiqueta == 'cotizacion_detalle') {
							foreach ($obj as $servicio) {
								$sql = "DELETE FROM cotizacion_detalle WHERE id_cotizacion = :ID and id_servicio = :IDservicio";
								$stmt = $this->conn->Prepare($sql);
								$stmt->bindParam(':ID', $id, PDO::PARAM_INT);
								$stmt->bindParam(':IDservicio', $servicio->id_servicio, PDO::PARAM_INT);
								$stmt->execute();
							}
						}
					}
					break;
				//Actualizará un nuevo detalle
				case 'update':
					foreach ($objeto as $etiqueta => $obj) {
						if($etiqueta == 'cotizacion_detalle') {
							foreach ($obj as $servicio) {
								$id_servicio = $servicio->id_servicio;
								$cantidad = $servicio->cantidad;
								$sql = "update cotizacion_detalle set cantidad=".$cantidad." where id_cotizacion=".$id." and id_servicio=".$id_servicio;
								$stmt = $this->conn->Prepare($sql);
								$stmt->execute();
							}
						}
					}
					break;
			}
			$message['status'] = "OK";
			$message['message'] = "El registro se actualizó correctamente";
			$message = json_encode($message);
			http_response_code(200);
			echo $message;
    }

    /**Metodo para eliminar un servicio**/
    function APIdelete($id)
    {
      $this->conn->beginTransaction();
      //Elimino del detalle cotizacion
      $sql = "DELETE FROM cotizacion_detalle WHERE id_cotizacion = :id_cotizacion";
			$stmt = $this->conn->Prepare($sql);
			$stmt->bindParam(':id_cotizacion', $id, PDO::PARAM_INT);
			$stmt->execute();

			$sql = "DELETE FROM cotizacion WHERE id_cotizacion = :id_cotizacion";
			$stmt = $this->conn->Prepare($sql);
			$stmt->bindParam(':id_cotizacion', $id, PDO::PARAM_INT);
			$stmt->execute();

			$this->conn->commit();
			$message['status'] = "OK";
			$message['message'] = "El registro se eliminó correctamente";
			$message = json_encode($message);
			http_response_code(200);
			echo $message;
    }

    /**Debe ser capaz de traer los servicios y opcional */
    function APIviewAll()
    {
      $sql = "select * from cotizacion";
			$cotizacion = $this->fetchAll($sql);

			for ($i=0; $i < sizeof($cotizacion); $i++)
      {
				$sql = "select cd.id_servicio, s.servicio, cantidad
                from cotizacion_detalle cd join servicio s using(id_servicio)
                where cd.id_cotizacion=".$cotizacion[$i]['id_cotizacion'];
				$cotizacion_detalle = $this->fetchAll($sql);
				$cotizacion[$i]['cotizacion_detalle'] = $cotizacion_detalle;
			}
			$cotizacion = json_encode($cotizacion);
			echo $cotizacion;
    }

    /**Obtiene Un servicio del id que se indique
    type           param            Description
    *int           $id             Recibe el id del servicio*/
    function APIviewOne($id)
    {
      $sql_cotizacion = "select * from cotizacion where id_cotizacion=".$id;
			$sql_detalle = "select cd.id_servicio, s.servicio, cantidad
                      from cotizacion_detalle cd join servicio s using(id_servicio)
                      where cd.id_cotizacion=".$id;

			$cotizaciones = $this->fetchAll($sql_cotizacion);
			$cotizaciones_detalle = $this->fetchAll($sql_detalle);
			$cotizacion = array();
			$cotizacion['cotizacion'] = $cotizaciones[0];
			$cotizacion['cotizacion_detalle'] = $cotizaciones_detalle;
			$cotizacion = json_encode($cotizacion);
			echo $cotizacion;
    }

  } // Fin de clase

  $web=new ContizacionControl;
  $web->API();

 ?>
