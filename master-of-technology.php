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
        Master of Technology</h2>
      <span style="color: #fda31b; font-weight: bold"> (M.Tech)</span>
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
              <h3 class="mb-20">About Master of Technology (M.Tech)</h3>
              <p class="mb-20">
                The Master of Technology (M.Tech) is a postgraduate program designed to equip students with advanced technical expertise and research capabilities in various engineering fields. This 2-year program offers specialization in areas such as Artificial Intelligence, VLSI Design, Structural Engineering, and more, preparing graduates for leadership roles in both industry and academia.
              </p>
              <p class="mb-20">
                The M.Tech curriculum integrates theory with hands-on practice, including lab work, industry projects, and a dissertation. Students gain a deeper understanding of their chosen specialization, enhancing their problem-solving abilities and innovation. The program is ideal for those seeking to delve into cutting-edge technologies and take on challenging roles in the engineering sector.
              </p>
              <div class="row">
                <div class="col-md-6 mb-20">
                  <img src="assets/img/department/01.jpg" alt="M.Tech Image 1" />
                </div>
                <div class="col-md-6 mb-20">
                  <img src="assets/img/department/02.jpg" alt="M.Tech Image 2" />
                </div>
              </div>
              <p class="mb-20">
                Graduates of the M.Tech program can work as research engineers, technical consultants, project managers, or educators. The degree also serves as a stepping stone for those wishing to pursue doctoral studies (Ph.D.) in their respective fields.
              </p>

              <h3 class="mb-3">How To Prepare For M.Tech Entrance Exams</h3>
              <ul class="department-single-list">
                <li><i class="far fa-check"></i>Familiarize yourself with the exam syllabus and concentrate on the core subjects related to your chosen specialization.</li>
                <li><i class="far fa-check"></i>Prepare for exams like GATE, which is a key entrance test for M.Tech admissions across top institutions.</li>
                <li><i class="far fa-check"></i>Revise undergraduate concepts, and regularly practice solving mock tests and sample papers to improve speed and accuracy.</li>
                <li><i class="far fa-check"></i>Maintain a disciplined study schedule, ensuring that all topics are covered thoroughly before the exam.</li>
              </ul>

              <h3 class="mb-3">Admission in M.Tech</h3>
              <p>
                Admission to M.Tech programs is primarily based on GATE scores. Some universities may also conduct interviews or counseling for selection. To be eligible, applicants must typically hold a B.Tech or equivalent degree in a relevant discipline, along with meeting the minimum percentage criteria set by the institutions.
              </p>

              <h3 class="mb-3">Scope of M.Tech</h3>
              <p>
                M.Tech opens a wide range of career opportunities in industries, academia, and research institutions. Graduates can work in specialized areas such as software engineering, automation, construction, R&D, and more. The degree is also valued in consulting, project management, and roles that require advanced technical expertise.
              </p>

              <h3 class="mb-3">Eligibility Criteria for M.Tech</h3>
              <h4 class="mb-3">Educational Qualification</h4>
              <p>Applicants must have a B.Tech, BE, or equivalent degree in a relevant engineering discipline with a minimum aggregate percentage as specified by the respective institution.</p>
              <h4 class="mb-3">Entrance Exams</h4>
              <p>The GATE exam is required for most institutions, though some universities may have their own entrance tests.</p>
              <h4 class="mb-3">Specialization Options</h4>
              <p>Specializations offered may include Computer Science, Mechanical Engineering, Civil Engineering, VLSI Design, and more, depending on the institution.</p>
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