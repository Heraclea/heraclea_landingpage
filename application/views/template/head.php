<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Heraclea</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
<!-- Animation Libraries -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/css/magic.min.css">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900%7COpen+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<!-- Fonts Icons -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/custom-icons.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/css/et-line-icons.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- Owl Carousel -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
<!-- Nivo Lightbox -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/css/nivo-lightbox/lightbox-theme.css">
<!-- Animated Headlines -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/animated-hedlines.css">
<!-- Youtube Background Player -->
<link rel="stylesheet" href="<?= base_url() ?>assets/css/YTPlayer.css">
<!-- Main Styles -->
<link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet">
<!-- Theme -->
<link href="<?= base_url() ?>assets/css/theme/fluorescent-blue.css" rel="stylesheet" data-color="" id="theme">
<!-- Animsition -->
<link href="<?= base_url() ?>assets/css/animsition.min.css" rel="stylesheet">

<meta name="msapplication-TileImage" content="mstile-144x144.png" />

<input type="hidden" id="base_url" value="<?= base_url(); ?>">

<meta name="description" content="<?= $seo->website_description ?>">
<meta name="keywords" content="<?= $seo->website_keywords ?>">

<?php if(!empty($seo->google_analytics_code)){ ?>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', '<?= $seo->google_analytics_code ?>', 'auto');
    ga('send', 'pageview');

  </script>
<?php } ?>