<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Peteteobservado
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($clase,$marca,$tipo,$color,$modelo,$origen,$vehiculo1,$vehiculo2,$vehiculo3,$vehiculo4,$chasis,$plaqueta,$motor,$vin,$otros)
	{
		$sql="INSERT INTO peteteobservado (clase,marca,tipo,color,modelo,origen,vehiculo1,vehiculo2,vehiculo3,vehiculo4,chasis,plaqueta,motor,vin,otros,condicion)
		VALUES ('$clase','$marca','$tipo','$color','$modelo','$origen','$vehiculo1','$vehiculo2','$vehiculo3','$vehiculo4','$chasis','$plaqueta','$motor','$vin','$otros','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idpeteteobservado,$clase,$marca,$tipo,$color,$modelo,$origen,$vehiculo1,$vehiculo2,$vehiculo3,$vehiculo4,$chasis,$plaqueta,$motor,$vin,$otros)
	{
		$sql="UPDATE peteteobservado SET idpeteteobservado='$idpeteteobservado',clase='$clase',marca='$marca',tipo='$tipo',color='$color',modelo='$modelo',origen='$origen',vehiculo1='$vehiculo1',vehiculo2='$vehiculo2',vehiculo3='$vehiculo3',vehiculo4='$vehiculo4',chasis='$chasis',plaqueta='$plaqueta',motor='$motor',vin='$vin',otros='$otros' WHERE idpeteteobservado='$idpeteteobservado'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar registros
	public function desactivar($idpeteteobservado)
	{
		$sql="UPDATE peteteobservado SET condicion='0' WHERE idpeteteobservado='$idpeteteobservado'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($idpeteteobservado)
	{
		$sql="UPDATE peteteobservado SET condicion='1' WHERE idpeteteobservado='$idpeteteobservado'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idpeteteobservado)
	{
		$sql="SELECT * FROM peteteobservado WHERE idpeteteobservado='$idpeteteobservado'";
		return ejecutarConsultaSimpleFila($sql);
	}
	public function listarpeteteobservado($idpeteteobservado)
	{
		$sql="SELECT * FROM peteteobservado WHERE idpeteteobservado='$idpeteteobservado'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * from peteteobservado   order by idpeteteobservado desc";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros activos
	public function listarActivos()
	{
		$sql="SELECT a.idpeteteobservado,a.idpeteteobservado,c.marca as categoria,a.clase,a.marca,a.tipo,a.color,a.modelo,a.condicion FROM peteteobservado a INNER JOIN categoria c ON a.idpeteteobservado=c.idpeteteobservado WHERE a.condicion='1'";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros activos, su último precio y el tipo (vamos a unir con el último registro de la tabla detalle_ingreso)
	public function listarActivosVenta()
	{
		$sql="SELECT a.idpeteteobservado,a.idpeteteobservado,c.marca as categoria,a.clase,a.marca,a.tipo,(SELECT precio_venta FROM detalle_ingreso WHERE idpeteteobservado=a.idpeteteobservado order by iddetalle_ingreso desc limit 0,1) as precio_venta,a.color,a.modelo,a.condicion FROM peteteobservado a INNER JOIN categoria c ON a.idpeteteobservado=c.idpeteteobservado WHERE a.condicion='1'";
		return ejecutarConsulta($sql);		
	}
}

?>