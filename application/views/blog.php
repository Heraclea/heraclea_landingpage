<div id="top"></div>
<div id="page" class="animsition" data-animsition-in="fade-in" data-animsition-out="fade-out-up-sm" data-loader-type="loader2" data-page-loader-text="HeraClea" style="transform-origin: 50% 50vh;">
    <div id="page-header" class="page-header blog-background full-screen table overlay">
        <div class="table-cell">
            <div class="container">
                <div class="row font-second">
                    <div class="col-sm-8 page-header-title-left">
                        <h1 class="hs-text-12 init-animation-4 delay0-4s"><?= ($language == 'es')?'nuestro <span>blog</span>':'our <span>blog</span>' ?></h1>
                        <div class="hs-text-6 init-animation-4 delay0-6s">
                            <?= ($language == 'es')?'Escucha historias increibles aquí':'hear awesome stories here' ?> 
                        </div>
                    </div>
                    <!--/ End col -->
                    <div class="col-sm-4">
                        <ol class="breadcrumb  text-right">
                            <li class="init-animation-3 delay0-8s"><a class="animsition-link" href="index.html">Home</a>
                            </li>
                            <li class="active init-animation-3 delay1-0s">Blog</li>
                        </ol>
                    </div>
                    <!--/ End col -->
                </div>
                <!--/ End row -->
            </div>
            <!--/ End container -->
        </div>
    </div>
    <!--/ page-header -->
    <!-- Navbar -->
    <?= $header ?>
    <!--/ End Navbar -->
    <!-- Do not remove the div below if you want to a sticky navbar! -->
    <div id="about-section"></div>
    <!-- section -->
    <section class="section">
        <div class="container">
            <?php foreach ($blog as $item) { ?>
            <!-- blog-item -->
            <div class="blog-item">
                <!-- Blog-item Header & Media-->
                <a class="blog-media animsition-link" href="<?= base_url() ?>blog/post/<?= $item->id ?>">
                    <img class="parallax-img img-responsive" src="<?= base_url() ?>admin/uploads/files/<?= $item->imagen_file ?>" alt="" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -10%, 0px)" data-bottom-top="transform: translate3d(0px, -90%, 0px)">
                </a>
                <!-- Date, Author, Categories, Comments -->
                <div class="blog-item-detail row">
                    <div class="col-sm-10">
                    </div>
                    <div class="col-sm-2 text-right  padding-top-xs-15 ">
                        <a href="<?= base_url() ?>blog/post" class="btn-blog-more animsition-link"><span><?= ($language == 'es')?'ver artículo':'view post' ?></span><i class="btn-icon ci-icon-uniE8BE"></i></a>
                    </div>
                </div>
                <div class="row blog-item-title-wrapper">
                    <div class="blog-item-title col-sm-4">
                        <h1 class=" font-second"><?= $item->title_text ?></h1>
                        <span class="post-date">
                            <?= (!empty($item->updated_at) && $item->updated_at != "0000-00-00 00:00:00")?
                                    date("d/m/Y", strtotime($item->updated_at))
                                    :date("d/m/Y", strtotime($item->created_at)) ?>
                        </span>
                    </div>
                    <!-- Text Intro -->
                    <div class="col-sm-8 blog-item-body">
                        <?= $item->short_description_textarea ?>
                    </div>
                </div>
            </div>
            <!--/ End blog-item -->
            <?php } ?>
            <div class="text-center">
                <div class="pagination">
                    <?= $pagination ?>
                </div>
            </div>
        </div>
        <!--/ End container -->
    </section>
    <!--/ End section -->
    <!-- Footer Section -->
    <?= $footer ?>
    <!--/ End Footer Section -->
</div>