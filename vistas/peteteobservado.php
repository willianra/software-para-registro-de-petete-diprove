<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: login.html");
}
else
{
require 'header.php';
if ($_SESSION['compras']==1)
{
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">registro de petete OBSERVADOS <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Opciones</th>
                            <th>numero</th>
                            <th>clase</th>
                            <th>marca</th>
                            <th>tipo</th>
                            <th>color</th>
                            <th>modelo</th>
                            <th>origen</th>
                            <th>vehiculo1</th>
                            <th>vehiculo2</th>
                            <th>vehiculo3</th>
                            <th>vehiculo4</th>
                            <th>chasis</th>
                            <th>plaqueta</th>
                            <th>motor</th>
                            <th>vin</th>
                            <th>otros</th>
                            <th>estado</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>
                            <th>Opciones</th>
                            <th>numero</th>
                            <th>clase</th>
                            <th>marca</th>
                            <th>tipo</th>
                            <th>color</th>
                            <th>modelo</th>
                            <th>origen</th>
                            <th>vehiculo1</th>
                            <th>vehiculo2</th>
                            <th>vehiculo3</th>
                            <th>vehiculo4</th>
                            <th>chasis</th>
                            <th>plaqueta</th>
                            <th>motor</th>
                            <th>vin</th>
                            <th>otros</th>
                            <th>estado</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 500px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="row" style=" width:400px">
                            <div class="col-lg-12"> 

                            <div class="form-group  col-lg-12 col-md-6 col-sm-6 col-xs-12">
                              <label>Clase:</label>
                              <input type="hidden" name="idpetete" id="idpetete">
                              
                              <input type="text" class="form-control" name="clase" id="clase" >
                            </div>
                            <div class="form-group col-lg-12 col-md-6 col-sm-6 col-xs-12">
                            <label>marca:</label>
                            <input type="text" class="form-control" name="marca" id="marca"  >
                          </div>
                            <div class="form-group col-lg-12 col-md-6 col-sm-6 col-xs-12">
                              <label>tipo:</label>
                              <input type="text" class="form-control" name="tipo" id="tipo"  >
                            </div>
                          
                          <div class="form-group col-lg-12 col-md-6 col-sm-6 col-xs-12">
                            <label>color:</label>
                            <input type="text" class="form-control" name="color" id="color"   >
                          </div>

                          <div class="form-group col-lg-12 col-md-6 col-sm-6 col-xs-12">
                            <label>modelo:</label>
                            <input type="text" class="form-control" name="modelo" id="modelo"  >
                          </div>
                          <div class="form-group col-lg-12 col-md-6 col-sm-6 col-xs-12">
                            <label>origen:</label>
                            <input type="text" class="form-control" name="origen" id="origen" >
                          </div>
                        </div>
                        
                        </div>
                        <div class="col-lg-12"> 
                          <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <label>vehiculo de lado1:<img src="../files/auto/1.JPG" width="50px"   ></label>
                            <input type="file" class="form-control" name="vehiculo1" id="vehiculo1">
                            <input type="hidden" name="imagenactualvehiculo1" id="imagenactualvehiculo1">
                            <img src="" width="150px"   id="imagenmuestravehiculo1">
                            <br>
                            <label>vehiculo de lado2:<img src="../files/auto/2.JPG" width="50px"   ></label>
                            <input type="file" class="form-control" name="vehiculo2" id="vehiculo2">
                            <input type="hidden" name="imagenactualvehiculo2" id="imagenactualvehiculo2">
                            <img src="" width="100px"   id="imagenmuestravehiculo2">
                            <br>
                            <label>vehiculo de lado3:<img src="../files/auto/3.JPG" width="30px"   ></label>
                            <input type="file" class="form-control" name="vehiculo3" id="vehiculo3">
                            <input type="hidden" name="imagenactualvehiculo3" id="imagenactualvehiculo3">
                            <img src="" width="100px"   id="imagenmuestravehiculo3">
                            <br>
                            <label>vehiculo de lado4:<img src="../files/auto/4.JPG" width="30px"   ></label>
                            <input type="file" class="form-control" name="vehiculo4" id="vehiculo4">
                            <input type="hidden" name="imagenactualvehiculo4" id="imagenactualvehiculo4">
                            <img src="" width="80px"   id="imagenmuestravehiculo4">

                          </div>
                          <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <label>chasis:</label>
                            <input type="file" class="form-control" name="chasis" id="chasis">
                            <input type="hidden" name="imagenactualchasis" id="imagenactualchasis">
                            <img src="" width="80px"   id="imagenmuestrachasis">
                            
                          </div>
                          <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <label>plaqueta:</label>
                            <input type="file" class="form-control" name="plaqueta" id="plaqueta">
                            <input type="hidden" name="imagenactualplaqueta" id="imagenactualplaqueta">
                            <img src="" width="100px"   id="imagenmuestraplaqueta">
                          </div>
                          <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <label>motor:</label>
                            <input type="file" class="form-control" name="motor" id="motor">
                            <input type="hidden" name="imagenactualmotor" id="imagenactualmotor">
                            <img src="" width="100px"   id="imagenmuestramotor">
                          </div>
                          <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <label>vin:</label>
                            <input type="file" class="form-control" name="vin" id="vin">
                            <input type="hidden" name="imagenactualvin" id="imagenactualvin">
                            <img src="" width="100px"   id="imagenmuestravin">
                          </div>
                          <div class="form-group col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <label>otros:</label>
                            <input type="file" class="form-control" name="otros" id="otros">
                            <input type="hidden" name="imagenactualotros" id="imagenactualotros">
                            <img src="" width="100px"   id="imagenmuestraotros">
                          </div>
                          
                         
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                          </div>
                        </form>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
}
else
{
  require 'noacceso.php';
}
require 'footer.php';
?>
<script type="text/javascript" src="scripts/peteteobservado.js">

</script>
<?php 
}
ob_end_flush();
?>