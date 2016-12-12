<?php
	/**Formulario que muestra la cotizacion a un cliente  */
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
		//Genera una nueva cotizacion
		case 'nuevo':
		if( isset($_POST))
		{
			//Valida si es un numero
			if(is_numeric($_POST['cantidad']))
			{

				$id_servicio=$_POST['id_servicio'];
				$cantidad=$_POST['cantidad'];
				$flag_cotizacion=true;
				$posArray=0;
				$sql="select servicio from servicio where id_servicio=".$id_servicio;
				$servicio=$web->fetchAll($sql);

				//Existe el campo cotizacion
				if(isset($_SESSION['cotizacion']))
				{
					// Obtengo cotizaciones
					$cotizaciones=$_SESSION['cotizacion'];

					for ($i=0; $i < sizeof($cotizaciones); $i++)
						{
							if($cotizaciones[$i]['id_servicio']==$id_servicio)
							{
								$cotizaciones[$i]['cantidad']=$cotizaciones[$i]['cantidad']+$cantidad;
								$flag_cotizacion=false;
							}
							$posArray++;  //leo el siguiente rgistro
						}
					if($flag_cotizacion==true)
					{
						$cotizaciones[$posArray]['id_servicio']=$id_servicio;
						$cotizaciones[$posArray]['cantidad']=$cantidad;
						$cotizaciones[$posArray]['servicio']=$servicio[0]["servicio"];
					}
				}
				else
				{
					// Si no, Asigna la cotizacion
					$cotizaciones[0]['id_servicio']=$id_servicio;
					$cotizaciones[0]['cantidad']=$cantidad;
					$cotizaciones[0]['servicio']=$servicio[0]['servicio'];
				}
				//Asigno a la superGlobal session
				$_SESSION['cotizacion']=$cotizaciones;
				header("Location: cotizacion.php");

			}
			$templates->assign('mensaje',"Realiza una cotizacion");

		}

			break;

			case'terminar':
			if (isset($_SESSION['cotizacion']))
			{
					$cotizaciones=$_SESSION['cotizacion'];

					if(isset($_POST))
					{
						//Validar el cliente y su cotizacion
						$id_cliente=$_POST['id_cliente'];
						$fecha= date('Y-m-j');

						//Primero inserta la cotizacion
						$web->conn->beginTransaction();
						$sql="insert into cotizacion (id_cliente,fecha) values ($id_cliente,'$fecha')";
						$web->conn->exec($sql);


						//Obtiene el ultimo id insertado
						$sql="select id_cotizacion from cotizacion where id_cliente=$id_cliente order by id_cotizacion desc";
						$datos=$web->getAll($sql);
						$id_cotizacion=$datos[0]["id_cotizacion"];


						for ($i=0; $i <sizeof($cotizaciones) ; $i++)
						{
							$id_servicio=$cotizaciones[$i]["id_servicio"];
							$cantidad=$cotizaciones[$i]["cantidad"];
							$sql="insert into cotizacion_detalle values($id_cotizacion,$id_servicio,$cantidad)";
							$web->conn->exec($sql);
						}

						$web->conn->commit();
						die("termine");

						unset($_SESSION['cotizacion']);

						//Crear pagina de inicio los clientes

					}
			}
			break;

		default:

			$combo_servicios=$web->showList("select id_servicio, servicio from servicio");
			$templates->assign('combo_servicios',$combo_servicios);
			$sql="select id_cliente, razon_social from cliente where id_usuario=".$_SESSION["id_usuario"];


			$combo_clientes=$web->showList($sql);


			if (isset($_SESSION['cotizacion']))
			{
				$cotizaciones=$_SESSION['cotizacion'];
				$templates->assign('cotizacion',$cotizaciones);
			}
			else{
					$templates->assign('mensaje',"Realiza una cotizacion");
					$templates->assign('cotizacion',array());
			}

			$templates->assign('combo_cliente',$combo_clientes);
			$templates->assign('titulo','Generar Nueva Cotizacion');
			$templates->assign('header',$header);
			$templates->display('cotizacion.html');
			break;
	}
 ?>
