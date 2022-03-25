<?php session_start();
if(!isset($_SESSION['id_user'])){ header("Location: ../index.php");}
if((int)$_SESSION['nivel']>2){ header("Location: ../index.php");
  //echo $_SESSION['nivel'];
};?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <title>Umaki Sushi House</title>
  
 
  <!-- Variables -->
  <?php 
        $puntos="../";
        $puntos2="";
        $puntos3="";
      include($puntos."inc/style.php"); ?>
      <!-- Google Fonts Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
      <!-- styles -->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- header -->
    <?php include($puntos."inc/header.php"); ?>
  <!-- header -->

  <!-- Contenedores -------------------------------------------------------------------------------------->
  <div  class="container col-12 my-1 py-5">

    <!-- Section: bloques -->
    <section style="margin-top: -2.00rem;" class="">

      <!--Bloque 1 2 y 3-->
      <div class=" row col-lg-12">

        <!--Bloque cocina y espera / menu-->

        <!--Bloque cocina y espera -->
        <div class="col-lg-9 col-md-12 mb-4" id="pdv">

          <!--bloque cocina -->
          <div class="card mt-3" >

            <div class="">
              <i class="fas fa-hamburger fa-lg warning-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
              <div class="float-right text-right p-3">
              <p class="text-uppercase text-dark  mb-1"><small>Cocina</small> <medium class="text-dark" id="cocinando" >5</medium> </p>
              </div>
            </div>
            <div class="card-body alto2 pt-0">
              <div class="container-fluid">
                <div id="myCarousel" class="carousel slide pointer-event" data-ride="carousel">
                  <div class="carousel-inner mn row w-100 mx-auto" id="preparando">
                
                    
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--bloque cocina -->
          <br>

        </div>
        <!--Bloque cocina y espera -->
        
        <!--Bloque entradas / visualizador-->
        <div class="col-lg-3 col-md-6 mb-4">
          <!-- Bloque entradas -->
          <div class="card mt-3">
            <div class="">
           
              <div class="z-depth-2 p-3 ml-3 mt-n3 primary-color float-left text-right p-3">
                <p class="text-uppercase text-white  mb-1"><small>Entradas</small> <medium class="text-white" id="cantidadEntradas">5</medium> </p>
              </div> 
            </div>
            <div class="overflow-auto">
              <!-- Bloque entradas -->
              <div class="card-body alto3 pt-0" id="entradas">
                
                 
                
              </div>
              <!-- Bloque entradas -->
              
            </div>
          </div>
          <!-- Bloque entradas -->

        </div>
        <!--Bloque entradas / visualizador-->

      </div>
      <!--Bloque 1 2 y 3-->

    </section>
    <!-- Section: bloques -->

  </div>
  <!-- Contenedores -------------------------------------------------------------------------------------->


  <!-- footer  -->
    <?php include($puntos."inc/footer.php"); ?>
  <!-- footer  -->		

  <!-- script -->
    <?php include($puntos."inc/scripts.php"); ?>
  <!-- script -->
  <script>
    $(document).ready(function(){
      cargarPedidos();
    });
    function cargarPedidos(){
  
      const url="../db/pedidos.php";
      const json='[{"Movimiento":"panelConsulta"}]';
      var result=consulta(url,json);
      
      if(result.status  =="ok" ){
        
        //alert(JSON.stringify(result)+"ok");
          let cocina=0;
          let entradas=0;
          let listos=0;
          $("#entradas").empty();
          $("#preparando").empty();
          for (let i = 0; i < result.pedidos.length; i++) {
            const datos=result.pedidos[i];
            //alert(result.pedidos[i].m_pago);
          
          switch (result.pedidos[i].estado) {
             
              case '5':
                swichPedidos(datos);
                entradas++;
              break;
              case '4':
                let activo1="";
                if(cocina==0){
                  activo1="active";
                }
               const html=' <div class="carousel-item col-md-4 '+activo1+'"><br> <div class="card"> <div class="card-body"> <h4 class="card-title text-center">#'+datos.id+'</h4><p class="card-text ">'+detalles(datos.id)+' <button class="btn btn-success col-12 " onclick="listo('+datos.id+')"><i class="fas fa-check"></i></button></div></div><br></div>';
                 $("#preparando").append(html);
                cocina++;
              
              break;
          
          
          }
            
          }
          $("#cocinando").html(cocina);
          $("#cantidadEntradas").html(entradas);

      }else{
        alert(JSON.stringify(result)+"Error");
      }

    }
    function swichPedidos(datos){
        let imagen="";
        let html="";
        //alert(datos.m_pago);
        switch (datos.m_pago) {
          case 'Didi':
            imagen='../img/didi.png';
          
            break;
          case 'Rappi':
            imagen='../img/rappi.png';
            
          break;
          case "Efectivo":
          // alert("asdas");
            imagen='../img/cash.png';
            
          break;
          case 'Tarjeta':
            imagen='../img/card.png';
          
          break;
          case 'Transferencia':
            imagen='../img/trans.png';
            
          break;            
        }
  
        html='<br><div class="card"><div class="card-body"><h4 class="card-title text-center">#'+datos.id+' <img src="'+imagen+'" class="img-fluid w-25 z-depth-1 "> </h4><div class=""><button class="btn btn-success col-12 " data-id="'+datos.id+'" onclick="confirm_entrada('+datos.id+')"><i class="fas fa-check"></i></button></div></div></div>';
        $("#entradas").append(html);   

    }
    function detalles(id) {
      const url="../db/pedidos.php";
      const json='[{"Movimiento":"datosPedido","id":"'+id+'"}]';
      const result=consulta(url,json);
      let html="";
      for (let i = 0; i < result.productos.length; i++) {
      const e = result.productos[i];      
      let titulo=e.nombre;
      let cantidad=e.cuenta;
      html+=' <h3>-'+titulo+' <medium>X'+cantidad+'</medium></h3>';      
  
  }
 // alert(html);
  return html;
  }
  function confirm_entrada(id) {
     const btn="<button class='btn btn-success' onclick='preparacionComida("+id+")' > OK</button>"
     msgConfirm("¿Comenzar preparación?","",btn);
   // alert("Holas");
  }
  function listo(id) {
    const btn="<button class='btn btn-success' onclick='comidaLista("+id+")' > OK</button>"
    if( msgConfirm("Orden lista","",btn));
    //alert("Holas2");
  }
 
  function preparacionComida(id) {
    const url="../db/pedidos.php";
      const json='[{"Movimiento":"ActPedido","id":"'+id+'","nivel":"4"}]';
      var result=consulta(url,json);
      
      if(result.status  =="ok" ){
       
        cargarPedidos();
        $("#modalConfirm").modal("hide");}
    else{
      $("#modalConfirm").modal("hide");
      newAlert("Hubu un error")
    }
  }
  function comidaLista(id) {
    const url="../db/pedidos.php";
      const json='[{"Movimiento":"ActPedido","id":"'+id+'","nivel":"3"}]';
      var result=consulta(url,json);
      
      if(result.status  =="ok" ){

        cargarPedidos();
    $("#modalConfirm").modal("hide");}
    else{
      $("#modalConfirm").modal("hide");
      newAlert("Hubu un error")
    }
  }
  </script>
    </body>
    </html>
    
