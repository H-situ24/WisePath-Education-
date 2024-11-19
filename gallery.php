<?php include "include/header.php"; ?>

<div class="search-popup">
  <button class="close-search"><span class="far fa-times"></span></button>
  <form action="#">
    <div class="form-group">
      <input
        type="search"
        name="search-field"
        placeholder="Search Here..."
        required="" />
      <button type="submit"><i class="far fa-search"></i></button>
    </div>
  </form>
</div>

<main class="main">
  <div
    class="site-breadcrumb"
    style="background: url(assets/img/breadcrumb/01.jpg)">
    <div class="container">
      <h2 class="breadcrumb-title">Gallery</h2>
      <ul class="breadcrumb-menu">
        <li><a href="index.php">Home</a></li>
        <li class="active">Gallery</li>
      </ul>
    </div>
  </div>
  <section class="gallery">
    <div class="gallery-area py-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <div class="site-heading text-center">
              <span class="site-title-tagline"><i class="far fa-book-open-reader"></i> Gallery</span>
            </div>
          </div>
        </div>
        <div class="row popup-gallery">
          <div class="col-md-3 wow fadeInUp" data-wow-delay=".20s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img src="assets/img/gallery/p1.jpg" alt="" />
              </div>
              <div class="gallery-content">
                <a
                  class="popup-img gallery-link"
                  href="assets/img/gallery/p1.jpg"><i class="fal fa-plus"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 wow fadeInUp" data-wow-delay=".40s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img src="assets/img/gallery/p2.jpg" alt="" />
              </div>
              <div class="gallery-content">
                <a
                  class="popup-img gallery-link"
                  href="assets/img/gallery/p2.jpg"><i class="fal fa-plus"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 wow fadeInUp" data-wow-delay=".60s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img src="assets/img/gallery/p3.jpg" alt="" />
              </div>
              <div class="gallery-content">
                <a
                  class="popup-img gallery-link"
                  href="assets/img/gallery/p3.jpg"><i class="fal fa-plus"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 wow fadeInUp" data-wow-delay=".80s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img src="assets/img/gallery/p4.jpg" alt="" />
              </div>
              <div class="gallery-content">
                <a
                  class="popup-img gallery-link"
                  href="assets/img/gallery/p4.jpg"><i class="fal fa-plus"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 wow fadeInUp" data-wow-delay=".80s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img src="assets/img/gallery/p5.jpg" alt="" />
              </div>
              <div class="gallery-content">
                <a
                  class="popup-img gallery-link"
                  href="assets/img/gallery/p5.jpg"><i class="fal fa-plus"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 wow fadeInUp" data-wow-delay=".80s">
            <div class="gallery-item">
              <div class="gallery-img">
                <img src="assets/img/gallery/p6.jpg" alt="" />
              </div>
              <div class="gallery-content">
                <a
                  class="popup-img gallery-link"
                  href="assets/img/gallery/p6.jpg"><i class="fal fa-plus"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include "include/footer.php"; ?>