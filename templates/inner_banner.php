
<?php
function innerbanner($titleImage, $pageTitle, $pageText) {
    echo ' <section class="hero page-header">
    <div class="container"><div class="row">
            <div class="col-xl-3  text-center" data-aos="fade-right" data-aos-delay="100">
                <img src="' . $titleImage .'" class="img-fluid" alt>
            </div>
            <div class="col-xl-9 d-flex" data-aos="fade-left" data-aos-delay="100">
                <div class="row align-self-center gy-4">
                    <div class="col-md-12 icon-box">
                        <div>
                            <h1 data-aos="fade-up" class="aos-init aos-animate"> <i
                                    class="ri-line-chart-line"></i>
                                ' . $pageTitle .'
                            </h1>
                            <h4 data-aos="fade-up" data-aos-delay="400" class="aos-init aos-animate">
                            ' . $pageText .'   
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>';
}
?>