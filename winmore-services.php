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

<style>
    /* Custom Styles for the Service Section */
    .service_section {
        background-color: #343a40;
        /* Secondary color */
        padding: 5rem 0;
        position: relative;
        overflow: hidden;
    }

    .service_section .section_decoration::before,
    .service_section .section_decoration::after {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        z-index: 1;
    }

    .service_section .section_decoration::before {
        top: -50px;
        left: -100px;
    }

    .service_section .section_decoration::after {
        bottom: -50px;
        right: -100px;
    }

    .service_card {
        background-color: #212529;
        /* Darker shade for cards */
        color: #fff;
        border: none;
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        z-index: 2;
    }

    .service_card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
    }

    .service_card h5 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .service_card p {
        font-size: 0.9rem;
        color: #adb5bd;
        /* Muted text */
    }

    .text-muted {
        color: #adb5bd !important;
    }
    .review_comment{
        font-size: 18px !important;
    }
</style>

<body>
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
            <section class="page_header text-center bg-dark section_decoration overflow-hidden"
                style="background-image: url('assets/images/backgrounds/hero_bg_noise.webp');">
                <div class="container">
                    <h1 class="page_title text-white">Our Services</h1>

                </div>
                <div class="decoration_item shape_nate">
                    <img src="assets/images/shapes/shape_nate.svg" alt="Shape Nate">
                </div>
                <div class="decoration_item shape_dollar_1 wow fadeInUp" data-wow-delay=".2s">
                    <img src="assets/images/shapes/shape_dollar_1.webp" data-parallax='{"y" : 100, "smoothness": 10}'
                        alt="Shape Dollar">
                </div>
                <div class="decoration_item shape_dollar_2 wow fadeInUp" data-wow-delay=".2s">
                    <img src="assets/images/shapes/shape_dollar_2.webp" data-parallax='{"y" : 100, "smoothness": 10}'
                        alt="Shape Dollar">
                </div>
                <div class="decoration_item shape_dollar_3 wow fadeInUp" data-wow-delay=".3s">
                    <img src="assets/images/shapes/shape_dollar_3.webp" data-parallax='{"y" : -100, "smoothness": 10}'
                        alt="Shape Dollar">
                </div>
                <div class="decoration_item shape_dollar_4 wow fadeInUp" data-wow-delay=".3s">
                    <img src="assets/images/shapes/shape_dollar_4.webp" data-parallax='{"y" : -100, "smoothness": 10}'
                        alt="Shape Dollar">
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

            <!-- Feature Section - Start
        ================================================== -->
            <section class="appstore_section section_decoration"
                style="background-image: url('assets/images/backgrounds/app_store_bg_1.webp');">
                <div class="container">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-5 order-lg-last">
                            <div class="heading_block style_2">
                                <div class="badge text-uppercase text-dark bg-dark-subtle"><i
                                        class="fa-solid fa-fire"></i> Financial<b> Solution</b></div>
                                <h2 class="heading_text">
                                    Gainin
                                </h2>
                                <p class="heading_description mb-0 text-dark">
                                    Every individual desires a better, brighter future, we secure by stable financial
                                    services with Winmore Group, a trusted name in financial services, for those who
                                    willing to effectively manage their finances we make them business associates so
                                    person can manage financial need in very effective manner, our range of proficient
                                    services seeks to magnify your wealth by generating value that echoes through
                                    generations.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="app_image">
                                <img src="assets/images/services/Gainin banner img.webp" alt="App Image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="feature_section section_space" style="padding-top: 2px;">
                <div class="container">
                    <div class="container">
                        <!-- Main Card -->
                        <div class="card shadow-lg border-success  mx-auto my-5 p-5" style="max-width: 1550px;">
                            <!-- Main Content -->
                            <div class="row g-4 align-items-center">
                                <!-- Left Image -->
                                <div class="col-md-4 d-flex justify-content-center">
                                    <img src="assets/images/about/insurance-img.webp" alt="Service Image"
                                        class="img-fluid rounded-3"
                                        style="width: 330px; height: 250px; object-fit: cover;">
                                </div>
                                <!-- Right Content -->
                                <div class="col-md-8">
                                    <h2 class="fw-bold">
                                        Insurance Services
                                    </h2>
                                    <p class=" text-justify">Winmore Group understand the importance of financial
                                        stability and
                                        security. That's why we offer a full range of banking services including
                                        insurance for life, general, and health. Our team is dedicated to helping you
                                        make informed decisions about your finances with personalized advice and
                                        solutions. We have become trusted advisors to our clients by providing
                                        exceptional service and expertise.</p>

                                </div>
                            </div>

                            <!-- Cards Section -->
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="card shadow-sm border-0 rounded-3 h-100">
                                        <img src="assets/images/icons/icon_medal_2.svg"
                                            class="card-img-top rounded-top-3 d-flex justify-content-center"
                                            alt="Service 1"
                                            style="width: 80px; height: 80px; object-fit: contain; width: 100%;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fw-bold">Life Insurance</h5>
                                            <p class="card-text text-justify">Life insurance provides a financial safety
                                                net for
                                                loved ones in the event of the policyholder's death. It offers a
                                                lump sum payment, known as the death benefit, to cover expenses such
                                                as funeral costs, mortgage payments, and living expenses.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card shadow-sm border-0 rounded-3 h-100">
                                        <img src="assets/images/icons/icon_hand_2.svg"
                                            class="card-img-top rounded-top-3" alt="Service 2"
                                            style="width: 80px; height: 80px; object-fit: contain; width: 100%;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fw-bold">General Insurance</h5>
                                            <p class="card-text text-justify">General insurance encompasses various
                                                types of
                                                coverage, excluding life insurance, providing financial protection
                                                against unforeseen events. It includes auto, home, health, travel,
                                                and business insurance, among others.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card shadow-sm border-0 rounded-3 h-100">
                                        <img src="assets/images/icons/icon_heart.svg"
                                            class="card-img-top rounded-top-3 d-flex justify-content-center"
                                            alt="Service 1"
                                            style="width: 80px; height: 80px; object-fit: contain; width: 100%;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fw-bold">Health Insurance</h5>
                                            <p class="card-text text-justify">Health insurance provides coverage for
                                                medical
                                                expenses, including hospital visits, prescription drugs, and
                                                preventive care. It helps individuals and families manage healthcare
                                                costs and access necessary medical services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="container py-4">
                        <div class="row justify-content-center g-4">
                            <!-- Card 1 -->
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center">
                                <div class="features_block bg-white shadow-sm text-center p-4"
                                    style="border: 1px solid #126b00; border-radius: 15px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                    <!-- Icon -->

                                    <!-- Title -->
                                    <h3 class="features_title fw-bold text-dark mb-3" style="font-size: 1.3rem;">
                                        Mutual Fund
                                    </h3>
                                    <!-- Description -->
                                    <p class="text-muted text-justify"
                                        style="font-size: 1rem; line-height: 1.7; margin: 0; ">
                                        A mutual fund pools money from multiple investors to invest in stocks, bonds, or
                                        other assets. It offers diversification and professional management, making it a
                                        popular investment choice for many.
                                    </p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center">
                                <div class="features_block bg-white shadow-sm text-center p-4"
                                    style="border: 1px solid #126b00; border-radius: 15px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">


                                    <!-- Title -->
                                    <h3 class="features_title fw-bold text-dark mb-3" style="font-size: 1.3rem;">
                                        Investment
                                    </h3>
                                    <!-- Description -->
                                    <p class="text-muted text-justify"
                                        style="font-size: 1rem; line-height: 1.7; margin: 0;">
                                        With our secure and reliable banking services, you can trust us to help you
                                        reach your financial goals. Explore our deposit products today and start your
                                        journey towards financial success
                                    </p>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-md-6 col-lg-4 d-flex align-items-stretch justify-content-center">
                                <div class="features_block bg-white shadow-sm text-center p-4"
                                    style="border: 1px solid #126b00; border-radius: 15px; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                    <!-- Icon -->

                                    <!-- Title -->
                                    <h3 class="features_title fw-bold text-dark mb-3" style="font-size: 1.3rem;">
                                        Real Estate
                                    </h3>
                                    <!-- Description -->
                                    <p class="text-muted text-justify"
                                        style="font-size: 1rem; line-height: 1.7; margin: 0;">
                                        Find the ideal home financing solutions for buying, refinancing, or investing.
                                        Our expert guidance and resources make your real estate journey seamless,
                                        helping turn your dream property into reality. Partner with us for a rewarding
                                        experience
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="container">
                        <!-- Main Card -->
                        <div class="card shadow-lg border-success  mx-auto my-5 p-5" style="max-width: 1550px;">
                            <!-- Main Content -->
                            <div class="mt-4">
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <div class="card shadow-sm border-0 rounded-3 h-100">
                                            <img src="assets/images/about/insure-4.webp"
                                                class="card-img-top rounded-top-3 d-flex justify-content-center"
                                                alt="Service 1" style="height: 80px; object-fit: contain; width: 100%;">
                                            <div class="card-body text-center">
                                                <h5 class="card-title fw-bold">Township Planning Consultancy Services
                                                </h5>
                                                <p class="card-text text-justify">Explore how our banking services can
                                                    support your
                                                    township development projects. From financing infrastructure to
                                                    facilitating community investment, we're committed to helping gou
                                                    build vibrant and sustainable communities.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card shadow-sm border-0 rounded-3 h-100">
                                            <img src="assets/images/about/home.png"
                                                class="card-img-top rounded-top-3 d-flex justify-content-center"
                                                alt="Service 1" style="height: 80px; object-fit: contain; width: 100%;">
                                            <div class="card-body text-center">
                                                <h5 class="card-title fw-bold">Plotting Services</h5>
                                                <p class="card-text text-justify">Explore our comprehensive land
                                                    financing options
                                                    designed to help you secure the perfect plot for our dream home or
                                                    investment project. With flexible terms, competitive
                                                    rates,personalized service, we acquiring land easier and affordable.
                                                    Start plotting future with us today.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card shadow-sm border-0 rounded-3 h-100">
                                            <img src="assets/images/about/sales-balance.png"
                                                class="card-img-top rounded-top-3 d-flex justify-content-center"
                                                alt="Service 1" style="height: 80px; object-fit: contain; width: 100%;">
                                            <div class="card-body text-center">
                                                <h5 class="card-title fw-bold">Sales & Purchase</h5>
                                                <p class="card-text text-justify">Explore our comprehensive suite of
                                                    services
                                                    designed to facilitate seamless transactions for buying and selling.
                                                    Our self-develop project like Bharat City- Lucknow and Bharat City
                                                    Patna and many more upcoming projects. Discover convenience,
                                                    reliability and peace of mind with our sales and purchase solutions.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature Section - End
        ================================================== -->

            <!-- Service Section - Start
        ================================================== -->
            <section class="service_section bg-secondary section_decoration overflow-hidden py-5">
                <div class="container">
                    <!-- Heading Section -->
                    <div class="row justify-content-center mb-4">
                        <div class="col-12 text-center">
                            <h2 class="text-white mb-3">Our Services</h2>
                            <p class="text-muted text-justify">
                                Welcome to our Services section. Here, you will find a range of services tailored to
                                meet your needs. Whether you are looking for professional advice, creative solutions, or
                                technical support, we have got you covered. Explore the services below to learn more
                            </p>
                        </div>
                    </div>
                    <!-- Services Grid -->
                    <div class="row g-4">
                        <!-- Service Card -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service_card text-center bg-dark text-white p-4 h-100 rounded shadow">

                                <h5 class="card-title">Online Reputation Management (ORM)</h5>
                                <p class="card-text text-muted text-justify">
                                    Our Online Reputation Management (ORM) section is designed to empower you
                                    with the tools and resources needed to maintain a positive digital
                                    footprint, ensuring your financial credibility remains strong.
                                </p>
                            </div>
                        </div>
                        <!-- Service Card -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service_card text-center bg-dark text-white p-4 h-100 rounded shadow">

                                <h5 class="card-title">Business Analytics</h5>
                                <p class="card-text text-muted text-justify">
                                    Unlock the full potential of your business with GAIN IN Business Analytics.
                                    Sign up now and take control of your financial future. Whether you're a
                                    small business owner, a corporate executive, or an independent entrepreneur,
                                    our analytics platform has everything you need to thrive in today's
                                    competitive landscape.
                                </p>
                            </div>
                        </div>
                        <!-- Service Card -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service_card text-center bg-dark text-white p-4 h-100 rounded shadow">

                                <h5 class="card-title">Omni Channel Customer Experience</h5>
                                <p class="card-text text-muted text-justify">
                                    At GAIN IN, we understand that in today's fast-paced world, providing
                                    seamless and personalized customer experiences is paramount. That's why
                                    we've invested in cutting-edge Omni Channel Customer Experience Management
                                    (CXM) solutions to ensure that every interaction with our banking loan app
                                    is smooth, efficient, and tailored to meet the unique needs of each
                                    customer.
                                </p>
                            </div>
                        </div>
                        <!-- Service Card -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service_card text-center bg-dark text-white p-4 h-100 rounded shadow">

                                <h5 class="card-title">Chat Bots</h5>
                                <p class="card-text text-muted text-justify">
                                    Our chatbot is your dedicated virtual assistant, available 24/7 to answer
                                    your queries, guide you through the loan application process, and provide
                                    personalized assistance tailored to your needs. Powered by advanced
                                    artificial intelligence and natural language processing technologies, our
                                    chatbot is capable of understanding your questions and providing accurate
                                    and relevant responses in real-time.
                                </p>
                            </div>
                        </div>
                        <!-- Service Card -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service_card text-center bg-dark text-white p-4 h-100 rounded shadow">

                                <h5 class="card-title">Process Automation</h5>
                                <p class="card-text text-muted text-justify">
                                    We believe in efficiency and convenience when it comes to managing your
                                    finances. Our Process Automation feature ensures that applying for a loan is
                                    seamless and hassle-free. We understand that time is of the essence, which
                                    is why we've streamlined the loan application process to save you valuable
                                    time and effort.
                                </p>
                            </div>
                        </div>
                        <!-- Service Card -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service_card text-center bg-dark text-white p-4 h-100 rounded shadow">

                                <h5 class="card-title">Lead Generation</h5>
                                <p class="card-text text-muted text-justify">
                                    Whether you're dreaming of owning a home, starting a business, or pursuing
                                    higher education, our comprehensive suite of loan services is designed to
                                    empower you every step of the way. Our Lead Generation section acts as a
                                    pivotal bridge, connecting you with tailored loan solutions that match your
                                    unique needs and ambitions.
                                </p>
                            </div>
                        </div>
                        <!-- Service Card -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service_card text-center bg-dark text-white p-4 h-100 rounded shadow">

                                <h5 class="card-title">Creative Content Management</h5>
                                <p class="card-text text-muted text-justify">
                                    We offer an innovative Creative Content Management solution as part of our
                                    banking loan app services. With our platform, you can streamline the
                                    creation, distribution, and management of all your content assets
                                    effortlessly.
                                </p>
                            </div>
                        </div>
                        <!-- Service Card -->
                        <div class="col-lg-3 col-md-6">
                            <div class="service_card text-center bg-dark text-white p-4 h-100 rounded shadow">

                                <h5 class="card-title">IT & ITeS</h5>
                                <p class="card-text text-muted text-justify">
                                    At Gain In, we understand the pivotal role that Information Technology (IT)
                                    and Information Technology-enabled Services (ITeS) play in today's business
                                    landscape. As technology continues to evolve at an unprecedented pace,
                                    businesses operating in the IT & ITeS sector require flexible and
                                    specialized financial solutions to fuel their growth and innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           
            <!-- Service Section - End
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

</body>

<!-- Mirrored from html.xpressbuddy.com/synox/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2024 07:50:46 GMT -->

</html>