<?php
session_start();
include 'includes/db.php';
$select = "SELECT * FROM service WHERE status=1 ";
$query = mysqli_query($conn,$select);

$select_banner = "SELECT * FROM banner WHERE status=1";
$query_banner = mysqli_query($conn,$select_banner);
$assoc =mysqli_fetch_assoc($query_banner);

$sql_contact = "SELECT * FROM contact";
$contact_query=mysqli_query($conn,$sql_contact);
$contact_assoc=mysqli_fetch_assoc($contact_query);

$sql_about = "SELECT * FROM about";
$about_query=mysqli_query($conn,$sql_about);
$about_assoc=mysqli_fetch_assoc($about_query);

$sql_logo = "SELECT * FROM our_patner";
$logo_query=mysqli_query($conn,$sql_logo);

$all = "SELECT COUNT(*) as total FROM users";
$all_user=mysqli_query($conn,$all);
$all_assoc=mysqli_fetch_assoc($all_user);


    $sql_portfolio = "SELECT * FROM portfolio";
    $portfolio_query=mysqli_query($conn,$sql_portfolio);

?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Kufa - Personal Portfolio HTML5 Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/fontawesome-all.min.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/default.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="theme-bg">

  <!-- preloader -->
  <div id="preloader">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div class="object" id="object_one"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_three"></div>
      </div>
    </div>
  </div>
  <!-- preloader-end -->

  <!-- header-start -->
  <header>
    <div id="header-sticky" class="transparent-header">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="main-menu">
              <nav class="navbar navbar-expand-lg">
                <a href="index.html" class="navbar-brand logo-sticky-none"><img src="img/logo/logo.png" alt="Logo"></a>
                <a href="index.html" class="navbar-brand s-logo-none"><img src="img/logo/s_logo.png" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNav">
                <span class="navbar-icon"></span>
                <span class="navbar-icon"></span>
                <span class="navbar-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                  <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                  <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
              </div>
              <div class="header-btn">
                <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- offcanvas-start -->
  <div class="extra-info">
    <div class="close-icon menu-close">
      <button>
        <i class="far fa-window-close"></i>
      </button>
    </div>
    <div class="logo-side mb-30">
      <a href="index-2.html">
        <img src="img/logo/logo.png" alt="" />
      </a>
    </div>
    <div class="side-info mb-30">
      <div class="contact-list mb-30">
        <h4>Office Address</h4>
        <p>123/A, Miranda City Likaoli
          Prikano, Dope</p>
        </div>
        <div class="contact-list mb-30">
          <h4>Phone Number</h4>
          <p>+0989 7876 9865 9</p>
        </div>
        <div class="contact-list mb-30">
          <h4>Email Address</h4>
          <p>info@example.com</p>
        </div>
      </div>
      <div class="social-icon-right mt-20">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="offcanvas-overly"></div>
    <!-- offcanvas-end -->
  </header>
  <!-- header-end -->

  <!-- main-area -->
  <main>

    <!-- banner-area -->
    <section id="home" class="banner-area banner-bg fix">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-7 col-lg-6">
            <div class="banner-content">
              <h6 class="wow fadeInUp" data-wow-delay="0.2s"><?= $assoc['banner_title'] ?></h6>
              <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?= $assoc['banner_name'] ?></h2>
              <p class="wow fadeInUp" data-wow-delay="0.6s"><?= $assoc['banner_dsp'] ?></p>
              <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                <ul>
                  <li><a href="#"><i class="<?= $assoc['banner_icon'] ?>"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                </ul>
              </div>
              <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 d-none d-lg-block">
            <div class="banner-img text-right">
              <img src="img/banner/banner_img.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="banner-shape"><img src="img/shape/dot_circle.png" class="rotateme" alt="img"></div>
    </section>
    <!-- banner-area-end -->

    <!-- about-area-->
    <section id="about" class="about-area primary-bg pt-120 pb-120">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="about-img">
              <img src="img/banner/banner_img.png" title="me-01" alt="me-01">
              <!-- img/banner/banner_img.png -->
            </div>
          </div>
          <div class="col-lg-6 pr-90">
            <div class="section-title mb-25">
              <span>Introduction</span>
              <h2>About Me</h2>
            </div>
            <div class="about-content">
              <p><?= $about_assoc['about_dsp'] ?></p>
                <h3>Education:</h3>
              </div>
              <!-- Education Item -->
              <?php foreach ($about_query as  $about) { ?>
              <div class="education">
                <div class="year"><?= $about['ed_year'] ?></div>
                <div class="line"></div>
                <div class="location">
                  <span><?= $about['ed_title']?></span>
                  <div class="progressWrapper">
                    <div class="progress">
                      <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $about['ed_percentage'].'%'?>;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
              <!-- End Education Item -->

            </div>
          </div>
        </div>
      </section>
      <!-- about-area-end -->

      <!-- Services-area -->
      <section id="service" class="services-area pt-120 pb-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
              <div class="section-title text-center mb-70">
                <span>WHAT WE DO</span>
                <h2>Services and Solutions</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <?php foreach ($query as  $service) { ?>
              <div class="col-lg-4 col-md-6">
                <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                  <i class="<?= $service['service_icon'] ?>"></i>

                  <h3><?= $service['service_title'] ?></h3>
                  <p>
                    <?= $service['service_desp'] ?>
                  </p>
                </div>
              </div>
            <?php } ?>

          </div>
        </div>
      </section>
      <!-- Services-area-end -->

      <!-- Portfolios-area -->
      <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
              <div class="section-title text-center mb-70">
                <span>Portfolio Showcase</span>
                <h2>My Recent Best Works</h2>
              </div>
            </div>
          </div>
          <div class="row">


            <?php foreach ($portfolio_query as  $portfolio) {  ?>

            <div class="col-lg-4 col-md-6 pitem">
              <div class="speaker-box">
                <div class="speaker-thumb">
                  <img src="uploads/portfolio/<?= $portfolio['portfolio_img'];  ?>" alt="images" >
                </div>
                <div class="speaker-overlay">
                  <span><?= $portfolio['portfolio_cetagory'] ?></span>
                  <h4><a href="portfolio-single.php?id=<?=$portfolio['id'] ?>"><?= $portfolio['portfolio_name'] ?></a></h4>
                  <a href="portfolio-single.php?id=<?=$portfolio['id'] ?>" class="arrow-btn">More information <span></span></a>
                </div>
              </div>
            </div>

          <?php } ?>



          </div>
        </div>
      </section>
      <!-- services-area-end -->


      <!-- fact-area -->
      <section class="fact-area">
        <div class="container">
          <div class="fact-wrap">
            <div class="row justify-content-between">
              <div class="col-xl-2 col-lg-3 col-sm-6">
                <div class="fact-box text-center mb-50">
                  <div class="fact-icon">
                    <i class="flaticon-award"></i>
                  </div>
                  <div class="fact-content">
                    <h2><span class="count">245</span></h2>
                    <span>Feature Item</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-sm-6">
                <div class="fact-box text-center mb-50">
                  <div class="fact-icon">
                    <i class="flaticon-like"></i>
                  </div>
                  <div class="fact-content">
                    <h2><span class="count">345</span></h2>
                    <span>Active Products</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-sm-6">
                <div class="fact-box text-center mb-50">
                  <div class="fact-icon">
                    <i class="flaticon-event"></i>
                  </div>
                  <div class="fact-content">
                    <h2><span class="count">39</span></h2>
                    <span>Year Experience</span>
                  </div>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-sm-6">
                <div class="fact-box text-center mb-50">
                  <div class="fact-icon">
                    <i class="flaticon-woman"></i>
                  </div>
                  <div class="fact-content">
                    <h2><span class="count"><?php echo  $all_assoc['total']?></span></h2>
                    <span>Our Clients</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- fact-area-end -->

      <!-- testimonial-area -->
      <section class="testimonial-area primary-bg pt-115 pb-115">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
              <div class="section-title text-center mb-70">
                <span>testimonial</span>
                <h2>happy customer quotes</h2>
              </div>
            </div>
      <?php       $sql_client = "SELECT * FROM clients_quotes";
            $client_query=mysqli_query($conn,$sql_client);
     ?>

          </div>
          <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-10">
              <div class="testimonial-active">
                   <?php foreach ($client_query as  $client) { ?>
                <div class="single-testimonial text-center">
                  <div class="testi-avatar">
                  <img src="uploads/client/<?= $client['img'];  ?>" alt="images" width="80">
                  </div>
                  <div class="testi-content">
                    <h4><span>“</span> <?= $client['client_dsp'] ?> <span>”</span></h4>
                    <div class="testi-avatar-info">
                      <h5><?= $client['client_name'] ?></h5>
                      <span><?= $client['client_title'] ?></span>
                    </div>
                  </div>
                </div>
              <?php } ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- testimonial-area-end -->

      <!-- brand-area -->
      <div class="barnd-area pt-100 pb-100">
        <div class="container">
          <div class="row brand-active">
            <?php foreach ($logo_query as  $logo) { ?>
            <div class="col-xl-2">
              <div class="single-brand">
                <img src="uploads/logo/<?= $logo['logo'];  ?>" alt="img" width="80">
              </div>
            </div>
          <?php } ?>
          </div>
        </div>
      </div>
      <!-- brand-area-end -->

      <!-- contact-area -->
      <section id="contact" class="contact-area primary-bg pt-120 pb-120">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="section-title mb-20">
                <span><?= $contact_assoc['contact_name'] ?></span>
                <h2><?= $contact_assoc['contact_title'] ?></h2>
              </div>
              <div class="contact-content">
                <p><?= $contact_assoc['contact_desp'] ?></p>
                <h5>OFFICE IN <span><?= $contact_assoc['address'] ?></span></h5>
                <div class="contact-list">
                  <ul>
                    <li><i class="fas fa-map-marker"></i><span>Address :</span><?= $contact_assoc['address'] ?></li>
                    <li><i class="fas fa-headphones"></i><span>Phone :</span><?= $contact_assoc['phone'] ?></li>
                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?= $contact_assoc['email'] ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="contact-form">
                <?php if (isset($_SESSION['msg'])) {  ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong><?=$_SESSION['msg'] ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php }; unset($_SESSION['msg']); ?>
                <form action="/tiger/messages/message-post.php#contact" method="post">
                  <input type="text" name="fname" placeholder="your name *">
                  <input type="email" name="email" placeholder="your email *">
                  <textarea name="massage" id="message" placeholder="your message *"></textarea>
                  <button class="btn" type="submit">SEND massage</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
      <div class="copyright-wrap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="copyright-text text-center">
                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/one-page-nav-min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
  </body>

  <!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
  </html>
