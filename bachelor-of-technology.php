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
    style="background: url(assets/img/course/course-img.jpg)">
    <div class="container">
      <h2 class="breadcrumb-title">
        Bachelor of Technology
        <span style="color: #fda31b; font-weight: bold"> (B.Tech)</span>
      </h2>
      <ul class="breadcrumb-menu">
        <li><a href="index.php">Home</a></li>
        <li class="active">(Details)</li>
      </ul>
    </div>
  </div>

  <div class="department-single-area py-120">
    <div class="container">
      <div class="department-single-wrapper">
        <div class="row">
          <div class="col-xl-8 col-lg-8">
            <div class="department-details">
              <h3 class="mb-20">About Bachelor of Technology (B.Tech)</h3>
              <p class="mb-20">
                The Bachelor of Technology (B.Tech) is an esteemed undergraduate program designed to provide students with comprehensive knowledge in engineering and technology. This 4-year program emphasizes technical proficiency, creativity, and problem-solving, ensuring that graduates are prepared for a successful career in the evolving engineering industry.
              </p>
              <p class="mb-20">
                B.Tech offers diverse specializations such as Mechanical Engineering, Civil Engineering, Computer Science, Electrical Engineering, and Artificial Intelligence. Students gain a thorough understanding of theoretical concepts, which are reinforced through practical learning experiences, including internships, laboratory work, and industry projects.
              </p>
              <div class="row">
                <div class="col-md-6 mb-20">
                  <img src="assets/img/department/01.jpg" alt="Engineering Image 1" />
                </div>
                <div class="col-md-6 mb-20">
                  <img src="assets/img/department/02.jpg" alt="Engineering Image 2" />
                </div>
              </div>
              <p class="mb-20">
                B.Tech graduates are highly sought after in industries like software development, manufacturing, construction, and automation. The program fosters essential skills in teamwork, leadership, and innovation, opening doors to a wide range of career opportunities.
              </p>

              <h3 class="mb-3">How To Prepare For Engineering Entrance Exams</h3>
              <ul class="department-single-list">
                <li><i class="far fa-check"></i>Thoroughly review the syllabus and focus on key subjects such as Physics, Chemistry, and Mathematics.</li>
                <li><i class="far fa-check"></i>Practice problem-solving techniques using sample papers and mock tests to enhance your speed and accuracy.</li>
                <li><i class="far fa-check"></i>Use trusted study resources and consider enrolling in coaching programs or online tutorials for better guidance.</li>
                <li><i class="far fa-check"></i>Stay consistent with your study routine and maintain a balanced approach to study and rest.</li>
              </ul>

              <h3 class="mb-3">Admission in B.Tech</h3>
              <p>
                Admission to B.Tech programs is generally based on performance in entrance exams such as JEE Main, JEE Advanced, or state-specific exams. Eligibility usually includes completion of higher secondary education (10+2) with Physics, Chemistry, and Mathematics, alongside meeting the institution’s minimum percentage requirements.
              </p>

              <h3 class="mb-3">Scope of B.Tech</h3>
              <p>
                A B.Tech degree offers vast career opportunities in multiple sectors, including information technology, manufacturing, infrastructure, robotics, and research. Graduates can become software engineers, project managers, civil engineers, data scientists, or consultants. Many also venture into entrepreneurship or continue higher studies to specialize in emerging technologies.
              </p>

              <h3 class="mb-3">Eligibility Criteria for B.Tech</h3>
              <h4 class="mb-3">Educational Qualification</h4>
              <p>Completion of higher secondary education (10+2) with subjects like Physics, Chemistry, and Mathematics.</p>
              <h4 class="mb-3">Entrance Exams</h4>
              <p>Entrance exams such as JEE Main, JEE Advanced, or state-level tests may be required for admission.</p>
              <h4 class="mb-3">Minimum Percentage</h4>
              <p>Most institutions require a minimum of 50-60% in the aggregate of the qualifying examination (10+2).</p>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 bg-light">
            <div class="department-sidebar">
              <div class="widget category">
                <h4 class="widget-title">Colleges</h4>
                <div class="category-list">
                  <a href="top-medical-college.php"><i class="far fa-long-arrow-right"></i>Top colleges</a>
                  <a href="top-medical-university.php"><i class="far fa-long-arrow-right"></i>Top universities</a>
                  <a href="top-NIT-college.php"><i class="far fa-long-arrow-right"></i>Top NIT colleges</a>
                  <a href="top-IIT-colleges.php"><i class="far fa-long-arrow-right"></i>Top IIT colleges</a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <div class="enroll-left wow fadeInLeft sticky-parent" data-wow-delay=".25s">
                  <div class="enroll-form">
                    <div class="enroll-form-header">
                      <h3 class="text-center">ENQUIRY FORM</h3>
                    </div>
                    <form action="#">
                      <div class="form-group">
                        <input
                          type="text"
                          name="name"
                          class="form-control"
                          placeholder="Your Name"
                          required />
                      </div>
                      <div class="form-group">
                        <input
                          type="email"
                          name="email"
                          class="form-control"
                          placeholder="Email Address"
                          required />
                      </div>
                      <div class="form-group">
                        <input
                          type="text"
                          oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                          name="phone"
                          class="form-control"
                          placeholder="Phone No."
                          required />
                      </div>
                      <div class="form-group">
                        <select class="form-select" name="service">
                          <option value="">
                            --------Select this Course------
                          </option>
                          <option value="1">BBA</option>
                          <option value="2">MBA</option>
                          <option value="3">BMS</option>
                          <option value="4">MHM</option>
                          <option value="4">BHMCT</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <textarea
                          name="message"
                          class="form-control"
                          placeholder="Type Message"
                          rows="4"
                          required></textarea>
                      </div>
                      <button class="theme-btn mx-auto">
                        Submit<i class="fas fa-arrow-right-long"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



</main>
<?php include "include/footer.php"; ?>