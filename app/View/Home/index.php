<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark text-light sticky-top" style="background-color: #0c0055;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Project-01</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Squad</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Other
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end of navbar -->

<!-- first layout -->
<div class="container-fluid text-center mt-3">
  <div class="row align-items-start">
    <div class="col">
      <p class="fs-4 mb-0 mt-4">The Blues</p>
      <p class="fs-4">Pride of London</p>
    </div>
    <div class="col">
      <img src="<?= $_SERVER['REQUEST_URI'] ?>img/chelsea-logo.jpg" alt="chelsea" style="height: 100px;" class="rounded-circle">
      <p class="fs-6">Chelsea Football Club</p>
    </div>
    <div class="col">
    <p class="fs-6 mb-0 mt-4">Since of:</p>
    <p class="fs-2">1905</p>
    </div>
  </div>

  <!-- carousel image -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= $_SERVER['REQUEST_URI'] ?>img/carousel/stamford-bridge-01.jpg" class="d-block w-100" alt="stamford-bridge" style="height: 600px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>One Life</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= $_SERVER['REQUEST_URI'] ?>img/carousel/villarreal-celebrations.jpg" class="d-block w-100" alt="squad" style="height: 600px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>One Love</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= $_SERVER['REQUEST_URI'] ?>img/carousel/one-life-one-love-one-club.jpg" class="d-block w-100" alt="stamford-bridge" style="height: 600px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>One Club</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end of carousel image -->
</div>
<!-- end of first layout -->