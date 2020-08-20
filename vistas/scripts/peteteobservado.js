var tabla;

//Función que se ejecuta al inicio
function init(){
	mostrarform(false);
	listar();
	$("#imagenmuestravehiculo1").hide();
	$("#imagenmuestravehiculo2").hide();
	$("#imagenmuestravehiculo3").hide();
	$("#imagenmuestravehiculo4").hide();
	$("#imagenmuestrachasis").hide();
	$("#imagenmuestraplaqueta").hide();
	$("#imagenmuestramotor").hide();
	$("#imagenmuestravin").hide();
	$("#imagenmuestraotros").hide();
	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
	
}

//Función limpiar
function limpiar()
{
	$("#idpeteteobservado").val("");
	$("#clase").val("");
	$("#marca").val("");
	$("#tipo").val("");
	$("#color").val("");
	$("#modelo").val("");
	$("#origen").val("");
	// $("#vehiculo1").val("");
	$("#imagenmuestravehiculo1").attr("src","");
	$("#imagenactualvehiculo1").val("");

	$("#imagenmuestravehiculo2").attr("src","");
	$("#imagenactualvehiculo2").val("");

	$("#imagenmuestravehiculo3").attr("src","");
	$("#imagenactualvehiculo3").val("");

	$("#imagenmuestravehiculo4").attr("src","");
	$("#imagenactualvehiculo4").val("");
	
	$("#imagenmuestrachasis").attr("src","");
	$("#imagenactualchasis").val("");

	$("#imagenmuestraplaqueta").attr("src","");
	$("#imagenactualplaqueta").val("");

	$("#imagenmuestramotor").attr("src","");
	$("#imagenactualmotor").val("");

	$("#imagenmuestravin").attr("src","");
	$("#imagenactualvin").val("");

	$("#imagenmuestraotros").attr("src","");
	$("#imagenactualotros").val("");

 
	$("#motor").val("");
	$("#vin").val("");
	$("#otros").val("");
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
	    dom: 'Bfrtip',//Definimos los elementos del control de tabla
	    buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
		        ],
		"ajax":
				{
					url: '../ajax/peteteobservado.php?op=listar',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 25,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/peteteobservado.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarform(false);
	          tabla.ajax.reload();
	    }

	});
	limpiar();
}

function mostrar(idpeteteobservado)
{
	$.post("../ajax/peteteobservado.php?op=mostrar",{idpeteteobservado : idpeteteobservado}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

		$("#idpeteteobservado").val(data.idpeteteobservado);
		$("#clase").val(data.clase);
		$("#marca").val(data.marca);
		$("#tipo").val(data.tipo);
		$("#color").val(data.color);
		$("#modelo").val(data.modelo);
		$("#origen").val(data.origen);
		// $("#vehiculo1").val(data.vehiculo1);
		// $("#vehiculo2").val(data.vehiculo2);
		// $("#vehiculo3").val(data.vehiculo3);
		// $("#vehiculo4").val(data.vehiculo4);
		// $("#chasis").val(data.chasis);
		// $("#plaqueta").val(data.plaqueta);
		// $("#motor").val(data.motor);
		// $("#vin").val(data.vin);
		// $("#otros").val(data.otros);

		// imagenes
		$("#imagenmuestravehiculo1").show();
		$("#imagenmuestravehiculo1").attr("src","../files/vehiculo/"+data.vehiculo1);
		$("#imagenactualvehiculo1").val(data.vehiculo1);
		// imagenes
		$("#imagenmuestravehiculo2").show();
		$("#imagenmuestravehiculo2").attr("src","../files/vehiculo/"+data.vehiculo2);
		$("#imagenactualvehiculo2").val(data.vehiculo2);
		// imagenes
		$("#imagenmuestravehiculo3").show();
		$("#imagenmuestravehiculo3").attr("src","../files/vehiculo/"+data.vehiculo3);
		$("#imagenactualvehiculo3").val(data.vehiculo3);
		// imagenes
		$("#imagenmuestravehiculo4").show();
		$("#imagenmuestravehiculo4").attr("src","../files/vehiculo/"+data.vehiculo4);
		$("#imagenactualvehiculo4").val(data.vehiculo4);
		
		// imagenes
		$("#imagenmuestrachasis").show();
		$("#imagenmuestrachasis").attr("src","../files/vehiculo/"+data.chasis);
		$("#imagenactualchasis").val(data.chasis);
		// imagenes
		$("#imagenmuestraplaqueta").show();
		$("#imagenmuestraplaqueta").attr("src","../files/vehiculo/"+data.plaqueta);
		$("#imagenactualplaqueta").val(data.plaqueta);
		// motor
		$("#imagenmuestramotor").show();
		$("#imagenmuestramotor").attr("src","../files/vehiculo/"+data.motor);
		$("#imagenactualmotor").val(data.motor);
		// vin
		$("#imagenmuestravin").show();
		$("#imagenmuestravin").attr("src","../files/vehiculo/"+data.vin);
		$("#imagenactualvin").val(data.vin);
		// otros
		$("#imagenmuestraotros").show();
		$("#imagenmuestraotros").attr("src","../files/vehiculo/"+data.otros);
		$("#imagenactualotros").val(data.otros);
		

 	})
}
function desactivar(idpeteteobservado)
{
	bootbox.confirm("¿Está Seguro de desactivar el artículo?", function(result){
		if(result)
        {
        	$.post("../ajax/peteteobservado.php?op=desactivar", {idpeteteobservado : idpeteteobservado}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

//Función para activar registros
function activar(idpeteteobservado)
{
	bootbox.confirm("¿Está Seguro de activar el Artículo?", function(result){
		if(result)
        {
        	$.post("../ajax/peteteobservado.php?op=activar", {idpeteteobservado : idpeteteobservado}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}
//Función para eliminar registros
function eliminar(idpeteteobservado)
{
	bootbox.confirm("¿Está Seguro de eliminar el proveedor?", function(result){
		if(result)
        {
        	$.post("../ajax/peteteobservado.php?op=desactivar", {idpeteteobservado : idpeteteobservado}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
        }
	})
}

init();