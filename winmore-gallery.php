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

    <!-- Gallery CSS -->
    <style>
        
        .gallery ul {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .gallery ul li {
            list-style: none;
            font-size: 20px;
            background-color: rgb(215, 215, 215);
            margin: 5px;
            padding: 8px 20px;
            cursor: pointer;
            letter-spacing: 1px;
            transition: 0.4s linear;
        }

        .gallery ul li:hover {
            background-color: #FBBB09;
        }

        .gallery ul li.active {
            background-color: rgb(0, 81, 255);
            color: white;
        }

        .gallery-items-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .gallery-items {
            position: relative;
            width: 28%;
            height: 300px;
            margin: 5px;
            border: 3px solid #203331;
        }

        .gallery-items img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

       

        @media screen and (max-width:800px) {
            .gallery-items {
                position: relative;
                width: 38%;
                height: 300px;
                margin: 5px;
                object-fit: cover;
            }
        }

        @media screen and (max-width:450px) {
            .gallery-items {
                position: relative;
                width: 47%;
                height: 180px;
                margin: 5px;
                object-fit: cover;
            }
        }
    </style>
    <!-- Gallery CSS End -->
</head>

<body>
    <!-- Body Wrap - Start -->
    <div class="page_wrapper">
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

            <section class="page_header text-center bg-dark section_decoration overflow-hidden" style="background-image: url(assets/images/backgrounds/hero_bg_noise.webp);">
                <div class="container">
                  <h1 class="page_title text-white">Gallery</h1>
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

            <div class="gallery mb-3 mt-3">
                <?php
                include('db_connection.php');
                $result = $conn->query("SELECT logo FROM add_banner");
                ?>
                <div class="gallery-items-container">
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="gallery-items">
                        <a
                            href="admin/assets/uploads_banner/<?php echo htmlspecialchars($row['logo']); ?>">
                            <img src="admin/assets/uploads_banner/<?php echo htmlspecialchars($row['logo']); ?>"
                                alt="Image">
                        </a>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </main>
        <!-- Main Body - End -->

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

    <script>
        $(document).ready(function () {
            $('.gallery-items-container').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true,
                    preload: [0, 2],
                    navigateByImgClick: true,
                    arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                    tPrev: 'Previous (Left arrow key)', // title for left button
                    tNext: 'Next (Right arrow key)', // title for right button
                    tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
                },
                mainClass: 'mfp-with-zoom',
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out',
                    opener: function (openerElement) {
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
        });
    </script>
</body>

</html>