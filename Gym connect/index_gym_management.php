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
  <link rel="stylesheet" href="index_gym_management.css" />
  <link rel="stylesheet" href="./mobile-style.css">
</head>

<body>
  <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <i class="fas fa-book-reader fa-2x mx-3"></i>Gym Connect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="viewinggymselffeedback.php">FEEDBACK</a>
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
          <h1>Gym Page</h1>
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
  <main>
    <section class="section-1">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-6 col-12">
            <div class="pray">
              <img src="1234.jpg" alt="Pray" class="" />
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="panel text-left">
              <h1>About Gym Connect</h1>
              <p class="pt-4">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere iure adipisci harum ducimus accusantium, repudiandae aperiam
                voluptatum, id ex ratione omnis reiciendis possimus officiis.
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi vitae, tenetur quidem eum aliquid vel labore sint placeat
                ad deserunt consectetur fugit ullam. Eius unde neque ducimus obcaecati ipsum quos vero totam recusandae hic
                expedita nemo sit, illum harum. Quisquam impedit ullam itaque facere et ad molestiae quod reprehenderit excepturi!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-2 container-fluid p-0">
      <div class="cover">
        <div class="overlay"></div>
        <div class="content text-center">
          <h1>Some Features That Made Us Unique</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, eum?
          </p>
        </div>
      </div>
      <div class="container-fluid text-center">
        <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
          <div class="rect">
            <h1>2345</h1>
            <p>Happy Client</p>
          </div>
          <div class="rect">
            <h1>6784</h1>
            <p>Products Sold</p>
          </div>
          <div class="rect">
            <h1>1056</h1>
            <p>Affiliated Gyms</p>
          </div>
          <div class="rect">
            <h1>9152</h1>
            <p>Orders Placed</p>
          </div>
        </div>
      </div>

    </section>
    <section class="section-3 container-fluid p-0 text-center">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h1>Download Our App for all Platform</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum exercitationem alias perspiciatis omnis quod possimus odit
            voluptatum! Sunt ea quasi praesentium, tenetur doloribus animi obcaecati, sint nemo quae laudantium iusto unde
            eaque nostrum nobis voluptatum
          </p>
        </div>
      </div>
      <div class="platform row">
        <div class="col-md-6 col-sm-12 text-right">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              <i class="fas fa-desktop fa-3x py-2 pr-3"></i>
              <div class="text text-left">
                <h3 class="pt-1 m-0">Desktop</h3>
                <p class="p-0 m-0">On website</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 text-left">
          <div class="desktop shadow-lg">
            <div class="d-flex flex-row justify-content-center">
              <i class="fas fa-mobile-alt fa-3x py-2 pr-3"></i>
              <div class="text text-left">
                <h3 class="pt-1 m-0">On Mobile</h3>
                <p class="p-0 m-0">On Play Store</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 4 -->
    <section class="section-4">
      <div class="container text-center">
        <h1 class="text-dark">What our User's Say about us</h1>
        <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="team row ">
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="prashant.jpg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Prashant Gupta</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                  <p class="text-black-50">Works in TCS</p>
                </div>
              </div>
        </div>
        <div class="col-md-4 col-12">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <div class="card mr-2 d-inline-block shadow">
                      <div class="card-img-top">
                        <img src="hitesh.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Hitesh Kumar</h3>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                          minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                        </p>
                        <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                        <p class="text-black-50">CISF personnel</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="card  d-inline-block mr-2 shadow">
                      <div class="card-img-top">
                        <img src="gajendra.jpg" class="img-fluid rounded-circle w-50 p-4" alt="">
                      </div>
                      <div class="card-body">
                        <h3 class="card-title">Gajendra Mohit Tyagi</h3>
                        <p class="card-text">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                          minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                        </p>
                        <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                        <p class="text-black-50">Businessman</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>
        </div>
        <div class="col-md-4 col-12 text-center">
            <div class="card mr-2 d-inline-block shadow-lg">
                <div class="card-img-top">
                  <img src="sswatii.jpg" class="img-fluid border-radius p-4" alt="">
                </div>
                <div class="card-body">
                  <h3 class="card-title">Swati Sinha</h3>
                  <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda
                    minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!
                  </p>
                  <a href="#" class="text-secondary text-decoration-none">Go somewhere</a>
                  <p class="text-black-50">Junior manager at Google India</p>
                </div>
              </div>
        </div>
      </div>
    </section>

  </main>
  <footer>
    <div class="container-fluid p-0">
      <div class="row text-left">
        <div class="col-md-5 col-sm-5">
          <h4 class="text-light">About us</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum maxime ea similique illum corrupti</p>
          <p class="pt-4 text-muted">Copyright ©2021 All rights reserved | This website is made with by<br>
            <span> Harsh Aryan (20BCE1850)</span><br>
            <span> Manasa.R (20BCE1055)</span><br>
            <span> Ojasv (20bce1588)</span><br>
            <span> Yash Malhotra (20BCE1497)</span><br>
            <span> Pranshu Choubey (20BAI1069)</span><br>
            <span> Sanskar Srivastava (20BCE1023)</span>
          </p>
        </div>
        <div class="col-md-5 col-sm-12">
          <h4 class="text-light">Newsletter</h4>
          <p class="text-muted">Stay Updated</p>
          <form class="form-inline">
            <div class="col pl-0">
              <div class="input-group pr-5">
                <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-arrow-right"></i>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-2 col-sm-12">
          <h4 class="text-light">Follow Us</h4>
          <p class="text-muted">Let us be social</p>
          <div class="column text-light">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="./main.js"></script>
</body>

</html>