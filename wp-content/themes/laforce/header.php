
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/icon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.js"></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/jquery.js'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/app.js'></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a href="<?php echo get_site_url(); ?>" class="logo-site">
    <?php lsd_get_template_part('icons', 'logo', ''); ?>
</a>
<div class="button-navigation">
    <span class="font_RightGrotesk-SpatialBlack">
        Menu
    </span>

    <div class="bar first"></div>
    <div class="bar second"></div>
    <div class="bar three"></div>
</div>


<div class="navigation-content">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/mockup-1.png" class="mockup-1" alt="">
    <img src="<?php echo get_template_directory_uri();?>/assets/images/mockup-2.png" class="mockup-2" alt="">

    <ul class="navigation-first">
        <li>
            <a href=""><span class="font_RightGrotesk-NarrowLight">À</span> <span class="font_RightGrotesk-SpatialBlack">Propos</span></a>
        </li>
        <li>
            <a href="<?= get_post_type_archive_link('works'); ?>"><span class="font_RightGrotesk-NarrowLight">Nos</span> <span class="font_RightGrotesk-SpatialBlack">projets</span></a>
        </li>
    </ul>
    <div class="container-bottom-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-bottom-header">
                        <span class="font_RightGrotesk-NarrowLight">Nous</span> <span class="font_RightGrotesk-SpatialBlack">Contacter</span>
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="row font_RightGrotesk-WideMedium info-contact">
                        <div class="col-sm-6">
                            21 place des nations unies<br/>
                            92110 Clichy
                        </div>
                        <div class="col-sm-6">
                            01 45 45 59 36<br/>
                            hello@laforceagency.com
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="label">Newsletter</div>
                    <div class="sub-link">What’s the food</div>
                </div>
                <div class="col-sm-2">
                    <div class="label">Our playlist on</div>
                    <div class="sub-link">Spotify</div>
                </div>
                <div class="col-sm-2">
                    <ul class="social-menu row">
                        <li class="col-sm-6">
                            <a href="">
                                Facebook
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a href="">
                                Twitter
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a href="">
                                Twitter
                            </a>
                        </li>
                        <li class="col-sm-6">
                            <a href="">
                                Linkedin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
