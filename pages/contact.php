<?php
include 'templates/breadcrumbs.php';
$currentPage = "Contact us";
$homeLink = "/";
includeBreadcrumbs($currentPage, $homeLink);
?>
<main id="main">
<?php
    include 'templates/inner_banner.php';
    $pageImage = "../assets/img/contact.png";
    $pageTitle = "Contact Us";
    $pageText = "SellerLegend lets you maximize your amazon seller data for a crystal clear view of your business";
    innerbanner($pageImage, $pageTitle, $pageText);
    ?>
    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>5 Masters Orchard
                                    Wattons Lane
                                    Southam CV47 0JD
                                    UK</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>contact@sellerlegend.com</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="info-box  mb-4">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br>9:00AM - 06:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form">
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

                                <button class="app-btn fill-btn" type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>
</main>