<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg" style="background-color: <?= $content[array_search('Navbar: Color', array_column($content, 'contentName'))]['contentValue'] ?>;">
    <div class="container">
        <a class="navbar-brand" href="<?= $content[array_search('Navbar: Brand URL', array_column($content, 'contentName'))]['contentValue'] ?>">
            <!-- <i class="fa fa-tint"></i> -->
            <?= $content[array_search('Navbar: Brand', array_column($content, 'contentName'))]['contentValue'] ?>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#about" class="nav-link smoothScroll"><?= $content[array_search('Menu: About', array_column($content, 'contentName'))]['contentValue'] ?></a>
                </li>
                <li class="nav-item">
                    <a href="#project" class="nav-link smoothScroll"><?= $content[array_search('Menu: Projects', array_column($content, 'contentName'))]['contentValue'] ?></a>
                </li>
                <li class="nav-item">
                    <a href="blog.html" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('contact') ?>" class="nav-link contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>