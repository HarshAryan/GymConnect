<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Gym Connect</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="./Style_admin.css" />
  <link rel="stylesheet" href="./mobile-style.css">
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <i class="fas fa-dumbbell fa-2x mx-3"></i>Gym Connect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="addinggym.php">ADD GYMS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addingproducts.php">ADD PRODUCTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gymnames.php">VIEW GYMS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products_av.php">VIEW PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewreviews.php">VIEW FEEDBACK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginpage.php">LOGOUT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    
    <div class="container text-left">
        <div class="row">
          <div class="col-md-3 col-sm-3  text-white">
            <h1>Admin Page</h1>
          </div>
        </div>
      </div>

    <div class="container text-center">
      <div class="row">
        <div class="col-md-7 col-sm-12  text-white">
          <h1>FITNESS HAS NEVER BEEN THIS ACCESSIBLE</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusamus eum dignissimos ipsa sequi expedita.
          </p>
        </div>
        <div class="col-md-5 col-sm-12  h-25">
          <img src="234.png" alt="Dumbell" />
        </div>
      </div>
    </div>
  </header>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
</body>

</html>