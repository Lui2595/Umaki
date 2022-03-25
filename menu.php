<?php session_start();?>
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
  <!-- styles -->
 
  <!-- Variables -->
  <?php 
        $puntos=" ";
        $puntos2=" ";
        $puntos3=" ";
        ?>
  <?php  include("inc/style.php"); ?>    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- header -->
    <?php include("inc/header.php"); ?>
  <!-- header -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" >
  <!-- Carrusel menu ------------------------------------------------------------------------------------->
  <div class="container-fluid">
    <h1 class="text-center mb-3">Menu</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" alt="Categorias">
      <div class="carousel-inner mn row w-100 mx-auto " id="carCategorias">
      
        
      </div>
      <a class="carousel-control-prev bg-dark text-white h-25 "  style="width:5%; position:absolute; top: 35%; " href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon " style="color:black" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next bg-dark text-white h-25  "  style="width:5%;position:absolute; top: 35%; "     href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon " aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- Carrusel menu ------------------------------------------------------------------------------------->

  <!-- Carrusel Categoria -------------------------------------------------------------------------------->
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
  <!-- Carrusel Categoria -------------------------------------------------------------------------------->

  <!-- footer  -->
    <?php include("inc/footer.php"); ?>
  <!-- footer  -->		

  <!-- script -->
    <?php include("inc/scripts.php"); ?>
  <!-- script -->
  
  <script type="text/javascript">
$(document).ready(function(){
  cargarCategorias();
 // actualizarCarrito();
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
});
function cargarCategorias() {
  const categorias= consulta("db/menu.php?categoria");
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
    const html='<div class="1 carousel-item col-md-4 '+primero+'"><br><!-- Card --><div class="card"><!-- Card image --><div class="view overlay"><img style="display: block; margin-left: auto; margin-right: auto; width: 25%" class="card-img-top" src="img/'+ico+'"alt="Card image cap"><a href="#!"><div class="mask rgba-white-slight"></div></a></div><!-- Card content --><div class="card-body"><!-- Title --><h4 class="d-flex justify-content-center card-title">'+nombre+'</h4><!-- Text --><p class="d-flex justify-content-center card-text">'+alt+'</p><!-- Button --><div class="text-center"><a href="#" class="col-12 col-sm-9 col-lg-8 btn btn-danger" onclick="cargarMenu(event,this,'+id+')" > Seleccionar</a></div></div></div><br><!-- Card --></div>';
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
  const url="db/menu.php?productos="+id;
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
        html+='<div class="card" style="margin-top:5px;"  ><div style="z-index: 2; position: absolute; top: 0px; right: 0px;"><button type="button" class="btn btn-dark btn-floating-right " onclick="datosProducto(this)" data-des="'+des+'" data-title="'+nombre+'"><i class="fas fa-eye"></i></button></div><!-- Card image --><div class="view overlay"><img class="card-img-top" src="img/'+foto+'"alt="Card image cap" ><a href="#" onclick="addCarrito(event,\''+nombre+'\',\''+precio+'\',\''+id+'\',\''+id_promo+'\',\''+promo_nombre+'\',\''+promo_precio+'\',\''+promo_cant+'\')" ><div class="mask rgba-white-slight"></div></a></div><!-- Card content --><div class="card-body"><h2 class="d-flex justify-content-center h2-responsive product-name"><strong>'+nombre+'</strong></h2><!-- <h4 class="d-flex justify-content-center h4-responsive"><span class="red-text"><small><s>$'+precio+'</s></small></span></h4> --><h4 class="d-flex justify-content-center h4-responsive"><span class="green-text"><strong>$'+precio+'</strong></span></h4></div></div> <br>'
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

  if(!getCookie("carrito")){
    //console.log("No habia carrito, generandoa");

    const carrito='{"carrito":[{"id":"'+id+'","nombre":"'+nombre+'","precio":"'+precio+'","id_promo":"'+id_promo+'","promo_nombre":"'+promo_nombre+'","promo_precio":"'+promo_precio+'","promo_cant":"'+promo_cant+'"}]}';
    setCookie("carrito",carrito,1);
    //console.log("Generado");
    newAlert("Añadido con éxito al carrito","Carrito");
    actualizarCarrito();
  }else{
    //alert(getCookie("carrito"));
    var carrito=JSON.parse(getCookie("carrito"));
    //alert(nombre);
    const json={"id":id,"nombre":nombre,"precio":precio.toString(),"id_promo":id_promo,"promo_nombre":promo_nombre,"promo_precio":promo_precio,"promo_cant":promo_cant};
    //alert(json);
    carrito.carrito.push(json);
    //alert(JSON.stringify(carrito));
    carrito=JSON.stringify(carrito);
    setCookie("carrito",carrito,1);
    newAlert("Añadido con éxito al carrito","Carrito");
    actualizarCarrito();
  }
}

function datosProducto(a) {
  const des= $(a).data("des");
  const title= $(a).data("title");
  const btn="<button class='btn btn-success' data-dismiss='modal'> OK</button>"
    if( msgConfirm(title,des,btn));
  
}

</script>
</body>
</html>
