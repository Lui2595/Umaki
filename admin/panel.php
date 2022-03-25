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
              <p class="text-uppercase text-dark  mb-1"><small>Cocina</small> <medium class="text-dark" id="cantidadCocina">5</medium> </p>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="container-fluid">
                <div id="myCarousel2" class="carousel slide pointer-event" data-ride="carousel">
                  <div class="carousel-inner mn row w-100 mx-auto" id="pedidosCocina">
                  
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--bloque cocina -->
          <br>

          <!-- bloque en espera-->
          <div class="card mt-3">

            <div class="">
              <i class="far fa-clock fa-lg success-color z-depth-2 p-4 ml-3 mt-n3 rounded text-white"></i>
              <div class="float-right text-right p-3">
                <p class="text-uppercase text-dark  mb-1"><small>En espera</small> <medium class="text-dark" id="cantidadListo">5</medium> </p>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="container-fluid">
                <div id="myCarousel3" class="carousel slide pointer-event" data-ride="carousel">
                  <div class="carousel-inner mn row w-100 mx-auto" id="pedidosListos">
                  <!-- <div class="carousel-item col-md-4 active">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title text-center">#D5852</h4>
                          <div class="text-center">
                          <p class="card-text "><h3 class="text-success text-center"> 00:15:00</h3></p>
                          <button type="button" class="btn btn-primary">Primary</button>
                          </div>
                          
                        </div>
                      </div>
                      <br>
                    </div>
                 -->
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <!-- bloque en espera-->

        </div>
        <!--Bloque cocina y espera -->

        <!--bloque menu -->
        <div class="col-lg-9 col-md-12 mb-4" id="menu" style="display:none">

          <!--Categorias -->
          <div class="container-fluid">
            <h1 class="text-center mb-3">Menu</h1>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" alt="Categorias">
              <div class="carousel-inner mn row w-100 mx-auto " id="carCategorias">
              
                
              </div>
              <a class="carousel-control-prev bg-dark text-white h-25 " style="width:5%; position:absolute; top: 35%; " href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon " style="color:black" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next bg-dark text-white h-25  " style="width:5%;position:absolute; top: 35%; " href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!--Categorias  -->
          <br>

          <!-- Opciones-->
          <div class=" card">
            <br>
            <div class="container">
              <div class="card">
                <div class="container-fluid">
                  <h1 class="text-center mb-3">Categoria</h1>
                  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mn row w-100 mx-auto  justify-content-center" id="carProductos">
                        <h2>Selecciona alguna categoria</h2>
                    
                    
                    </div>
                    <a class="carousel-control-prev bg-dark text-white h-25" style="width:5%; position:absolute; top: 35%;" href="#myCarousel1" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next bg-dark text-white h-25" style="width:5%; position:absolute; top: 35%;" href="#myCarousel1" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <br>
              </div>
              <br>
            </div>
            <br>
            
          </div>
          <!-- Opciones-->

        </div>
        <!--bloque menu -->
        
        <!--Bloque entradas / visualizador-->
        <div class="col-lg-3 col-md-6 mb-4">
          <!-- Bloque entradas -->
          <div class="card mt-3">
            <div class="">
            <a href="#" onclick="toggleMenu(event)" id="menuBtn"><i class="fas fa-table fa-lg danger-color z-depth-2 float-left p-4 ml-3 mt-n3 rounded text-white"></i></a>
            <a href="#" onclick="toggleMenu(event)" id="pdvBtn" style="display: none;"> <i class="fas fa-utensils fa-lg warning-color z-depth-2 float-left p-4 ml-3 mt-n3 rounded text-white"></i></a>
              <div class="z-depth-2 p-3 ml-3 mt-n3 primary-color float-left text-right p-3">
                <p class="text-uppercase text-white  mb-1"><small>Entradas</small> <medium class="text-white" id="cantidadEntradas" >5</medium> </p>
              </div> 
            </div>
            <div class="overflow-auto">
              <!-- Bloque entradas -->
              <div class="card-body alto pt-0" id="entradas">                
              </div>
              <!-- Bloque entradas -->
              <!-- visualizador -->
              <div class="card-body alto pt-0" id="comandero" style="display: none;">
                  <br>
                  <!-- Card -->
                  <div class="card">

                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Orden Local</h4>
                    </div>
                    <!--Body-->
                    <div class="modal-body">

                      <table class="table table-hover">
                        <thead>
                          <tr>
                           
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Accion</th>
                          </tr>
                        </thead>
                        <tbody id="tablaPdv">
                          <tr>                            
                            <td>Product 1</td>
                            <td>100$</td>
                            <td><a><i class="fas fa-times"></i></a></td>
                          </tr>
                          
                         
                        </tbody>
                        <tfoot>
                        <tr class="total">                            
                            <td>Total</td>
                            <td id="totalPdv"></td>
                            <td></td>
                          </tr>
                        </tfoot>
                      </table>

                    </div>
                    <!--Footer-->

                    <div class="modal-footer">
                    <div class="col-12 text-center">
                      <h2>Medio de pago</h2>
                    </div>
                    
                      <div class="row">
                        <div class="custom-control custom-checkbox col-6">
                          <input type="checkbox" class="custom-control-input" id="defaultUnchecked" onchange="validarChecks(this)">
                          <label class="custom-control-label" for="defaultUnchecked"></label>
                          <img src="../img/didi.png" class="img-fluid z-depth-1 w-75 rounded-circle"
                          alt="Responsive image">
                        </div>
                        <div class="custom-control custom-checkbox col-6">
                          <input type="checkbox" class="custom-control-input" id="defaultUnchecked2" onchange="validarChecks(this)">
                          <label class="custom-control-label" for="defaultUnchecked2"></label>
                          <img src="../img/rappi.png" class="img-fluid z-depth-1 w-75 rounded-circle"
                          alt="Responsive image">
                        </div>
                      </div>
                      <div class="row">
                        <div class="custom-control custom-checkbox col-6">
                          <input type="checkbox" class="custom-control-input" id="defaultUnchecked3" onchange="validarChecks(this)">
                          <label class="custom-control-label" for="defaultUnchecked3"></label>
                          <img src="../img/cash.png" class="img-fluid z-depth-1 w-75 rounded-circle"
                          alt="Responsive image">
                        </div>
                        <div class="custom-control custom-checkbox col-6">
                          <input type="checkbox" class="custom-control-input" id="defaultUnchecked4" onchange="validarChecks(this)">
                          <label class="custom-control-label" for="defaultUnchecked4"></label>
                          <img src="../img/card.png" class="img-fluid z-depth-1 w-75 rounded-circle"
                          alt="Responsive image">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#confirm">Cancelar</button>
                      <button class="btn btn-primary" onclick="crearOrden()"> Ordenar</button>
                    </div>
                  </div>

                  </div>
                  <!-- Card -->
                  <br> 
              </div>
              <!-- visualizador -->
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
  <!-- modal -->
  <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar orden</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        ¿Seguro que deseas eliminar carrito?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="cancelarOrden()">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal -->
  <!-- Contenedores -------------------------------------------------------------------------------------->


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
  
  cargarCategorias();
  cargarPdv();
  cargarPedidos();
});
function toggleMenu(e){
  e.preventDefault();
  if ( $("#menu").is(":visible")) {
  $("#menu" ).hide();
  $("#menuBtn" ).show();
  $("#entradas" ).show();
  $("#comandero" ).hide();
  $("#pdv" ).show();
  $("#pdvBtn" ).hide();
  } else {
    $("#menu").show();
    $("#pdv" ).hide();
    $("#pdvBtn" ).show();
    $("#menuBtn" ).hide();
    $("#comandero" ).show();
    $("#entradas" ).hide();
    
  
  }
}
function cargarCategorias() {
  const categorias= consulta("../db/menu.php?categoria");
  //alert(JSON.stringify(categorias));
  for (let index = 0; index < categorias.length; index++) {
    var primero="";
    if (index==0) {
      primero="active";      
    }
    const id= categorias[index].id;
    const nombre= categorias[index].nombre;
    const alt= categorias[index].alt;
    const ico= categorias[index].imagen;
    const html='<div class="1 carousel-item col-md-4 '+primero+'"><br><!-- Card --><div class="card"><!-- Card image --><div class="view overlay"><img style="display: block; margin-left: auto; margin-right: auto; width: 25%" class="card-img-top" src="../img/'+ico+'"alt="Card image cap"><a href="#!"><div class="mask rgba-white-slight"></div></a></div><!-- Card content --><div class="card-body"><!-- Title --><h4 class="d-flex justify-content-center card-title">'+nombre+'</h4><!-- Text --><p class="d-flex justify-content-center card-text">'+alt+'</p><!-- Button --><div class="text-center"><a href="#" class="col-12 col-sm-9 col-lg-8 btn btn-danger" onclick="cargarMenu(event,this,'+id+')" > Seleccionar</a></div></div></div><br><!-- Card --></div>';
    $("#carCategorias").append(html); 
  }
}
var active_butons;
function cargarMenu(e,a,id) {
  //alert("hola");
  e.preventDefault();
  //alert($(a).hasClass("btn-danger"));
  if ($(a).hasClass("btn-danger")) {
    if(active_butons){
      $(active_butons).addClass( "btn-danger" );
      $( active_butons).removeClass( "danger-color-dark" );

    }
    $( a).removeClass( "btn-danger" );
    $(a).addClass( "danger-color-dark" );
    $(a).addClass( "text-white" );
    active_butons=a;
    cargarProductos(id);
  } else {
    $(a).addClass( "btn-danger" );
    $( a).removeClass( "danger-color-dark" );
    $("#carProductos").empty();
    $("#carProductos").append("<h2>Selecciona alguna categoría</h2>");
  
  }
}
function cargarProductos(id) {
  const url="../db/menu.php?productos="+id;
  //alert(url)
  const productos=consulta(url);
  $("#carProductos").empty();
  //alert(JSON.stringify(productos));
  const totalProductos=productos.length;
  const pares= Math.round(productos.length/2);
 
  let index=0;  
  var html="";
  for (let i = 0; i < pares; i++) {
    var primero="";
    if (index==0) {
      primero="active";      
    }
    html+='<div class="carousel-item col-md-4 '+primero +'">';
    

    for (let j = 0; j < 2; j++) {
      if(index<totalProductos){
        const id=productos[index].id;
        const nombre=productos[index].nombre;
        const des=productos[index].descripcion;
        const foto=productos[index].foto;
        const precio=productos[index].precio;
        const promo_precio=productos[index].promo_precio;
        const promo_nombre=productos[index].promo_nombre;
        const promo_cant=productos[index].promo_cant;
        const id_promo=productos[index].id_promo;
        html+='<div class="card" style="margin-top:5px;"  ><div style="z-index: 2; position: absolute; top: 0px; right: 0px;"><button type="button" class="btn btn-dark btn-floating-right " onclick="datosProducto(this)" data-des="'+des+'" data-title="'+nombre+'"><i class="fas fa-eye"></i></button></div><!-- Card image --><div class="view overlay"><img class="card-img-top" src="../img/'+foto+'"alt="Card image cap" ><a href="#" onclick="addCarrito(event,\''+nombre+'\',\''+precio+'\',\''+id+'\',\''+id_promo+'\',\''+promo_nombre+'\',\''+promo_precio+'\',\''+promo_cant+'\')" ><div class="mask rgba-white-slight"></div></a></div><!-- Card content --><div class="card-body"><h2 class="d-flex justify-content-center h2-responsive product-name"><strong>'+nombre+'</strong></h2><!-- <h4 class="d-flex justify-content-center h4-responsive"><span class="red-text"><small><s>$'+precio+'</s></small></span></h4> --><h4 class="d-flex justify-content-center h4-responsive"><span class="green-text"><strong>$'+precio+'</strong></span></h4></div></div> <br>'
        index++
      }
    }
   html+='</div>'; 
 }
 $("#carProductos").append(html);

}

function addCarrito(e,n,p,id,id_promo,promo_nombre,promo_precio,promo_cant) {
  e.preventDefault();
  const nombre=n;
  const precio=parseFloat(p);

  if(!getCookie("pdv")){
    //console.log("No habia carrito, generandoa");

    const carrito='{"carrito":[{"id":"'+id+'","nombre":"'+nombre+'","precio":"'+precio+'","id_promo":"'+id_promo+'","promo_nombre":"'+promo_nombre+'","promo_precio":"'+promo_precio+'","promo_cant":"'+promo_cant+'"}]}';
    setCookie("pdv",carrito,1);
    //console.log("Generado");
    newAlert("Añadido con éxito al carrito","Carrito");
   cargarPdv();
  }else{
    //alert(getCookie("carrito"));
    var carrito=JSON.parse(getCookie("pdv"));
    //alert(nombre);
    const json={"id":id,"nombre":nombre,"precio":precio.toString(),"id_promo":id_promo,"promo_nombre":promo_nombre,"promo_precio":promo_precio,"promo_cant":promo_cant};
    //alert(json);
    carrito.carrito.push(json);
    //alert(JSON.stringify(carrito));
    carrito=JSON.stringify(carrito);
    setCookie("pdv",carrito,1);
    newAlert("Añadido con éxito al carrito","Carrito");
   cargarPdv();
  }
}
function datosProducto(a) {
  const des= $(a).data("des");
  const title= $(a).data("title");
  const btn="<button class='btn btn-success' data-dismiss='modal'> OK</button>"
    if( msgConfirm(title,des,btn));
  
}
var total_pedido=0;

function cargarPdv(){
  if(getCookie("pdv")){
     // alert(getCookie("carrito"));
      const carrito=JSON.parse(getCookie("pdv"));
      //$("#numCarrito").html(carrito.carrito.length);
      $("#tablaPdv").empty();
      let total=0;
      const promos_array=JSON.parse('{"id":[], "promo":[],"producto": [],"contador":[] ,"limite": [],"precio":[]}');
     
      if(carrito.carrito){
        for (let index = 0; index < carrito.carrito.length; index++) {
          let fila=carrito.carrito[index];
          if (fila.id_promo!="null"){
          const promos=fila.id_promo.split(","); 
          const precios = fila.promo_precio.split(","); 
          const nombres=fila.promo_nombre.split(",");   
          const limites=fila.promo_cant.split(",");   
         
          let precio_menor=0; 
          let promocion_a=""; 
          let promocion_n=""; 
          let promocion_l=""; 
          let promocion_p=""; 
          for (let j = 0; j < promos.length; j++) {
            if(precio_menor<precios[j]){
              precio_menor=precios[j];
              promocion_i=promos[j];
              promocion_n=nombres[j];
              promocion_l=limites[j];
              promocion_p=precios[j];
            }            
          }
          let existe=0;
          for (let j = 0; j < promos_array.id.length; j++) {            
            if(promocion_i==promos_array.id[j] && promos_array.contador[j] < promos_array.limite[j]){
              promos_array.contador[j]++;
              promos_array.producto[j]+=","+index;
              existe=1;
            }
          }
          if(existe==0){
            promos_array.id.push(promocion_i);
            promos_array.producto.push(index);
            promos_array.promo.push(promocion_n);
            promos_array.contador.push(1);
            promos_array.limite.push(promocion_l);
            promos_array.precio.push(promocion_p);
          }
         
          // promos_array.id.push(promocion_i)
          // promos_array.promo.push(promocion_n)
          //alert(promocion_a);
        }
            $("#tablaPdv").append('<tr><th scope="row">'+(index+1)+'</th> <td id="n_'+index+'">'+fila.nombre+'</td> <td id="p_'+index+'">$'+fila.precio+'</td> <td><a href="#" onclick="deleteCarrito(event,'+index+')"><i class="fas fa-times"></i></a></td></tr>');
          total+=parseFloat(fila.precio);
        }
        let n_promo=1;
      for (let i = 0; i < promos_array.id.length; i++) {
        //alert(promos_array.contador[i]+promos_array.limite[i]);
       if(promos_array.contador[i] == promos_array.limite[i]){
        
        const productos=promos_array.producto[i].split(",");
        let nombre="";
        for (let j = 0; j < productos.length; j++) {
            $("#p_"+productos[j]).css("color","red");
            $("#p_"+productos[j]).parent().hide();
            if(j==0){
              nombre+=$("#n_"+productos[j]).html();
            }else{
              nombre+=", "+$("#n_"+productos[j]).html();
            }
            const valor=$("#p_"+productos[j]).html();
            total-=currency(valor);
            //alert(valor);
        }
        $("#tablaPdv").append('<tr><th scope="row">P'+n_promo+'</th> <td>'+promos_array.promo[i]+' '+nombre+'</td> <td id="p_'+i+'">$'+promos_array.precio[i]+'</td> <td><a href="#" onclick="deletePromo(event,\''+promos_array.producto[i]+'\')"><i class="fas fa-times"></i></a></td></tr>');
        total+=parseFloat(promos_array.precio[i]);
        n_promo++;
       }
        
      }
      }

      $("#totalPdv").html("$"+total);
      total_pedido=total;
    }else{
      $("#tablaPdv").empty();
      $("#totalPdv").html("$0");
    }
}
function deletePromo(e,ids) {
  e.preventDefault();
  //alert(ids);
  const productos=ids.split(",");
        let nombre="";
        var carrito=JSON.parse(getCookie("pdv"));
        for (let j = productos.length-1; j >= 0; j--) {
          carrito.carrito.splice(productos[j],1);
        }
        carrito=JSON.stringify(carrito);
  setCookie("pdv",carrito,1);
  actualizarCarrito();
}
function deleteCarrito(e,id){
  e.preventDefault();
  var carrito=JSON.parse(getCookie("pdv"));
  carrito.carrito.splice(id,1);
  carrito=JSON.stringify(carrito);
  setCookie("pdv",carrito,1);
  cargarPdv();
}
function validarChecks(a){
  const check=$(a).prop("id");
  //alert(check);
  if($(a).prop("checked")){
    switch (check) {
      case "defaultUnchecked":

        $("#defaultUnchecked2").prop("checked",false);
        $("#defaultUnchecked3").prop("checked",false);
        $("#defaultUnchecked4").prop("checked",false);
        
        break;      
      case "defaultUnchecked2":
        $("#defaultUnchecked").prop("checked",false);
        $("#defaultUnchecked3").prop("checked",false);
        $("#defaultUnchecked4").prop("checked",false);
      break;
      case "defaultUnchecked3":
        $("#defaultUnchecked2").prop("checked",false);
        $("#defaultUnchecked").prop("checked",false);
        $("#defaultUnchecked4").prop("checked",false);
      break;
      case "defaultUnchecked4":
        $("#defaultUnchecked2").prop("checked",false);
        $("#defaultUnchecked3").prop("checked",false);
        $("#defaultUnchecked").prop("checked",false);
      break; 
      
    }
  }
}
function cancelarOrden(){
  const carrito="{}";
  setCookie("pdv",carrito,0);
  cargarPdv();
  $("#confirm").modal("hide");
}
function crearOrden(){
  
     let estado=6; 
      let mPago="";
      if(!$("#defaultUnchecked").prop("checked") && !$("#defaultUnchecked2").prop("checked") && !$("#defaultUnchecked3").prop("checked") && !$("#defaultUnchecked4").prop("checked")){
        newAlert("Selecciona algun metodo de pago","Falta información");
        return;
      }
      else{
        if($("#defaultUnchecked").prop("checked")){
          estado=5;
          mPago="Didi";
        }else if ($("#defaultUnchecked2").prop("checked")){
          estado=5;
          mPago="Rappi"
        }else if ($("#defaultUnchecked3").prop("checked")){
          estado=5;
          mPago="Efectivo"
        }else if ($("#defaultUnchecked4").prop("checked")){
          estado=5;
          mPago="Tarjeta"
        }
      }
            
      const carrito=getCookie("pdv");
      const user="<?php echo $_SESSION['id_user']; ?>";
      const pass=$("#ctr2").val();
      const total=total_pedido;
      const prom=promos();
      const json='[{"Movimiento":"addPedido","user":"0","total":"'+total_pedido+'","estado":"'+estado+'","mPago":"'+mPago+'","promos":'+prom+'},'+ carrito+"]";
        //alert(json);
      var result = consulta("../db/pedidos.php",json); 
      //alert(JSON.stringify(result));
      if(result.status  =="ok"){
        setCookie("pdv","{}",0);
        toggleMenu(event);
        cargarPedidos();
        //location.href="index.php";
      }else{
        alert(JSON.stringify(result)+"Error");
      }
}
function promos() {
  const respuesta=JSON.parse('{"id":[],"precio":[]}');
  var carrito=JSON.parse(getCookie("pdv"));
  const promos_array=JSON.parse('{"id":[], "promo":[],"producto": [],"contador":[] ,"limite": [],"precio":[]}');
      var total=0;
      for (let index = 0; index < carrito.carrito.length; index++) {
        var fila=carrito.carrito[index];
        if (fila.id_promo!="null"){
          const promos=fila.id_promo.split(","); 
          const precios = fila.promo_precio.split(","); 
          const nombres=fila.promo_nombre.split(",");   
          const limites=fila.promo_cant.split(",");   
         
          let precio_menor=0; 
          let promocion_a=""; 
          let promocion_n=""; 
          let promocion_l=""; 
          let promocion_p=""; 
          for (let j = 0; j < promos.length; j++) {
            if(precio_menor<precios[j]){
              precio_menor=precios[j];
              promocion_i=promos[j];
              promocion_n=nombres[j];
              promocion_l=limites[j];
              promocion_p=precios[j];
            }            
          }
          let existe=0;
          for (let j = 0; j < promos_array.id.length; j++) {            
            if(promocion_i==promos_array.id[j] && promos_array.contador[j] < promos_array.limite[j]){
              promos_array.contador[j]++;
              promos_array.producto[j]+=","+index;
              existe=1;
            }
          }
          if(existe==0){
            promos_array.id.push(promocion_i);
            promos_array.producto.push(index);
            promos_array.promo.push(promocion_n);
            promos_array.contador.push(1);
            promos_array.limite.push(promocion_l);
            promos_array.precio.push(promocion_p);
          }
         
          // promos_array.id.push(promocion_i)
          // promos_array.promo.push(promocion_n)
          //alert(promocion_a);
        }
        
       
  }
  let n_promo=0;
      for (let i = 0; i < promos_array.id.length; i++) {
        //alert(promos_array.contador[i]+promos_array.limite[i]);
       if(promos_array.contador[i] == promos_array.limite[i]){
        respuesta.id.push(promos_array.id[i]);
        respuesta.precio.push(promos_array.precio[i])
        
       }
        
      }
      return JSON.stringify(respuesta); 
}
function cargarPedidos(){
  
  const url="../db/pedidos.php";
  const json='[{"Movimiento":"panelConsulta"}]';
  var result=consulta(url,json);
  
  if(result.status  =="ok" ){
    $("#pedidosCocina").html("");
    $("#pedidosListos").html("");
    $("#entradas").html("");   
   //alert(JSON.stringify(result)+"ok");
      let cocina=0;
      let preparacion=0;
      let listos=0;
      let entradas=0;
      for (let i = 0; i < result.pedidos.length; i++) {
        const datos=result.pedidos[i];
        //alert(result.pedidos[i].m_pago);
       
       switch (result.pedidos[i].estado) {
          case '6':            
           //alert(datos.m_pago);
           swichPedidos(datos);
            //alert("asd");
            entradas++;
          break;
          case '5':
            let activo="";
            if(cocina==0){
              activo="active";
            }
           const html= '<div class="carousel-item col-md-4 '+activo+'"  data-id="'+datos.id+'" data-time="'+datos.fecha_pedido+'" onclick="detallesPedido(this,2)"><br><div class="card" style="background-color:lightgray"><div class="card-body"> <h4 class="card-title text-center">#'+datos.id+'</h4> <p class="card-text "><h3 class="text-success text-center"> 00:00</h3></p></div></div><br></div>';
            $("#pedidosCocina").append(html);
            cocina++;
          break;
          case '4':
            let activo1="";
            if(cocina==0){
              activo1="active";
            }
           const html1= '<div class="carousel-item col-md-4 '+activo1+'"  data-id="'+datos.id+'" data-time="'+datos.fecha_pedido+'" onclick="detallesPedido(this,2)"><br><div class="card"  ><div class="card-body"> <h4 class="card-title text-center">#'+datos.id+'</h4> <p class="card-text "><h3 class="text-success text-center"> 00:00</h3></p></div></div><br></div>';
            $("#pedidosCocina").append(html1);
            cocina++;
           
          break;
          case '3':
            let activo2="";
            if(listos==0){
              activo2="active";
            }
           const html2= '<div class="carousel-item col-md-4 '+activo2+'"  data-id="'+datos.id+'" data-time="'+datos.fecha_pedido+'" onclick="detallesPedido(this,3)"><br><div class="card"><div class="card-body"> <h4 class="card-title text-center">#'+datos.id+'</h4> <p class="card-text "><h3 class="text-success text-center" > 00:00</h3></p></div></div><br></div>';
            $("#pedidosListos").append(html2);
            listos++;
           
          break;
       
       }
        
      }
      $("#cantidadCocina").html(cocina);
      $("#cantidadListo").html(listos);
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
    case 'Transferencias':
      imagen='../img/trans.png';
      
    break;            
  }
  html='<br><div class="card"><div class="card-body"><h4 class="card-title text-center">#'+datos.id+' <img src="'+imagen+'" class="img-fluid w-25 z-depth-1 "> </h4><div class=""><button class="btn btn-success col-5 " data-id="'+datos.id+'" onclick="aceptarPedido(this)"><i class="fas fa-check"></i></button><button class="btn btn-danger col-5 " data-id="'+datos.id+'" onclick="eliminarPedido(this)"><i class="fas fa-times"></i></button></div><div class="text-center"><button class="btn btn-primary"  data-id="'+datos.id+'" onclick="detallesPedido(this)"><i class="fas fa-magic "></i> info</button></div></div></div>';
  $("#entradas").append(html);   

}

function detallesPedido(a,b){
  const id=$(a).data("id");
  //alert(id +" detalles");
  const url="../db/pedidos.php";
  const json='[{"Movimiento":"datosPedido","id":"'+id+'"}]';
  const tipo=b;
  let htmlbt="";
  
  var result=consulta(url,json);
  $("#datosClientePedido").empty();
  //alert(JSON.stringify(result));
  $("#fotosDetalles").empty();
  $("#productosPedido").empty();
  for (let i = 0; i < result.productos.length; i++) {
    const e = result.productos[i];
    let foto=e.foto; /// carusel de fotos 
    let active=""
    if(i==0){active="active"}
    const htmlFoto='<div class="carousel-item '+active+'"><img class="d-block w-100" src="../img/'+foto+'" alt="slide">    </div>'
    $("#fotosDetalles").append(htmlFoto);
    let titulo=e.nombre;
    let cantidad=e.cuenta;
    const htmlProductos=' <h4>-'+titulo+' <medium>X'+cantidad+'</medium></h4>';
    $("#productosPedido").append(htmlProductos);
  
  }
  const datosCliente=result.usuario;

  //alert(JSON.stringify(result.usuario));
    const htmlCliente='<h3>Nombre:</h3><span class="grey-text"><h4 >'+datosCliente.nombre+' '+datosCliente.apellido+'</h4></span><h3>Direccion:</h3><span class="grey-text"><h4>'+datosCliente.direccion+', '+ datosCliente.colonia+', '+datosCliente.referencia +'</h4></span><h3>Telefono:</h3><span class="grey-text"><h4>'+datosCliente.telefono +'</h4></span>';
    $("#datosClientePedido").html(htmlCliente);
    $("#pedidoId").html("#"+id);
    $("#pedidoTotal").html("$"+result.pedido.total);
    if(tipo==3){
      htmlbt='<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button><button class="btn btn-primary" onclick="finalizarPedido('+id+')">Entregar Pedido<i class="fas fa-edit ml-2" aria-hidden="true"></i></button>';
      $("#botonesMoldalDetalles").html(htmlbt);
    }else{
      $("#botonesMoldalDetalles").html(defaultModal);
    }
  $("#modalQuickView").modal("show");

}
function eliminarPedido(a){
  const id=$(a).data("id");
  //alert(id+" aceptar");
  const btn="<button class='btn btn-success' onclick='cEliminarPedido("+id+")' > OK</button>"
  const txt='<p>Razón </p><textarea class="form-control" aria-label="Razón" id="txt_'+id+'"></textarea>';
    if( msgConfirm("¿Eliminar Orden?",txt,btn));
}
function cEliminarPedido(id){
  const tx=$("#txt_"+id).val();
  if(tx!=""){
    const url="../db/pedidos.php";
    const json='[{"Movimiento":"ActPedido","id":"'+id+'","nivel":"9"}]';
    const json2='[{"Movimiento":"EliPedido","id":"'+id+'","razon":"'+tx+'"}]';
    var result=consulta(url,json);
    
      if(result.status  =="ok" ){
        consulta(url,json2);
        cargarPedidos();
        $("#modalConfirm").modal("hide");}
      else{
        $("#modalConfirm").modal("hide");
        newAlert("Hubu un error")
      }
  }else{
    $("#modalConfirm").modal("hide");
    newAlert("Por favor escribe una razón","Error")
  }
}
function aceptarPedido(a){
  const id=$(a).data("id");
  //alert(id+" aceptar");
  const btn="<button class='btn btn-success' onclick='confirmPedido("+id+")' > OK</button>"
    if( msgConfirm("¿Aceptar Orden?","",btn));
}
const defaultModal='<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button><button class="btn btn-primary">Modificar<i class="fas fa-edit ml-2" aria-hidden="true"></i></button>';
function confirmPedido(id){
  const url="../db/pedidos.php";
  const json='[{"Movimiento":"ActPedido","id":"'+id+'","nivel":"5"}]';
   var result=consulta(url,json);
      
      if(result.status  =="ok" ){
    cargarPedidos();
    $("#modalConfirm").modal("hide");}
    else{
      $("#modalConfirm").modal("hide");
      newAlert("Hubu un error")
    }
}
function finalizarPedido(id){
  const url="../db/pedidos.php";
  const json='[{"Movimiento":"ActPedido","id":"'+id+'","nivel":"0"}]';
   var result=consulta(url,json);
      
      if(result.status  =="ok" ){
    cargarPedidos();
    $("#modalQuickView").modal("hide");
    $("#botonesMoldalDetalles").html(defaultModal);
    }
    else{
      $("#modalQuickView").modal("hide");
      $("#botonesMoldalDetalles").html(defaultModal);
      newAlert("Hubu un error")
    }

}

setInterval(function() {
    cargarPedidos();
}, 60000);
</script>
</body>
</html>
