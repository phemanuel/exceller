<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Exceller Global Institute</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('web/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('web/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('web/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('web/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('web/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('web/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('web/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('web/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Exceller
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
    <img src="{{asset('college/avatar.png')}}" alt=""> <h1 class="sitename"></h1>
      <a href="#" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#" class="active">Home<br></a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{route('login')}}">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{asset('web/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

      <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">Exceller Global Institute<br>Global Health Excellence</h2>
        <p data-aos="fade-up" data-aos-delay="200">Building Capacity, Empowering Change</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="btn-get-started">Get Started</a>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="{{asset('web/assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Exceller Global Institute (EGI)</h3>
            <p>
              Your Gateway to Career Empowerment, Lifelong Learning, and Global Health Excellence

Exceller Global Institute (EGI) is a leading institution dedicated to shaping the future of healthcare and global development through transformative education, professional training, and consultancy services. 
We empower individuals, organizations, and communities to achieve excellence and make a meaningful impact. We:
           
</p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Equip learners with practical skills and knowledge to excel in health and development fields.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Build strategic partnerships to foster collaborative learning.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Continuously improve our programs to address evolving global challenges</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Promote inclusivity, diversity, and excellence.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
              <p>Courses</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Events</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trainers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose EGI?</h3>
              <p>Expert Faculty: Learn from seasoned professionals and global leaders</p>
              <p>Career-Focused Programs: Practical training with tangible career benefits</p>
              <p>Inclusive Learning: Accessible and flexible programs for diverse learners.</p>
              <div class="text-center">
                <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Our Vision</h4>
                  <p>To be a globally recognized leader in innovative and inclusive education, 
                    training, and consultancy, driving excellence in healthcare and global development.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Our Mission</h4>
                  <p>To provide high-quality, accessible education and 
                    training programs that foster professional growth, innovation, and social responsibility.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>We aim to:</h4>
                  <p>Equip learners with practical skills and knowledge to excel in health and development fields.</p>
                  <p>Promote inclusivity, diversity, and excellence.</p>
                  
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Courses Section -->
    <section id="services" class="courses section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our</h2>
        <p>Services</p>
      </div>
      <!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="course-item">
              <img src="{{asset('web/assets/img/course-1.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Web Development</p>
                  <p class="price">$169</p>
                </div> -->

                <h3><a href="#">Short Term Courses</a></h3>
                <p>We offer short-term courses designed to equip you with practical, industry-relevant skills in a short period. Whether you're looking to boost your career, switch industries, or gain specialized knowledge, 
                  our flexible programs provide hands-on training that aligns with global standards.</p>
                  <p>
                  ✔ Fast-Track Learning – Gain valuable skills in just weeks or months.<br>
✔ Affordable & Accessible – Quality education at a cost-effective price.<br>
✔ Flexible Schedules – Learn at your pace, online or in-person.<br>
✔ Career-Focused – Industry-aligned curriculum for job readiness.
                  </p>
                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{asset('web/assets/img/trainers/trainer-1-2.jpg')}}" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Antonio</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;65
                  </div>
                </div> -->
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="course-item">
              <img src="{{asset('web/assets/img/course-2.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Marketing</p>
                  <p class="price">$250</p>
                </div> -->

                <h3><a href="#">Community Health Services</a></h3>
                <p>We are committed to improving public health through our Community Health Services. Our expert team provides health education, 
                  wellness programs, and preventive care to ensure healthier communities.</p>
                  <p>
                  ✔ Health Awareness Campaigns – Educating communities on disease prevention and healthy living.<br>
✔ Maternal & Child Health Support – Providing essential care and guidance for mothers and children.<br>
✔ Emergency First Aid & Basic Healthcare – Offering first aid training and health screenings.<br>
✔ Nutrition & Wellness Programs – Promoting balanced diets and healthy lifestyles.<br>
✔ Community Outreach & Health Advocacy – Partnering with organizations to improve public health.
                  </p>
                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{asset('web/assets/img/trainers/trainer-2-2.jpg')}}" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Lana</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;42
                  </div>
                </div> -->
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="course-item">
              <img src="{{asset('web/assets/img/course-3.jpg')}}" class="img-fluid" alt="...">
              <div class="course-content">
                <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Content</p>
                  <p class="price">$180</p>
                </div> -->

                <h3><a href="course-details.html">Skill Acquisition Program</a></h3>
                <p>We empower individuals with practical skills to enhance their career opportunities and entrepreneurial success. Our Skill Acquisition Program is designed to equip participants with 
                  hands-on expertise in various fields, fostering self-reliance and financial independence.</p>
                  <p>
                  ✔ Entrepreneurial & Vocational Training – Learn profitable skills for personal and professional growth.<br>
✔ Digital & Tech Skills – Gain expertise in areas like web design, digital marketing, and IT essentials.<br>
✔ Handcraft & Creative Arts – Develop skills in fashion design, bead making, and craftwork.<br>
✔ Business & Financial Literacy – Understand financial management, business startup strategies, and more.<br>
✔ Soft Skills Development – Improve communication, leadership, and problem-solving abilities.
                  </p>
                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="{{asset('web/assets/img/trainers/trainer-3-2.jpg')}}" class="img-fluid" alt="">
                    <a href="" class="trainer-link">Brandon</a>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bi bi-heart heart-icon"></i>&nbsp;85
                  </div>
                </div> -->
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>

    </section>
    <!-- /Courses Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
        <h2>Our</h2>
        <p>Contact</p>
      </div>
      <!-- End Section Title -->
      <!-- <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div> -->
      <!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>PLOT 7B OREMEJI STREET, PAKOTO, OGUN STATE.</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+2348167962854; +2349159488707</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@excellerglobal.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->


    <!-- Trainers Index Section -->
    <!-- <section id="trainers-index" class="section trainers-index">

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{asset('web/assets/img/trainers/trainer-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Walter White</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{asset('web/assets/img/trainers/trainer-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{asset('web/assets/img/trainers/trainer-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section> -->
    <!-- /Trainers Index Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Exceller Global Institute</span>
          </a>
          <div class="footer-contact pt-3">
            <p>PLOT 7B OREMEJI STREET, PAKOTO,</p>
            <p>OGUN STATE</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+2348167962854; +2349159488707</span></p>
            <p><strong>Email:</strong> <span>info@excellerglobal.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Contact</a></li>
            
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Short-Term Courses</a></li>
            <li><a href="#">Skill Acquisition Programs</a></li>
            <li><a href="#">Community Health Services</a></li>
            <li><a href="#">Scholarship Assistance</a></li>
            <li><a href="#">Visa Services</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Exceller Global Institute (EGI)</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
       </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('web/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('web/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('web/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('web/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('web/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('web/assets/js/main.js')}}"></script>

</body>

</html>