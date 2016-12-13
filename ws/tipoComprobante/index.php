<?php
  include("../../cp_web_class.php");
  /*rols Web*/
  class controlRoles extends Cpweb
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
                //echo "aqui voy a a consultar el rol
                $this-> APIviewOne($_GET['id']);
            }else {
                //echo "Aqui voy a Mostrar todos los rols";
                $this-> APIviewAll();
            }
        break;
        case 'PUT':
          $this-> APIupdate($_GET['id']);
          //echo "Aqui voy a acutualizar el rol".$_GET['id'];
        break;

        case'DELETE':
          //echo "Aqui voy a Eliminar el rol".$_GET['id'];
           $this->APIdelete($_GET['id']);
        break;
      }
    } // Fin del metodo

    /**Metodo para insertar un rol*/
    function APIinsert()
    {
      //protocolo de entrada de php
      $objeto=json_decode(file_get_contents('php://input'));
      foreach ($objeto as $rol)
      {
          $SQL="INSERT INTO rol (rol) values (:rol)";
          $stmt = $this->conn->Prepare($SQL);
          $stmt->bindParam(':rol', $rol->rol, PDO::PARAM_STR);
          $stmt->Execute();
      }

      http_response_code(200);
      $message['STATUS']='OK';
      $message['MESSAGE']='EL REGISTRO SE INSERTO CORRECTAMENTE';
      $message=json_encode($message);
      echo $message;


    } // FIN DEL METODO


    function APIupdate($id)
    {
      //protocolo de entrada de php
      $obj=json_decode(file_get_contents('php://input'));
		foreach ($obj as $rol)
		{
			$sql="update rol set rol=:rol where id_rol=:id_rol";
			$stmt= $this->conn->prepare($sql);
      $stmt->bindParam(':rol', $rol->rol);
			$stmt->bindParam(':id_rol', $id, PDO::PARAM_INT);
			$stmt->execute();
		}
  		$message['status']='OK';
  		$message['message']="El registro se ha actualizado adecuadamente";
  		$message=json_encode($message);
  		http_response_code(200);
  		echo $message;
    }

    /**Metodo para eliminar un Estado**/
    function APIdelete($id)
    {
      $sql="delete from rol where id_rol= :id_rol";
      $stmt= $this->conn->prepare($sql);
      $stmt->bindParam(':id_rol', $id, PDO::PARAM_INT);
      $stmt->execute();
      $message['status']='OK';
      $message['message']="El registro se elimino adecuadamente";
      $message=json_encode($message);
      http_response_code(200);
      echo $message;
    }

    /**Debe ser capaz de traer los rols y opcional */
    function APIviewAll()
    {
      $sql_rol="select * from rol ";
      $rols=$this->fetchAll($sql_rol);
      $rols=json_encode($rols);
      echo $rols;

    }

    /**Obtiene Un rol del id que se indique
    type           param            Description
    *int           $id             Recibe el id del rol*/
    function APIviewOne($id)
    {
      $sql="select * from rol where id_rol=".$id;
		  $rol=$this->fetchAll($sql);
      $rol=json_encode($rol,JSON_PRETTY_PRINT);
      echo($rol);
    }

  } // Fin de clase

  $web=new controlRoles;
  $web->API();

 ?>
