<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>carforyou</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/CAR4U.png" rel="" />
    <link href="assets/img/CAR4U.png" rel="" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body style="background-color: #595959;">
    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <form id="message_search_form">
      <div class="row">
        <div class="col-sm-2">
          <label for="">Search:</label>
        </div>
        <div class="col-sm-8">
          <input class="form-control" type="text" name="keyword" />
        </div>
        <div class="col-sm-2 d-flex justify-content-center">
          <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </div>
    </form>
    <!-- End Property Search Section -->>
    <!-- ======= Header/Navbar ======= -->
    <nav
      class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top"
      style="padding-top: 5px; padding-bottom: 5px"
    >
      <div class="container">
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarDefault"
          aria-controls="navbarDefault"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.html"
          >Carfor<span class="color-b">U</span></a
        >

        <div
          class="navbar-collapse collapse justify-content-end"
          id="navbarDefault"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('vehicles') }}">Vehicles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dealers') }}">Dealers</a>
            </li>
          </ul>
        </div>

        <!-- Login Form and Dealers Link in the Same Container -->
        <div class="d-flex justify-content-evenly">
          <a
            href="user/login.html"
            class="primary-btn"
            style="
              background-color: #2eca6a;
              color: rgb(255, 255, 255);
              text-decoration: none;
              display: block;
              padding: 5px;
            "
          >
            Login
          </a>
        </div>
        <!-- End of Login Form and Dealers Link Container -->
      </div>
    </nav>
    <!-- End Header/Navbar -->

    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel swiper position-relative">
      <div class="swiper-wrapper">
        <div
          class="swiper-slide carousel-item-a intro-item bg-image"
          style="background-image: url(assets/img/home.png)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="swiper-slide carousel-item-a intro-item bg-image"
          style="background-image: url(assets/img/carwhite.png)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="swiper-slide carousel-item-a intro-item bg-image"
          style="background-image: url(assets/img/redcar.png)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

    
    <!-- End Intro Section -->

    <main id="main">
      <!-- ======= Services Section ======= -->

      <!-- ======= Latest Properties Section ======= -->
      <section class="section-property section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a text-white">TOP 3 SOLD CARS</h2>
                </div>
              </div>
            </div>
          </div>

          <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">
              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/rav4.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="SUV1.html"
                            >TOYOTA <br />
                            RAV 4</a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">price | $26,000</span>
                        </div>
                        <a href="#" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Vehicle</h4>
                            <span>SUV</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Brand</h4>
                            <span>Toyota</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Model</h4>
                            <span>Toyota Rav4</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Color</h4>
                            <span>Black</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/chevrolet.png"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="SUV2.html"
                            >CHEVROLET <br />
                            TRAVERSE</a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">price | $30,000</span>
                        </div>
                        <a href="SUV2.html" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Vehicle</h4>
                            <span>SUV</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Brand</h4>
                            <span>Chevrolet</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Model</h4>
                            <span>Chevrolet Traverse</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Color</h4>
                            <span>Orange</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-b swiper-slide">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img
                      src="assets/img/leaf.jpg"
                      alt=""
                      class="img-a img-fluid"
                    />
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="electric car2.html"
                            >Electric Car <br />
                            Nissan 3</a
                          >
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">price | $30,000</span>
                        </div>
                        <a href="electric car2.html" class="link-a"
                          >Click here to view
                          <span class="bi bi-chevron-right"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Vehicle</h4>
                            <span>Electric Car</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Brand</h4>
                            <span>Nissan</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Model</h4>
                            <span>Nissan Leaf</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Color</h4>
                            <span>Brilliant Silver</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->
            </div>
          </div>
          <div class="propery-carousel-pagination carousel-pagination"></div>
        </div>
      </section>
      <!-- End Latest Properties Section -->

      <!-- ======= Agents Section ======= -->
      <section class="section-agents section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a text-white">Best Dealers</h2>
                </div>
                <div class="title-link">
                  <a href="dealers-grid.html">
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img src="assets/img/1.png" alt="" class="img-d img-fluid" />
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="angelie.html" class="link-two">Angelie Maribao <br /> </a>
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      <!-- Sed porttitor lectus nibh, Cras ultricies ligula sed magna
                      dictum porta two. -->
                    </p>
                    <div class="info-agents color-a">
                      <p><strong>Phone: </strong> 09123456789</p>
                      <p><strong>Email: </strong> angelbabyxd@gmail.com</p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img src="assets/img/2.png" alt="" class="img-d img-fluid" />
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="edra.html" class="link-two"
                          >Edrachiel Castilla <br />
                        </a>
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      <!-- Sed porttitor lectus nibh, Cras ultricies ligula sed magna
                      dictum porta two. -->
                    </p>
                    <div class="info-agents color-a">
                      <p><strong>Phone: </strong> 09093723907</p>
                      <p><strong>Email: </strong> edura@gmail.com</p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-d">
                <div class="card-img-d">
                  <img src="assets/img/3.png" alt="" class="img-d img-fluid" />
                </div>
                <div class="card-overlay card-overlay-hover">
                  <div class="card-header-d">
                    <div class="card-title-d align-self-center">
                      <h3 class="title-d">
                        <a href="eminga.html" class="link-two"
                          >Jolly Mae Laroda <br />
                        </a>
                      </h3>
                    </div>
                  </div>
                  <div class="card-body-d">
                    <p class="content-d color-text-a">
                      <!-- Sed porttitor lectus nibh, Cras ultricies ligula sed magna
                      dictum porta two. -->
                    </p>
                    <div class="info-agents color-a">
                      <p><strong>Phone: </strong> 09143231456</p>
                      <p><strong>Email: </strong> eminga@gmail.com</p>
                    </div>
                  </div>
                  <div class="card-footer-d">
                    <div class="socials-footer d-flex justify-content-center">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#" class="link-one">
                            <i class="bi bi-linkedin" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Agents Section -->

      <!-- ======= Testimonials Section ======= -->
      <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a text-white">Latest Cars</h2>
                </div>
              </div>
            </div>
          </div>

          <div id="testimonial-carousel" class="swiper">
            <div class="swiper-wrapper">
              <div class="carousel-item-a swiper-slide">
                <div class="testimonials-box">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-img">
                        <img
                          src="assets/img/chevrolet.png"
                          alt=""
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-ico">
                        <i class="bi bi-chat-quote-fill"></i>
                      </div>
                      <div class="testimonials-content">
                        <p class="testimonial-text">
                          The Chevrolet Traverse is a midsize SUV made by
                          General Motors released on January 12, 2024.
                        </p>
                      </div>
                      <div class="testimonial-author-box">
                        <img
                          src="assets/img/chevrolet.png"
                          alt=""
                          class="testimonial-avatar"
                        />
                        <h5 class="testimonial-author text-white">Chevrolet Traverse</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->

              <div class="carousel-item-a swiper-slide">
                <div class="testimonials-box">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-img">
                        <img
                          src="assets/img/gmc.jpg"
                          alt=""
                          class="img-fluid"
                        />
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div class="testimonial-ico">
                        <i class="bi bi-chat-quote-fill"></i>
                      </div>
                      <div class="testimonials-content">
                        <p class="testimonial-text">
                          The GMC Sierra is a strong and versatile pickup truck
                          with powerful towing capabilities.
                        </p>
                      </div>
                      <div class="testimonial-author-box">
                        <img
                          src="assets/img/gmc.jpg"
                          alt=""
                          class="testimonial-avatar"
                        />
                        <h5 class="testimonial-author">GMC Sierra</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End carousel item -->
            </div>
          </div>
          <div
            class="testimonial-carousel-pagination carousel-pagination"
          ></div>
        </div>
      </section>
      <!-- End Testimonials Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <section class="section-footer" style="background-color: #787276">
    </section>
    <footer>
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/profile.php?id=100004450905212">
                    <i class="bi bi-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/profile.php?id=100004450905212">
                    <i class="bi bi-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/profile.php?id=100004450905212">
                    <i class="bi bi-instagram" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/profile.php?id=100004450905212">
                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="copyright-footer">
              <p class="copyright color-text-a">
                <!-- <span class="color-a">EstateAgency</span> All Rights Reserved. -->
              </p>
            </div>
            <div class="credits">
              <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
              Designed by
              <a href="https://www.facebook.com/profile.php?id=100004450905212">Diosel F. Maguinda</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
