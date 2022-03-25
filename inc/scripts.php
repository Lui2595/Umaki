<!-- jQuery -->
<script type="text/javascript" src="<?php echo $puntos; ?>js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo $puntos; ?>js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo $puntos; ?>js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo $puntos; ?>js/mdb.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="<?php echo $puntos; ?>js/car.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="<?php echo $puntos; ?>js/animacion_wow.js"></script>
<!-- date js -->
<script type="text/javascript" src="<?php echo $puntos; ?>js/date.js"></script>
<!-- currency js -->
<script type="text/javascript" src="<?php echo $puntos; ?>js/currency.js"></script>

<script>
function consulta(urlr,tk){
      var a ="";
        
      var resultado = {};
     $.ajax({
       type: "POST",
       url: urlr,
       data: {consulta : tk},
       success: function (data){
        //alert (data);
         if (typeof data === "undefined") {
           resultado = {};
         } else {
           resultado = data;
         }
         

       },error:function( jqXHR, textStatus, errorThrown) {if (textStatus != "parsererror"){alert( "Request failed: " + textStatus );}else{alert( "Request failed: " + textStatus+", "+errorThrown +", "+JSON.stringify(jqXHR) );}},async: false});

       return resultado;
}
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
  var expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
$(document).ready(function () {
   if(!getCookie("acookie")){
       $("#modalCookie1").modal("show");
   } 
   actualizarCarrito();
  // $('#myForm').validate({ 
  //   rules: {
  //     "email": {
  //         required: true,
  //         minlength: 5,
          
  //     }
  //   },
  //   messages: {
  //     "resume[zip_code]": {
  //         required: "this field is required",
  //         minlength: "this field must contain at least {0} characters",
          
  //     }
  //   }
  // });

});
function aceptCookies(e) {
    e.preventDefault();
    setCookie("acookie","ok",1000);    
}
function checkOut(e) {
    e.preventDefault();
    const id_user="<?php if(isset($_SESSION['id_user'])){echo $_SESSION['id_user'];}?>";
    if (id_user!="") {
        location.href="check.php";
    }else{
        $("#modalCart").modal("hide");
        $("#modalLRForm").modal("show");
    }
}
$("#loginForm").submit(function(event){
  //alert(holas);
  event.preventDefault();
  const email=$("#email").val();
  const pass=$("#pass").val();
  const json='{"Movimiento":"login","user":"'+email+'","pass":"'+pass+'"}';
  //alert(json);
  var result = consulta("db/usuarios.php",json);
  //alert(result.status);
  if(result.status  =="ok" ){
   // alert("login ok");
   if(getCookie("carrito")){
    const carrito=JSON.parse(getCookie("carrito"));
    if(carrito.carrito.length!=0){
      location.href="check.php"; 
    }else{
      location.reload();
    }
   
   }else{
    location.reload(); 
   }
   
  }else{
    alert(JSON.stringify(result)+"Error");
  }
});
$("#registrarForm").submit(function(event){
  event.preventDefault();
  const email=$("#mailRegistrar").val();
  const pass=$("#ctr2").val();
  const json='{"Movimiento":"registrar","user":"'+email+'","pass":"'+pass+'"}';
  //alert(json);
  var result = consulta("db/usuarios.php",json);
  //alert(result.status);
  if(result.status  =="ok" ){
   // alert("login ok");
   $("#registrarForm").trigger("reset");
    irLogin(event);
    newAlert("Resgitrado correctamente! \n ahora puede iniciar sesión","Registro");
  }else{
    alert(JSON.stringify(result)+"Error");
  }
});
function contrasenas(a){
  if($(a).val()!=$("#ctr1").val()){
    a.setCustomValidity("Contraseñas no son iguales")
    
  }else{
    a.setCustomValidity("")
  }
}
function irRegistrar(e){
  e.preventDefault();
  $('#RI li:nth-child(2) a').tab('show')
}
function irLogin(e){
  e.preventDefault();
  $('#RI li:nth-child(1) a').tab('show')
}

function actualizarCarrito(){
    //alert("actualizando");
    if(getCookie("carrito")){
     // alert(getCookie("carrito"));
      const carrito=JSON.parse(getCookie("carrito"));
      $("#numCarrito").html(carrito.carrito.length);
      $("#tablaCarrito").empty();
      var total=0;
      const promos_array=JSON.parse('{"id":[], "promo":[],"producto": [],"contador":[] ,"limite": [],"precio":[]}');
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
          $("#tablaCarrito").append('<tr><th scope="row">'+(index+1)+'</th> <td id="n_'+index+'">'+fila.nombre+'</td> <td id="p_'+index+'">$'+fila.precio+'</td> <td><a href="#" onclick="deleteCarrito(event,'+index+')"><i class="fas fa-times"></i></a></td></tr>');
          total+=parseFloat(fila.precio);
      }
     //alert(JSON.stringify(promos_array));
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
        $("#tablaCarrito").append('<tr><th scope="row">P'+n_promo+'</th> <td>'+promos_array.promo[i]+' '+nombre+'</td> <td id="p_'+i+'">$'+promos_array.precio[i]+'</td> <td><a href="#" onclick="deletePromo(event,\''+promos_array.producto[i]+'\')"><i class="fas fa-times"></i></a></td></tr>');
        total+=parseFloat(promos_array.precio[i]);
        n_promo++;
       }
        
      }
      
     
      $("#totalCarrito").html("$"+total);
    }
  }
function deletePromo(e,ids) {
  e.preventDefault();
  //alert(ids);
  const productos=ids.split(",");
        let nombre="";
        var carrito=JSON.parse(getCookie("carrito"));
        for (let j = productos.length-1; j >= 0; j--) {
          carrito.carrito.splice(productos[j],1);
        }
        carrito=JSON.stringify(carrito);
  setCookie("carrito",carrito,1);
  actualizarCarrito();
}
function deleteCarrito(e,id){
  e.preventDefault();
  var carrito=JSON.parse(getCookie("carrito"));
  carrito.carrito.splice(id,1);
  carrito=JSON.stringify(carrito);
  setCookie("carrito",carrito,1);
  actualizarCarrito();
}
function newAlert(m,t){
    $("#alertMsg").html(m);
    $("#alertTitle").html(t);
    $('.toast').toast('show');
    console.log(m+", "+t);
}
function msgConfirm(titulo,msg,btn) {
    $("#confirmTitle").html(titulo);
    $("#confirmBody").html(msg);
    $("#confirmBtn").html(btn);
    if(msg==""){$("#confirmBody").hide()}else{$("#confirmBody").show()}
    $("#modalConfirm").modal("show");
   
  }


</script>