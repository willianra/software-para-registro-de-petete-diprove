<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Petete
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($clase,$marca,$tipo,$color,$modelo,$origen,$vehiculo1,$vehiculo2,$vehiculo3,$vehiculo4,$chasis,$plaqueta,$motor,$vin,$otros)
	{
		$sql="INSERT INTO petete (clase,marca,tipo,color,modelo,origen,vehiculo1,vehiculo2,vehiculo3,vehiculo4,chasis,plaqueta,motor,vin,otros,condicion)
		VALUES ('$clase','$marca','$tipo','$color','$modelo','$origen','$vehiculo1','$vehiculo2','$vehiculo3','$vehiculo4','$chasis','$plaqueta','$motor','$vin','$otros','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($idpetete,$clase,$marca,$tipo,$color,$modelo,$origen,$vehiculo1,$vehiculo2,$vehiculo3,$vehiculo4,$chasis,$plaqueta,$motor,$vin,$otros)
	{
		$sql="UPDATE petete SET idpetete='$idpetete',clase='$clase',marca='$marca',tipo='$tipo',color='$color',modelo='$modelo',origen='$origen',vehiculo1='$vehiculo1',vehiculo2='$vehiculo2',vehiculo3='$vehiculo3',vehiculo4='$vehiculo4',chasis='$chasis',plaqueta='$plaqueta',motor='$motor',vin='$vin',otros='$otros' WHERE idpetete='$idpetete'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar registros
	public function desactivar($idpetete)
	{
		$sql="UPDATE petete SET condicion='0' WHERE idpetete='$idpetete'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($idpetete)
	{
		$sql="UPDATE petete SET condicion='1' WHERE idpetete='$idpetete'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idpetete)
	{
		$sql="SELECT * FROM petete WHERE idpetete='$idpetete'";
		return ejecutarConsultaSimpleFila($sql);
	}
	public function listarpetete($idpetete)
	{
		$sql="SELECT * FROM petete WHERE idpetete='$idpetete'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * from petete   order by idpetete desc";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros activos
	public function listarActivos()
	{
		$sql="SELECT a.idpetete,a.idpetete,c.marca as categoria,a.clase,a.marca,a.tipo,a.color,a.modelo,a.condicion FROM petete a INNER JOIN categoria c ON a.idpetete=c.idpetete WHERE a.condicion='1'";
		return ejecutarConsulta($sql);		
	}

	//Implementar un método para listar los registros activos, su último precio y el tipo (vamos a unir con el último registro de la tabla detalle_ingreso)
	public function listarActivosVenta()
	{
		$sql="SELECT a.idpetete,a.idpetete,c.marca as categoria,a.clase,a.marca,a.tipo,(SELECT precio_venta FROM detalle_ingreso WHERE idpetete=a.idpetete order by iddetalle_ingreso desc limit 0,1) as precio_venta,a.color,a.modelo,a.condicion FROM petete a INNER JOIN categoria c ON a.idpetete=c.idpetete WHERE a.condicion='1'";
		return ejecutarConsulta($sql);		
	}
}

?>