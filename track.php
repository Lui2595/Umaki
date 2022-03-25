<?php session_start(); 
if(!isset($_SESSION['id_user'])){ header("Location: index.php");}?>
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
        $puntos="";
        $puntos2="";
        $puntos3="";
      include($puntos."inc/style.php"); ?>
          <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" >
      <!-- styles -->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- header -->
    <?php include($puntos."inc/header.php"); ?>
  <!-- header -->
  <h2 class="text-center font-weight-bold mb-4 pb-2">Tracker</h2>
  <div class="container my-5 p-5 z-depth-1">

    <!--Section: Tracker-->
    <section class="dark-grey-text">

      <!-- Pedido # -->
      <h2 class="text-center font-weight-bold mb-4 pb-2" id="titulo">Pedido #D26852</h2>
      <!-- Pedido # -->

      <!-- Pendiente de pago -->
      <p class="text-center lead grey-text mx-auto mb-5"> <span style="color: green;">
      <i class="far fa-2x fa-sad-tear" id="pPago" style="display: none;"></i>
      <i class="far fa-2x fa-smile-wink" id="ePago" style="display: none;" ></i>
            </span> <span id="edoPago">Pendiente de pago.</span>
      <!-- Pendiente de pago -->

      <!-- lap -->
      <div class="cambio1">
        <div class="row">
          <!-- Grid Orden aceptada, Preparacion, Orden lista -->
          <div class="col-md-4">

            <!-- Orden aceptada -->
            <div class="row mb-3">

              <!-- Orden aceptada icono -->
              <div class="col-2" >
              <span style="color: gray;" id="ico1">
                <i class="fas fa-2x fa-flag-checkered"></i>
              </span>
              </div>
              <!-- Orden aceptada icono -->

              <!-- Orden aceptada texto-->
              <div class=" text-center col-10" id="card1">
                <br>
                <h5 class="font-weight-bold mb-3">Orden Aceptada</h5>
                <p class="grey-text">Tu orden fue aceptada en nuestro restaurante.</p>
              </div>
              <!-- Orden aceptada texto-->

            </div>
            <!-- Orden aceptada -->

            <!-- Preparacion -->
            <div class="row mb-3">

              <!-- Grid column -->
              <div class="col-2">
              <span style="color: gray;" id="ico2"><i class=""></i>
                <i class="fas fa-2x fa-clock"></i>
              </span>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="text-center col-10" id="card2">
                <h5 class="font-weight-bold mb-3">Preparacion</h5>
                <p class="grey-text">Estamos preparando nuestros ingredientes de gran calidad.</p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Preparacion -->

            <!-- Orden lista-->
            <div class="row mb-md-0 mb-3">

              <!-- Grid column -->
              <div class="col-2">
              <span style="color: gray;" id="ico3">
                <i class="fas fa-2x fa-thumbs-up"></i>
              </span>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="text-center col-10" id="card3">
                <h5 class="font-weight-bold mb-3">Orden lista</h5>
                <p class="grey-text mb-md-0">La orden esta completada y lista para envio.</p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Orden lista -->

          </div>
          <!-- Grid Orden aceptada, Preparacion, Orden lista -->
        
        <!-- Gif -->
        
        <div class="col-md-4 text-center">
          <img id="gif2" class="img-fluid" src=""
            alt="Sample image">
        </div>
          <!-- Gif 
            https://media.giphy.com/media/l0Ex2zCJjW7uIi0o0/giphy.gif
            https://media.giphy.com/media/e43MD18f4wdZC/giphy.gif
            https://media.giphy.com/media/CjmvTCZf2U3p09Cn0h/giphy.gif


            https://media.giphy.com/media/8UF0EXzsc0Ckg/giphy.gif
          Gif -->
        <!-- Gif -->

        <!-- Grid Esperando repartidor, En camino, Entregado-->
        <div class="col-md-4">

          <!-- Esperando repartidor-->
          <div class="row mb-3">

            <!-- Grid column -->
            <div class="col-2">
            <span style="color: gray;" id="ico4">
              <i class="fas fa-2x fa-clock"></i>
            </span>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="text-center col-10" id="card4">
              <h5 class="font-weight-bold mb-3">Esperando repartidor</h5>
              <p class="grey-text mb-md-0">Estamos esperando al repartidor, paciencia pronto saldra.</p>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Esperando repartidor -->

          <!-- En camino -->
          <div class="row mb-3">

            <!-- Grid column -->
            <div class="col-2">
            <span style="color: gray;" id="ico5">
              <i class="fas fa-2x fa-running"></i>
            </span>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="text-center col-10" id="card5">
              <h5 class="font-weight-bold mb-3">En camino</h5>
              <p class="grey-text mb-md-0">El pedido a salido de la sucursal pronto llegara a ti .</p>
            </div>
            <!-- Grid column -->

          </div>
          <!-- En camino -->

          <!-- Entregado -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-2">
            <span style="color: gray;" id="ico6">
              <i class="fas fa-2x fa-check"></i>
            </span>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="text-center col-10" id="card6">
              <h5 class="font-weight-bold mb-3">Entregado</h5>
              <p class="grey-text mb-md-0">El pedido llego a su destino! enjoy :D.</p>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Entregado -->

        </div>
        <!-- Grid Esperando repartidor, En camino, Entregado -->
        </div>
      </div>
      <!-- lap -->
      <!-- cel  -->
      <div class="cambio2">
        <div class="row">
      
          <!-- Grid Orden aceptada, Preparacion, Orden lista -->
          <div class="col-md-4">

            <!-- Orden aceptada -->
            <div class="row mb-3" id="m1" style="display: none;">

              <!-- Orden aceptada icono -->
              <div class="col-2">
              <span style="color: gray;" id="ico1m">
                <i class="fas fa-2x fa-flag-checkered"></i>
              </span>
              </div>
              <!-- Orden aceptada icono -->

              <!-- Orden aceptada texto-->
              <div class=" text-center col-10" id="card1m"> 
                <br>
                <h5 class="font-weight-bold mb-3">Orden Aceptada</h5>
                <p class="grey-text">Tu orden fue aceptada en nuestro restaurante.</p>
              </div>
              <!-- Orden aceptada texto-->

            </div>
            <!-- Orden aceptada -->

            <!-- Preparacion -->
            <div class="row mb-3" id="m2" style="display: none;">

              <!-- Grid column -->
              <div class="col-2">
              <span style="color: gray;" id="ico2m"><i class=""></i>
                <i class="fas fa-2x fa-clock"></i>
              </span>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="text-center col-10" id="card2m">
                <h5 class="font-weight-bold mb-3">Preparacion</h5>
                <p class="grey-text">Estamos preparando nuestros ingredientes de gran calidad.</p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Preparacion -->

            <!-- Orden lista-->
            <div class="row mb-md-0 mb-3" id="m3" style="display: none;">

              <!-- Grid column -->
              <div class="col-2">
              <span style="color: gray;" id="ico3m">
                <i class="fas fa-2x fa-thumbs-up"></i>
              </span>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="text-center col-10" id="card3m">
                <h5 class="font-weight-bold mb-3">Orden lista</h5>
                <p class="grey-text mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                  maiores nam, aperiam minima assumenda deleniti hic.</p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Orden lista -->

          </div>
          <!-- Grid Orden aceptada, Preparacion, Orden lista -->

          <!-- Grid Esperando repartidor, En camino, Entregado-->
          <div class="col-md-4">

            <!-- Esperando repartidor-->
            <div class="row mb-3" id="m4" style="display: none;">

              <!-- Grid column -->
              <div class="col-2">
              <span style="color: gray;" id="ico4m">
                <i class="fas fa-2x fa-flask"></i>
              </span>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="text-center col-10" id="card4m">
                <h5 class="font-weight-bold mb-3">Orden lista</h5>
                <p class="grey-text mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                  maiores nam, aperiam minima assumenda deleniti hic.</p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Esperando repartidor -->

            <!-- En camino -->
            <div class="row mb-3" id="m5" style="display: none;">

              <!-- Grid column -->
              <div class="col-2">
              <span style="color: gray;" id="ico5m">
                <i class="fas fa-2x fa-flask"></i>
              </span>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="text-center col-10" id="card5m">
                <h5 class="font-weight-bold mb-3">Orden lista</h5>
                <p class="grey-text mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                  maiores nam, aperiam minima assumenda deleniti hic.</p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- En camino -->

            <!-- Entregado -->
            <div class="row" id="m6" style="display: none;">

              <!-- Grid column -->
              <div class="col-2">
              <span style="color: gray;" id="ico6m">
                <i class="fas fa-2x fa-flask"></i>
              </span>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="text-center col-10" id="card6m">
                <h5 class="font-weight-bold mb-3">Orden lista</h5>
                <p class="grey-text mb-md-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                  maiores nam, aperiam minima assumenda deleniti hic.</p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Entregado -->

          </div>
          <!-- Grid Esperando repartidor, En camino, Entregado -->

          <!-- Gif -->
          
          <div class="col-md-4 text-center mt-2" >
            <img class="img-fluid" id="gif" src="" alt="Sample image" >
          </div>
            <!-- Gif 
              https://media.giphy.com/media/l0Ex2zCJjW7uIi0o0/giphy.gif
            Gif -->
          <!-- Gif -->
        </div>
      </div>
      <!-- cel  -->

    </section>
    <!--Section: Tracker-->


  </div>

  <!-- footer  -->
    <?php include($puntos."inc/footer.php"); ?>
  <!-- footer  -->		

  <!-- script -->
    <?php include($puntos."inc/scripts.php"); ?>
  <!-- script -->
  
  <script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#navbarSupportedContent-4 a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
  cargarPedido();
});

function cargarPedido(){
  const id="<?php echo $_SESSION['id_user'];?>";
  const url="db/pedidos.php";
  const json='[{"Movimiento":"pedidoTrack","user":"'+id+'"}]';
  var result=consulta(url,json);
 
  if(result.status  =="ok" ){
    //alert(JSON.stringify(result)+"ok");
      mostrarEstado(result[0].estado);
      $("#titulo").html("Pedido #"+result[0].id);
      if (result[0].m_pago=="Efectivo") {
       
        $("#ePago").show();
        $("#edoPago").html("Esperamos tu pago a la entrega, pronto aceptaran tu orden");
      }else{
        if(result[0].estado=="6" ){
          $("#pPago").show();
          
          $("#edoPago").html("Pago pendiente, al confirmar pago se acpetara tu orden");
        } else{
          $("#pPago").hide();
        $("#ePago").show();
        $("#edoPago").html("Pago recibido");
        }

      }
  }else{
    alert(JSON.stringify(result)+"Error");
  }
}
function mostrarEstado(e){
  //newAlert(e,"estado");
          switch (e) {
            case "6":
             $(".cambio1").hide();
             $(".cambio2").hide();
              break;
            case "5": // pedido aceptado
              $("#ico1").css("color","green");
              $("#card1").addClass("card animated flipInX infinite slow");
              $("#m1").show();$("#m6").hide();$("#m5").hide();$("#m4").hide();$("#m3").hide();$("#m3").hide();
              $("#ico1m").css("color","green");
              $("#card1m").addClass("card animated flipInX infinite slow");
              $("#gif").attr('src','https://media.giphy.com/media/l0Ex2zCJjW7uIi0o0/giphy.gif');
              $("#gif2").attr('src','https://media.giphy.com/media/l0Ex2zCJjW7uIi0o0/giphy.gif');
              break;
            case "4":// preparacion
              $("#ico1").css("color","green");
              $("#card1").addClass("card animated flipInX infinite slow");
              $("#ico2").css("color","green");
              $("#card2").addClass("card animated shake infinite slow");
              $("#m2").show();$("#m6").hide();$("#m5").hide();$("#m4").hide();$("#m3").hide();$("#m1").hide();
              $("#ico2m").css("color","green");
              $("#card2m").addClass("card animated shake infinite slow");
              $("#gif").attr('src','https://media.giphy.com/media/e43MD18f4wdZC/giphy.gif');
              $("#gif2").attr('src','https://media.giphy.com/media/e43MD18f4wdZC/giphy.gif');
            break;
            case "3": // Orden Lista
              $("#ico1").css("color","green");
              $("#card1").addClass("card animated flipInX infinite slow");
              $("#ico2").css("color","green");
              $("#card2").addClass("card animated shake infinite slow");
              $("#ico3").css("color","green");
              $("#card3").addClass("card animated zoomIn infinite slower");
              $("#m3").show();$("#m6").hide();$("#m5").hide();$("#m4").hide();$("#m2").hide();$("#m1").hide();
              $("#ico3m").css("color","green");
              $("#card3m").addClass("card animated zoomIn infinite slower");
              $("#gif").attr('src','https://media.giphy.com/media/CjmvTCZf2U3p09Cn0h/giphy.gif');
              $("#gif2").attr('src','https://media.giphy.com/media/CjmvTCZf2U3p09Cn0h/giphy.gif');
            break;
            case "2":  // Esperando repartidor 
              $("#ico1").css("color","green");
              $("#card1").addClass("card animated flipInX infinite slow");
              $("#ico2").css("color","green");
              $("#card2").addClass("card animated shake infinite slow");;
              $("#ico3").css("color","green");
              $("#card3").addClass("card animated zoomIn infinite slower");
              $("#ico4").css("color","green");
              $("#card4").addClass("card animated rollIn infinite slower");
              $("#m4").show();$("#m6").hide();$("#m5").hide();$("#m3").hide();$("#m2").hide();$("#m1").hide();
              $("#ico4m").css("color","green");
              $("#card4m").addClass("card animated rollIn infinite slower");
              $("#gif").attr('src','https://media.giphy.com/media/xf20D8HzvTQzu/giphy.gif');
              $("#gif2").attr('src','https://media.giphy.com/media/xf20D8HzvTQzu/giphy.gif');
            break;
            case "1": // En camino 
              $("#ico1").css("color","green");
              $("#card1").addClass("card animated flipInX infinite slow");
              $("#ico2").css("color","green");
              $("#card2").addClass("card animated shake infinite slow");
              $("#ico3").css("color","green");
              $("#card3").addClass("card animated zoomIn infinite slower");
              $("#ico4").css("color","green");
              $("#card4").addClass("card animated rollIn infinite slower");
              $("#ico5").css("color","green");
              $("#card5").addClass("card card animated swing infinite slow");
              $("#m5").show();$("#m6").hide();$("#m4").hide();$("#m3").hide();$("#m2").hide();$("#m1").hide();
              $("#ico5m").css("color","green");
              $("#card5m").addClass("card animated swing infinite slow");
              $("#gif").attr('src','https://media.giphy.com/media/3orif0MU3q9Q853SyQ/giphy.gif');
              $("#gif2").attr('src','https://media.giphy.com/media/3orif0MU3q9Q853SyQ/giphy.gif');
            break;
            case "0": // Entregados
              $("#ico1").css("color","green");
              $("#card1").addClass("card animated flipInX infinite slow");
              $("#ico2").css("color","green");
              $("#card2").addClass("card animated shake infinite slow");
              $("#ico3").css("color","green");
              $("#card3").addClass("card animated zoomIn infinite slower");
              $("#ico4").css("color","green");
              $("#card4").addClass("card animated rollIn infinite slower");
              $("#ico5").css("color","green");
              $("#card5").addClass("card card animated swing infinite slow");
              $("#ico6").css("color","green");
              $("#card6").addClass("card card animated tada infinite slow");
              $("#m6").show();$("#m5").hide();$("#m4").hide();$("#m3").hide();$("#m2").hide();$("#m1").hide();
              $("#ico6m").css("color","green");
              $("#card6m").addClass("card animated tada infinite slow");
              $("#gif").attr('src','https://media.giphy.com/media/8UF0EXzsc0Ckg/giphy.gif');
              $("#gif2").attr('src','https://media.giphy.com/media/8UF0EXzsc0Ckg/giphy.gif');
            break;
          
            default:
            alert(e);
              break;
          } 
  }

  setInterval(function() {
    cargarPedido();
}, 10000);
</script>
</body>
</html>
