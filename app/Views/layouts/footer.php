<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
            </div>

            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                <h4 class="my-4">Contact Info</h4>

                <p class="mb-1">
                    <i class="fa fa-phone mr-2 footer-icon"></i>
                    <?= $content[array_search('Social: Tel', array_column($content, 'contentName'))]['contentValue'] ?>
                </p>

                <p>
                    <a href="#">
                        <i class="fa fa-envelope mr-2 footer-icon"></i>
                        hello@company.com
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                <h4 class="my-4">Our Studio</h4>

                <p class="mb-1">
                    <i class="fa fa-home mr-2 footer-icon"></i>
                    Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
                </p>
            </div>

            <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                <p class="copyright-text">Copyright &copy; 2020 Your Company
                    <br>
                    <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a>
                </p>
            </div>

            <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

                <ul class="footer-link">
                    <li><a href="#">Stories</a></li>
                    <li><a href="#">Work with us</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                <ul class="social-icon">
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-dribbble"></a></li>
                    <li><a href="#" class="fa fa-behance"></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>


<!-- SCRIPTS -->
<script src="<?= $assets . 'vendor/templatemo_538_digital_trend/' ?>js/jquery.min.js"></script>
<script src="<?= $assets . 'vendor/templatemo_538_digital_trend/' ?>js/bootstrap.min.js"></script>
<script src="<?= $assets . 'vendor/templatemo_538_digital_trend/' ?>js/aos.js"></script>
<script src="<?= $assets . 'vendor/templatemo_538_digital_trend/' ?>js/owl.carousel.min.js"></script>
<script src="<?= $assets . 'vendor/templatemo_538_digital_trend/' ?>js/smoothscroll.js"></script>
<script src="<?= $assets . 'vendor/templatemo_538_digital_trend/' ?>js/custom.js"></script>