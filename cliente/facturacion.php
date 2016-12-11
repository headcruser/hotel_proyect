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
				$id_cliente=$_GET['id_cliente'];

				//Consultas
				$detalle =$web-> fetchAll("select * from facturacion");

				$templates->assign('detalle',$detalle);
	      		$templates->assign('header',$header);
				$reporte=$templates->fetch('PDF/facturaClientes/factura_pdf.html');

				require_once(PATH.'/lib/html2pdf/vendor/autoload.php');
				$html2pdf = new HTML2PDF('P', 'A4', 'fr','true','UTF-8');
				$html2pdf->setDefaultFont('Arial');
				$html2pdf->writeHTML($reporte, null);
				$html2pdf->Output('cotizacion.pdf');
				//echo $reporte;
				 die();
		 		break;

		 	default:
		 		break;
		 }

		$detalle=$web->fetchAll("select * from cliente");
		$templates->assign('detalle',$detalle);
		$templates->assign('header',$header);
		$templates->display('facturacion.html');

	 }

 ?>
