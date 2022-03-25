<!--Navbar -->
  <nav class="mb-1 navbar sticky-top  navbar-expand-lg navbar-dark bg-dark">
    <!--Logo -->
    <a class="navbar-brand" href="<?php echo $puntos; ?>index.php">
      <img src="<?php echo $puntos; ?>img/logo2.png" height="30" class="d-inline-block align-top"
        alt="logo"> Umaki Sushi House
    </a>
    <!--Logo -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <ul class="navbar-nav ml-auto" id="navbarmenu">

        <li class="nav-item ">
          <a class="nav-link" href="<?php echo $puntos;?>index.php">
            <i></i> Inicio
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $puntos;?>index.php#nosotros">
            <i></i> Nosotros</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $puntos;?>index.php#contacto">
            <i></i> Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $puntos;?>menu.php">
            <i></i> Menu</a>
        </li>
        <?php  if (isset($_SESSION['id_user'])&& $_SESSION['nivel']<2) {
          $admin="admin/";
          if($puntos=="../"){
            $admin="";
          }
          echo '<li class="nav-item">
          <a class="nav-link" href="'.$admin.'panel.php">
            <i></i>Punto de venta</a>
        </li><li class="nav-item">
        <a class="nav-link" href="'.$admin.'admin.php">
          <i></i>Dashboard</a>
      </li><li class="nav-item">
      <a class="nav-link" href="'.$admin.'cocina.php">
        <i></i>Cocina</a>
    </li>';
        } ?>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!--Redes sociales -->

        <!--Boton Modal -->
        <li class="nav-item ">
        <a class="nav-link " data-toggle="modal" data-target="#modalCart"
          aria-haspopup="true" aria-expanded="false"><span id="numCarrito">0</span>
          <i class="fas fa-shopping-cart"></i> Carrito </a>
        </li>
        <!--Boton Modal -->

        <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-clipboard-list"></i> Ordenar
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fab fa-facebook-f"></i> Facebook
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fab fa-instagram"></i> Instagram</a>
        </li>
        <!--Redes sociales -->

        <!--User -->
        
        
        <?php  if (isset($_SESSION['id_user'])) {
          $nombre="";
          if(isset($_SESSION['nombre'])){
            $nombre=$_SESSION['nombre'];
          }else{
            $nombre= explode("@",$_SESSION['mail'])[0];
          }
          echo ' <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> '.$nombre.' </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
            <a class="dropdown-item" href="#">Mi cuenta</a>
            <a class="dropdown-item" href="track.php">Mis pedido</a>
            <a class="dropdown-item" href="db/logout.php">Cerrar sesion</a>
          </div>
          </li>';

        }else{
            echo '<li class="nav-item ">
            <a class="nav-link " data-toggle="modal" data-target="#modalLRForm"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Iniciar / Registrar </a>
            </li>';
        } ?>
       
      </ul>
    </div>
  </nav>
<!--Navbar -->

  <!--Modal: Login / Register Form----------------------------------------------------------------------->
  <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
      <!--Content-->
      <div class="modal-content">

        <!--Modal cascading tabs-->
        <div class="modal-c-tabs">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs tabs-2 elegant-color-dark darken-2" id="RI" role="tablist">
            <li class="nav-item">
              <a class="nav-link active red-text" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                Iniciar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link red-text" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user mr-2"></i>
                Registrar</a>
            </li>
          </ul>

          <!-- Tab panels -->
          <div class="tab-content">
            <!--Panel 7-->
            <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

              <!--Body-->
              <div class="modal-body mb-1">
                <form action="#" id="loginForm">
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="email" id="email" id="modalLRInput10" class="form-control form-control-sm validate" required >
                  <label data-error="wrong" data-success="right" for="modalLRInput10">Email</label>
                 </div>

                <div class="md-form form-sm mb-4">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="pass" id="modalLRInput11" class="form-control form-control-sm validate" required>
                  <label data-error="wrong" data-success="right" for="modalLRInput11">Contraseña</label>                  
                </div>
                <div class="text-center mt-2">
                  <button class="btn btn-danger">Iniciar <i class="fas fa-sign-in ml-1"></i></button>
                </div>
            
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <div class="options text-center text-md-right mt-1">
                  <p>No estas registrado? <a   href="#" class="red-text" onclick="irRegistrar(event)" >Registrar</a></p>
                  <p>Olvidaste tu <a href="#" class="red-text">Contraseña?</a></p>
                </div>
                <button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Cerrar</button>
              </div>

            </div>
            </form>
            <!--/.Panel 7-->

            <!--Panel 8-->
            <div class="tab-pane fade" id="panel8" role="tabpanel">

              <!--Body-->
              <div class="modal-body">
                <form action="#" id="registrarForm">
                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="email" id="mailRegistrar" class="form-control form-control-sm validate" size="50" required>
                    <label data-error="wrong" data-success="right" for="modalLRInput12">Correo</label>
                  </div>

                  <div class="md-form form-sm mb-5">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" id="ctr1" class="form-control form-control-sm validate" size="20" required>
                    <label data-error="wrong" data-success="right" for="modalLRInput13">Contraseña</label>
                  </div>

                  <div class="md-form form-sm mb-4">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" id="ctr2" class="form-control form-control-sm validate" oninput="contrasenas(this)" size="20" required>
                    <label data-error="wrong" data-success="right" for="modalLRInput14">Repetir contraseña</label>
                  </div>

                  <div class="text-center form-sm mt-2">
                    <button class="btn btn-danger">Registrar <i class="fas fa-sign-in ml-1"></i></button>
                  </div>
            
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <div class="options text-right">
                  <p class="pt-1">Ya tienes una cuenta? <a href="#" class="red-text" onclick="irLogin(event)"  >Iniciar</a></p>
                </div>
                <button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Cerrar</button>
              </div>
            </div>
            <!--/.Panel 8-->    </form>
          </div>

        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>
  <!--Modal: Login / Register Form----------------------------------------------------------------------->

  <!-- Modal carrito------------------------------------------------------------------------------------->
  <div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Your cart</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body">

          <table class="table table-hover" >
            <thead>
              <tr>
                <th>#</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Remove</th>
              </tr>
            </thead>
            <tbody id="tablaCarrito">
            </tbody>
            <tfoot>
                <tr>
                  <td colspan="2">Total</td>
                  <td id="totalCarrito">$0</td>
                </tr>
              </tfoot>
          </table>

        </div>
        <!--Footer-->
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
          <a href="#" class="btn btn-primary" onclick="checkOut(event)">Checkout<a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal carrito------------------------------------------------------------------------------------->

  <!-- Modal: modalQuickView -->
  <div class="modal fade" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-5">
              <!--Carousel Wrapper-->
              <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                data-ride="carousel">
                <!--Slides-->
                <div class="carousel-inner" role="listbox" id="fotosDetalles">
                 
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <!--/.Controls-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(23).jpg" width="60">
                  </li>
                  <li data-target="#carousel-thumb" data-slide-to="1">
                    <img src="../img/2-min.jpeg" width="60">
                  </li>
                  <li data-target="#carousel-thumb" data-slide-to="2">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(25).jpg" width="60">
                  </li>
                </ol>
              </div>
              <!--/.Carousel Wrapper-->
            </div>
            <div class="col-lg-7">
              <div class="text-center">


              <div cass="col-6">
              <h2 class="h2-responsive product-name">
                <strong id="pedidoId">#d5259</strong>
              </h2>
              </div>
              <h4 class="h4-responsive">
                <span class="green-text">
                  <strong id="pedidoTotal">$49</strong>
                </span>
              </h4>
              <!-- Default checked -->
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                <label class="custom-control-label" for="customSwitch1">Edicion</label>
              </div>
              </div>
              <!--Accordion wrapper-->
              <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingOne1">
                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                      aria-controls="collapseOne1">
                      <h5 class="mb-0">
                        Descripcion <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>

                  <!-- Card body -->
                  <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
                    <div class="card-body" id="productosPedido" >
                      <h4>-Sushi de camaron <medium>X3</medium></h4>
                      <h4>-arroz gohan</h4>
                      <h4>-papas <medium>X3</medium></h4>
                    </div>
                  </div>

                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingTwo2">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                      aria-expanded="false" aria-controls="collapseTwo2">
                      <h5 class="mb-0">
                        Datos cliente <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>

                  <!-- Card body -->
                  <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx" >
                    <div class="card-body" id="datosClientePedido">
                      <h3>Nombre:</h3>
                      <span class="grey-text"><h4 >Alvin yakitori</h4></span>
                      <h3>Direccion:</h3>
                      <span class="grey-text"><h4>Calle Mariano Abasolo 1419, Topochico, 25000 Saltillo, Coah.</h4></span>
                    </div>
                  </div>

                </div>
                <!-- Accordion card -->

               

              </div>
              <!-- Accordion wrapper -->


              <!-- Add to Cart -->
              <div class="card-body">
                <div class="text-center" id="botonesMoldalDetalles">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                  <button class="btn btn-primary">Modificar
                    <i class="fas fa-edit ml-2" aria-hidden="true"></i>
                  </button>
                </div>
              </div>
              <!-- /.Add to Cart -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

   <div role="alert" aria-live="assertive" aria-atomic="true" style="  position: fixed; right:15px; top: 70px; z-index:5;" class="toast" data-autohide="true" data-delay="2500">
  <div class="toast-header">
    <svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg"
      preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
      <rect fill="#007aff" width="100%" height="100%" /></svg>
    <strong class="mr-auto" id="alertTitle">Bootstrap</strong>
    <small>Now</small>
    <button type="button" class="ml-2 mb-1 close " data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body" id="alertMsg">
    Hello, world! This is a toast message.
  </div>
</div> 
<div class="modal fade" id="modalConfirm" tabindex="-1" aria-labelledby="confirmTitle" style="padding-right: 17px; " aria-modal="true" role="dialog" >
        <div class="modal-dialog modal-sm">
          <div class="modal-content text-center">
            <div class="modal-header bg-danger text-white d-flex justify-content-center" id="confirmHead">
              <h5 class="modal-title" id="confirmTitle"></h5>
            </div>
            <div class="modal-body" id="confirmBody">
             
            </div>
            <div class="modal-footer d-flex justify-content-center" id="confirmBtn">
              
            </div>
          </div>
        </div>
      </div>