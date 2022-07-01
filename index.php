<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>HICO-3</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
          <?php if(!isset($_SESSION['user'])) : ?>
          <form class="d-flex">
            <a href="src/login.php" class="btn btn-outline-light">Login</a>
          </form>
          <?php else: ?>
            <form class="d-flex">
            <a href="src/logout.php" class="btn btn-outline-light">Logout</a>
          </form>
          <?php endif; ?>
        </div>
      </div>
    </nav>

    <div
      id="carouselExampleCaptions"
      class="carousel slide"
      data-bs-ride="false"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="slide.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="slide.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="slide.png" class="d-block w-100" alt="..." />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <section class="container my-5">
      <div class="row" id="about">
        <div class="col-md-12 text-center">
          <h1>About Us</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
            repellat ex dolorum excepturi qui molestiae voluptas autem. Illo
            nulla corporis cumque eius neque dolorem numquam quo, adipisci ullam
            sapiente quam.
          </p>
          <hr />
        </div>
        <div class="col-md-4">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <img
              src="https://images.unsplash.com/photo-1655439000820-37e4e7d3a396?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=910&q=80"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary d-block">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <img
              src="https://images.unsplash.com/photo-1655439000820-37e4e7d3a396?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=910&q=80"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary d-block">Detail</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <img
              src="https://images.unsplash.com/photo-1655439000820-37e4e7d3a396?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=910&q=80"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary d-block">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-primary bg-opacity-10">
      <div class="container py-5" id="contact">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <h1 class="text-center">Contact Us</h1>
            <hr />
          </div>
          <div class="col-md-8">
            <form>
              <div class="mb-3">
                <div class="mb-3">
                  <label for="name" class="form-label">Your Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    aria-describedby="emailHelp"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Your Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    aria-describedby="emailHelp"
                    required
                  />
                  <div id="emailHelp" class="form-text>
                    We'll never share your email with anyone else.
                  </div>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Your Phone</label>
                  <input
                    type="number"
                    class="form-control"
                    id="phone"
                    aria-describedby="emailHelp"
                    required
                  />
                </div>
              </div>
              <button type="submit" class="btn btn-primary w-100">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="text-white">
      <div class="footer-top bg-secondary py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>HICO-3</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                perspiciatis quis quas, sint fugiat facilis dolor distinctio
                dolorum excepturi neque.
              </p>
            </div>
            <div class="col-md-3">
              <h5>Contact Us</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">A108 Adam Street</li>
                <li class="list-group-item">New York, NY 535022</li>
                <li class="list-group-item">United States</li>
                <li class="list-group-item"><b>Phone:</b> +1 5589 55488 55</li>
                <li class="list-group-item"><b>Email:</b> info@example.com</li>
              </ul>
              <div class="d-flex mt-2">
                <a href="#" class="btn btn-dark btn-rounded"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a href="#" class="btn btn-dark btn-rounded"
                  ><i class="fa fa-instagram"></i
                ></a>
                <a href="#" class="btn btn-dark btn-rounded"
                  ><i class="fa fa-twitter"></i
                ></a>
                <a href="#" class="btn btn-dark btn-rounded"
                  ><i class="fa fa-linkedin"></i
                ></a>
                <a href="#" class="btn btn-dark btn-rounded"
                  ><i class="fa fa-whatsapp"></i
                ></a>
              </div>
            </div>
            <div class="col-md-3">
              <h5>Our Newsletter</h5>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                libero perferendis similique ipsum possimus deserunt enim.
                Repellat quia perferendis assumenda?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom bg-dark py-4 text-center">
        <p class="m-0">© Copyright. HIMAKA X ASLABKOM </p>
        <small>Designed by <i class="bi bi-heart-fill"></i> <a href="#" class="text-white">HICO-3</a> </small>
      </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
