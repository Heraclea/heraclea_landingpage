<!-- Navbar -->
<input type="hidden" id="base-url" value="<?= base_url() ?>">
<div class="position-relative">
    <!-- sticky: 1) remove"transp-nav" class, add class="sticky-navbar" to #nav-wrapper | 2) remove navbar-fixed-top class from #nav [and navbar-transparent class too] -->
    <div id="nav-wrapper" class="transp-nav">
        <nav id="nav" class="navbar navbar-dark navbar-fixed-top navbar-transparent ripple-group-parent init-animation-5" role="navigation">
            <div class="container in-page-scroll">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" id="animated-navicon" class="navbar-toggle" data-toggle="collapse" data-target="#mobile-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand ripple-group" href="<?= base_url() ?>">
                        <div class="navbar-logo pull-left">
                        <img src="<?= base_url() ?>assets/img/logo.png" alt="logo" width="100" />
                        </div>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="mobile-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right cl-effect-5">
                        <li>
                            <a class="ripple-group" href="#top">
                                <span data-hover="<?= ($language == 'es')?'Inicio':'Home' ?>">
                                    <?= ($language == 'es')?'Inicio':'Home' ?>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="ripple-group" href="#about-section">
                                <span data-hover="<?= ($language == 'es')?'Nosotros':'About' ?>">
                                    <?= ($language == 'es')?'Nosotros':'About' ?>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="ripple-group" href="#services-section">
                                <span data-hover="<?= ($language == 'es')?'Servicios':'Services' ?>">
                                     <?= ($language == 'es')?'Servicios':'Services' ?>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="ripple-group" href="#portfolio-section">
                                <span data-hover="<?= ($language == 'es')?'Portafolio':'Portfolio' ?>">
                                     <?= ($language == 'es')?'Portafolio':'Portfolio' ?>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="ripple-group" href="#process-section">
                                <span data-hover="<?= ($language == 'es')?'Proceso':'Process' ?>">
                                     <?= ($language == 'es')?'Proceso':'Process' ?>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="ripple-group" href="#team-section">
                                <span data-hover="<?= ($language == 'es')?'Equipo':'Team' ?>">
                                     <?= ($language == 'es')?'Equipo':'Team' ?>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="ripple-group animsition-link" href="<?= base_url() ?>blog">
                                <span data-hover="blog">blog</span>
                            </a>
                        </li>
                        <li>
                            <a class="ripple-group" href="#contact-section">
                                <span data-hover="<?= ($language == 'es')?'Contacto':'Contact' ?>">
                                     <?= ($language == 'es')?'Contacto':'Contact' ?>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span language="es" class="change-language <?= ($language == 'es')?'active':'' ?>">ES</span>|<span language="en" class="change-language <?= ($language == 'en')?'active':'' ?>">EN</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>
</div>
<!--/ End Navbar -->