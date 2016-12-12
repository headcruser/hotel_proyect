<?php
	/**Formulario que construye un reporte de los usuarios*/
	include('../hotel_class.php');

	$web=new Chotel; //Crea un objeto de la clase principal
	$privilegio=null;
	$templates=$web->template();
	$accion=null;
	//Obtiene la accion seleccionada por el usuario
	if( isset($_GET['accion']))
	{
		$accion=$_GET['accion'];
	}


//	Validacion para saber que tipo de header construir
	 if(isset($_SESSION))
	 {
	 	$privilegio=$web->obtenerRolSesion();
	 	$header=$web->Privilegiosheader($privilegio);
	 	$id_usuario=$_SESSION['id_usuario'];
		 switch ($accion )
		 {
		 	case 'imprimir':
				//Muestra el contenido del archivo PDF
				//Consultas
				//obtengo los datos del cliente
				$sql_cliente="select id_cliente from cliente where id_usuario =".$id_usuario;
				$cliente=$web->fetchAll($sql_cliente);
				$id_cliente=$cliente[0]['id_cliente'];

				$detalle =$web-> fetchAll("select * from ListaReserva where id_cliente=$id_cliente");
				$id_reserva=$detalle[0]['id_reserva'];

				//obtengo los consumos
				$sql_consumos="select * from ListaConsumos where id_reserva =".$id_reserva;
				$consumos=$web->fetchAll($sql_consumos);

				//Total
				$arraytotal=$web->fetchAll("select sum(subTotal) as total from ListaConsumos");
				$total=$arraytotal[0]['total'];

				$templates->assign('detalle',$detalle);
				$templates->assign('consumos',$consumos);
				$templates->assign('total',$total);
				$reporte=$templates->fetch('PDF/facturaClientes/factura_pdf.html');

				require_once(PATH.'/lib/html2pdf/vendor/autoload.php');
				$html2pdf = new HTML2PDF('P', 'A4', 'fr','true','UTF-8');
				$html2pdf->setDefaultFont('Arial');
				$html2pdf->writeHTML($reporte, null);
				$html2pdf->Output('factura_cliente.pdf');
				//echo $reporte;
				 die();
		 		break;

		 	default:
		 		break;
		 }

		$detalle=$web->fetchAll("select * from cliente where id_usuario=$id_usuario");
		$templates->assign('detalle',$detalle);
		$templates->assign('header',$header);
		$templates->display('facturacion.html');

	 }

 ?>
