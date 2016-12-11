<?php
include('../hotel_class.php');

/**Clase: Login
	autor: Daniel
	version : 1.0
	fecha : 2016-11-01
	Descripcion:Esta clase es encargada de verificar el inicio de
	sesión.*/
class Login extends Chotel
{
	/***********************************************************************************
						METODO PARA CREAR UNA SESION PARA EL USUARIO
			parametro 					tipo 	 		Descripcion
	  		@param $email  			   String 		  email del usuario
	  		@param $contrasena  	   String 		  Contraseña del usuario
	**********************************************************************************/
	function newlogin($email,$contrasena)
	{
	   $flag="false";
	   $contrasena=md5($contrasena); // Encripto contraseña

	   /**Realizo una consulta para revisar si el usuario existe */
	   $sql="SELECT * FROM usuario where email='$email' and contrasena='$contrasena'";
	   $resultado=array();
	   $resultado=$this->fetchAll($sql);

	   //Hay alguna coincidencia?
	   if(isset($resultado[0]))
	   {
	   	$flag="true";

	   	 // Quitamos el campo contraseña
	   	 unset($resultado[0]['contrasena']);

	   	 /**Se usa la superGlobal $_SESSION
	   	 y se agregan los campos de email y usuario*/
	   	 $_SESSION['email']=$resultado[0]['email'];
	   	 $_SESSION['id_usuario']=$resultado[0]['id_usuario'];
	   	 $_SESSION['validado']=true;


	   	 //Se realiza una consulta para conocer los roles de los usuarios
	   	$consulta_rol="select rol from rol inner join usuario_rol on rol.id_rol=usuario_rol.id_rol inner join usuario on usuario.id_usuario=usuario_rol.id_usuario where email='$email'";

	   	 $roles=$this->fetchAll($consulta_rol);
	   	 $_SESSION['roles']=$roles; // Asigno el resultado a la superGobal
	   	 header('Location: index.php'); // Envio a la pagina principal
	   }
	   else
	   {
	   	 $this->logout(); //finaliza la sesion
	   }
	  return $flag;
	} ////////////////////Fin de la funcion ///////////////////////////////////


	/***********************************************************************************
						DESTRUYE LA SESION  ACTUAL (LA SUPERGLOBAL)
			parametro 					tipo 	 		Descripcion
	**********************************************************************************/
	function logout()
	{
		session_destroy(); //destruye la sesion
	}////////////////////Fin de la funcion ///////////////////////////////////


	/***********************************************************************************
		Se encarga de generar el mensaje que se enviara al correo electronico del usuario
		parametro 					tipo 	 		Descripcion
		$email 					   String 			el correo a donde se mandara la clave
		$cadena 				   String 			clave encriptada para la recuperacion de la cuenta
	**********************************************************************************/
	function forgotPassword($email,$cadena)
	{
		$mail             = new PHPMailer();  // Crea un objeto de la clase phpMailes
		//$body             = file_get_contents('contents.html');
		//$body             = eregi_replace("[\]",'',$body);
		$mail->IsSMTP(); // metodo que indica el protocolo a utilizar

		// habilita  el debug de informacion para SMTP
	   	// 1 = Errores y mensahes
	   	// 2 = Solo mensajes
		//$mail->SMTPDebug  = 2;

		$mail->SMTPAuth   = true; // Habilita autenticacion SMTP
		$mail->SMTPSecure = "tls";// sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";// sets GMAIL as the SMTP server
		$mail->Port       = 587;// set the SMTP port for the GMAIL server
		$mail->Username   = "satanas666itc@gmail.com"; // GMAIL username
		$mail->Password   = "admin120324"; // GMAIL password
		$mail->SetFrom('satanas666itc@gmail.com', 'Daniel');
		$mail->Subject    = "Recuperacion de Password Hotel Dumort";

		// Mensaje para nuestro usuario
		$body="
		<h1>Recuperacion de la cuenta</h1>
		<p>
			Querido usuario, usted ha solicitado una recuperacion de contraseña, porfavor
			presione el siguiente vinculo:
		</p>

		<br>
		<br>
		<a href='http://www.hotelDumort.com:8081/hotel_proyect/admin/forgot.php?accion=recuperar&clave=$cadena'> Recuperar Contraseña </a>
		<br>
		<br>
		Este vinculo tendra vigencia de dos dias a partir de la recepcion de este e-mail
        atte: Administración Hotel Dumort";

		$mail->MsgHTML($body);
		$address = $email;
		$mail->AddAddress($address, "Usuario Cpweb");

		if(!$mail->Send()) {
		  // echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		  // echo "Message sent!";
		}
	} // fin del metodo

} // FIN DE LA CLASE
?>
