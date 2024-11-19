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
        style="background: url(assets/img/course/clg.jpg)">
        <div class="container">
            <h2 class="breadcrumb-title">
                Top Medical Colleges in
                <span style="color: #fda31b; font-weight: bold"> (India)</span>
            </h2>
            <ul class="breadcrumb-menu">
                <li><a href="index.php">Home</a></li>
                <li class="active">(Details)</li>
            </ul>
        </div>
    </div>
    <div class="container my-5">
        <h2 class="text-center mb-4">Top Medical Colleges in India</h2>
        <div class="row">
            <div class="col-md-8 mb-4 order-2 order-lg-1">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">AIIMS, New Delhi</h5>
                        <p class="card-text">
                            AIIMS New Delhi is India’s most prestigious medical institution, known for advanced medical education, research, and healthcare.
                        </p>
                        <a href="https://www.aiims.edu/en.html" target="_blank" class="btn btn-outline-primary btn-sm">Learn More</a>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">PGIMER, Chandigarh</h5>
                        <p class="card-text">
                            PGIMER offers specialized medical and surgical training, making it a top choice for postgraduate studies and research.
                        </p>
                        <a href="https://pgimer.edu.in/" target="_blank" class="btn btn-outline-primary btn-sm">Learn More</a>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Christian Medical College, Vellore</h5>
                        <p class="card-text">
                            CMC Vellore is respected for its community outreach and quality healthcare education, consistently ranking among the best.
                        </p>
                        <a href="https://www.cmch-vellore.edu/" target="_blank" class="btn btn-outline-primary btn-sm">Learn More</a>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Kasturba Medical College, Manipal</h5>
                        <p class="card-text">
                            KMC Manipal is a top private medical college known for its advanced infrastructure and research facilities.
                        </p>
                        <a href="https://manipal.edu/kmc-manipal.html" target="_blank" class="btn btn-outline-primary btn-sm">Learn More</a>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Armed Forces Medical College, Pune</h5>
                        <p class="card-text">
                            AFMC trains medical graduates for the Indian Armed Forces, combining rigorous training with military discipline.
                        </p>
                        <a href="https://www.afmc.nic.in/" target="_blank" class="btn btn-outline-primary btn-sm">Learn More</a>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">JIPMER, Puducherry</h5>
                        <p class="card-text">
                            Known for its MBBS and postgraduate programs, JIPMER is a top medical institution with advanced research facilities.
                        </p>
                        <a href="https://jipmer.edu.in/" target="_blank" class="btn btn-outline-primary btn-sm">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 order-1 order-lg-2">
                <div class="department-sidebar sticky-sidebar">
                    <div class="widget category">
                        <h4 class="widget-title">Colleges</h4>
                        <div class="category-list">
                            <a href="top-medical-college.php"><i class="far fa-long-arrow-right"></i>Top colleges</a>
                            <a href="top-medical-university.php"><i class="far fa-long-arrow-right"></i>Top university</a>
                            <a href="top-NIT-college.php"><i class="far fa-long-arrow-right"></i>Top NIT colleges</a>
                            <a href="top-IIT-colleges.php"><i class="far fa-long-arrow-right"></i>Top IIT colleges</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</main>

<?php include "include/footer.php"; ?>