<?php 
require_once "../modelos/Petete.php";


$petete=new Petete();

$idpetete=isset($_POST["idpetete"])? limpiarCadena($_POST["idpetete"]):"";
$clase=isset($_POST["clase"])? limpiarCadena($_POST["clase"]):"";
$marca=isset($_POST["marca"])? limpiarCadena($_POST["marca"]):"";
$tipo=isset($_POST["tipo"])? limpiarCadena($_POST["tipo"]):"";
$color=isset($_POST["color"])? limpiarCadena($_POST["color"]):"";
$modelo=isset($_POST["modelo"])? limpiarCadena($_POST["modelo"]):"";
$origen=isset($_POST["origen"])? limpiarCadena($_POST["origen"]):"";
$vehiculo1=isset($_POST["vehiculo1"])? limpiarCadena($_POST["vehiculo1"]):"";
$vehiculo2=isset($_POST["vehiculo2"])? limpiarCadena($_POST["vehiculo2"]):"";
$vehiculo3=isset($_POST["vehiculo3"])? limpiarCadena($_POST["vehiculo3"]):"";
$vehiculo4=isset($_POST["vehiculo4"])? limpiarCadena($_POST["vehiculo4"]):"";
$chasis=isset($_POST["chasis"])? limpiarCadena($_POST["chasis"]):"";
$plaqueta=isset($_POST["plaqueta"])? limpiarCadena($_POST["plaqueta"]):"";
$motor=isset($_POST["motor"])? limpiarCadena($_POST["motor"]):"";
$vin=isset($_POST["vin"])? limpiarCadena($_POST["vin"]):"";
$otros=isset($_POST["otros"])? limpiarCadena($_POST["otros"]):"";
switch ($_GET["op"]){
	case 'guardaryeditar':

	// $vehiculo1=SavedImage($vehiculo1,$_POST["origenactual"]);
			if (!file_exists($_FILES['vehiculo1']['tmp_name']) || !is_uploaded_file($_FILES['vehiculo1']['tmp_name'])) {
				$vehiculo1=$_POST["imagenactualvehiculo1"];
			}else{
			  $ext = explode(".", $_FILES["vehiculo1"]["name"]);
				if ($_FILES['vehiculo1']['type'] == "image/jpg" || $_FILES['vehiculo1']['type'] == "image/jpeg" || $_FILES['vehiculo1']['type'] == "image/png")
				{
					$vehiculo1 = round(microtime(true)) . '1.' . end($ext);
					move_uploaded_file($_FILES["vehiculo1"]["tmp_name"], "../files/vehiculo/" . $vehiculo1);
				}
			}
			// vehiculo2
			if (!file_exists($_FILES['vehiculo2']['tmp_name']) || !is_uploaded_file($_FILES['vehiculo2']['tmp_name'])) {
				$vehiculo2=$_POST["imagenactualvehiculo2"];
			}else{
			  $ext = explode(".", $_FILES["vehiculo2"]["name"]);
				if ($_FILES['vehiculo2']['type'] == "image/jpg" || $_FILES['vehiculo2']['type'] == "image/jpeg" || $_FILES['vehiculo2']['type'] == "image/png")
				{
					$vehiculo2 = round(microtime(true)) . '2.' . end($ext);
					move_uploaded_file($_FILES["vehiculo2"]["tmp_name"], "../files/vehiculo/" . $vehiculo2);
				}
		  }
			// vehiculo3
			if (!file_exists($_FILES['vehiculo3']['tmp_name']) || !is_uploaded_file($_FILES['vehiculo3']['tmp_name'])) {
				$vehiculo3=$_POST["imagenactualvehiculo3"];
			}else{
			  $ext = explode(".", $_FILES["vehiculo3"]["name"]);
				if ($_FILES['vehiculo3']['type'] == "image/jpg" || $_FILES['vehiculo3']['type'] == "image/jpeg" || $_FILES['vehiculo3']['type'] == "image/png")
				{
					$vehiculo3 = round(microtime(true)) . '3.' . end($ext);
					move_uploaded_file($_FILES["vehiculo3"]["tmp_name"], "../files/vehiculo/" . $vehiculo3);
				}
		  }
			// vehiculo4
			if (!file_exists($_FILES['vehiculo4']['tmp_name']) || !is_uploaded_file($_FILES['vehiculo4']['tmp_name'])) {
				$vehiculo4=$_POST["imagenactualvehiculo4"];
			}else{
			  $ext = explode(".", $_FILES["vehiculo4"]["name"]);
				if ($_FILES['vehiculo4']['type'] == "image/jpg" || $_FILES['vehiculo4']['type'] == "image/jpeg" || $_FILES['vehiculo4']['type'] == "image/png")
				{
					$vehiculo4 = round(microtime(true)) . '4.' . end($ext);
					move_uploaded_file($_FILES["vehiculo4"]["tmp_name"], "../files/vehiculo/" . $vehiculo4);
				}
		  }
			// chasis
			if (!file_exists($_FILES['chasis']['tmp_name']) || !is_uploaded_file($_FILES['chasis']['tmp_name'])) {
				$chasis=$_POST["imagenactualchasis"];
			}else{
			  $ext = explode(".", $_FILES["chasis"]["name"]);
				if ($_FILES['chasis']['type'] == "image/jpg" || $_FILES['chasis']['type'] == "image/jpeg" || $_FILES['chasis']['type'] == "image/png")
				{
					$chasis = round(microtime(true)) . 'c.' . end($ext);
					move_uploaded_file($_FILES["chasis"]["tmp_name"], "../files/vehiculo/" . $chasis);
				}
		  }
			
			// plaqueta
			if (!file_exists($_FILES['plaqueta']['tmp_name']) || !is_uploaded_file($_FILES['plaqueta']['tmp_name'])) {
				$plaqueta=$_POST["imagenactualplaqueta"];
			}else{
			  $ext = explode(".", $_FILES["plaqueta"]["name"]);
				if ($_FILES['plaqueta']['type'] == "image/jpg" || $_FILES['plaqueta']['type'] == "image/jpeg" || $_FILES['plaqueta']['type'] == "image/png")
				{
					$plaqueta = round(microtime(true)) . 'p.' . end($ext);
					move_uploaded_file($_FILES["plaqueta"]["tmp_name"], "../files/vehiculo/" . $plaqueta);
				}
		  }
			// motor
			if (!file_exists($_FILES['motor']['tmp_name']) || !is_uploaded_file($_FILES['motor']['tmp_name'])) {
				$motor=$_POST["imagenactualmotor"];
			}else{
			  $ext = explode(".", $_FILES["motor"]["name"]);
				if ($_FILES['motor']['type'] == "image/jpg" || $_FILES['motor']['type'] == "image/jpeg" || $_FILES['motor']['type'] == "image/png")
				{
					$motor = round(microtime(true)) . 'm.' . end($ext);
					move_uploaded_file($_FILES["motor"]["tmp_name"], "../files/vehiculo/" . $motor);
				}
		  }
			
			// vin
			if (!file_exists($_FILES['vin']['tmp_name']) || !is_uploaded_file($_FILES['vin']['tmp_name'])) {
				$vin=$_POST["imagenactualvin"];
			}else{
			  $ext = explode(".", $_FILES["vin"]["name"]);
				if ($_FILES['vin']['type'] == "image/jpg" || $_FILES['vin']['type'] == "image/jpeg" || $_FILES['vin']['type'] == "image/png")
				{
					$vin = round(microtime(true)) . 'vin.' . end($ext);
					move_uploaded_file($_FILES["vin"]["tmp_name"], "../files/vehiculo/" . $vin);
				}
		  }
			// otros
			if (!file_exists($_FILES['otros']['tmp_name']) || !is_uploaded_file($_FILES['otros']['tmp_name'])) {
				$otros=$_POST["imagenactualotros"];
			}else{
			  $ext = explode(".", $_FILES["otros"]["name"]);
				if ($_FILES['otros']['type'] == "image/jpg" || $_FILES['otros']['type'] == "image/jpeg" || $_FILES['otros']['type'] == "image/png")
				{
					$otros = round(microtime(true)) . 'ot.' . end($ext);
					move_uploaded_file($_FILES["otros"]["tmp_name"], "../files/vehiculo/" . $otros);
				}
		  }
			

		if (empty($idpetete)){
			$rspta=$petete->insertar($clase,$marca,$tipo,$color,$modelo,$origen,$vehiculo1,$vehiculo2,$vehiculo3,$vehiculo4,$chasis,$plaqueta,$motor,$vin,$otros);
			echo $rspta ? "petete registrado".$clase.' - '.$marca.' - '.$tipo.' - '.$color.' - '.$modelo.' - '.$origen.' - '.$vehiculo1.' - '.$vehiculo2.' - '.$vehiculo3.' - '.$vehiculo4.' - '.$chasis.' - '.$plaqueta.' - '.$motor.' - '.$vin.' - '.$otros: "petete no se pudo registrar".$clase.' - '.$marca.' - '.$tipo.' - '.$color.' - '.$modelo.' - '.$origen.' - '.$vehiculo1.' - '.$vehiculo2.' - '.$vehiculo3.' - '.$vehiculo4.' - '.$chasis.' - '.$plaqueta.' - '.$motor.' - '.$vin.' - '.$otros;
		}
		else {
			$rspta=$petete->editar($idpetete,$clase,$marca,$tipo,$color,$modelo,$origen,$vehiculo1,$vehiculo2,$vehiculo3,$vehiculo4,$chasis,$plaqueta,$motor,$vin,$otros);
			echo $rspta ? "petete actualizado" : "petete no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$petete->desactivar($idpetete);
 		echo $rspta ? "petete Desactivado" : "petete no se puede desactivar";
	break;

	case 'activar':
		$rspta=$petete->activar($idpetete);
 		echo $rspta ? "petete activado" : "petete no se puede activar";
	break;

	case 'mostrar':
		$rspta=$petete->mostrar($idpetete);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
	break;

	case 'listar':
		$rspta=$petete->listar();
 		//Vamos a declarar un array
 		$data= Array();
		 $url='../vistas/mostrar.php?id=';
 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idpetete.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-danger" onclick="desactivar('.$reg->idpetete.')"><i class="fa fa-close"></i></button>'.'<a target="_blank" href="'.$url.$reg->idpetete.'"> <button class="btn btn-info"><i class="fa fa-eye"></i></button></a>':
 					'<button class="btn btn-warning" onclick="mostrar('.$reg->idpetete.')"><i class="fa fa-pencil"></i></button>'.
 					' <button class="btn btn-primary" onclick="activar('.$reg->idpetete.')"><i class="fa fa-check"></i></button>'.'<a target="_blank" href="'.$url.$reg->idpetete.'"> <button class="btn btn-info"><i class="fa fa-eye"></i></button></a>',
 				"1"=>$reg->idpetete,
 				"2"=>$reg->clase,
 				"3"=>$reg->marca,
 				"4"=>$reg->tipo,
 				"5"=>$reg->color,
 				"6"=>$reg->modelo,
 				"7"=>$reg->origen,
 				"8"=>"<img src='../files/vehiculo/".$reg->vehiculo1."' height='50px' width='50px' >",
 				"9"=>"<img src='../files/vehiculo/".$reg->vehiculo2."' height='50px' width='50px' >",
 				"10"=>"<img src='../files/vehiculo/".$reg->vehiculo3."' height='50px' width='50px' >",
 				"11"=>"<img src='../files/vehiculo/".$reg->vehiculo4."' height='50px' width='50px' >",
 				"12"=>"<img src='../files/vehiculo/".$reg->chasis."' height='50px' width='50px' >",
 				"13"=>"<img src='../files/vehiculo/".$reg->plaqueta."' height='50px' width='50px' >",
 				"14"=>"<img src='../files/vehiculo/".$reg->motor."' height='50px' width='50px' >",
 				"15"=>"<img src='../files/vehiculo/".$reg->vin."' height='50px' width='50px' >",
 				"16"=>"<img src='../files/vehiculo/".$reg->otros."' height='50px' width='50px' >",
 				// "8"=>$reg->vehiculo1,
 				// "9"=>$reg->vehiculo2,
 				// "10"=>$reg->vehiculo3,
 				// "11"=>$reg->vehiculo4,
 				// "12"=>$reg->chasis,
 				// "13"=>$reg->plaqueta,
 				// "14"=>$reg->motor,
 				// "15"=>$reg->vin,
 				// "16"=>$reg->otros,
 				"17"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':
 				'<span class="label bg-red">Desactivado</span>'
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

	case "selectCategoria":
		require_once "../modelos/Categoria.php";
		$categoria = new Categoria();

		$rspta = $categoria->select();

		while ($reg = $rspta->fetch_object())
				{
					echo '<option value=' . $reg->clase . '>' . $reg->tipo . '</option>';
				}
	break;
}
?>