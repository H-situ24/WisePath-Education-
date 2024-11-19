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
    style="background: url(assets/img/partner/afmcbg.jpg)">
    <div class="container">
      <h2 class="breadcrumb-title">
        Armed Forces Medical College
        <span style="color: #fda31b; font-weight: bold">(AFMC-Pune)</span>
      </h2>
      <ul class="breadcrumb-menu">
        <li><a href="index.php">Home</a></li>
        <li class="active">(Details)</li>
      </ul>
    </div>
  </div>

  <div class="container my-5">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="mb-4">
          <u style="color: #fda31b">Armed Forces Medical College
            <span style="color: #003c68">AFMC</span>, Pune</u>
        </h1>
        <p class="lead">
          Established in 1962, AFMC Pune is one of India’s premier medical institutions under the Ministry of Defence. It is renowned for its top-tier medical education, cutting-edge research, and healthcare services dedicated to the armed forces and the nation. With a vision of fostering excellence, AFMC stands as a symbol of quality medical training and innovation.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <h2 class="mt-3 mb-3">Key Features and Highlights:</h2>
            <div class="accordion" id="afmcHighlights">
              <div class="accordion-item">
                <h2 class="accordion-header" id="educationHeading">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#educationCollapse" aria-expanded="true" aria-controls="educationCollapse">
                    1. Education and Academics
                  </button>
                </h2>
                <div id="educationCollapse" class="accordion-collapse collapse show" aria-labelledby="educationHeading" data-bs-parent="#afmcHighlights">
                  <div class="accordion-body">
                    <p>
                      AFMC offers a wide array of medical programs tailored to prepare students for careers in the armed forces:
                    </p>
                    <ul>
                      <li>MBBS (Bachelor of Medicine and Bachelor of Surgery)</li>
                      <li>MD and MS (Postgraduate Degrees)</li>
                      <li>Diploma courses in specialized fields</li>
                      <li>Postdoctoral fellowship programs</li>
                    </ul>
                    <p><strong>Entrance:</strong> Admission is competitive, requiring NEET-UG scores followed by an interview and screening process.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="healthcareHeading">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#healthcareCollapse" aria-expanded="false" aria-controls="healthcareCollapse">
                    2. Healthcare Services
                  </button>
                </h2>
                <div id="healthcareCollapse" class="accordion-collapse collapse" aria-labelledby="healthcareHeading" data-bs-parent="#afmcHighlights">
                  <div class="accordion-body">
                    <p>
                      AFMC offers specialized medical care for armed forces personnel and their families:
                    </p>
                    <ul>
                      <li><strong>Super-Specialties:</strong> Cardiology, Neurology, Orthopedics, and more.</li>
                      <li><strong>Emergency Care:</strong> 24/7 trauma and emergency services.</li>
                      <li><strong>Research:</strong> Significant contributions to military and public health research.</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Add remaining accordion items similarly -->
            </div>
          </div>
          <div class="col-lg-6 mt-5">
            <img src="assets/img/partner/4new.png" alt="AFMC Pune" class="img-fluid" />
            <h2 class="mt-3 mb-3">Why Choose AFMC Pune?</h2>
            <p>
              AFMC stands out as an institution for its exceptional medical education, robust research environment, and the chance to serve the nation. Graduates emerge as highly skilled, ethical professionals ready to contribute to society.
            </p>
            <h2 class="mt-3 mb-3"><u style="color: #fda31b">AFMC Pune Admission Process</u></h2>
            <p>
              Admissions are merit-based, with NEET-UG as the primary criterion. Candidates should stay informed about official updates for application details and examination notifications.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include "include/footer.php"; ?>