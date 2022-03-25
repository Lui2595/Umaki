<?php session_start();
if(!isset($_SESSION['id_user'])){ header("Location: ../index.php");}
if((int)$_SESSION['nivel']>2){ header("Location: ../index.php");
  //echo $_SESSION['nivel'];
};
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

  <!-- contenedor -->
  <div class="container my-5 py-5">

    <!--Section: Block Content-->
    <section>
    
      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4">

          <div class="media blue lighten-2 text-white z-depth-1 rounded">
            <i class="far fa-money-bill-alt fa-3x blue z-depth-1 p-4 rounded-left text-white"></i>
            <div class="media-body">
              <p class="text-uppercase mt-2 mb-1 ml-3"><small>Ventas</small></p>
              <p class="font-weight-bold mb-1 ml-3">23 000$</p>
              <div class="progress md-progress mb-0 rounded-0">
                <div class="progress-bar blue darken-2" role="progressbar" style="width: 45%" aria-valuenow="45"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="ml-3 mb-0"><small>45% increase</small></p>
            </div>
          </div>


        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4">

          <div class="media deep-purple lighten-2 text-white z-depth-1 rounded">
            <i class="fas fa-chart-bar fa-3x deep-purple z-depth-1 p-4 rounded-left text-white"></i>
            <div class="media-body">
              <p class="text-uppercase mt-2 mb-1 ml-3"><small>Pedidos</small></p>
              <p class="font-weight-bold mb-1 ml-3">323 540</p>
              <div class="progress md-progress mb-0 rounded-0">
                <div class="progress-bar deep-purple darken-3" role="progressbar" style="width: 76%" aria-valuenow="76"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="ml-3 mb-0"><small>76% increase</small></p>
            </div>
          </div>


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </section>
    <!--Section: Blocks Content-->

  </div>
  <!-- header -->
  <div class="container my-5">

    <!-- Section: Block Content -->
    <section>
      
      <div class="row">
        <div class="col-12">
          <div class="card card-list">
            <div class="card-header white d-flex justify-content-between align-items-center py-3">
              <p class="h5-responsive font-weight-bold mb-0">Last Orders</p>
              <ul class="list-unstyled d-flex align-items-center mb-0">
                <li><i class="far fa-window-minimize fa-sm pl-3"></i></li>
                <li><i class="fas fa-times fa-sm pl-3"></i></li>
              </ul>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Item</th>
                    <th scope="col">Status</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a class="text-primary">OR9842</a></th>
                    <td>Call of Duty IV</td>
                    <td><h3><span class="badge badge-pill badge-success">Success</span></h3></td>
                    <td><h3>30/11/2020</h3></td>
                    <td><h3>10:55 AM</h3></td>
                  </tr>
                  <tr>
                    <th scope="row"><a class="text-primary">OR1848</a></th>
                    <td>Samsung Smart TV</td>
                    <td><h3><span class="badge badge-pill badge-warning">Success</span></h3></td>
                    <td class="pt-2 pb-0"><canvas id="bar1" width="40" height="40"></canvas></td>
                  </tr>
                  <tr>
                    <th scope="row"><a class="text-primary">OR7429</a></th>
                    <td>iPhone 6 Plus</td>
                    <td><h3><span class="badge badge-pill badge-danger">Success</span></h3></td>
                    <td class="pt-2 pb-0"><canvas id="bar2" width="40" height="40"></canvas></td>
                  </tr>
                  <tr>
                    <th scope="row"><a class="text-primary">OR7429</a></th>
                    <td>Samsung Smart TV</td>
                    <td><h3><span class="badge badge-pill badge-info">Success</span></h3></td>
                    <td class="pt-2 pb-0"><canvas id="bar3" width="40" height="40"></canvas></td>
                  </tr>
                  <tr>
                    <th scope="row"><a class="text-primary">OR1848</a></th>
                    <td>Samsung Smart TV</td>
                    <td><h3><span class="badge badge-pill badge-warning">Success</span></h3></td>
                    <td class="pt-2 pb-0"><canvas id="bar4" width="40" height="40"></canvas></td>
                  </tr>
                  <tr>
                    <th scope="row"><a class="text-primary">OR7429</a></th>
                    <td>iPhone 6 Plus</td>
                    <td><h3><span class="badge badge-pill badge-danger">Success</span></h3></td>
                    <td class="pt-2 pb-0"><canvas id="bar5" width="40" height="40"></canvas></td>
                  </tr>
                  <tr>
                    <th scope="row"><a class="text-primary">OR9842</a></th>
                    <td>Call of Duty IV</td>
                    <td><h3><span class="badge badge-pill badge-success">Success</span></h3></td>
                    <td class="pt-2 pb-0"><canvas id="bar6" width="40" height="40"></canvas></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer white py-3 d-flex justify-content-between">
              <button class="btn btn-primary btn-md px-3 my-0 mr-0">Place New Order</button>
              <button class="btn btn-light btn-md px-3 my-0 ml-0">View All Orders</button>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- Section: Block Content -->

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
});
</script>
</body>
</html>
