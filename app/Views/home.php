<?= $this->extend($git_assets . 'ci4_views/template'); ?>

<?= $this->section('content'); ?>

<body>

    <?= $this->include('layouts/topbar'); ?>

    <!-- HERO -->
    <section class="hero hero-bg d-flex justify-content-center align-items-center" style="background:linear-gradient(170deg, <?= $content[array_search('Main: Color', array_column($content, 'contentName'))]['contentValue'] ?> 64%, white 30%)">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                    <div class="hero-text">

                        <h1 class="text-white" data-aos="fade-up"><?= $content[array_search('Main: Copywriting', array_column($content, 'contentName'))]['contentValue'] ?></h1>

                        <a href="<?= base_url('contact') ?>" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100"><?= $content[array_search('Main: Contact Text', array_column($content, 'contentName'))]['contentValue'] ?></a>

                        <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> <?= $content[array_search('Social: Tel', array_column($content, 'contentName'))]['contentValue'] ?></strong>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?= $webadmin_assets . $pageKey . '/' . $content[array_search('Main: Picture', array_column($content, 'contentName'))]['contentValue'] ?>" class="img-fluid" alt="<?= $content[array_search('Main: Picture', array_column($content, 'contentName'))]['contentValue'] ?>">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section class="about section-padding pb-0" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 mx-auto col-md-10 col-12">
                    <div class="about-info">

                        <h2 class="mb-4" data-aos="fade-up">
                            <?= $content[array_search('About: Title', array_column($content, 'contentName'))]['contentValue'] ?>
                        </h2>

                        <p class="mb-0" data-aos="fade-up">
                            <?= $content[array_search('About: Text', array_column($content, 'contentName'))]['contentValue'] ?>
                        </p>
                    </div>

                    <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                        <img src="<?= $assets . 'vendor/templatemo_538_digital_trend/' ?>images/office.png" class="img-fluid" alt="office">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- PROJECT -->
    <section class="project section-padding" id="project">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12">

                    <h2 class="mb-5 text-center" data-aos="fade-up">
                        <?= $content[array_search('Experience: Title', array_column($content, 'contentName'))]['contentValue'] ?>
                    </h2>

                    <div class="owl-carousel owl-theme" id="project-slide">
                        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                            <img src="<?= $webadmin_assets . $pageKey . '/' . $content[array_search('First Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>" class="img-fluid" alt="<?= $content[array_search('First Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>">

                            <div class="project-info">
                                <small><?= $content[array_search('First Experience: Topic', array_column($content, 'contentName'))]['contentValue'] ?></small>

                                <h3>
                                    <a href="<?= $content[array_search('First Experience: URL', array_column($content, 'contentName'))]['contentValue'] ?>">
                                        <span><?= $content[array_search('First Experience: Title', array_column($content, 'contentName'))]['contentValue'] ?></span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="<?= $webadmin_assets . $pageKey . '/' . $content[array_search('Second Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>" class="img-fluid" alt="<?= $content[array_search('Second Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>">

                            <div class="project-info">
                                <small><?= $content[array_search('Second Experience: Topic', array_column($content, 'contentName'))]['contentValue'] ?></small>

                                <h3>
                                    <a href="<?= $content[array_search('Second Experience: URL', array_column($content, 'contentName'))]['contentValue'] ?>">
                                        <span><?= $content[array_search('Second Experience: Title', array_column($content, 'contentName'))]['contentValue'] ?></span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="<?= $webadmin_assets . $pageKey . '/' . $content[array_search('Third Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>" class="img-fluid" alt="<?= $content[array_search('Third Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>">

                            <div class="project-info">
                                <small><?= $content[array_search('Third Experience: Topic', array_column($content, 'contentName'))]['contentValue'] ?></small>

                                <h3>
                                    <a href="<?= $content[array_search('Third Experience: URL', array_column($content, 'contentName'))]['contentValue'] ?>">
                                        <span><?= $content[array_search('Third Experience: Title', array_column($content, 'contentName'))]['contentValue'] ?></span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="<?= $webadmin_assets . $pageKey . '/' . $content[array_search('Fourth Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>" class="img-fluid" alt="<?= $content[array_search('Fourth Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>">

                            <div class="project-info">
                                <small><?= $content[array_search('Fourth Experience: Topic', array_column($content, 'contentName'))]['contentValue'] ?></small>

                                <h3>
                                    <a href="<?= $content[array_search('Fourth Experience: URL', array_column($content, 'contentName'))]['contentValue'] ?>">
                                        <span><?= $content[array_search('Fourth Experience: Title', array_column($content, 'contentName'))]['contentValue'] ?></span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="<?= $webadmin_assets . $pageKey . '/' . $content[array_search('Fifth Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>" class="img-fluid" alt="<?= $content[array_search('Fifth Experience: Picture', array_column($content, 'contentName'))]['contentValue'] ?>">

                            <div class="project-info">
                                <small><?= $content[array_search('Fifth Experience: Topic', array_column($content, 'contentName'))]['contentValue'] ?></small>

                                <h3>
                                    <a href="<?= $content[array_search('Fifth Experience: URL', array_column($content, 'contentName'))]['contentValue'] ?>">
                                        <span><?= $content[array_search('Fifth Experience: Title', array_column($content, 'contentName'))]['contentValue'] ?></span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?= $this->include('layouts/footer'); ?>

</body>

<?= $this->endSection(); ?>