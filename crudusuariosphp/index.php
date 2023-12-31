<?php session_start();

if(isset($_SESSION['usuario'])){
    header("Location: pagina2.php");
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title class="title">Well Being</title>
</head>

<body>
  <div class="container">
  </div>
  <header>
    <nav class="navbar navbar-expand-lg mynavbar">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <p class="principal">Well Being</p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <button type="button" class="btn btn-outline-light">Home</button>
                
               
              </li>
              <li class="nav-item">
                <a button type="button" class="btn btn-outline-light" href="pagina2.html">Tips</a button>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">

                  <button type="button" class="btn btn-outline-light">About</button>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Staff</a></li>
                  <li><a class="dropdown-item" href="#">Mision</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Vision</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <button type="button" class="btn btn-outline-light">Contact Us</button>
              </li>
            </ul>
              <input class="form-control me-2" id="buscador" type="search" placeholder="Search" aria-label="Search">
              <li class="nav-item">
                <a href= "login.php" type="button" class="btn btn-outline-light">log in</a>
              </li>
              <li class="nav-item">
                <a href="registrate.php" type="button" class="btn btn-outline-light">Sign up</a>
              </li>

          </div>
      </div>
    </nav>


    <h1 class="paragraph2">Do You Live with Anxiety?</h1>


    <header>

      <section>

        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6-xl-6">
            <img src="images/anxiety0.PNG" class="img-thumbnail" alt="images" width="400px" height="100px">

          </div>
          <div class="col-sm-12 col-md-6 col-lg-2-xl-2">
            <p class="paragraph3">Anxiety is the body’s response to real or perceived danger. It’s a natural process
              that every person deals with at one time or another. People often use anxiety as a blanket term for a
              general feeling of worry, nervousness, or unease. However, there’s a difference between feeling anxious
              and having an anxiety disorder, the latter of which includes many different conditions.

            <p class="paragraph3">For example, if you’re starting a new job, waiting for test results from a doctor, or
              driving in bad weather, you may feel anxious. This is a normal reaction to our emotions and happens to
              everyone. When anxiety stops being temporary fear or worry, it may be a sign that help is needed.

            </p>
            <p class="paragraph3"> A person who has an anxiety disorder may always be anxious or easily become anxious
              about many things. Temporary fear or worry is normal, but if the feelings associated with anxiety
              disorders linger, they can continue to get worse over time.

            </p>

            <p class="paragraph3">Through understanding the condition and seeking the right treatment, anxiety can be
              managed.
            </p>



            </p>
            </p>

          </div>
        </div>

        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/ansiedad4.jpg" class="img-thumbnail" alt="images" width="1100px" height="100px">
              <div class="carousel-caption d-none d-md-block">
                <h5>You can choose to be free.</h5>

              </div>
            </div>
            <div class="carousel-item">
              <img src="images/anxiety3.webp" class="img-thumbnail" alt="images" width="750px" height="10px">
              <div class="carousel-caption d-none d-md-block">
                <h5>My thoughts don't control me</h5>

              </div>
            </div>
            <div class="carousel-item">
              <img src="images/anxiety5.jpg" class="img-thumbnail" alt="images" width="1100px" height="100px">
              <div class="carousel-caption d-none d-md-block">
                <h5>This feeling is only temporary</h5>

              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>



      </section>


      <footer class="bg-dark text-light py-4">
        <div class="prueba">
          <div class="row"></div>
          <div class="col-4">
            <h5>Social Networks</h5>
            <ul>
              <li href="#" class:="fa fa-facebook">Facebook</li>
              <li>Instagram</li>
              <li>Twitter</li>
              <li>You Tube</li>
            </ul>

          </div>
          <div class="col-4">
            <h5>Information</h5>
            <ul>
              <li> Phone: 970 645 982 </li>
              <li> Address: 2720W 23rd </li>
              <li> e-mail: Help23@gmail.com</li>
            </ul>

          </div>
          <div class="col-4">
            <h5>Terms and rights reserved</h5>
            <p>&copy; 2023 Well Being. All rights reserved</p>

          </div>

        </div>


      </footer>






      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>