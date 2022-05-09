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

<!-- lorem ipsum -->
<div class="container">
  <div class="row align-items-start mt-4">
    <div class="col">
      <p class="fs-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae ullam officia, quos nobis at ex quo est quaerat nihil, commodi dolores delectus? Blanditiis consequatur nam, maxime expedita architecto ducimus distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit expedita vero ducimus laboriosam, accusantium laudantium ea, facilis error blanditiis non laborum dolor delectus ipsa labore ad reprehenderit deleniti? Eum, sed? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab officia ad totam dolorem quibusdam tempora placeat aut, dolores laudantium libero animi recusandae laborum sint in molestias facilis soluta architecto maxime!</p>
    </div>
    <div class="col">
      <p class="fs-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae ullam officia, quos nobis at ex quo est quaerat nihil, commodi dolores delectus? Blanditiis consequatur nam, maxime expedita architecto ducimus distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit expedita vero ducimus laboriosam, accusantium laudantium ea, facilis error blanditiis non laborum dolor delectus ipsa labore ad reprehenderit deleniti? Eum, sed? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab officia ad totam dolorem quibusdam tempora placeat aut, dolores laudantium libero animi recusandae laborum sint in molestias facilis soluta architecto maxime!</p>
    </div>
  </div>
<!-- end of lorem ipsum -->