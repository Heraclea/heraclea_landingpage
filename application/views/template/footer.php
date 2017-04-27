<footer class="footer-section light-footer section no-padding-bottom">
    <!-- footer logo -->
    <div class="footer-logo">
        <img src="<?= base_url() ?>assets/img/logo-negro.png" alt="logo" width="200" />
    </div>
    <!--/ End footer logo -->
    <!-- Social icons -->
    <div class="footer-social">
        <?php if(!empty($data_footer->link_facebook_text)){ ?>
            <a href="<?= $data_footer->link_facebook_text ?>" target="_blank" class="fa fa-facebook-square" data-wow-offset="150" data-wow-delay="0s"></a>
        <?php } ?>
        <?php if(!empty($data_footer->link_twitter_text)){ ?>
        <a href="<?= $data_footer->link_twitter_text ?>" target="_blank" class="fa fa-twitter" data-wow-offset="150" data-wow-delay=".15s"></a>
        <?php } ?>
        <?php if(!empty($data_footer->link_google_plus_text)){ ?>
        <a href="<?= $data_footer->link_google_plus_text ?>" target="_blank" class="fa fa-google-plus" data-wow-offset="150" data-wow-delay=".3s"></a>
        <?php } ?>
        <?php if(!empty($data_footer->link_pinterest_text)){ ?>
        <a href="<?= $data_footer->link_pinterest_text ?>" target="_blank" class="fa fa-pinterest" data-wow-offset="150" data-wow-delay=".45s"></a>
        <?php } ?>
        <?php if(!empty($data_footer->link_youtube_text)){ ?>
        <a href="<?= $data_footer->link_youtube_text ?>" target="_blank" class="fa fa-youtube-play" data-wow-offset="150" data-wow-delay=".6s"></a>
        <?php } ?>

        <?php if(!empty($data_footer->link_instagram_text)){ ?>
        <a href="<?= $data_footer->link_instagram_text ?>" target="_blank" class="fa fa-instagram" data-wow-offset="150" data-wow-delay=".6s"></a>
        <?php } ?>

        <?php if(!empty($data_footer->link_linkedin_text)){ ?>
        <a href="<?= $data_footer->link_linkedin_text ?>" target="_blank" class="fa fa-linkedin" data-wow-offset="150" data-wow-delay=".6s"></a>
        <?php } ?>
    </div>
    <!--/ End Social icons -->
    <!-- go top pop-up -->
    <div id="go-top" class="go-top go-top-out in-page-scroll">
        <div class="circle1"></div>
        <a href="#top" class="square"><span></span></a>
        <div class="rectangle"></div>
        <div class="circle2"></div>
    </div>
    <!--/ End go top pop-up -->
    <div class="footer-bottom">
        <!-- Copyright -->
        <a class="footer-bottom-text font-second" target="_blank">HeraClea © 2016. <?= ($language == 'es')?'Todos los derechos reservados':'All Right Reserved' ?>.</a>
        <!-- End Copyright -->
    </div>
</footer>