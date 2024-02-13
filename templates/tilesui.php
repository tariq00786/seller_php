
<?php
function tileui($tileLabel, $tileIcon, $tileText) {
    echo ' 
    <li class="col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
    <div class="link-item">

        <i class="'. $tileIcon .'"></i>
        <span>'. $tileLabel .'</span>

        <p>
        '. $tileText .'
        </p>
    </div>
</li>
    ';
}
?>