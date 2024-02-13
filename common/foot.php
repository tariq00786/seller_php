<a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <script src="../assets/js/main.js"></script>
    <script>
        const block = document.querySelectorAll('.block');

        const options = {
            threshold: 0.5 // Adjust this threshold as needed
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateBlocks(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        block.forEach(item => {
            observer.observe(item);
        });

        function animateBlocks(element) {
            let numElement = element.querySelector('.num');
            let num = parseInt(numElement.innerText);
            let count = 0;
            let time = 2000 / num;
            let circle = element.querySelector('.circle');
            let dots = element.querySelector('.dots');

            setInterval(() => {
                if (count >= num) {
                    clearInterval();
                } else {
                    count += 1;
                    numElement.innerText = count;
                }
            }, time);

            circle.style.strokeDashoffset = 503 - (503 * (num / 100));
            dots.style.transform = `rotate(${360 * (num / 100)}deg)`;

            if (num === 100) {
                dots.style.opacity = 0;
            }
        }

    </script>