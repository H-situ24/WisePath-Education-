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
    style="background: url(assets/img/partner/Home-Banner-Image.jpg)">
    <div class="container">
      <h2 class="breadcrumb-title">
        Christian Medical College
        <span style="color: #fda31b; font-weight: bold">(CMC-Vellore)</span>
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
        <h1 class="mb-4 text-center">
          <u style="color: #fda31b">Christian Medical College <span style="color: #003c68">CMC</span>, Vellore</u>
        </h1>
        <p class="lead">
          Established in 1900, Christian Medical College (CMC) Vellore is one of India’s leading medical institutions. It is renowned for providing exceptional medical education, cutting-edge research, and quality healthcare services grounded in compassion and integrity.
        </p>

        <div class="row">
          <div class="col-lg-6">
            <h2 class="mt-3 mb-3">Key Features and Achievements of CMC Vellore:</h2>
            <div class="accordion" id="cmcFeatures">

              <!-- Feature 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    1. Education and Academics
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#cmcFeatures">
                  <div class="accordion-body">
                    <p>CMC Vellore offers a wide range of programs:</p>
                    <ul>
                      <li>MBBS (Bachelor of Medicine and Bachelor of Surgery)</li>
                      <li>B.Sc. Nursing</li>
                      <li>MD/MS (Doctor of Medicine/Master of Surgery)</li>
                      <li>DM/MCh (Super-specialty degrees)</li>
                      <li>Ph.D. programs in medical and clinical disciplines</li>
                    </ul>
                    <p><strong>Admission Process:</strong> Admissions are based on entrance exams like NEET (for undergraduate programs) and CMC's internal exams (for postgraduate courses).</p>
                  </div>
                </div>
              </div>

              <!-- Feature 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    2. Healthcare Services
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#cmcFeatures">
                  <div class="accordion-body">
                    <p>CMC offers comprehensive healthcare services:</p>
                    <ul>
                      <li><strong>Super-Specialty Departments:</strong> Cardiology, Neurology, Oncology, and more.</li>
                      <li><strong>Emergency Services:</strong> 24/7 trauma care and critical services.</li>
                      <li><strong>Research Excellence:</strong> Recognized for its medical research and publications.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Feature 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    3. Hospital Infrastructure
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#cmcFeatures">
                  <div class="accordion-body">
                    <p>CMC is equipped with state-of-the-art infrastructure:</p>
                    <ul>
                      <li><strong>Advanced Technology:</strong> Robotic surgery, CT, MRI, and diagnostic labs.</li>
                      <li><strong>Comprehensive Care:</strong> Outpatient and inpatient facilities serving thousands of patients daily.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- Feature 4 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    4. Research and Innovation
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#cmcFeatures">
                  <div class="accordion-body">
                    <p>CMC collaborates globally for medical research and policy advancements, pioneering innovative healthcare solutions.</p>
                  </div>
                </div>
              </div>

              <!-- Additional Features -->
              <!-- You can add remaining accordion items here following the same structure -->

            </div>
          </div>

          <div class="col-lg-6 mt-5">
            <img src="assets/img/partner/campuses-home-banner-image.png" alt="CMC Vellore" class="img-fluid">
            <h2 class="mt-3 mb-3">FAQs About CMC Vellore:</h2>
            <ul>
              <li><strong>How is admission conducted for MBBS?</strong> Based on NEET scores followed by counseling.</li>
              <li><strong>Is CMC Vellore recognized?</strong> Yes, by the Medical Council of India and WHO.</li>
              <li><strong>Are scholarships available?</strong> Yes, scholarships are provided based on merit and financial need.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include "include/footer.php"; ?>