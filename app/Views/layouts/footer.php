<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">
                    <?= $content[array_search('Footer: Text', array_column($content, 'contentName'))]['contentValue'] ?>
                </h1>
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
                        <?= $content[array_search('Social: Email', array_column($content, 'contentName'))]['contentValue'] ?>
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                <h4 class="my-4">Our Location</h4>

                <p class="mb-1">
                    <i class="fa fa-home mr-2 footer-icon"></i>
                    <?= $content[array_search('Social: Address', array_column($content, 'contentName'))]['contentValue'] ?>
                </p>
            </div>

            <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                <p class="copyright-text">Copyright &copy; <?= date('Y') ?> <?= $content[array_search('Footer: CompanyName', array_column($content, 'contentName'))]['contentValue'] ?>
                    <br>
                    <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a>
                </p>
            </div>

            <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">

                <ul class="footer-link">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>

            <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                <ul class="social-icon">
                    <?php if ($content[array_search('Social: Instagram', array_column($content, 'contentName'))]['contentValue'] != "") : ?>
                        <li><a href="https://instagram.com/<?= $content[array_search('Social: Instagram', array_column($content, 'contentName'))]['contentValue'] ?>" target="_blank" class="fa fa-instagram"></a></li>
                    <?php endif ?>
                    <?php if ($content[array_search('Social: Twitter', array_column($content, 'contentName'))]['contentValue'] != "") : ?>
                        <li><a href="https://twitter.com/<?= $content[array_search('Social: Twitter', array_column($content, 'contentName'))]['contentValue'] ?>" target="_blank" class="fa fa-twitter"></a></li>
                    <?php endif ?>
                    <?php if ($content[array_search('Social: Facebook', array_column($content, 'contentName'))]['contentValue'] != "") : ?>
                        <li><a href="https://facebook.com/<?= $content[array_search('Social: facebook', array_column($content, 'contentName'))]['contentValue'] ?>" target="_blank" class="fa fa-facebook"></a></li>
                    <?php endif ?>
                    <?php if ($content[array_search('Social: Whatsapp', array_column($content, 'contentName'))]['contentValue'] != "") : ?>
                        <li><a href="https://wa.me/<?= $content[array_search('Social: Whatsapp', array_column($content, 'contentName'))]['contentValue'] ?>" target="_blank" class="fa fa-whatsapp"></a></li>
                    <?php endif ?>
                    <?php if ($content[array_search('Social: LinkedIn', array_column($content, 'contentName'))]['contentValue'] != "") : ?>
                        <li><a href="https://linkedin.com/<?= $content[array_search('Social: LinkedIn', array_column($content, 'contentName'))]['contentValue'] ?>" target="_blank" class="fa fa-linkedin"></a></li>
                    <?php endif ?>
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