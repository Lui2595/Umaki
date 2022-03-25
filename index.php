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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" >
 
  <!-- Variables -->
  <?php 
        $puntos="";
        $puntos2="";
        $puntos3="";
      include("inc/style.php"); ?>
      <!-- styles -->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <!-- header -->
    <?php include("inc/header.php"); ?>
  <!-- header -->
  
  <!--Carousel Wrapper-------------------------------------------------------------------------------------->
  <div id="carousel-example-2"  class="carousel slide carousel-fade tope" data-ride="">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides  -->
    
    <div  class="carousel-inner" role="listbox">
      <div class="altocarru carousel-item active">
        <div  class="view  ">
        <video style="" class="margen centered-thing video-fluid z-depth-1" autoplay loop controls muted>
          <source src="img/video.mp4" type="video/mp4" />
        </video>
          <div class=""></div>
        </div>
        <!-- <div  class="carousel-caption subir">
          <div class="d-flex justify-content-center">
            <div class="col-lg-7 col-8">
              <img class="" src="img/logo.svg" alt="">
            </div>

            <div   class="row ">
              <div class="col-lg-12 col-12">
                <h2 class="textoslide">EL MEJOR SUSHI</h2>
              </div>
              <div class="col-lg-12 col-1 text-center">
                <button type="button" class="btn btn-danger btn-lg" onclick="location.href='menu.php'">Ordena ya</button>
              </div>
            </div>
          </div>
          <br>
        </div> -->
      </div>
      <div class="altocarru carousel-item ">
        <div  class="view  ">
        <video style="" class="margen centered-thing video-fluid z-depth-1" autoplay loop controls muted>
          <source src="img/video2.mp4" type="video/mp4" />
        </video>
        <!-- <div class="embed-responsive embed-responsive-21by9">
          <iframe class="embed-responsive-item" src="img/video.mp4" allowfullscreen></iframe>
        </div> -->
          <div class=""></div>
        </div>

      </div>
      <div style="height: 500px;" class="carousel-item ">
        <div  class="view">
          <img class="rounded mx-auto d-block w-100" src="img/3-min.jpeg"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div  class="carousel-caption subir">
          <div class="d-flex justify-content-center">
            <div class="col-lg-7 col-8">
              <img class="" src="img/logo.svg" alt="">
            </div>

            <div   class="row ">
              <div class="col-lg-12 col-12">
                <h2 class="textoslide">EL MEJOR SUSHI</h2>
              </div>
              <div class="col-lg-12 col-1 text-center">
                <button type="button" class="btn btn-danger btn-lg">Ordena ya</button>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
      <div style="height: 500px;" class="carousel-item ">
        <div  class="view">
          <img class="rounded mx-auto d-block w-100" src="img/2-min.jpeg"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div  class="carousel-caption subir">
          <div class="d-flex justify-content-center">
            <div class="col-lg-7 col-8">
              <img class="" src="img/logo.svg" alt="">
            </div>

            <div   class="row ">
              <div class="col-lg-12 col-12">
                <h2 class="textoslide">EL MEJOR SUSHI</h2>
              </div>
              <div class="col-lg-12 col-1 text-center">
                <button type="button" class="btn btn-danger btn-lg">Ordena ya</button>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" style="width:5%; position:absolute; top: 10%; " role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" style="width:5%; position:absolute; top: 10%; " role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper------------------------------------------------------------------------------------>

  <div class="container my-5 z-depth-1 subir2" id="nosotros">


    <!--Section: Content-->
    <section class="dark-grey-text">

      <div class="row pr-lg-5">
        <div class="col-md-7 mb-4">

          <div class="view">
            <img src="https://media.giphy.com/media/Ru6AkphoLHiXm/giphy.gif" class="img-fluid" alt="smaple image">
          </div>

        </div>
        <div class="col-md-5 d-flex align-items-center">
          <div>
            
            <h3 class="font-weight-bold mb-4">En umaki</h3>

            <p>Te servimos con la mejor calidad, precio y servicio. mejor que cualquie restaurante en la ciudad de saltillo, ven y disfruta de nuestra variedad de platillos.</p>
            <div class="text-center">
              <!-- <button type="button" class="btn btn-danger btn-rounded mx-0">Download</button> -->
            </div>
          </div>
        </div>
      </div>

    </section>
    <!--Section: Content-->


  </div>

  <div class="container z-depth-1 my-5 px-0" id="contacto">

    <!--Section: Content-->
    <section class="my-md-5" 
      style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(97).jpg'); background-size: cover; background-position: center center;">

      <div class="rgba-black-strong rounded p-5">

        <!-- Section heading -->
        <h3 class="text-center font-weight-bold text-white mt-3 mb-5">C o n t a c t a n o s</h3>

        <form class="mx-md-5" action="">

          <div class="row">
            <div class="col-md-6 mb-4">

              <div class="card">
                <div class="card-body px-4">

                  <!-- Name -->
                  <div class="md-form md-outline mt-0">
                    <input type="text" id="name" class="form-control">
                    <label for="name">Nombre</label>
                  </div>
                  <!-- Email -->
                  <div class="md-form md-outline">
                    <input type="text" id="email" class="form-control">
                    <label for="email">Correo</label>
                  </div>
                  <!-- Name -->
                  <div class="md-form md-outline mt-0">
                    <input type="text" id="telefono" class="form-control">
                    <label for="name">Telefono</label>
                  </div>
                  <!-- Message -->
                  <div class="md-form md-outline">
                    <textarea id="message" class="md-textarea form-control" rows="3"></textarea>
                    <label for="message">Tu mensaje</label>
                  </div>

                  <button type="submit" class="btn btn-danger btn-md btn-block ml-0 mb-0">Enviar</button>

                </div>
              </div>

            </div>
            <div class="col-5 col-sm-4 col-lg-4 offset-md-1 mt-md-4 mb-4 white-text">

              <h5 class="font-weight-bold">Direccion</h5>
              <p class="mb-0">Calle Xicoténcatl 523.</p>
              <p class="mb-0">Zona Centro </p>
              <p class="mb-4 pb-2">25000 Saltillo, Coah</p>

              <h5 class="font-weight-bold">Telefono</h5>
              <p class="mb-4 pb-2">844 534 35 80</p>

              <!-- <h5 class="font-weight-bold">Email</h5>
              <p>info@gmail.com</p> -->

            </div>
          </div>

        </form>

      </div>

    </section>
    <!--Section: Content-->


  </div>

<!-- Button trigger modalCookie
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalCookie1">Cookies</button>
-->
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
});
</script>
</body>
</html>
