<?php
	/**Formulario que muestra la consumo a un cliente  */
	include('../hotel_class.php'); // Incluye  al clase principal
	$web=new Chotel; //Crea un objeto

	//Elementos que inician vacios
	$accion=null;
	$privilegio=null;
	$templates=$web->template();


	// Validacion para saber que tipo de header construir
	 if(isset($_SESSION)){
	 	$privilegio=$_SESSION['roles'][0]['rol'];
	 }

	$web->checarAcceso($privilegio); // policia
	$header=$web->Privilegiosheader($privilegio); //Crea el header

	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion'])){
		$accion=$_GET['accion'];
	}
	switch ($accion)
	{
		//Genera una nueva consumo
		case 'nuevo':
		if( isset($_POST))
		{
			//Valida si es un numero
			if(is_numeric($_POST['cantidad']))
			{
				$id_producto=$_POST['id_producto'];
				$cantidad=$_POST['cantidad'];
				$precioVenta=$_POST['precioVenta'];
				$flag_consumo=true;
				$posArray=0;
				$sql="select nombre from producto where id_producto=".$id_producto;
				$producto=$web->fetchAll($sql);

				//Existe el campo consumo
				if(isset($_SESSION['consumo']))
				{
					// Obtengo consumo
					$consumo=$_SESSION['consumo'];

					for ($i=0; $i < sizeof($consumo); $i++)
						{
							if($consumo[$i]['id_producto']==$id_producto)
							{
								$consumo[$i]['cantidad']=$consumo[$i]['cantidad']+$cantidad;
								$consumo[$i]['precioVenta']=$consumo[$i]['precioVenta']+$precioVenta;
								$flag_consumo=false;
							}
							$posArray++;  //leo el siguiente registro
						}
					if($flag_consumo==true)
					{
						$consumo[$posArray]['id_producto']=$id_producto;
						$consumo[$posArray]['cantidad']=$cantidad;
						$consumo[$posArray]['precioVenta']=$precioVenta;
						$consumo[$posArray]['producto']=$producto[0]["producto"];
					}
				}
				else
				{
					// Si no, Asigna el consumo
					$consumo[0]['id_producto']=$id_producto;
					$consumo[0]['cantidad']=$cantidad;
					$consumo[0]['precioVenta']=$precioVenta;
					$consumo[0]['producto']=$producto[0]['nombre'];
				}

				//Asigno a la superGlobal session
				$_SESSION['consumo']=$consumo;
				header("Location: consumo.php");

			}
			$templates->assign('mensaje',"Realiza una consumo");

		}

			break;

			case'terminar':
			if (isset($_SESSION['consumo']))
			{
					$consumo=$_SESSION['consumo'];
					$id_usuario=$_SESSION['id_usuario']; // necesito el usuario que se logeo

					//obtengo los datos del cliente
					$sql_cliente="select id_cliente from cliente where id_usuario =".$id_usuario;
					$cliente=$web->fetchAll($sql_cliente);
					$id_cliente=$cliente[0]['id_cliente'];

					$sql_reserva="select * from reserva where id_cliente=$id_cliente";
					$reserva=$web->fetchAll($sql_reserva);
					$id_reserva=$reserva[0]['id_reserva'];
					// //Primero inserta la consumo

					for ($i=0; $i <sizeof($consumo) ; $i++)
					{
						$id_producto=$consumo[$i]["id_producto"];
						$cantidad=$consumo[$i]["cantidad"];
						$precioVenta=$consumo[$i]["precioVenta"];
						$sql="insert into consumo (id_reserva,id_producto,cantidad,precioVenta)
						values($id_reserva,$id_producto,$cantidad,$precioVenta)";
						$web->conDB->exec($sql);
					}
					$web->conDB->commit();
					//Crear pagina de inicio los clientes
					unset($_SESSION['consumo']);
			}
			break;

	}

		$combo_productos=$web->showList("select id_producto, nombre from producto");
		$templates->assign('combo_productos',$combo_productos);


		if (isset($_SESSION['consumo']))
		{
			$consumo=$_SESSION['consumo'];
			$templates->assign('consumo',$consumo);
		}
		else{
				$templates->assign('mensaje',"Realiza un consumo");
				$templates->assign('consumo',array());
		}

		$templates->assign('titulo','Generar un nuevo Consumo');
		$templates->assign('header',$header);
		$templates->display('cliente/consumo.html');
 ?>
