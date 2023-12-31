<?php session_start();
if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

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
                <a button type="button" class="btn btn-outline-light" href="pagina2.php">Healthy</a button>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <button type="button" class="btn btn-outline-light">About</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Therapy</a></li>
                  <li><a class="dropdown-item" href="#">Challenge</a></li>
                  <li><a class="dropdown-item" href="#">Contact us</a></li>
                </ul>
              </li>
                <a href="logout.php" type="button" class="btn btn-outline-light">Log out</a>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

            </form>
          </div>
      </div>
    </nav>

    <div class="container">
      <header>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/freedom2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/freedom3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/freedo,4.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <section>
          <h1 class="paragraph2" class="center">Tips to Manage Anxiety</h1>
          <h2 class="title2">1. Question your thought pattern</h2>
          <p class="paragraph3">Unhelpful thoughts can take root in your mind and distort the severity of the situation.
            One way is to challenge your fears, ask if they’re true, and see where you can regain control.
          <h2 class="title2">2. Practice focused, deep breathing</h2>
          <p class="paragraph3">Measured breathing practices may help you manage immediate feelings of anxiety. Try
            breathing in for 4 counts and breathing out for 4 counts for 5 minutes total. By evening out your breath,
            you’ll slow your heart rate, which should help calm you down.
          <h2 class="title2">3.Exercise</h2>

          </p>
          <p class="paragraph3"> Sometimes, the best way to stop anxious thoughts is to leave a situation and get
            moving.
            Focusing on your body and not your mind may help relieve your anxiety. Low impact exercises like walking,
            yoga, and tai-chi can often help people to reduce stress and manage anxiety symptoms.

            Getting some quick exercise can help boost your moodTrusted Source and calm your mind.
          <h2 class="title2">4. Try therapy</h2>

          </p>
          <p class="paragraph3">Different psychotherapies can help you better understand your anxious feelings and
            develop
            coping strategies.

            For example, cognitive behavioral therapy (CBT) helps people learn different ways of thinking about and
            reacting to anxiety-causing situations. Research shows that CBT can be an effective methodTrusted Source of
            treating anxiety disorders.
          </p>
          </p>
          </p>

    </div>
    </div>

    <div class="card" style="width: 30rem;">
      <img src="images/freedom4.PNG" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Be yourself and make sure to find you!.</p>
      </div>
    </div>
    </div>


    </section>

    <footer class="bg-dark text-light py-4">
      <div class="prueba"> 
        <div class="row"></div>
        <div class="col-4">
          <h5>Social Networks</h5>
          <ul>
            <li>Facebook</li>
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