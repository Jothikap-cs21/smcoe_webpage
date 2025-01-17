<?php 
include("conn.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Stella Mary's College of Engineering</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://webdocs.pages.dev/assets/img/favicon.png" rel="icon">
  <link href="https://webdocs.pages.dev/assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- Preloader -->

  <div class="preloader">
    <img src="https://webdocs.pages.dev/assets/img/animlogo1.gif" alt="Loading...">
  </div>

  <style>
       /* Preloader Styles */
       .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999; /* Make sure it's on top of everything */
    }

  </style>
  
  <script>
    window.onload = function() {
        // Hide the preloader when the page is fully loaded
        document.querySelector('.preloader').style.display = 'none';
    }
</script>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1><a href="index.html">SMCE</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="https://9509e6cb.webdocs.pages.dev/SMCE%20ERP.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="Management.php">Management</a></li>
              <li><a href="principaldesk.php">Principal's Desk</a></li>
              <li><a href="oc.php">Organisation Chart</a></li>
              <li><a href="iqac.php">IQAC</a></li>
              <li><a href="strategicplan.php">Strategic Plan</a></li>
              <li><a href="codeofconduct.php">Code of Conduct</a></li>
              <li><a href="mandatorydisclosure.php">mandatory Disclosure</a></li>
              <li><a href="#">Facts & Figures</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>Academics</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Under Graduate</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="civil.php">Civil Engineering</a></li>
                  <li><a href="cse.php">Computer Science and Engineering</a></li>
                  <li><a href="ece.php">Electronics and Communication Engineering</a></li>
                  <li><a href="eee.php">Electrical and Electronics Engineering</a></li>
                  <li><a href="mech.php">Mechanical Engineering</a></li>
                  <li><a href="aids.php">Artificial Intelligence and Data Science</a></li>
                  <li><a href="sh.php">Science and Humanities</a></li>
                </ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Department - Post Graduate</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="mecse.php">M.E Comuputer Science and Engineering</a></li>
                    <li><a href="meise.php">M.E Industrial Safety Engineering</a></li>
                    <li class="dropdown"><a href="mba.php"><span>Master of Business Administration</span> <i class="bi bi-chevron-right"></i></a>
                      <ul>
                        <li><a href="mba.php">Operations Management</a></li>
                        <li><a href="mba.php">Human Resources Management</a></li>
                        <li><a href="mba.php">Finncial Management</a></li>
                        <li><a href="mba.php">Business Analytics Management</a></li>
                        <li><a href="mba.php">Marketing Management</a></li>
                        <li><a href="mba.php">Logistics & Supply Chain Management</a></li>
                      </ul>  
                  </ul>  
              <li><a href="placement_home.php">Placement</a></li>
              <li><a href="#">Academic Time-Table</a></li>
              <li><a href="#">Academic Calender</a></li>
              <li><a href="#">Admission Criteria</a></li>
              <li><a href="#">LMS</a></li>
            </ul>
            <li class="dropdown"><a href="#"><span>Research</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="research_codeofethics.php">Team & Code of Ethics</a></li>
                <li><a href="research_publications.php">Publications</a></li>
                <li><a href="https://webdocs.pages.dev/assets/docs/r&d/Starup-Policy.pdf">Startup Policy</a></li>
                <li><a href="research_seedmoney.html">Stella Mary's Seed Money</a></li>
                <li><a href="research_mou.php">MoU</a></li>
              </ul>
          <li><a class="nav-link scrollto" href="Sports.php">Sports</a></li>
          <li class="dropdown"><a href="#"><span>Students' Zone</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li class="dropdown"><a href="#more-services" href="#"><span>Clubs & Cells</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="culturalclub.php">Cultural Club</a></li>
                <li><a href="#">Literary Club</a></li>
                <li><a href="#">Yoga Club</a></li>
                <li><a href="cfi.php">Centre For Innovation</a></li>
                <li><a href="#">National Cadet Corps</a></li>
                <li><a href="#">Juniour Red Cross</a></li>
                <li><a href="#">Grievance Redressal Cell</a></li>
                <li><a href="#">Anti Ragging</a></li>
                <li><a href="#">Entrepreneurship Development Cell</a></li>
                <li><a href="#">Environmental Club</a></li>
                <li><a href="#">Institution Innovation Council</a></li>
                <li><a href="#">Internal Complaint Cell</a></li>
                <li><a href="research_codeofethics.php">Research and Development Cell</a></li>
                <li><a href="placement_home.php">Career Guidance and Placement Training Cell</a></li>
                <li><a href="#">Internal Complaint Cell</a></li>
                <li><a href="mediacell.php">Media Cell</a></li>
              </ul>
              <li><a href="#">Professional Ethics</a></li>
              <li><a href="#">Capability Enhancement</a></li>
              <li><a href="#">E-Learning</a></li>
              <li><a href="#">Internship</a></li>
              <li><a href="#">Campus Activities</a></li>
              <li><a href="https://www.infomirrorscloud.com/smce.webopac/Imt_frm_User_Login.aspx">Library</a></li>
              <li><a href="https://nptel.ac.in">NPTEL</a></li>
              <li><a href="https://delnet.in">DELNET</a></li>
              <li><a href="alumni.php">Alumni Association</a></li>
              <li><a href="#">SWYAM - MOOC</a></li>
                <ul>
          <li><a class="nav-link scrollto" href="placement_home.php">Placement</a></li>
          <li><a class="nav-link scrollto" href="iqac.php">IQAC</a></li>    
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
          </ul>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="mandatorydisclosure.php">Mandatory Disclosure</a></li>
          <li><a class="getstarted scrollto" href="https://camps.stellamaryscoe.edu.in/CAMPS/CommonJSP/signin.jsp">CAMPS LOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Civil Engineering</h2>
          </div class="text-justify">
          <p>Department specializes in the design, construction, and maintenance of physical structures and infrastructure, such as buildings, bridges, roads, and water supply systems </p>
    
          
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

   
     
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-7">
          <img src="https://webdocs.pages.dev/assets/img/CIVIL/civil.jpg" class="img-fluid" alt="">
          
        </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Head of the Department</h5>
            <p><a href="faculty.php?staff_id=1131"
                    <?php 
                    printf("%s", $data["first_name"]);
                    ?>">Dr.R.K.Madhumathi</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Total Intake</h5>
            <p>60</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Budding Engineers</h5>
            <p>200</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Proud Alumni</h5>
            <p>250</p>
          </div>

        </div>
        <h3> Overview</h3>
          <p class="text-justify">
            Department of Civil Engineering was started in the academic year 2014-2015 with an aim of promoting high quality education in the field of Civil Engineering. The department currently offers Bachelor of Engineering (B.E.) degree program in Civil Engineering with an intake of 60 students. The department has well equipped laboratory facilities and highly qualified faculty members having rich experience in teaching with different specialization. The faculty members have constantly been involving themselves in research in addition to guiding students through innovative teaching learning techniques.  
        </p>
      </div>

    </div>
  </section><!-- End Cource Details Section -->

  <!-- ======= Cource Details Tabs Section ======= -->
  <section id="cource-details-tabs" class="cource-details-tabs">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Vision & Mission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Faculty</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Non-Teaching</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Laboratory</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Industrial Visit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Achievements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Syllabus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Program Outcome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Calender</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Newsletter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-11">Magazine</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9 mt-4 mt-lg-0">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4 class="title"><a href="">VISION</a></h4>
                <p class="description text-justify">To provide world class technical education with ethics and professionalism and to create civil engineer with high technical competencies who would full fill the challenges and needs of today’s scenario with the help of green technology.</p>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-10 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title"><a href="">MISSION</a></h4>
                <li class="text-justify">To impart quality technical education, imbibing lifelong learning and concern for environment.</li>
                <li class="text-justify">To create job opportunities in research, industry and consultancy both nationally and internationally.</li>
                <li class="text-justify">To provide technical skills, leadership qualities and team spirit among the students.</li>
                <li class="text-justify">To establish center of excellence in emerging areas of research to find solution to the problem faced by the society.</li>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section --></div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-1.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row">
                <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Teaching Faculty</h2>
            <p>The pillars of Civil Engineering</p>
          </div>
  
          <div class="row justify-content-center">
          
          <?php
            $sql = "SELECT CONCAT('https://webdocs.pages.dev/assets/img/faculty/',staff_master.staff_id,'.png') imglink,staff_master.staff_id AS staff_id,master_desigination.desigination desigination, GROUP_CONCAT(staff_promotion.md_id), staff_master.legend , CONCAT(staff_master.first_name,' ',staff_master.last_name)first_name , staff_master.department_id,master_department.dept_name , staff_photo.photo ,  staff_promotion.status, staff_qualification.status,staff_promotion.from_date, GROUP_CONCAT(deg_type ORDER BY staff_qualification.yop) deg_type FROM camps.staff_master INNER JOIN camps.master_department ON (staff_master.department_id = master_department.department_id  AND staff_master.sc_id=1) INNER JOIN camps.staff_photo ON (staff_photo.staff_id = staff_master.staff_id) INNER JOIN camps.staff_promotion ON (staff_promotion.staff_id = staff_master.staff_id) INNER JOIN camps.staff_qualification ON (staff_qualification.staff_id = staff_master.staff_id AND staff_qualification.status=1) INNER JOIN camps.master_desigination ON master_desigination.md_id=staff_promotion.md_id INNER JOIN camps.staff_degree_type ON (staff_qualification.degree_id = staff_degree_type.degree_id) WHERE staff_promotion.status=2 AND staff_degree_type.degree_id NOT IN (23,24) AND  staff_master.working_status='working' AND master_department.department_id='7' GROUP BY staff_master.staff_id;";
            $result = mysqli_query($dbcon, $sql);
            if (mysqli_num_rows($result) > 0) {
                while($data = mysqli_fetch_assoc($result)) {
                    
            ?>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                  <img src="<?php printf("%s", $data['imglink']);?>" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-file-earmark-bar-graph"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                  </div>
                  <div class="member-info">
                    <h4 class="title"><a href="faculty.php?staff_id=<?= $data['staff_id']?>">
                    <?php 
                    printf("%s", $data["first_name"]);
                    ?>
                    </a></h4>
                    <span><?php 
                    printf("%s", $data["desigination"]);
                    ?></span>
                  </div>
                </div>
              </div>
            <?php
    } 
}     
            ?>

            

            
          </div>
        </div>
      </section><!-- End Team Section -->
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row">
                <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Non-Teaching Faculty</h2>
            <p>The supporting hands of Civil Engineering</p>
          </div>
  
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="assets/img/CIVIL/SATHEESH.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="">Mr.Satheesh</a></h4>
                  <span>Lab Instructor</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="assets/img/CIVIL/JOHNABISHA.png" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4 class="title"><a href="">Mrs.John Abisha</a></h4>
                  <span>Lab Instructor</span>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <div class="member-img">
                    <img src="assets/img/CSE/Gopi.png" class="img-fluid" alt="">
                    <div class="social">
                      <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                  <div class="member-info">
                    <h4 class="title"><a href="">Mr.V.Gopi</a></h4>
                    <span>Lab Instructor</span>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section><!-- End Team Section -->
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Environmental Engineering Laboratory</h3>
                  <p class="fst-italic text-justify">In this laboratory the students will be able to know the common environmental experiements relating to water and wastewater quality.</p>
                  <strong>Experiments</strong> <li class="text-justify"> Determination of Ammonia Nitrogen in wastewater, Coagulation and Precipitation process for treating waste water, Determination of suspended, volatile, fixed and settleable solids in wastewater,B.O.D. test,C.O.D. test, Nitrate in wastewater,Phosphate in wastewater, Determination of Calcium, Potassium and Sodium, Heavy metals determination - Chromium, Lead and Zinc.(Demonstration only)</li>
                  <strong>Equipments</strong> <li class="text-justify"> Oxygen analyzer,Spectrophotometer, Ion – selective electrode, Sodium Potassium Analyzer – Flame Photometer 5.Gas Chromatography, Atomic absorption spectroscopy (Ni, Zn, Pb),Nephlo-turbidity me ter, BOD Analyser,COD Analyser,Jar Test Apparatus.</li>
                       
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/CM.png" alt="" class="img-fluid">
                </div>
              </div>
            
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Soil Mechanics Laboratory</h3>
                  <p class="fst-italic text-justify">Students will able to identify physical and mechanical properties of soil in the field and laboratory settings. This include preparing soil samples for testing, performing the test, collecting and analyzing data, interpreting the results and writing technical reports.</p>
                  <strong>Experiments</strong> <li class="text-justify"> Determination of index properties, Permeability determination (constant head and falling head methods), One dimensional consolidation test (Determination of co-efficient of consolidation only),Direct shear test in cohesion-less soil,Unconfined compression test in cohesive soil,Laboratory vane Shear test in cohesive soil ,Tri-axial compression test in cohesion-less soil(Demonstration only),California Bearing Ratio Test.</li>
                  <strong>Equipments</strong> <li class ="text-justify"> Sieves,Hydrometer,Liquid and plastic limit apparatu, Shinkage limit apparatus,Proctor compaction apparatus, UTM of minimum of 20KN capacity,Direct shear apparatus , Thermeometer, Field den sity measuring device ,Triaxial shear apparatus , Three gang consolidation test device,</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Strength of materials Laboratory</h3>
                  <p class="fst-italic text-justify">Demonstrating the basic principles in the area of strength and mechanics of materials and structural analysis to the students through a series of experiments.</p>
                  <strong>Experiments</strong> <li class="text-justify"> Tension test on mild steel rod,Compression test on wood, Double shear test on metal,Torsion test on mild steel rod , Impact test on metal specimen (Izod and Charpy) , Hardness test on metals (Rockwell and Brinell Hardness Tests), Deflection test on metal beam,Compression test on helical spring, Deflection test on carriage spring,Test on Cement.</li>
                  <strong>Equipments</strong> <li class="text-justify"> UTM of minimum 400 kN capacity,Torsion testing machine for steel rods,Izod impact testing machine,Hardness testing machine, Beam deflection test apparatus,Extensometer,Compressometer, Dial gauges,Le Chatelier’s apparatus,Vicat’s apparatus, Mortar cube moulds.</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Survey Laboratory</h3>
                  <p class="fst-italic text-justify">Students learn techniques for gathering field data with both traditional and modern instruments and demonstrate their proficiency on weekly lab exercises and a comprehensive semester project and final exam.</p>
                  <strong>Experiments</strong> <li class="text-justify"> Study of theodolite,Measurement of horizontal angles by reiteration and repetition and vertical angles,Theodolite survey traverse,Heights and distances - Triangulation - Single plane method,Tacheometry - Tangential system - Stadia system - Subtense system,Setting out works - Foundation marking - Simple curve (right/ left-handed) - Transition curve, Field observation for and Calculation of azimuth,Field work using Total Station.</li>
                  <strong>Equipments</strong> <li class="text-justify"> Total Station,Theodolites Atleast 1 for every,Dumpy level, Plane table,Pocket stereoscope,Ranging rods,Levelling staff , Cross staff, Chains,Tapes, Arrows, Hand held GPS.</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Concrete and Highway Laboratory</h3>
                  <p class="fst-italic">The behavior and properties of structural materials, e.g. concrete, asphalt and steel can be better understood by detailed, well-designed, first hand experience with these materials. The students will become familiar with the nature and properties of these materials by conducting laboratory tests.</p>
                  <strong>Experiments</strong> <li class="text-justify"> Tests on fresh concrete,Test on hardener concrete,Theodolite survey traverse,Test on aggregates, Tests on bitumen, Test on bitumen mixes.</li>
                  <strong>Equipments</strong> <li class="text-justify"> Concrete cube moulds,Concrete cylinder moulds,Concrete Prism moulds, Sieves,Concrete Mixer,Slump cone,Flow table,Vibrator,Trovels and planers, UTM – 400 kN capacity,Vee Bee Consistometer,Aggregate impact testing machine,CBR Apparatus,Los - Angeles abrasion testing machine, Marshall Stability Apparatus.</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Hydraulics Engineering laboratory</h3>
                  <p class="fst-italic">The main objective of this lab is to build fundamental concepts combined with strong analytical and problem solving abilities that would form the backbone of many other subjects in higher educations</p>
                  <strong>Experiments</strong> <li class="text-justify"> Flow measurement,Losses in pipes,Pumps,Turbines, Determination of metacentric height.</li>
                  <strong>Equipments</strong> <li class="text-justify"> Bernoulli’s theorem – Verification Apparatus, Calculation of Metacentric height water tank Ship model with accessories,Measurement of velocity Pitot tube assembly, Venturimeter,Orificemeter,Flow through mouthpiece, Centrifugal pump assembly with accessories (single stage), Centrifugal pump assembly with accessories (multi stage), Reciprocating pump assembly with accessories, Deep well pump assembly set with accessories.</li> 
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/CSE/BD.jpg" alt="" class="img-fluid">
                </div>
              </div>
          
            </div>
            <div class="tab-pane" id="tab-5">
              <div class="row">
                <div class="col-lg-8 details order-2 order-lg-1">
                  
<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">



    <div class="row">
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">Industrial Visit</h3>
        <div class="resume-item">
          <h4>Department of Civil Engineering</h4>
          <h5>2019</h5>
          
          <ul>
            <li> Civil engineering students Industrial Visit on Alipuram Erectors, Kollam on 01/10/2019.</li>
            <li> Civil engineering students Industrial Visit on Bridge Project, Azhikal on 03/10/2019. </li>
            <li> Stella Mary’s civil engineering students Two days industrial visit to various sites for at Moonar, Wayanad on 22/02/2019.</li>
            <li> Three days Educational Tour was organized to Wayanad, Moonar, and Kochi on 12/03/2019.</li>
            <li> One day industrial visit to Neyyar dam and Pechiparai on 02/03/2019.</li>
          </ul>
        </div>
        <div class="resume-item">
        
          <h5>2018</h5>
          
          <ul>
            <li>SMCE students Industrial Visit on Seshasayee. Paper &boards ltd on 08-09-2018.</li>
            <li>Industrial Visit on Road Construction in hilly areas at kodaikanal on 03/08/18.</li>
            <li>Industrial Visit on Road Construction in hilly areas at kodaikanal on 01/09/18.</li>
            <li>Industrial visit Seshasayee.paper &boards ltd.unit on 28/07/2018.</li>
            <li>Educational visit to Sankar Cement factory on 17/03/2018.</li>
            <li>Industrial Visit 1.Educational visit to SPK and Co.,Kapallur, Madurai on 12/03/2018.</li>
            <li>Five days Eduactional Tour was Organised at Thekadi,Iduki,Mummar, Ooty, Kochin on 17/02/2018.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h5>2017</h5>
          <ul>
            <li>Industrial Visit on Precast Production Company, Nagercoil on 08-08-2017.</li>
            <li>Industrial visit to Pechiparai dam, Puthen Dam , Perunchani Dam(Drainage gallery visit for the students) Mathur Thottipalam (Aqueduct) on 16/09/2017.</li>
            <li>Industrial Visit Our students visited SH-46 Road work. Nagercoil on 16/09/2017.</li>
          </ul>
        </div>
        <div class="resume-item">
          <h5>2016</h5>
          <ul>
            <li>One day industrial visit to cement factory, Tirunelveli on 16/08/2016.</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Resume Section -->


            </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-6">
              <div class="row">
                <div class="col-lg-12 details order-2 order-lg-1">
                  <h3>Achievements</h3>
                  <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                  <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                 <!-- Default Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      2019-2020
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>IrinSweeta, RajaSree Raj - National Conference</strong> <li>"Effects of plastic used in concrete" won II Prize in National Conference, held on 18.10.2019 organized by Marthandam College of Engineering and Technology</li>
                      <strong>R.Abishiya - Connection</strong> <li>Won I Prize held on 14.03.2020 organized by Ponjesly College Of Engineering</li>
                      <strong>Winfred	- Technical Quiz</strong> <li>Won I Prize held on 14.03.2020 organized by Ponjesly College Of Engineering</li>
                      <strong>Subin.I	- Brick Bonding</strong> <li>Won II Prize held on 07.03.2020 organized by Rohini College Of Engineering</li>
                      <strong>Subin.I	- Super Plumber</strong> <li>Won II Prize held on 07.03.2020 organized by Rohini College Of Engineering</li>
                      <strong>J.Jamila - Rose	Technical Quiz</strong> <li>Won I Prize held on	02.03.2020 organized by Anna University-Konam</li>
                      <strong>R.Abisha -	Technical Quiz	</strong> <li>Won II Prize held on 10.10.2019 organized by Universal College Of Engineering And Technology</li>
                      <strong>R.Abishya, V.Bindhu, S.Anu -	Quiz</strong> <li>Won I Prize held on 14.03.2020 organized by Ponjesly College Of Engineering</li>
                      <strong>Subin, Pavithran, Sam Berfin, Subin.I	- Quiz</strong> <li>Won I Prize held on 20.09.2019 organized by Stella Mary’s College Of Engineering</li>
                      

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      2018-19
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Kohila, Blessy - National Conference</strong> <li>"Sustainable Building Materials" won I Prize in National Conference, held on 22.03.2019 organized by Arunachala College of Engineering For Woman</li>
                      <strong>S.S.Anu, Minimol, Ashminm Rejith - Connection</strong> <li>Won II Prize held on 08.03.2019 organized by Mar Ephraem College Of Engineering and Technology</li>
                      <strong>S.Alan, I.R.Nizanth, Sujith	- Technical Event</strong> <li>Won I Prize held on 08.02.2019 organized by Bethlahem Institute Of Engineering</li>
                      <strong>B.Nithish Nelson, M. IrinSweeta, Mini mol, Ram Prabu	- Technical Event</strong> <li>Won II Prize held on 08.02.2019 organized by Cape Institute Of Technology</li>
                      <strong>S.Alan,I.R.Nizanth - Quiz</strong> <li>Won II Prize held on 14.09.2018 organized by Thamirabharani Engineering College</li>
                      
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      2017-18
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    
                      <strong>Raja Prija, Jenisha - National Conference</strong> <li>"Plastic as a soil stabilizer" won II Prize in National Conference, held on 16.09.2017 organized by Rohini College of Engineering</li>
                      <strong>Akash, Sahaya Abith Akash - Quiz</strong> <li>Won II Prize held on 27.03.2018 organized by Noorul Islam Centre For Higher Education</li>
                      <strong>Subin -	Technical Connections</strong> <li>Won I Prize held on 22.08.2017 organized by Stella Mary’s College Of Engineering</li>
                      <strong>J.Karishma, Josema Koshy -	Connection</strong> <li>Won I Prize held on 19.08.2016 organized by Mar Ephraem College Of Engineering and Technology</li>
                      <strong>J.Karishma,Josema Koshy - Quiz</strong> <li>Won II Prize held on 19.08.2016 organized by Mar Ephraem College Of Engineering and Technology</li>
                      

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      2016-17
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Kavitha, Karishma - National Conference</strong> <li>"Solar Building" won III Prize in National Conference, held on 25.03.2017 organized by Maria College of Engineering & Technology</li>
                      <strong>J.Karishma, Josema Koshy	- Connection</strong> <li>Won I Prize held on 09.08.2016 organized by Mar Ephraem College Of Engineering And Technology	</li>
                      <strong>J.Karishma, Josema Koshy -	Quiz</strong> <li>Won II Prize held on 09.08.2016 organized by Mar Ephraem College Of Engineering And Technology</li>
                      

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      2015-16
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Kavitha, Ancelin Suga - National Conference</strong> <li>"Ground Improvement Techniques" won I Prize in National Conference, held on 01.04.2016 organized by C.S.I. Institute of Technology</li>
                      <strong>Shifino G Sekhar, Mathana - National Conference</strong> <li>"Green Building" won II Prize in National Conference, held on 05.03.2016 organized by Bethlahem Institute of Engineering</li>
                      
                    </div>
                  </div>
                </div>
                <!--<div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      2016
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>George Stalin Britto</strong> <li>third year student presented a paperentitled "A Secured Dynamic Multi-Keyword Ranked SearchScheme Over Encrypted Cloud Data” and secured secondprize held at Marian Engineering College, Trivandrum on23rd August 2016. </li>
                      <strong>Anusha.V</strong> <li>Final year Student presented a paper entitled"Providing User Security Guarantees in Public InfrastructureClouds" held at Marian Engineering College, Trivandrum on23rd August 2016. </li>
                      <strong>S.Sahaya Aswin Binu</strong> <li>Third year student presented a paperentitled "Efficient Wireless Multimedia Multicast inMulti-rate Multichannel Mesh Network" held at MarianEngineering College, Trivandrum on 23rd August 2016. </li>
                      <strong>A.NaveenAmreesh</strong> <li> Final year student presented a papertitled "Real Time Big Data Delivery in Wireless Network"held at Marian Engineering College, Trivandrum on 23rdAugust 2016.</li>
                      <strong>B.Anusha</strong> <li> third year CSE presented a paper entitled"LI-FI TECHNOLOGY" in Arunachala College ofEngineering for Women on 16th March 2016.</li>
                      <strong>M.Sahaya Nishanthini</strong> <li>third year has participated andsecured first prize in the Tech Connect Contest of the IETsponsored National Level Technical Symposium held atArunachala College of Engineering for Women on 16thMarch 2016. </li>
                      <strong>Sheeba Ann Thomas</strong> <li> third year presented a paper entitled "Effective Machine to Machine Communication in Smart Cord Network" in Stella Mary’s College of Engineering on 10th March 2016.</li>
                      <strong> I.Nagorin</strong> <li>third year presented a paper entitled "Effective Machine to Machine Communication in Smart Cord Network" in Stella Mary’s College of Engineering on 10th March 2016. </li>
                      <strong>M.Sahaya Nishanthini</strong> <li>has attended one day workshop on "Personality Development" in Noorul Islam Centre for Higher Education on 1st March 2016. </li>
                      <strong>A.Naveen Amrish</strong> <li>third year presented a paper entitled “A General Self Organized Tree Based-Energy Balance Routing Protocol for Wireless Sensor Networks" in Bethlahem Institute of Engineering on 27/2/2016. </li>
                      <strong>A.Naveen Amrish</strong> <li> has attended two days workshop on "Android Mobile Application Development" in Rohini College of Engineering on 18/2/2016 - 19/2/2016.</li>
                      <strong>Third year CSE girls</strong> <li>attended one day workshop on "Mobile Application Development” organized by Arunachala College of Engineering on 8th February 2016. </li>
                    </div>
                  </div>
                </div>-->
              </div><!-- End Default Accordion Example -->
                
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-7">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-4 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/civil/syllabus/2021.pdf">Regulation 2021</a></h4>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bx-world"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/civil/syllabus/2017.pdf">Regulation 2017</a></h4>
                  </div>
                </div>
            </div>
          </div>
        </section><!-- End Services Section --></div>
                </div>
              </div>
              <div class="tab-pane" id="tab-8">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">
            <div class="row">
              <div class="col-md-7 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-journal-richtext"></i></div>
                  <h4 class="title"><a href="">Programme Outcomes</a></h4>
                  </div>
              </div>
              <div class="col-md-7 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-journal-richtext"></i></div>
                  <h4 class="title"><a href="">Program Specfic Outcomes</a></h4>
                  </div>
                </div>
            </div>
          </div>
        </section><!-- End Services Section --></div>
                </div>
              </div>
              <div class="tab-pane" id="tab-9">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/civil/calender/CIVIL-2018-19-odd.pdf">2018-19 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/civil/calender/CIVIL-2018-19-even.pdf">2018-19 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/civil/calender/CIVIL-2019-20-odd.pdf">2019-20 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/civil/calender/CIVIL-2019-20-even.pdf">2019-20 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/civil/calender/CIVIL-2020-21-odd.pdf">2020-21 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/civil/calender/CIVIL-2020-21-even.pdf">2020-21 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="https://webdocs.pages.dev/assets/docs/civil/calender/CIVIL-2021-22-odd.pdf">2021-22 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2021-22 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2022-23 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2022-23 EVEN</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-flex align-items-center mb-5 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2023-24 ODD</a></h4>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 d-md-flex align-items-stretch mb-lg-0 mb-lg-0">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><i class="bx bi-calendar4-week"></i></div>
                  <h4 class="title"><a href="">2023-24 EVEN</a></h4>
                </div>
              </div>
            </div>
          </div>
        </section><!-- End Services Section --></div>
                </div>
              </div>
              <div class="tab-pane" id="tab-10">
                <div class="row">
                    <section id="features" class="features">
                        <div class="container">
                  
                          <div class="section-title" data-aos="fade-up">
                            <h2>Newsletter</h2>
                            <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                          </div>
                  
                          <div class="row" data-aos="fade-up" data-aos-delay="300">
                            <div class="col-lg-3 col-md-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ffbb2c;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume1issue1.pdf">Volume I, Issue 1 : Dec 2017</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #5578ff;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume1issue2.pdf">Volume I, Issue 2 : April 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume2issue1.pdf">Volume II, Issue 1 : Dec 2018</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #e361ff;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume2issue2.pdf">Volume II, Issue 2 : April 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #47aeff;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume3issue1.pdf">Volume III, Issue 1 : Dec 2019</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ffa76e;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume3issue2.pdf">Volume III, Issue 2 : April 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #11dbcf;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume4issue1.pdf">Volume IV, Issue 1 : Dec 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #4233ff;"></i>
                                <h3><a href="https://webdocs.pages.dev/assets/docs/civil/newsletter/Civolume4issue2.pdf">Volume IV, Issue 2 : April 2021</a></h3>
                              </div>
                            </div>
                            <!--<div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #b2904f;"></i>
                                <h3><a href="">APRIL 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #b20969;"></i>
                                <h3><a href="">NOVEMBER 2020</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #ff5828;"></i>
                                <h3><a href="">APRIL 2021</a></h3>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-4 mt-4">
                              <div class="icon-box">
                                <i class="ri-calendar-todo-line" style="color: #29cc61;"></i>
                                <h3><a href="">NOVEMBER 2021</a></h3>
                              </div>
                            </div>-->
                          </div>
                  
                        </div>
                      </section><!-- End Features Section -->
                      </div>
                      </div>
                      <div class="tab-pane" id="tab-11">
                        <div class="row">
                            <section id="features" class="features">
                                <div class="container">
                          
                                  <div class="section-title" data-aos="fade-up">
                                    <h2>Magazine</h2>
                                    <!--<p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>-->
                                  </div>
                          
                                  <div class="row" data-aos="fade-up" data-aos-delay="300">
                                    <div class="col-lg-3 col-md-4">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #ffbb2c;"></i>
                                        <h3><a href="https://webdocs.pages.dev/assets/docs/civil/magazine/2017-18.pdf">2017-2018</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                                        <h3><a href="https://webdocs.pages.dev/assets/docs/civil/magazine/2018-19.pdf">2018-2019</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                                      <div class="icon-box">
                                        <i class="ri-database-2-line" style="color: #e80368;"></i>
                                        <h3><a href="https://webdocs.pages.dev/assets/docs/civil/magazine/2019-20.pdf">2019-2020</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                                      <div class="icon-box">
                                        <i class="ri-file-list-3-line" style="color: #e361ff;"></i>
                                        <h3><a href="https://webdocs.pages.dev/assets/docs/civil/magazine/2020-21.pdf">2020-2021</a></h3>
                                      </div>
                                    </div>
                                    <!--<div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-bar-chart-box-line" style="color: #47aeff;"></i>
                                        <h3><a href="">MATLAB</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-check-double-line" style="color: #ffa76e;"></i>
                                        <h3><a href="">MOBILE APP DEVELOPMENT</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-database-2-line" style="color: #11dbcf;"></i>
                                        <h3><a href="">NETWORK STORAGE CONCEPTS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-disc-line" style="color: #4233ff;"></i>
                                        <h3><a href="">NS2</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-anchor-line" style="color: #b2904f;"></i>
                                        <h3><a href="">U-TURN MOTIVATION OF ENGINEERS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-check-double-line" style="color: #b20969;"></i>
                                        <h3><a href="">WEB DESIGNING USING WORDPRESS</a></h3>
                                      </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 mt-4">
                                      <div class="icon-box">
                                        <i class="ri-check-double-line" style="color: #ff5828;"></i>
                                        <h3><a href="">WEB DEVELOPMENT</a></h3>
                                      </div>
                                    </div>-->
                                  </div>
                          
                                </div>
                              </section><!-- End Features Section -->
                              </div>
                              </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Stella Mary's College of Engineering</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://stellamaryscoe.edu.in/">SMCE Media Cell</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>