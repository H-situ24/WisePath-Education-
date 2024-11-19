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
      <h2 class="breadcrumb-title">Request a Call</h2>
      <ul class="breadcrumb-menu">
        <li><a href="index.php">Home</a></li>
        <li class="active">Details</li>
      </ul>
    </div>
  </div>

  <div class="contact-area py-120">
    <div class="container">
      <div class="contact-content">
        <div class="row">
          <div class="col-md-6 con">
            <div class="contact-info">
              <div class="contact-info-icon">
                <i class="fal fa-map-location-dot"></i>
              </div>
              <div class="contact-info-content">
                <h5>Office Address</h5>
                <p>
                  Patna, New Delhi, Pune , Banglore
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 con">
            <div class="contact-info">
              <div class="contact-info-icon">
                <i class="fal fa-phone-volume"></i>
              </div>
              <div class="contact-info-content">
                <h5>Call Us</h5>
                <p>+91-7644030422
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 con">
            <div class="contact-info">
              <div class="contact-info-icon">
                <i class="fal fa-envelopes"></i>
              </div>
              <div class="contact-info-content">
                <h5>Email Us</h5>
                <p>
                  <a
                    href="mailto:maargedu@gmail.com"
                    class="__cf_email__"
                    data-cfemail="2c45424a436c49544d415c4049024f4341"> info@wisepath.com</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-info">
              <div class="contact-info-icon">
                <i class="fal fa-alarm-clock"></i>
              </div>
              <div class="contact-info-content">
                <h5>Open Time</h5>
                <p>Mon - Sat (10.00AM - 05.30PM)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>


<?php include "include/footer.php"; ?>