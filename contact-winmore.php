<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="thumbnail" content="assets/images/synox_page_thumbnail.webp">
  <meta name="description" content="Winmore Group">
  <meta name="keywords" content="Winmore Group">
  <meta name="author" content="Auctech Marcom">

  <title>Winmore Group</title>
  <link rel="shortcut icon" href="assets/images/icons/fav.png">


  <!-- Fraimwork - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <!-- Icon - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">

  <!-- Animation - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">

  <!-- Carousel - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">

  <!-- Video & Image Popup - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.min.css">

  <!-- Counter - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/odometer.min.css">

  <!-- Custom - CSS Include -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  
   <!-- JS- Jquery -->
  <script src="assets/js/jquery.min.js"></script>
</head>


<body class="online_banking">

  <!-- Body Wrap - Start -->
  <div class="page_wrapper">

    <!-- Back To Top - Start -->
    <div class="backtotop">
      <a href="#" class="scroll">
        <i class="fa-solid fa-arrow-up"></i>
      </a>
    </div>
    <!-- Back To Top - End -->

    <!-- Site Header - Start
      ================================================== -->
    <header id="header" class="site_header header_layout_1">
      <?php
        include('header.php');
      ?>
    </header>
      <!-- Site Header - End
      ================================================== -->

      <!-- Main Body - Start
      ================================================== -->
      <main class="page_content">

        <!-- Page Header - Start
        ================================================== -->
        <section class="page_header text-center bg-dark section_decoration overflow-hidden" style="background-image: url(assets/images/backgrounds/hero_bg_noise.webp);">
          <div class="container">
            <h1 class="page_title text-white">Contact Us</h1>
          </div>
          <div class="decoration_item shape_nate">
            <img src="assets/images/shapes/shape_nate.svg" alt="Shape Nate">
          </div>
          <div class="decoration_item shape_dollar_1 wow fadeInUp" data-wow-delay=".2s">
            <img src="assets/images/shapes/shape_dollar_1.webp"  data-parallax='{"y" : 100, "smoothness": 10}' alt="Shape Dollar">
          </div>
          <div class="decoration_item shape_dollar_2 wow fadeInUp" data-wow-delay=".2s">
            <img src="assets/images/shapes/shape_dollar_2.webp" data-parallax='{"y" : 100, "smoothness": 10}' alt="Shape Dollar">
          </div>
          <div class="decoration_item shape_dollar_3 wow fadeInUp" data-wow-delay=".3s">
            <img src="assets/images/shapes/shape_dollar_3.webp" data-parallax='{"y" : -100, "smoothness": 10}' alt="Shape Dollar">
          </div>
          <div class="decoration_item shape_dollar_4 wow fadeInUp" data-wow-delay=".3s">
            <img src="assets/images/shapes/shape_dollar_4.webp" data-parallax='{"y" : -100, "smoothness": 10}' alt="Shape Dollar">
          </div>
          <div class="decoration_item shape_pattern_1">
            <img src="assets/images/shapes/breadcrumb_shape_pattern_1.svg" alt="Shape Pattern">
          </div>
          <div class="decoration_item shape_pattern_2">
            <img src="assets/images/shapes/breadcrumb_shape_pattern_2.svg" alt="Shape Pattern">
          </div>
        </section>
        <!-- Page Header - End
        ================================================== -->

        <!-- Contact Section - Start
        ================================================== -->
        <section class="contact_section section_space bg-light">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="comment_form p-lg-5">
                  <div class="heading_block">
                    <h2 class="heading_text">
                      Get in Touch for Easy and Accessible Utility Services
                    </h2>
                    <p class="heading_description mb-0">
                      Contact Winmore for fast, reliable, and accessible utility services like bill payments, mobile recharge, bank transfers, and more, right in your native place
                    </p>
                  </div>
                  <form action="contact.php" method="POST" id="enquiryForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_name">Name<sup>*</sup></label>
                          <input id="input_name" class="form-control" type="text" name="fname" placeholder="Enter Your Full Name" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_email">Email<sup>*</sup></label>
                          <input id="input_email" class="form-control" type="email" name="email" placeholder="Enter your contact email" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label class="input_title" for="input_phone">Phone<sup>*</sup></label>
                          <input id="input_phone" class="form-control" type="tel" name="phone" placeholder="Enter Your Phone Number" required>
                        </div>
                        <div class="form-group">
                          <label class="input_title" for="input_message">Description<sup>*</sup></label>
                          <textarea id="input_message" class="form-control" name="message" placeholder="Description..." required></textarea>
                        </div>
                        <button class="btn text-dark" type="submit" name="submit">
                          <span class="btn_label">Send Message</span>
                          <span class="btn_icon ml-10"><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.7071 8.70711C20.0976 8.31658 20.0976 7.68342 19.7071 7.29289L13.3431 0.928932C12.9526 0.538408 12.3195 0.538408 11.9289 0.928932C11.5384 1.31946 11.5384 1.95262 11.9289 2.34315L17.5858 8L11.9289 13.6569C11.5384 14.0474 11.5384 14.6805 11.9289 15.0711C12.3195 15.4616 12.9526 15.4616 13.3431 15.0711L19.7071 8.70711ZM0 9H19V7H0V9Z" fill="#012A2B" />
                          </svg></span>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact_info_box p-5">
                  <h3 class="heading_text">Contact Info</h3>
                  <ul class="iconlist_block unordered_list_block">
                    <!-- <li>
                      <a href="tel:+8801010000000">
                        <span class="iconlist_icon">
                          <img src="assets/images/icons/icon_calling_3.svg" alt="Icon Calling">
                        </span>
                        <span class="iconlist_text">+88 (0) 101 0000 000</span>
                      </a>
                    </li> -->
                    <li>
                      <a href="mailto:support@winmoregroup.org">
                        <span class="iconlist_icon">
                          <img src="assets/images/icons/icon_email_3.svg" alt="Icon Email">
                        </span>
                        <span class="iconlist_text">support@winmoregroup.org</span>
                      </a>
                    </li>
                  </ul>
                  <ul class="social_icons_block unordered_list mb-0">
                    <li>
                      <a aria-label="Twitter X" href="https://x.com/winmoreofficial">
                        <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.92704 6.35148L14.5111 0H13.1879L8.33921 5.5149L4.4666 0H0L5.85615 8.3395L0 15H1.32333L6.44364 9.17608L10.5334 15H15L8.92671 6.35148H8.92704ZM7.11456 8.41297L6.52121 7.58255L1.80014 0.974755H3.83269L7.64265 6.30746L8.236 7.13788L13.1885 14.0696H11.156L7.11456 8.41329V8.41297Z"></path>
                        </svg>
                      </a>
                    </li>
                    <li><a aria-label="Facebook" href="https://www.facebook.com/winmoregroupofficial"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a aria-label="Linkedin" href="https://www.linkedin.com/company/winmore-group-official"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a aria-label="Linkedin" href="https://www.instagram.com/winmoregroupofficial"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a aria-label="Linkedin" href="https://www.youtube.com/@winmoregroupofficial"><i class="fa-brands fa-youtube"></i></a></li>
                  </ul>
                  <hr>
                  <ul class="office_location iconlist_block unordered_list_block mb-0">
                    <li>
                      <span class="iconlist_text">
                        <strong class="text-dark d-block">Address:</strong> 10-11 Skyline Plaza,
                        Ansal Sushant Golf City, Lucknow
                      </span>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Contact Section - End
        ================================================== -->

        <!-- Google Map - Start
        ================================================== -->
        <div class="gmap_canvas bg-light">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.83925062439!2d80.99072147611862!3d26.781393565720506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be5563e9901dd%3A0xc5070e60f557006!2sWinmore%20Group!5e0!3m2!1sen!2sin!4v1728469222811!5m2!1sen!2sin"></iframe>
        </div>
        <!-- Google Map - End
        ================================================== -->

      </main>
      <!-- Main Body - End
      ================================================== -->

      <!-- Site Footer - Start
      ================================================== -->
      <footer id="footer" class="site_footer footer_layout_2 bg-secondary section_decoration section_space"
      style="background-image: url('assets/images/backgrounds/hero_bg_noise.webp');">
     <?php
      include('footer.php');
     ?>
    </footer>
      <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

    <!-- Fraimwork - Jquery Include -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-dropdown-ml-hack.min.js"></script>

    <!-- Carousel - Jquery Include -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- Animations - jquery include -->
    <script src="assets/js/parallaxie.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="assets/js/magnific-popup.min.js"></script>

    <!-- Counter - Jquery Include -->
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>

    <!-- Content Auto Sliding - jquery include -->
    <script src="assets/js/ticker.min.js"></script>

    <!-- Custom - Jquery Include -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('enquiryForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            var formData = new FormData(this);

            fetch('query_list.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.text())
                .then(result => {
                    // Assuming the response is 'success' if the data was inserted
                    Swal.fire({
                        title: 'Success!',
                        text: 'Your message has been sent successfully.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Refresh the page after the "OK" button is clicked
                        location.reload();
                    });
                })
                .catch(error => {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went wrong.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
        });
    </script>
  </body>

</html>