
<?php
function sectionHeader($sectionTitle, $sectionText) {
    echo ' 
    <div class="section-header">
    <p data-aos="fade-up" class="label aos-init aos-animate" data-aos-delay="400">
    '. $sectionText .'
    </p>
    <h2>'. $sectionTitle .'</h2>
</div>
    ';
}
?>