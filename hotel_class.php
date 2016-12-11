<?php

// Iniciamos la sesion
session_start();

//Importa la libreria de smarty
require_once('lib/smarty/Smarty.class.php');

//Libreria para el correo electronico
require_once('lib/phpmailer/PHPMailerAutoload.php');

// Incluye el archivo de confifuracion
include ("config/configuration.php");


/**
*Clase: Chotel
*@autor Matinez Sierra Daniel
*version : 0.1
*fecha : 2016-09-21*/
class Chotel
{

  /**************************************************************/
  //              VARIABLES DE LA CLASE
  /**************************************************************/
  var $conDB=null;
  var $cliente=null;
  var $tabla=null;

  /***************************************************************
                    CONSTRUCTOR DE LA CLASE
  ****************************************************************/
  function __construct()
  {
    $this->conexion();
  }

  /**************************************************************
                CONEXION CON LA BASE DE DATOS
  ***************************************************************/
	 function conexion()
	 {
		$this->conDB = new PDO(DB_ENGINE.':host='.DB_IP.';dbname='.DB_NAME, DB_USER, DB_PASS);
	 } //Fin de la funcion


  /*****************************************************************
            METODO PARA ESTABLECER LA TABLA A MANIPULAR
      parametro           tipo      Descripcion
        @param $tabla          String       Nombre de la tabla
  *****************************************************************/
  function setTabla($tabla)
  {
    $this->tabla=$tabla;
  } // Fin de la funcion


  /****************************************************************
            METODO PARA OBTENER EL NOMBRE DE LA TABLA
      parametro           tipo      Descripcion
  ------------------------------------------------------------------
  Valores de retorno
  @return Regresa el nombre de la tabla.
  ****************************************************************/
  function getTabla()
  {
    return $this->tabla;
  } // fin de la funcion




/*******************************************************************
          METODO PARA OBTENER UN ARREGLO A PARTIR DE UNA CONSULTA

  parametro           tipo      Descripcion
  @Param $query           String      Consulta Sql a realizar
  -----------------------------------------------------------------
  Valores de retorno
  @return Regresa Un arreglo asosiativo con la informacion solicitada.
*******************************************************************/

  function getAll($p_query)
  {
    //Arreglo Vacio
    $datos=array();

    foreach($this->conDB->query($p_query) as $fila) {
      array_push($datos,$fila );
    }
    return $datos;
  }


/******************************************************************
    Funcion para obtener un arreglo asociativo con el query correspondiente
  parametro           tipo      Descripcion
  @Param $query         String      Consulta Sql a realizar
  -----------------------------------------------------------------
  Valores de retorno
  @return Regresa Un arreglo asosiativo con la informacion solicitada.
  **********************************************************/

  function fetchAll($query)
 	{
 		$statement=$this->conDB->Prepare($query);
 		$statement->Execute();
 		$datos=$statement->FetchAll(PDO::FETCH_ASSOC);
 		return $datos;
  }



	/****************************************************************
          Metodo encargado de inicializar las plantillas de smaty
  -----------------------------------------------------------------
  parametro           tipo          Descripcion
  -----------------------------------------------------------------
  Valores de retorno
  @return Regresa la plantilla de smarty ya construida
  ****************************************************************/
	function template()
	{
		$smarty=new Smarty();
		$smarty->setTemplateDir(TEMPLATE);
		$smarty->setCompileDir(TEMPLATE_c);
		$smarty->setConfigDir(CONFIGS);
		$smarty->setCacheDir(CACHE);
		return $smarty;
	}


  /****************************************************************
      Funcion para realizar un elemento dinamico retornando la plantilla
      para poder ser implementada.
  -----------------------------------------------------------------
  parametro         tipo        Descripcion
  @param $sql       String      consulta a realizar
  @param $selected    int       elemento a seleccionar
  -----------------------------------------------------------------
  Valores de retorno
  @return Regresa una plantilla de smarty
  ****************************************************************/

  function showList ($sql,$selected=null)
  {
    $datos=$this->getAll($sql); //Arreglo asosiativo //pero necesitamos el indexado
    $nombresCol=array_keys($datos[0]);  //Obtiene el identificador del arreglo en la primera posicion
    $template=$this->template();  //llama a la libreria de smarty
    $template->assign('datos',$datos);  // envio de parametros
    $template->assign('selected',$selected);  //enviamos el parametro del combo box
    $template->assign('datos',$datos);
    $template->assign('id',$nombresCol[0]); //Envia el nombre de las columnas
    return $template->fetch('componentes/select.component.html');
  } // Fin de la funcion


  /****************************************************************
            Funcion para realizar insert Generico
  parametro           tipo          Descripcion
  @param $p_array       Array       Elementos a insertar en la tabla

  *****************************************************************/

  function insert($p_array)
  {

    unset($p_array['enviar']);
    $nombresCol=$this->getNombresColumnas($p_array);
    $columnas[0]=$this->getColumnas($p_array);
    $columnas[1]=str_replace(',',',:',$columnas[0]);
    $columnas[1]=":".$columnas[1];

    $query="INSERT INTO ".$this->getTabla()."(".$columnas[0].") values(".$columnas[1].")";
    $stmt=$this->conDB->Prepare($query);

    for($i=0; $i<sizeof($nombresCol); $i++)
    {
      $stmt->bindParam(':'.$nombresCol[$i], $p_array[$nombresCol[$i]]);
    }
    $this->verifyQuery($stmt);
  }// Fin de la funcion


  /****************************************************************
            Funcion para realizar Update Generico
  parametro           tipo          Descripcion
  @param $p_array     Array   Elementos a actualizar de la tabla
  @param $condicion   Array       Elementos del where
  ***************************************************************/

  function update($p_array,$condicion=null)
  {
    unset($p_array['enviar']);
    $nombresCol=$this->getNombresColumnas($p_array);
    $where=null;

    if(!empty($condicion) )
    {
      $where="where ";
      $nombres_columnas_where=array_keys($condicion);

      for ($i=0; $i <sizeof($nombres_columnas_where) ; $i++)
      {
        $where.=$nombres_columnas_where[$i];
        $where.='=:'.$nombres_columnas_where[$i];

        if($i<sizeof($nombres_columnas_where)-1)
        {
          $where.=" and ";
        }
      }
    }


    $columnas=$this->getColumnas($p_array,"update");
    $SQL="UPDATE ".$this->getTabla()." set ".$columnas." ".$where;
    $statement=$this->conDB->Prepare($SQL);

    for($i=0; $i<sizeof($nombresCol); $i++)
    {
      $statement->bindParam(':'.$nombresCol[$i], $p_array[$nombresCol[$i]]);
    }

    $this->verifyQuery($statement);
  } // Fin de la funcion



  /***************************************************************
  Funcion que obtiene los nombres de las columnas de una tabla
  parametro           tipo          Descripcion
  @param $p_datos       Array       Elementos de la tabla
  @param $condicion       String      Indica si es update o insert
  ----------------------------------------------------------------
  Valores de retorno
  @return Regresa un arreglo con las columnas  de una tabla

  ****************************************************************/
  function getColumnas($p_datos, $accion=null)
  {
    $col="";
    $nombres_columnas=$this->getNombresColumnas($p_datos);

    for($i=0; $i<sizeof($nombres_columnas); $i++)
    {
      $col.=$nombres_columnas[$i];

      if($accion=="update")
        $col.="=:".$nombres_columnas[$i];

      if($i<sizeof($nombres_columnas)-1)
        $col.=",";
    }
    return $col;
  } // Fin de la funcion


  /****************************************************************
  Funcion para obtener los nombres de la columna de una tabla

  parametro           tipo          Descripcion
  @param $p_array       Array         Arreglo con las columnas
  ----------------------------------------------------------------
  Valores de retorno
  @return Regresa un arreglo con los nombres de las columnas.
  ****************************************************************/

  function getNombresColumnas($p_array)
  {
    return array_keys($p_array);
  } // Fin de la funcion


  /****************************************************************
  Funcion que realiza  y verfica la ejecucion de un query
  parametro           tipo          Descripcion
  @param $p_statement     Statement       comando que se quiere ejecutar

  ****************************************************************/
  public function verifyQuery($p_statement)
  {
    if(!$p_statement)
      die( $this->conDB->errorInfo() );
    else
      $p_statement->Execute();
  } //Fin de la funcion


  /***********************************************************************************
  Metodo que rernoaen formato html el valor o resultado de una consulta en html
  parametro           tipo          Descripcion
  @param $p_consulta        String      La consulta a convertir

  **********************************************************************************/
  function getQueryHtml($p_consulta)
  {
    $datos=$this->fetchAll($p_consulta); //Arreglo asociativo
    $campos=$this->getNombresColumnas($datos[0]);
    $template=$this->template();  //llama a la libreria de smarty
    $template->assign('datos',$datos);
    $template->assign('campos',$campos);
    return $template->fetch('componentes/query2html.component.html');
  }


  /***********************************************************************************
  Revisa el rol del usuario que se ha logeado en el sistema
  parametro           tipo          Descripcion
  @param $rol             String      El rol del usuario que entro al sistema

  **********************************************************************************/
  function checarAcceso($rol=null)
  	{
  		$data = $_SESSION;
        if(isset($data['validado'])) 
        {
          if($data['validado'])
  				{
  					if(!$this->isExistRol($rol))
  					{
  						header('Location: login.php');
  					}
          }
  				else{
            header('Location: login.php');
          }
        }else{
          header('Location: login.php');
        }
  	} ////////////////////////////  Fin del metodo /////////////////////////////////////

    /***********************************************************************************
	Indica si el rol Especificado Existe
	parametro 					tipo 					Descripcion
	@param $p_consulta 	      String 			Privilegio asignado a la barra
	@return Regresa un valor booleano 1 si existe y null si no existe

	**********************************************************************************/
	function isExistRol($rol)
	{
		$flag=false;
		$roles=$this->getRoles();
		if(isset($roles))
		{
			for ($i=0; $i < count($roles); $i++)
			{
				if($roles[$i]['rol'] == $rol)
				{
					$flag = true;
					break;
				}
			}
		}
		return $flag;
	}////////////////////////////  Fin del metodo /////////////////////////////////////

  /***********************************************************************************
  	Obtiene los roles disponibles
  	parametro 					tipo 					Descripcion
  	@param $p_consulta 	      String 			Privilegio asignado a la barra

  	**********************************************************************************/
  	function getRoles()
  	{
  			return $_SESSION['roles'];
  	}////////////////////////////  Fin del metodo /////////////////////////////////////


	function obtenerRolSesion()
	{
		$privilegio=null;
		$rol=$this->getRolesUsers();

		if(isset($rol))
		{
			for ($i=0; $i <sizeof($rol) ; $i++)
			{
				if($rol[$i]['rol']!='login')
				{
					 $privilegio=$rol[$i]['rol'];
					 break;
				}
			}
		}
		return $privilegio;
	}////////////////////////////  Fin del metodo /////////////////////////////////////

    /***********************************************************************************
      Indica si el rol Especificado Existe
      parametro 					tipo 					Descripcion
      @param $p_consulta 	      String 			Privilegio asignado a la barra
    **********************************************************************************/
    function getRolesUsers()
    {
      if (isset($_SESSION)) {
        return $_SESSION['roles'];
      }else{
        return array();
      }
    }////////////////////////////  Fin del metodo /////////////////////////////////////


  /***********************************************************************************
  Construye un header segun los privilegios Asignados
  parametro           tipo          Descripcion
  @param $p_consulta        String      Privilegio asignado a la barra

  **********************************************************************************/
  function Privilegiosheader($privilegio)
  {
    $template=$this->template();  //llama a la libreria de smarty
    $template->assign('privilegio',$privilegio);
    return $template->fetch('componentes/header_privilegios.html');

  }////////////////////////////  Fin del metodo /////////////////////////////////////

} // Fin de la clase


?>
