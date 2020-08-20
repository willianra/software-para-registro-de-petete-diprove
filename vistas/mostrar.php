<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=News+Cycle:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    
    <div class="container">
        <h1 id="titulo">PETETE - DIPROVE</h1>
    </div>


  <?php
  require_once "../modelos/Petete.php";
$petete = new Petete();

$rspta = $petete->listarpetete($_GET["id"]);

//Table with 20 rows and 4 columns
// $pdf->SetWidths(array(58,50,30,12,35));
$idpetete="";
$clase="";
$marca="";
$tipo="";
$color="";
$modelo="";
$origen="";
$vehiculo="";
$vehiculo2="";
$vehiculo3="";
$vehiculo4="";
$chasis="";
$plaqueta="";
$motor="";
$plaqueta="";
$vin="";
$otros="";
// $plaqueta="";
while($reg= $rspta->fetch_object())
{  
  $idpetete=$reg->idpetete;
  $clase=$reg->clase;
  $marca=$reg->marca;
  $tipo=$reg->tipo;
  $color=$reg->color;
  $modelo=$reg->modelo;
  $origen=$reg->origen;
  $vehiculo=$reg->vehiculo1;
  $vehiculo2=$reg->vehiculo2;
  $vehiculo3=$reg->vehiculo3;
  $vehiculo4=$reg->vehiculo4;
  $chasis=$reg->chasis;
  $plaqueta=$reg->plaqueta;
  $motor=$reg->motor;
  $plaqueta=$reg->plaqueta;
  $vin=$reg->vin;
  $otros=$reg->otros;
  // $nombre = $reg->nombre;
    // $categoria = $reg->categoria;
    // $codigo = $reg->codigo;
    // $stock = $reg->stock;
    // $descripcion =$reg->descripcion;
 	
 	// $pdf->SetFont('Arial','',10);
  //   $pdf->Row(array(utf8_decode($nombre),utf8_decode($categoria),$codigo,$stock,utf8_decode($descripcion)));
}
  ?>
    <div class="row panel-fondo">
        <div class="col-md-3" id="panel">
            <div class="row" id="panel-2">
                <div   class="text-left col-xs-6 col-sm-4 col-lg-4">
                    <h3 class="text-left"  id="clase">NUMERO</h3>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-6">
                <input value="<?php echo $idpetete ?>" type="text" id="clasev">
                </div>
            </div>
            <div class="row" id="panel-2">
                <div class="col-sm-4 col-lg-4">
                    <h3 class="text-left" id="clase">CLASE</h3>
                </div>
                <div class="col-sm-6 col-lg-6"><input value="<?php echo $clase ?>" type="text" id="clasev"></div>
            </div>
            <div class="row" id="panel-7">
                <div class="col-sm-4 col-lg-4">
                    <h3 class="text-left" id="clase">MARCA</h3>
                </div>
                <div class="col-sm-6 col-lg-6"><input value="<?php echo $marca ?>" type="text" id="clasev"></div>
            </div>
            <div class="row" id="panel-8">
                <div class="col-sm-4 col-lg-4">
                    <h3 class="text-left" id="clase">TIPO</h3>
                </div>
                <div class="col-sm-6 col-lg-6"><input value="<?php echo $tipo ?>" type="text" id="clasev"></div>
            </div>
            <div class="row" id="panel-9">
                <div class="col-sm-4 col-lg-4">
                    <h3 class="text-left" id="clase">COLOR</h3>
                </div>
                <div class="col-sm-6 col-lg-6"><input value="<?php echo $color ?>" type="text" id="clasev"></div>
            </div>
            <div class="row" id="panel-10">
                <div class="col-sm-4 col-lg-4">
                    <h3 class="text-left" id="clase">MODELO</h3>
                </div>
                <div class="col-sm-6 col-lg-6"><input value="<?php echo $modelo ?>" type="text" id="clasev"></div>
            </div>
            <div class="row" id="panel-11">
                <div class="col-sm-4 col-lg-4">
                    <h3 class="text-left" id="clase">ORIGEN</h3>
                </div>
                <div class="col-sm-6 col-lg-6"><input value="<?php echo $origen ?>" type="text" id="clasev"></div>
            </div>
            <div class="row">
                <div class="col" id="search-container"><button class="btn btn-primary btn-lg" type="button"><a style="color:white"  href="../vistas/petete.php">nuevo</a></button> </div>
                <div class="col" id="search-container"><button class="btn btn-primary btn-lg" type="button"><a style="color:white"  href="../vistas/petete.php">buscar</a></button></div>
            </div>
        </div>
        <div class="col-md-9"> 
            <div class="row">
                <div class="col"><button class="btn btn-success btn-lg" type="button" onclick="mostrar_foto_vehiculo()">VEHICULO</button></div>
                <div class="col"><button class="btn btn-success btn-lg" type="button"onclick="mostrar_foto_chasis()">CHASIS</button></div>
                <div class="col"><button class="btn btn-success btn-lg" type="button" onclick="mostrar_foto_plaqueta()" >PLAQUETA</button></div>
                <div class="col"><button class="btn btn-success btn-lg" type="button" onclick="mostrar_foto_motor()" >MOTOR</button></div>
                <div class="col"><button class="btn btn-success btn-lg" type="button" onclick="mostrar_foto_vin()" >VIN</button></div>
                <div class="col"><button class="btn btn-success btn-lg" type="button" onclick="mostrar_foto_otro()" >OTRO</button></div>
                <!-- <div class="col-md-2"><button class="btn btn-primary btn-lg" type="button">OTROS</button></div> -->
            </div>
            <div id="foto-vehiculo"> 
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../files/vehiculo/<?php echo $vehiculo ?>" alt="First slide">
               
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../files/vehiculo/<?php echo $vehiculo2 ?>" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../files/vehiculo/<?php echo $vehiculo3 ?>" alt="Third slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../files/vehiculo/<?php echo $vehiculo4 ?>" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              
              </div>
              <h4>DESCARGAR </h4>
              <a href="../files/vehiculo/<?php echo $vehiculo ?>" download>
                      <img src="../files/vehiculo/<?php echo $vehiculo ?>" alt="W3Schools" width="104" height="142">
              </a>
              <a href="../files/vehiculo/<?php echo $vehiculo2 ?>" download>
                      <img src="../files/vehiculo/<?php echo $vehiculo2 ?>" alt="W3Schools" width="104" height="142">
              </a>
              <a href="../files/vehiculo/<?php echo $vehiculo3 ?>" download>
                      <img src="../files/vehiculo/<?php echo $vehiculo3 ?>" alt="W3Schools" width="104" height="142">
              </a>
              <a href="../files/vehiculo/<?php echo $vehiculo4 ?>" download>
                      <img src="../files/vehiculo/<?php echo $vehiculo4 ?>" alt="W3Schools" width="104" height="142">
              </a>
            </div>
            <div style="display: none;" id="foto-chasis"> 
            <div id="carouselExampleIndicators_chasis" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators_chasis" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators_chasis" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators_chasis" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../files/vehiculo/<?php echo $chasis ?>" alt="First slide">
                  </div>
                   
                </div>
                 
              </div>
              <h4>DESCARGAR </h4>
              <a href="../files/vehiculo/<?php echo $chasis ?>" download>
                      <img src="../files/vehiculo/<?php echo $chasis ?>" alt="W3Schools" width="104" height="142">
              </a>
            </div>
            <div style="display: none;" id="foto-plaqueta"> 
            <div id="carouselExampleIndicators_plaqueta" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../files/vehiculo/<?php echo $plaqueta ?>" alt="First slide">
                  </div>
                   
                </div>
              </div>
              <h4>DESCARGAR </h4>
              <a href="../files/vehiculo/<?php echo $plaqueta ?>" download>
                      <img src="../files/vehiculo/<?php echo $plaqueta ?>" alt="W3Schools" width="104" height="142">
              </a>
            </div>
            <div style="display: none;" id="foto-motor"> 
            <div id="carouselExampleIndicators_motor" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../files/vehiculo/<?php echo $motor ?>" alt="First slide">
                  </div>
                   
                </div>   
              </div> 
              <h4>DESCARGAR </h4>
              <a href="../files/vehiculo/<?php echo $motor ?>" download>
                      <img src="../files/vehiculo/<?php echo $motor ?>" alt="W3Schools" width="104" height="142">
              </a>
            </div>
            <div style="display: none;" id="foto-vin"> 
            <div id="carouselExampleIndicators_vin" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../files/vehiculo/<?php echo $vin ?>" alt="First slide">
                  </div>
                </div>
              </div>
              <h4>DESCARGAR </h4>
              <a href="../files/vehiculo/<?php echo $vin ?>" download>
                      <img src="../files/vehiculo/<?php echo $vin ?>" alt="W3Schools" width="104" height="142">
              </a>
            </div>
            <div style="display: none;" id="foto-otro"> 
            <div id="carouselExampleIndicators_otro" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators_otro" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators_otro" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators_otro" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../files/vehiculo/<?php echo $otros ?>" alt="First slide">
                  </div>
                   
                </div>
              </div>
              <h4>DESCARGAR </h4>
              <a href="../files/vehiculo/<?php echo $otros ?>" download>
                      <img src="../files/vehiculo/<?php echo $otros ?>" alt="W3Schools" width="104" height="142">
              </a>
            </div>
        </div>
    </div>
    <script>
        // function mostrar_foto_vehiculo() {
        //   var v = document.getElementById("foto-vehiculo");
        //   var c = document.getElementById("foto-chasis");
        //   if (v.style.display === "none") {
        //     c.style.display = "none";
        //     v.style.display = "block";
        //   } else {
        //     v.style.display = "none";
        //   }
        // }
        // function mostrar_foto_chasis() {
        //   var v = document.getElementById("foto-vehiculo");
        //   var x = document.getElementById("foto-chasis");
        //   if (x.style.display === "none") {
        //     v.style.display = "none";
        //     x.style.display = "block";
        //   } else {
        //     x.style.display = "none";
        //   }
        // }
        // function mostrar_foto_plaqueta() {
        //   var p = document.getElementById("foto-plaqueta");
        //   var v = document.getElementById("foto-vehiculo");
        //   var c = document.getElementById("foto-chasis");
        //   if (p.style.display === "none") {
        //     v.style.display = "none";
        //     c.style.display = "none";
        //     p.style.display = "block";
        //   } else {
        //     p.style.display = "none";
        //   }
        // }
        // function mostrar_foto_motor() {
        //   var m = document.getElementById("foto-motor");
        //   var p = document.getElementById("foto-plaqueta");
        //   var v = document.getElementById("foto-vehiculo");
        //   var c = document.getElementById("foto-chasis");
        //   if (m.style.display === "none") {
        //     v.style.display = "none";
        //     c.style.display = "none";
        //     p.style.display = "none";
        //     m.style.display = "block";
        //   } else {
        //     m.style.display = "none";
        //   }
        // }
        // function mostrar_foto_vin() {
        //   var vin = document.getElementById("foto-vin");
        //   var m = document.getElementById("foto-motor");
        //   var p = document.getElementById("foto-plaqueta");
        //   var v = document.getElementById("foto-vehiculo");
        //   var c = document.getElementById("foto-chasis");
        //   if (vin.style.display === "none") {
        //     v.style.display = "none";
        //     c.style.display = "none";
        //     p.style.display = "none";
        //     m.style.display = "none";
        //     vin.style.display = "block";
        //   } else {
        //     vin.style.display = "none";
        //   }
        // }
        function mostrar_foto_chasis() {
          var otro = document.getElementById("foto-otro");
          var vin = document.getElementById("foto-vin");
          var m = document.getElementById("foto-motor");
          var p = document.getElementById("foto-plaqueta");
          var v = document.getElementById("foto-vehiculo");
          var c = document.getElementById("foto-chasis");
          if (c.style.display === "none") {
            otro.style.display = "none";
            v.style.display = "none";
            p.style.display = "none";
            m.style.display = "none";
            vin.style.display = "none";
            c.style.display = "block";
          } else {
            // c.style.display = "none";
          }
        }
        function mostrar_foto_vehiculo() {
          var otro = document.getElementById("foto-otro");
          var vin = document.getElementById("foto-vin");
          var m = document.getElementById("foto-motor");
          var p = document.getElementById("foto-plaqueta");
          var v = document.getElementById("foto-vehiculo");
          var c = document.getElementById("foto-chasis");
          if (v.style.display === "none") {
            otro.style.display = "none";
            c.style.display = "none";
            p.style.display = "none";
            m.style.display = "none";
            vin.style.display = "none";
            v.style.display = "block";
          } else {
            // v.style.display = "none";
          }
        }
        function mostrar_foto_plaqueta() {
          var otro = document.getElementById("foto-otro");
          var vin = document.getElementById("foto-vin");
          var m = document.getElementById("foto-motor");
          var p = document.getElementById("foto-plaqueta");
          var v = document.getElementById("foto-vehiculo");
          var c = document.getElementById("foto-chasis");
          if (p.style.display === "none") {
            otro.style.display = "none";
            c.style.display = "none";
            v.style.display = "none";
            m.style.display = "none";
            vin.style.display = "none";
            p.style.display = "block";
          } else {
            // p.style.display = "none";
          }
        }
        function mostrar_foto_motor() {
          var otro = document.getElementById("foto-otro");
          var vin = document.getElementById("foto-vin");
          var m = document.getElementById("foto-motor");
          var p = document.getElementById("foto-plaqueta");
          var v = document.getElementById("foto-vehiculo");
          var c = document.getElementById("foto-chasis");
          if (m.style.display === "none") {
            otro.style.display = "none";
            c.style.display = "none";
            v.style.display = "none";
            p.style.display = "none";
            vin.style.display = "none";
            m.style.display = "block";
          } else {
            // m.style.display = "none";
          }
        }
        function mostrar_foto_vin() {
          var otro = document.getElementById("foto-otro");
          var vin = document.getElementById("foto-vin");
          var m = document.getElementById("foto-motor");
          var p = document.getElementById("foto-plaqueta");
          var v = document.getElementById("foto-vehiculo");
          var c = document.getElementById("foto-chasis");
          if (vin.style.display === "none") {
            v.style.display = "none";
            c.style.display = "none";
            p.style.display = "none";
            m.style.display = "none";
            otro.style.display = "none";
            vin.style.display = "block";
          } else {
            // vin.style.display = "none";
          }
        }
        function mostrar_foto_otro() {
          var otro = document.getElementById("foto-otro");
          var vin = document.getElementById("foto-vin");
          var m = document.getElementById("foto-motor");
          var p = document.getElementById("foto-plaqueta");
          var v = document.getElementById("foto-vehiculo");
          var c = document.getElementById("foto-chasis");
          if (otro.style.display === "none") {
            v.style.display = "none";
            c.style.display = "none";
            p.style.display = "none";
            m.style.display = "none";
            vin.style.display = "none";
            otro.style.display = "block";
          } else {
            // otro.style.display = "none";
          }
        }
        </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>