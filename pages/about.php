<?php
include 'templates/breadcrumbs.php';
$currentPage = "About Us";
$homeLink = "/";
includeBreadcrumbs($currentPage, $homeLink);
?>
<main id="main">
    <?php
    include 'templates/inner_banner.php';
    $pageImage = "../assets/img/features/All-features.png";
    $pageTitle = "About Us";
    $pageText = "SellerLegend lets you maximize your amazon seller data for a crystal clear view of your business";
    innerbanner($pageImage, $pageTitle, $pageText);
    ?>
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <img src="assets/img/features/icon1.png" />

                        <p class="mt-4">SellerLegend’s customizable dashboards offer Amazon sellers an efficient way
                            to oversee sales, profits, and inventory, ensuring key business metrics are always at
                            their fingertips.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box blue">
                        <img src="assets/img/features/icon2.png" />

                        <p class="mt-4">Harness near real-time data updated every 30 minutes with SellerLegend’s
                            clear visualizations for swift analysis and informed business decisions.</p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box blue">
                        <img src="assets/img/features/icon3.png" />

                        <p class="mt-4">Optimize your workflow with SellerLegend’s automation features, designed for
                            Amazon sellers to efficiently manage and report tasks with minimal manual intervention.
                        </p>
                        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <header class="section-header">
            <h2>Say hello to the ONLY software you’ll ever need to get closer to your Amazon seller goals </h2>
            <p>Say hello to the ONLY software you’ll ever need to get closer to your Amazon seller goals</p>

        </header>
        <div class="row feature-icons">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 order-xl-2  text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/persona/sales.png" class="img-fluid">
                    </div>
                    <div class="col-xl-6 order-xl-1 " data-aos="fade-left" data-aos-delay="100">
                        <h4>Download and visualize all of your data</h4>
                        <p>As an Amazon seller, speed is critical when it comes to running your business. SellerLegend provides near real-time data and accurate sales analytics, so you can promptly decide and take action on crucial business matters</p>
                        <a href="#" class="app-btn fill-btn"> Explore All Feature </a>
                    </div>
                </div>
                <div class="row align-items-center ">
                    <div class="col-xl-6 order-xl-1  text-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/persona/sales.png" class="img-fluid">
                    </div>
                    <div class="col-xl-6 order-xl-2 " data-aos="fade-left" data-aos-delay="100">
                        <h4>Make data-driven business decisions, fast!</h4>
                        <p>As an Amazon seller, speed is critical when it comes to running your business. SellerLegend provides near real-time data and accurate sales analytics, so you can promptly decide and take action on crucial business matters</p>
                        <a href="#" class="app-btn fill-btn"> Explore All Feature </a>
                    </div>
                </div>



            </div>
    </section>