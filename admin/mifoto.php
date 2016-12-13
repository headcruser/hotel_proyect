<?php
  include('../hotel_class.php');
  $web=new Chotel;

  // Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
   {
     //Obtiene los privilegios de la sesion
    //  $privilegio=$web->obtenerRolSesion();
    //  $web->checarAcceso($privilegio); // policia

    $SQL="select foto from usuario where id_usuario=".$_SESSION["id_usuario"];
    $statement=$web->conDB->Prepare($SQL);
    $statement->execute();
    $statement->bindColumn(1,$image,PDO::PARAM_LOB);
    $statement->fetch(PDO::FETCH_BOUND);
    header("Content-Type: image");
    print_r($image);
  }
 ?>
