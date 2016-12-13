<?php
	/**Formulario que muestra la cotizacion a un cliente  */
	include('../hotel_class.php'); // Incluye  al clase principal
	$web=new Chotel; //Crea un objeto

	//Elementos que inician vacios
	$accion=null;
	$privilegio=null;
	$templates=$web->template();

	// Validacion para saber que tipo de header construir
	$privilegio=$web->obtenerRolSesion();

	//Login es el usuario predeterminado
	$web->checarAcceso($privilegio);
	$header=$web->Privilegiosheader($privilegio);

	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion'])){
		$accion=$_GET['accion'];
	}

	switch ($accion)
	{
		//Genera una nueva cotizacion
		case 'nuevo':
		if( isset($_POST))
		{
			//Valida si es un numero
			if(is_numeric($_POST['costoAlojamiento']))
			{

				$id_cliente=$_POST['id_cliente'];
				$id_tipoReserva=$_POST['id_tipoReserva'];
				$id_estado=$_POST['id_estado'];
				$id_habitacion=$_POST['id_habitacion'];
				$fechaReserva=$_POST['fechaReserva'];
				$costoAlojamiento=$_POST['costoAlojamiento'];
				$flag_reservacion=true;
				$posArray=0;

				$sql_detalle="select c.nombre as cliente,tp.descripcion as tipoReserva,e.descripcion as estado,h.numero
				 							from reserva r inner join cliente c on r.id_cliente=c.id_cliente
											inner join tipoReserva tp on r.id_tipoReserva=tp.id_tipoReserva
											inner join estado e on r.id_estado=e.id_estado
											inner join habitacion h on r.id_habitacion=h.id_habitacion
											where r.id_cliente=$id_cliente";
				$detalle_Reserva=$web->fetchAll($sql_detalle);
				$empleado=$web->fetchAll("select id_empleado from empleado where id_usuario=".$_SESSION['id_usuario']);
				$id_empleado=$empleado[0]['id_empleado'];


				//Existe el campo cotizacion
				if(isset($_SESSION['reservaciones']))
				{
					// Obtengo cotizaciones
					$reservaciones=$_SESSION['reservaciones'];

					for ($i=0; $i < sizeof($reservaciones); $i++)
						{
							$posArray++;  //leo el siguiente rgistro
						}

						$reservaciones[$posArray]['fechaReserva']=$fechaReserva;
						$reservaciones[$posArray]['costoAlojamiento']=$costoAlojamiento;
						$reservaciones[$posArray]['id_habitacion']=$id_habitacion;
						$reservaciones[$posArray]['id_tipoReserva']=$id_tipoReserva;
						$reservaciones[$posArray]['id_empleado']=$id_empleado;
						$reservaciones[$posArray]['id_cliente']=$id_cliente;
						$reservaciones[$posArray]['id_estado']=$id_estado;
						$reservaciones[$posArray]['cliente']=$detalle_Reserva[0]['cliente'];
						$reservaciones[$posArray]['tipoReserva']=$detalle_Reserva[0]['tipoReserva'];
						$reservaciones[$posArray]['estado']=$detalle_Reserva[0]['estado'];
						$reservaciones[$posArray]['numero']=$detalle_Reserva[0]['numero'];
				}
				else
				{

					// Si no, Asigna la cotizacion
					$reservaciones[0]['fechaReserva']=$fechaReserva;
					$reservaciones[0]['costoAlojamiento']=$costoAlojamiento;
					$reservaciones[0]['id_habitacion']=$id_cliente;
					$reservaciones[0]['id_tipoReserva']=$id_cliente;
					$reservaciones[0]['id_empleado']=$id_empleado;
					$reservaciones[0]['id_cliente']=$id_cliente;
					$reservaciones[0]['id_estado']=$id_estado;
					$reservaciones[0]['cliente']=$detalle_Reserva[0]['cliente'];
					$reservaciones[0]['tipoReserva']=$detalle_Reserva[0]['tipoReserva'];
					$reservaciones[0]['estado']=$detalle_Reserva[0]['estado'];
					$reservaciones[0]['numero']=$detalle_Reserva[0]['numero'];

				}
				//Asigno a la superGlobal session
				$_SESSION['reservaciones']=$reservaciones;

				header("Location: reservacion.php");
			}
			$templates->assign('mensaje',"Realiza una reservación");

		}

			break;

			case'terminar':
			if (isset($_SESSION['reservaciones']))
			{
					$reservaciones=$_SESSION['reservaciones'];

						for ($i=0; $i <sizeof($reservaciones) ; $i++)
						{
							$fechaReserva=$reservaciones[$i]['fechaReserva'];
							$costoAlojamiento=$reservaciones[$i]['costoAlojamiento'];
							$id_habitacion=$reservaciones[$i]['id_habitacion'];
							$id_tipoReserva=$reservaciones[$i]['id_tipoReserva'];
							$id_empleado=$reservaciones[$i]['id_empleado'];
							$id_cliente=$reservaciones[$i]['id_cliente'];
							$id_estado=$reservaciones[$i]['id_estado'];

							$sql="insert into reserva (fechaReserva,costoAlojamiento,id_habitacion,id_tipoReserva,id_empleado,id_cliente,id_estado)
							values($fechaReserva,$costoAlojamiento,$id_habitacion,$id_tipoReserva,$id_empleado,$id_cliente,$id_estado)";
							$web->conDB->exec($sql);
						}

						unset($_SESSION['reservaciones']);

			}
			break;

		default:


			//clientes
			$combo_clientes=$web->showList("select id_cliente, nombre from cliente");
			$templates->assign('combo_clientes',$combo_clientes);

			//tipoReserva
			$combo_tipoReserva=$web->showList("select id_tipoReserva, descripcion from tipoReserva");
			$templates->assign('combo_tipoReserva',$combo_tipoReserva);

			//estado
			$combo_estado=$web->showList("select id_estado, descripcion from estado");
			$templates->assign('combo_estado',$combo_estado);

			//habitacion
			$combo_habitacion=$web->showList("select id_habitacion, numero from habitacion");
			$templates->assign('combo_habitacion',$combo_habitacion);



			if (isset($_SESSION['reservaciones']))
			{
				$reservaciones=$_SESSION['reservaciones'];
				$templates->assign('reservaciones',$reservaciones);
			}
			else{
					$templates->assign('mensaje',"Realiza una Reservacion");
					$templates->assign('reservacion',array());
			}

			// $templates->assign('combo_cliente',$combo_clientes);
			$templates->assign('titulo','Generar Reservacion');
			$templates->assign('header',$header);
			$templates->display('empleado/reservacion.html');
			break;
	}
 ?>
