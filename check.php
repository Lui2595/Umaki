<?php session_start();
if(!isset($_SESSION['id_user'])){ header("Location: index.php");}
?>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" >
  <?php 
        $puntos=" ";
        $puntos2=" ";
        $puntos3=" ";
        ?>
        <?php 
      include("inc/style.php"); ?>
  <!-- Variables -->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- header -->
    <?php include("inc/header.php"); ?>
  <!-- header -->
  <div class="container mt-5">


  <!--Section: Content-->
  <section class="dark-grey-text">

  	<div class="card">
      <div class="card-body">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-lg-8">

            <!-- Pills navs -->
            <ul class="nav md-pills nav-justified pills-primary font-weight-bold" id="tabCheck">
              <li class="nav-item">
                <a class="nav-link text-danger active" data-toggle="tab" href="#tabCheckoutBilling123" role="tab">1. Datos personales</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link text-danger"    href="#tabCheckoutAddons123"  >2. Adicionales</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link text-danger"    href="#tabCheckoutPayment123" onclick="irAdicionales(event)" role="tab">3. Pago</a>
              </li>
            </ul>

            <!-- Pills panels -->
            <div class="tab-content pt-4">

              <!--Panel 1-->
              <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">

                <!--Card content-->
                <form id="datosPersonales" action="#">

                  <!--Grid row-->
                  <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                      <!--firstName-->
                      <label for="firstName" class="">Nombre/s</label>
                      <input type="text" id="firstName" class="form-control text-danger" placeholder="kid" required>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-2">

                      <!--lastName-->
                      <label for="lastName" class="">Apellido/s</label>
                      <input type="text" id="lastName" class="form-control text-danger" placeholder="carlo magno" required> 

                    </div>
                    <!--Grid column-->

                  </div>
                  <!--Grid row-->

                  <!--email-->
                  <label for="email" class="">Correo</label>
                  <input type="text" id="mail" class="form-control mb-4 text-danger" placeholder="youremail@example.com" value="<?php echo $_SESSION['mail']; ?>" required readonly>

                  <!--Telefono-->
                  <label for="Phone">Celular / Telefono</label>
                  <input type="text" id="Phone" class="form-control mb-4" placeholder="844 123 45 56" aria-describedby="materialRegisterFormPhoneHelpBlock" required>

                  <!--address-->
                  <label for="address" class="">Address</label>
                  <input type="text" id="address" class="form-control mb-4" placeholder="p sherman calle wallaby 42 sydney" required>

                  <!--address-2-->
                  <label for="Colonia" class="">Colonia</label>
                  <input type="text" id="Colonia" class="form-control mb-4" placeholder="Centro" required>      

                  <!--address-2-->
                  <label for="address-2" class="">Referencias</label>
                  <input type="text" id="referencia" class="form-control mb-4" placeholder="Casa con puerta y ventanas">

                  
                  <!--Grid row-->
                  <!-- Grid column -->
                  <!-- <hr>
                  <div class="row">
                    <div class="custom-control custom-checkbox mb-1 col-xl-4 col-md-4 text-center">
                      <input type="checkbox" class="custom-control-input" id="checkbox6">
                      <label class="custom-control-label text-danger" for="checkbox6">Didi Food</label>
                      <img src="img/didi.png" class="img-fluid w-50 z-depth-1 rounded-circle"
                      alt="Responsive image">
                    </div>

                    <div class="custom-control custom-checkbox mb-1 col-xl-4 col-md-4 text-center">
                      <input type="checkbox" class="custom-control-input" id="checkbox7">
                      <label class="custom-control-label text-danger" for="checkbox7">Uber</label>
                      <img src="img/uber.jpg" class="img-fluid w-50 z-depth-1 rounded-circle"
                      alt="Responsive image">
                    </div>

                    <div class="custom-control custom-checkbox mb-1 col-xl-4 col-md-4 text-center">
                      <input type="checkbox" class="custom-control-input" id="checkbox8">
                      <label class="custom-control-label text-danger" for="checkbox8">Rappi</label>
                      <img src="img/rappi.png" class="img-fluid w-50 z-depth-1 rounded-circle"
                      alt="Responsive image">
                    </div>
                  </div>
                  <hr> -->
                  <!-- <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="checkbox">
                    <label class="custom-control-label" for="checkbox">Default checkedbox</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
                    <label class="custom-control-label" for="checkbox">Default checkbox</label>
                  </div> -->
                  <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input " id="defaultChecked2" checked>
                    <label class="custom-control-label" for="checkbox">Acepto los <a class="text-danger" href="">Terminos y condiciones</a></label>
                  </div>
                  <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                    <label class="custom-control-label" for="checkbox1">Guardar informacion para una futura compra</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="checkbox2">
                    <label class="custom-control-label" for="checkbox2">Suscribirse para recibir informacion de promociones y descuentos</label>
                  </div>

                  <hr>

                  <button class="btn btn-danger btn-lg btn-block" type="button" onclick="irAdicionales(event)">Siguiente</button>

                </form>

              </div>
              <!--/.Panel 1-->

             

              <!--Panel 3-->
              <div class="tab-pane fade" id="tabCheckoutPayment123" role="tabpanel">

                <div class="d-block my-3">
                <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="checkbox4" >
                    <label class="custom-control-label" for="checkbox4">Efectivo</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-1">
                    <input type="checkbox" class="custom-control-input" id="checkbox3">
                    <label class="custom-control-label" for="checkbox3">Tarjeta</label>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="cc-name123">Name on card</label>
                    <input type="text" class="form-control" id="cc-name123" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cc-number123">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number123" placeholder="" required>
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration123">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration123" placeholder="" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cc-cvv123">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv123" placeholder="" required>
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div> -->
                <hr class="mb-4">
                <!-- Card -->
                
                <!-- Card -->
              


              </div>
              <!--/.Panel 3-->

            </div>
            <!-- Pills panels -->


          </div>
          <!--Grid column-->
          
          <!--Grid column-->
          <div class="col-lg-4 mb-4">
            <br>
            <!--Card-->
            <div class="card z-depth-0 border border-light rounded-0">
              
              <!--Card content-->
              <div class="card-body" id="sumario">
                <h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Resumen de Orden</h4>

               

              </div>
              <button class="btn btn-danger btn-lg btn-block" type="button" onclick="placeOrder()">Place order</button>

            </div>
            <!--/.Card-->



          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </div>
    </div>

  </section>
  <!--Section: Content-->

<br>
</div>
  <!-- footer  -->
    <?php include("inc/footer.php"); ?>
  <!-- footer  -->		

  <!-- script -->
    <?php include("inc/scripts.php"); ?>
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
  actualizarSumario();
  datosExistentes();
    
});
$("#checkbox3").change(function(){
  $("#checkbox4").prop("checked",false);
});
$("#checkbox4").change(function(){
  $("#checkbox3").prop("checked",false);
});
  var total_pedido=0;
function actualizarSumario(){
    //alert("actualizando");
    if(getCookie("carrito")){
     // alert(getCookie("carrito"));
      var carrito=JSON.parse(getCookie("carrito"));
      $("#numCarrito").html(carrito.carrito.length);
      $("#sumario").empty();
      $("#sumario").append('<h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Resumen de Orden</h4><hr>');
      
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
          $("#sumario").append('<dl class="row"> <dd class="col-sm-8" id="ns_'+index+'">'+fila.nombre+' </dd> <dd class="col-sm-4" id="ps_'+index+'">  $ '+fila.precio+' </dd>     </dl>');
          total+=parseFloat(fila.precio);
      }
      let n_promo=1;
      for (let i = 0; i < promos_array.id.length; i++) {
        //alert(promos_array.contador[i]+promos_array.limite[i]);
       if(promos_array.contador[i] == promos_array.limite[i]){
        
        const productos=promos_array.producto[i].split(",");
        let nombre="";
        for (let j = 0; j < productos.length; j++) {
            //$("#p_"+productos[j]).css("color","red");
            $("#ps_"+productos[j]).parent().hide();
            if(j==0){
              nombre+=$("#ns_"+productos[j]).html();
            }else{
              nombre+=", "+$("#ns_"+productos[j]).html();
            }
            const valor=$("#ps_"+productos[j]).html();
            total-=currency(valor);
            //alert(valor);
        }
        $("#sumario").append('<dl class="row"> <dd class="col-sm-8" >'+promos_array.promo[i]+' '+nombre+'</dd>  <dd class="col-sm-4"> $'+promos_array.precio[i]+'</dd> </dl>');
        total+=parseFloat(promos_array.precio[i]);
        n_promo++;
       }
        
      }
      $("#sumario").append('<dl class="row"> <dd class="col-sm-8">Total</dd> <dd class="col-sm-4">  $ '+total+' </dd>                </dl>');
      total_pedido=total;
    }
}

function datosExistentes(){
  const id_user="<?php if(isset($_SESSION['id_user'])){echo$_SESSION['id_user']; }?>";
  const json='{"Movimiento":"mostrarDatosU","user":"'+id_user+'"}';
  var result=consulta("db/usuarios.php",json);
  if(result.status  =="ok" ){
   // alert(JSON.stringify(result[0]));
    // alert("login ok");
    if(result[0].nombre){
     // alert("holas"); 
      $("#firstName").val(result[0].nombre);  
      $("#lastName").val(result[0].apellido);  
     
      $("#Phone").val(result[0].telefono); 
      $("#address").val(result[0].direccion); 
      $("#Colonia").val(result[0].colonia); 
      $("#referencia").val(result[0].referencia);   
    }
  }else{
    alert(JSON.stringify(result)+"Error");
  }
}

$("#datosPersonales").submit(function(event){
    event.preventDefault();

});
function validarDatos(){  
  //alert($("#mail").val());
  if($("#firstName").val()!="" && $("#lastName").val()!="" && $("#Phone").val()!="" && $("#address").val()!="" && $("#Colonia").val()!=""  && $("#mail").val()!=""){
      return true;
    }else{
      return false;
    }
}
function irAdicionales(e){
  e.preventDefault();
  if( validarDatos()){
    //alert("ok");
    $('#tabCheck li:nth-child(2) a').tab('show')
  }

}
function placeOrder(){
      let estado=6; 
      let mPago="Transferencias";
      if(!$("#checkbox4").prop("checked") && !$("#checkbox3").prop("checked")){
        newAlert("Selecciona algun metodo de pago","Falta información");
        return;
      }
      else{
        if($("#checkbox4").prop("checked")){
          estado=6;
          mPago="Efectivo";
        }
      }
      if(!guardarDatos() ){
        newAlert("Hubo un error al guardar tus datos","Datos")
        return;
      }
      if(!validarDatos() ){
        newAlert("Por favor revisa que todos los datos esten competos","Datos")
        return;
      }
      const carrito=getCookie("carrito");
      const user="<?php echo $_SESSION['id_user']; ?>";
      const pass=$("#ctr2").val();
      const total=total_pedido;
      const prom=promos();
      const json='[{"Movimiento":"addPedido","user":"'+user+'","total":"'+total_pedido+'","estado":"'+estado+'","mPago":"'+mPago+'","promos":'+prom+'},'+ carrito+"]";
        //alert(json);
      var result = consulta("db/pedidos.php",json); 
      //alert(JSON.stringify(result));
      if(result.status  =="ok"){
        setCookie("carrito","",0);
        location.href="index.php";
      }else{
        alert(JSON.stringify(result)+"Error");
      }

}
function promos() {
  const respuesta=JSON.parse('{"id":[],"precio":[]}');
  var carrito=JSON.parse(getCookie("carrito"));
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
function guardarDatos(){
  const id_user="<?php if(isset($_SESSION['id_user'])){echo$_SESSION['id_user']; }?>";
  const nombre=$("#firstName").val();
  const apellido=$("#lastName").val();
  const tel=$("#Phone").val();
  const dir=$("#address").val();
  const col=$("#Colonia").val();
  const ref=$("#referencia").val();
  const json='{"Movimiento":"guardarDatos","user":"'+id_user+'","name":"'+nombre+'","apellido":"'+apellido+'","tel":"'+tel+'","dir":"'+dir+'","colonia":"'+col+'","ref":"'+ref+'"}';
  var result=consulta("db/usuarios.php",json);
  if(result.status  =="ok" ){
   // alert(JSON.stringify(result[0]));
    // alert("login ok");
    return true;
  }else{
    alert(JSON.stringify(result)+"Error");
    return false;
  }
}

</script>
</body>
</html>
