<?php
function includeBreadcrumbs($currentPage, $homeLink) {
    echo '<section class="breadcrumbs">
            <div class="container-fluid container-xl">
                <ol>
                    <li><a href="' . $homeLink . '">Home</a></li>
                    <li>' . $currentPage . '</li>
                </ol>
                <h2>' . $currentPage . '</h2>
            </div>
        </section>';
}
?>