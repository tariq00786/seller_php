<?php
include 'templates/breadcrumbs.php';
$currentPage = "Pricing";
$homeLink = "/";
includeBreadcrumbs($currentPage, $homeLink);
?>
<main id="main">
    <?php
    include 'templates/inner_banner.php';
    $pageImage = "../../assets/img/features/All-features.png";
    $pageTitle = "Affordable Amazon Seller Plans";
    $pageText = "Simple, Clear Pricing Options and no hiden fees - Guaranteed!";
    innerbanner($pageImage, $pageTitle, $pageText);
    ?>
    

       
            <?php
            include 'templates/section-header.php';
            $sectionTitle = "Affordable Amazon Seller Plans";
            $sectionText = " Simple, Clear Pricing Options and no hiden fees - Guaranteed!";
            sectionHeader($sectionTitle, $sectionText);
            ?>


<?php include 'components/pricing.php';?>

      

    </section>
    <section id="services" class="services">

        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row gy-4">
                <div class="col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">

                        <img src="../assets/img/icn1.png">
                        <h5 class="pt-4">Sync Unlimited Seller Central Accounts***</h5>
                        <p class="mt-0">
                            Manage as many Amazon seller accounts and marketplaces as you want, as long as the sum total of the orders for all your accounts are within your pricing plan threshold limits.

                            ***Fair Use Policy applies – All SellerCentral Accounts must belong to the same seller
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">

                        <img src="../assets/img/icn2.png">
                        <h5 class="pt-4">Automatic Monthly Subscription Adjustment
                        </h5>
                        <p class="mt-0">
                            Your subscription tier is recalculated every month based on order and SKU volume. If you exceed your pricing plan threshold limit, your billing tier is automatically adjusted to the next level for that month. But if you drop below the limit, then your billing tier will be adjusted to the lower level for that month.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">

                        <img src="../assets/img//icn3.png">
                        <h5 class="pt-4">Supports All NA, EU, AU and JP Stores</h5>
                        <p class="mt-0">
                            Access multiple Amazon accounts and marketplaces in one single SellerLegend account or one set of credentials. Yes, this also means you can compare KPIs across accounts/marketplaces.


                        </p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">

                        <img src="../assets/img/icn4.png">
                        <h5 class="pt-4">Cancel Easily, At Any Time You Want</h5>
                        <p class="mt-0">
                            You can cancel at any time. If you cancel before the end of your trial, you will not be charged. Cancelling is easy and only requires one click of your mouse, you don’t even have to call us!
                        </p>

                    </div>
                </div>



            </div>

        </div>

    </section>