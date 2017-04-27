<div id="page" class="animsition equal" data-animsition-in="zoom-outy" data-animsition-out="fade-out-right" data-loader-type="loader2" data-page-loader-text="HeraClea" style="transform-origin: 50% 50vh;">
    <div id="top"></div>
    <!-- Home Section -->
    <section id="home-section" class="home-section full-screen">
        <div class="video-background parallax-hero full-screen overlay" data-vide-bg="mp4: <?= base_url() ?>admin/uploads/files/<?= $home->video_mp4_file ?>, webm: <?= base_url() ?>admin/uploads/files/<?= $home->video_webm_file ?>, ogv: <?= base_url() ?>admin/uploads/files/<?= $home->video_ogv_file ?>, poster: <?= base_url() ?>admin/uploads/files/<?= $home->poster_file ?>" data-vide-options="position: 50% 50%" data-top="transform: translate3d(0px, 0px, 0px)" data-top-bottom="transform: translate3d(0px, -300px, 0px)" data-anchor-target="#home-section">
            <div class="hs-content">
                <div class="hs-content-inner">
                    <div id="particles-js" class="particles-js"></div>
                    <div class="init-animation-2">
                        <h1 class="hs-text-10 font-second"><?= $home->title_text ?></h1>
                    </div>
                    <div class="padding-bottom-20 init-animation-2 delay0-2s">
                        <p class="hs-text-6 font-second"><?= $home->subtitle_text ?></p>
                    </div>
                    <div class="padding-top-20 init-animation-2 delay0-4s">
                        <a href="#<?= strtolower($home->link_boton_select) ?>-section" class="btn btn-animated btn-split btn-transparent-white ripple-alone" data-text="<?= $home->text_button_text ?>"><span><?= $home->text_button_text ?></span></a>
                    </div>
                </div>
                <span class="scroll-down-arrow in-page-scroll" data-start="display: inline-block" data-100-start="display: none">
                <a href="#about-section" class="ci-icon-uniE930 init-animation-2 delay1-8s"></a>
            </span>
            </div>
        </div>
    </section>
    <!--/ End Home Section -->
    <?= $header ?>
    <div id="page-2">
        <!-- About Section -->
        <section id="about-section" class="about-section section">
            <div class="container">
                <div class="section-title">
                    <div class=" section-title-more">
                        <?= $about->subtitle_text ?>
                    </div>
                    <div>
                        <h2 class="section-title-heading"><?= $about->title_text ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 wow fadeInUp margin-bottom-xs-40">
                        <?= $about->description_textarea ?>
                    </div>
                    <!--/.col -->
                    <div id="skillbars" class="skillbars col-sm-6">
                        <?php $features = explode(',', $about->features_list); ?>
                        <?php for ($i=0; $i < count($features); $i++) { ?>
                            <div class="skillbar-container wow fadeInUp animated" data-wow-delay="0s">
                                <?php $feature = explode('-', $features[$i]) ?>
                                <p class="skillbar-title"><?= $feature[0] ?>
                                    <span><?= $feature[1] ?>%</span>
                                </p>
                                <!-- Skill Bar Precent_ to change the percent change the data-percent="..." -->
                                <div class="skillbar">
                                    <div class="skillbar-bar" data-percent="<?= $feature[1] ?>%"></div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <!--/.col -->
                </div>
                <!--/.row -->
            </div>
            <!--/.container -->
        </section>
        <!--/ End About Section -->
        <hr />
        <!-- Facts Section -->
        <div id="facts-section" class="facts-section text-center font-second small-section">
            <div class="container">
                <div class="row">
                    <?php foreach ($numbers as $number) { ?>
                    <!-- Fact Item -->
                    <div class="col-sm-3 fact-item col-xs-6 margin-bottom-xs-40">
                        <div class="fact-number">
                            <p class="counter"><?= $number->valor_text ?></p>
                        </div>
                        <div class="fact-text">
                            <p><?= $number->name_text ?></p>
                        </div>
                    </div>
                    <!--/ End Fact Item -->
                    <?php } ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!--/ End Facts Section -->
        <hr />
        <!-- Services Section -->
        <section id="services-section" class="services-section section">
            <div class="container">
                <div class="section-title">
                    <div class=" section-title-more">
                        <?= $services->subtitle_text ?>
                    </div>
                    <div>
                        <h1 class="section-title-heading"><?= $services->title_text ?></h1>
                    </div>
                </div>
                <div class="services-section-items padding-top-sm-10 row">
                    <?php foreach ($list_services as $service) { ?>
                    <div class="services-section-item col-sm-4 margin-bottom-xs-40 wow fadeInUpLeftScale">
                        <div class="services-section-item-icon">
                            <i class="<?= $service->icono_text ?>"></i>
                        </div>
                        <h4 class="services-item-title font-second"><?= $service->title_text ?></h4>
                        <div class="services-section-item-text">
                            <?= $service->description_textarea ?>
                        </div>
                    </div>
                    <!--/ End Services Section Item -->
                    <?php } ?>
                </div>
                <!--/.row -->
            </div>
            <!--/.container -->
        </section>
        <!--/ End Services Section -->
        <hr />
        <!--Start Works Section -->
        <section id="portfolio-section" class="portfolio-section portfolio-section-light section text-center no-padding-bottom">
            <div class="container">
                <div class="section-title">
                    <div class=" section-title-more">
                        <?= $portfolio->subtitle_text ?>
                    </div>
                    <div>
                        <h1 class="section-title-heading"><?= $portfolio->title_text ?></h1>
                    </div>
                </div>
                <!-- Start Works Buttons -->
                <div id="portfolio-filters" class="portfolio-filters margin-top-20 ripple-group-parent wow fadeIn" data-wow-offset="100" data-wow-delay=".1s">
                    <a class="btn btn-animated btn-split ripple-group" data-text="<?= ($language == 'es')?'todos':'all works' ?>" data-filter="*">
                        <span class="btn-icon icon-tools"></span>
                    </a>
                    <span class="btn-seperator">|</span>
                    <?php foreach ($categories_portfolio as $category) { ?>
                    <a class="btn btn-animated btn-split ripple-group" data-text="<?= $category->name_text ?>" data-filter=".category-<?= $category->id ?>">
                        <span class="btn-icon <?= $category->icono_text ?>"></span>
                    </a>
                    <span class="btn-seperator">|</span>
                    <?php } ?>
                </div>
                <!--/ End Works Buttons -->
                <!-- Works Items -->
                <ul id="portfolio-container" class="portfolio-container real-gapped colored-mask masonry clearlist row portfolio-hover-effect">
                    <?php $i=0; foreach ($items_portfolio as $project) { ?>
                    <li class="portfolio-item category-<?= $project->categorias_del_portafolio_relation ?>   col-sm-6 col-md-4 col-xs-12">
                        <div class="portfolio-item-img">
                            <img src="<?= base_url() ?>admin/uploads/files/<?= $project->imagen_file ?>" alt="portfolio" />
                        </div>
                        <div class="portfolio-item-info font-second">
                            <h3 class="portfolio-item-title"><?= $project->title_text ?></h3>
                            <div class="portfolio-item-detail">
                                <?= $project->description_textarea ?>
                                <!-- LightBox Button -->
                                <a href="<?= (!empty($project->link_video_text))?$project->link_video_text:base_url().'admin/uploads/files/'.$project->imagen_file ?>" title="<?= $project->title_text ?>" class="icon-magnifying-glass lightbox" data-lightbox-gallery="gallery<?= $i ?>"></a>
                                <!--/ End LightBox Button -->
                                <a href="<?= $project->link_text ?>" target="_blank" class="icon-attachment"></a>
                            </div>
                        </div>
                    </li>
                    <!--/ End Work Item -->
                    <?php $i++; } ?>
                </ul>
                <!--/ End Works Items -->
            </div>
            <!-- /.container -->
        </section>
        <!--/ End Works Section -->
        <!-- Project Order Section -->
        <div class="project-order-section-light in-page-scroll small-section text-center">
            <a href="#contact-section" class="btn btn-animated btn-split btn-dark ripple-alone" data-text="<?= $portfolio->text_button_text ?>"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $portfolio->text_button_hover_text ?>&nbsp;..&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
        </div>
        <!--/ End Project Order Section -->
        <!-- Process Section -->
        <section id="process-section" class="process-section section">
            <div class="container">
                <div class="section-title">
                    <div class=" section-title-more">
                        <?= $process->subtitle_text ?>
                    </div>
                    <div>
                        <h1 class="section-title-heading"><?= $process->title_text ?></h1>
                    </div>
                </div>
                <div class="position-relative padding-bottom-40 padding-top-100 padding-top-sm-120">
                    <!-- process headers -->
                    <ul class="process-labels font-second">
                        <!-- change [data-active] and list item to a same value -->
                        <?php $i=1; foreach ($items_process as $item) { ?>
                        <li data-que="<?= $i ?>" class="process-label-active wow fadeInDown" data-wow-offset="100" data-wow-delay=".<?= ($i-1)*15 ?>s" style="width:225px;">
                            <i class="<?= $item->icono_text ?>">
                                <i class="<?= $item->icono_text ?> icon-shade"></i>
                            </i>
                            <span data-active="<?= $item->title_text ?>" class="hidden-xs hidden-sm hidden-md"> <?= $item->title_text ?></span>
                        </li>
                        <?php $i++; } ?>
                    </ul>
                    <!--/ End process headers -->
                    <!-- process bar -->
                    <div class="line-process-parent">
                        <div class="line-process"></div>
                    </div>
                    <!--/ End process bar -->
                </div>
            </div>
            <!-- /.container -->
            <!-- process contents -->
            <div id="process" class="process owl-carousel container">
                <?php foreach ($items_process as $item) { ?>
                <!-- process item -->
                <div class="process-item section-text row container">
                    <div class="col-xs-12">
                        <span class="hidden-lg"><strong><?= $item->title_text ?></strong></span><br><br>
                    </div>
                    <div class="col-xs-12 col-sm-12 colums-2">
                        <?= $item->description_textarea ?>
                    </div>
                </div>
                <!--/ End process item -->
                 <?php } ?>
            </div>
            <!--/ End process contents -->
        </section>
        <!--/ End Process Section -->
        <hr>
        <!-- Team Section -->
        <section id="team-section" class="team-section section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="section-title">
                            <div class=" section-title-more">
                                <?= $team->subtitle_text ?>
                            </div>
                            <div>
                                <h2 class="section-title-heading"><?= $team->title_text ?></h2>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6 margin-bottom-xs-40">
                        <?= $team->description_textarea ?>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Team Items -->
                <div class="team-items">
                    <!-- Team Carousel -->
                    <div id="team-carousel-3" class="team-carousel owl-carousel carousel dots-under">
                        <?php foreach ($items_team as $item) { ?>
                        <!-- Team Item -->
                        <div class="team-item">
                            <!-- Team Item Image -->
                            <div class="team-item-img">
                                <img src="<?= base_url() ?>admin/uploads/files/<?= $item->imagen_file ?>" alt="<?= $item->nombre_text ?>" />
                            </div>
                            <!--/ End Team Item Imagee -->
                            <!-- Team Item Name -->
                            <div class="team-item-name font-second">
                                <h4 class=""><?= $item->nombre_text ?></h4>
                                <span><?= $item->position_text ?></span>
                            </div>
                            <!--/ End Team Item Name -->
                            <!-- Team Item Info -->
                            <div class="team-item-info">
                                <div class="team-item-text">
                                    <h3 class="font-second"><?= $item->title_text ?></span></h3>
                                    <?= $item->slogan_textarea ?>
                                </div>

                                <?php $skills = explode(',', $item->skills_list); ?>
                                <?php for ($i=0; $i < count($skills); $i++) { ?>
                                    <div class="skillbar-container">
                                        <?php $skill = explode('-', $skills[$i]) ?>
                                        <p class="skillbar-title font-second"><?= $skill[0] ?>
                                            <span><?= $skill[1] ?>%</span>
                                        </p>
                                        <!-- Skill Bar Precent_ to change the percent change the data-percent="..." -->
                                        <div class="skillbar">
                                            <div class="skillbar-bar" data-percent="<?= $skill[1] ?>%"></div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <ul class="team-item-social clearlist">
                                    <?php if(!empty($item->link_facebook_text)){ ?>
                                    <li>
                                        <a href="<?= $item->link_facebook_text ?>" target="_blank" class="fa fa-facebook-square"></a>
                                    </li>
                                    <?php } ?>
                                    <?php if(!empty($item->link_twitter_text)){ ?>
                                    <li>
                                        <a href="<?= $item->link_twitter_text ?>" target="_blank" class=" fa fa-twitter"></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!--/ End Team Item Info -->
                        </div>
                        <!--/ End Team Item -->
                        <?php } ?>
                    </div>
                    <!--/ End Team Carousel -->
                </div>
                <!--/ End Team Items -->
            </div>
            <!-- /.container -->
        </section>
        <!--/ End Team Section -->
        <hr />
        
        <!-- Clients Testimonials Section -->
        <section id="client-testimonials" class="client-testimonials section  overlay">
            <!-- Parallax Image Background -->
            <div style="background-image: url('<?= base_url() ?>admin/uploads/files/<?= $clients->imagen_de_fondo_file?>')" class="parallax-section-bg client-testimonials-bg overlay full-screen" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -25%, 0px)" data-bottom-top="transform: translate3d(0px, -75%, 0px)" data-anchor-target="#client-testimonials"></div>
            <!--/ End Parallax Image Background -->
            <div class="container">
                <div class="section-title padding-bottom-40">
                    <div class=" section-title-more">
                        <?= $clients->subtitle_text ?>
                    </div>
                    <div>
                        <h1 class="section-title-heading"><?= $clients->title_text ?></h1>
                    </div>
                </div>
            </div>
            <!--/ .container -->
            <div id="testimonials" class="testimonials owl-carousel carousel">
                <?php foreach ($items_clients as $item) { ?>
                <div class="testimo-item">
                    <div class="container">
                        <blockquote>
                            <?= $item->testimony_textarea ?>
                            <footer class=""><?= $item->nombre_de_la_persona_text ?>
                                <cite title="Source Title"><?= $item->empresa_text ?></cite>
                            </footer>
                        </blockquote>
                    </div>
                    <!--/ .container -->
                </div>
                <!--/ End Testimonials Item -->
                <?php } ?>
            </div>
            <!--/ End Testimonials Content -->
        </section>
        <!--/ End Clients Testimonials Section -->
        <!-- Clients Logos -->
        <div class="client-logos small-section">
            <div class="container">
                <div id="client-logos" class="owl-carousel">
                    <?php foreach ($items_brands as $item) { ?>
                    <div>
                        <a href="<?= $item->link_text ?>" target="_blank">
                            <img src="<?= base_url() ?>admin/uploads/files/<?= $item->imagen_file?>" alt="client logo" />
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--/ .container -->
        </div>
        <!--/ End Clients Logos -->
        <hr />

        <!-- Blog Section -->
        <section id="blog-section" class="blog-section section">
            <div class="container">
                <div class="section-title">
                    <div class=" section-title-more">
                        <?= $header_blog->subtitle_home_text ?>
                    </div>
                    <div>
                        <h1 class="section-title-heading"><?= $header_blog->title_home_text ?> </h1>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($blog as $item) { ?>
                    <!-- blog item -->
                    <article class="blog-post-preview margin-bottom-xs-40 col-sm-6">
                        <a href="<?= base_url() ?>blog/post/<?= $item->id ?>" class="blog-post-preview-link animsition-link" data-animsition-out="fade-out-up-sm" data-animsition-out-duration="500">
                            <div class="blog-post-preview-img">
                                <img class="parallax-img img-responsive" src="<?= base_url() ?>admin/uploads/files/<?= $item->imagen_file ?>" alt="" data-center="transform: translate3d(0px, -50%, 0px)" data-top-bottom="transform: translate3d(0px, -10%, 0px)" data-bottom-top="transform: translate3d(0px, -90%, 0px)">
                            </div>
                            <div>
                                <h2 class="blog-post-preview-title font-second"><?= $item->title_text ?></h2>
                            </div>
                            <div class="blog-post-preview-date font-second">
                                <?= (!empty($item->updated_at) && $item->updated_at != "0000-00-00 00:00:00")?
                                    date("d/m/Y", strtotime($item->updated_at))
                                    :date("d/m/Y", strtotime($item->created_at)) ?>
                            </div>
                            <div class="blog-post-preview-text">
                                <?= $item->short_description_textarea ?>
                            </div>
                        </a>
                    </article>
                    <!--/ End blog item -->
                    <?php } ?>
                </div>
                <!--/ .row -->
                <div class="padding-top-80 text-center">
                    <a href="<?= base_url() ?>blog" style="width:200px;" class="btn btn-animated btn-split btn-default ripple-alone animsition-link" data-animsition-out="fade-out-up-sm" data-animsition-out-duration="500" data-text="<?= ($language == 'es')?'todos los artículos':'see all posts' ?>"><span><?= ($language == 'es')?'ir al blog':'go to the blog' ?></span></a>
                </div>
            </div>
            <!--/ .container -->
        </section>
        <!--/ End Blog Section -->
        <!-- Contact Section -->
        <section id="contact-section" class="section contact-section">
            <div class="container">
                <div class="section-title">
                    <div class=" section-title-more">
                        <?= $contact->subtitle_text ?>
                    </div>
                    <div>
                        <h2 class="section-title-heading"><?= $contact->title_text ?></h2>
                    </div>
                </div>
                <div class="row padding-bottom-sm-90">
                    <div class="col-sm-4">
                        <div class="contact-item margin-bottom-xs-40"><i class="icon-phone"></i>
                            <p><?= $contact->telefono_1_text ?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-item margin-bottom-xs-40"><i class="icon-phone"></i>
                            <p><?= $contact->telefono_2_text ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-item margin-bottom-xs-40"><i class="icon-envelope"></i>
                            <p><?= $contact->email_text ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-offset-1 col-md-10">
                        <form id="ajax-contact" class="" method="post" action="<?= base_url() ?>home/sendEmail">
                            <fieldset>
                                <div class="row">
                                    <div class="input col-xs-12 col-sm-12 padding-bottom-xs-50 padding-bottom-40">
                                        <label class="input-label" for="name">
                                            <span class="input-label-content font-second" data-content="name"><?= ($language == 'es')?'Nombre':'Name' ?> *</span>
                                        </label>
                                        <input class="input-field" type="text" name="name" id="name" required />
                                    </div>
                                    <div class="input col-xs-12 col-sm-6 padding-bottom-xs-50 padding-bottom-50">
                                        <label class="input-label" for="email">
                                            <span class="input-label-content font-second" data-content="email">email *</span>
                                        </label>
                                        <input class="input-field" type="email" name="email" id="email" required />
                                    </div>
                                    <div class="input col-xs-12 col-sm-6 padding-bottom-xs-60 padding-bottom-50">
                                        <label class="input-label" for="company">
                                            <span class="input-label-content font-second" data-content="company"><?= ($language == 'es')?'Compañia':'Company' ?></span>
                                        </label>
                                        <input class="input-field" type="text" name="company" id="company" />
                                    </div>
                                    <div class="message col-xs-12 col-sm-12 padding-bottom-xs-40 padding-bottom-30">
                                        <label class="textarea-label font-second" for="message"><?= ($language == 'es')?'Mensaje':'Message' ?> *</label>
                                        <textarea class="input-field textarea" name="message" id="message" required></textarea>
                                    </div>
                                </div>
                                <div id="form-messages" class="form-message"></div>
                                <div class="col-xs-12 margin-top-30 text-center">
                                    <button id="btn-submit" type="submit" class="btn btn-animated btn-contact ripple-alone" data-text="<?= ($language == 'es')?'Enviar':'Send it' ?>"><span class="btn-icon"><span class="loader-parent"><span class="loader3"></span></span>
                                        </span>
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                        <!--/ End form -->
                    </div>
                    <!--/ .col -->
                </div>
                <!--/ .row -->
            </div>
            <!--/ .container -->
        </section>
        <!--/ End Contact Section -->
        <!--/ Map Section -->
        <div id="map-section" class="map-section">
            <!-- map opener -->
            <div id="map-opener" class="map-mask">
                <div class="map-opener">
                    <div class="font-second"><?= ($language == 'es')?'Encuentranos en el mapa':'locate us on the map' ?><i class="ci-icon-uniE930"></i></div>
                    <div class="font-second"><?= ($language == 'es')?'Cerrar el mapa':'Close the map' ?><i class="ci-icon-uniE92F"></i></div>
                </div>
            </div>
            <!--/ End map opener -->
            <div id="google-map">
                <div id="map-canvas" data-address="carrera 13 # 71- 57, Bogota"></div>
                <div id="map-zoom-in"></div>
                <div id="map-zoom-out"></div>
            </div>
        </div>
        <!--/ End Map Section -->
        <?= $footer ?>
    </div>
    <!--/ #page-2 -->
</div> 