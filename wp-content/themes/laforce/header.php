
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/icon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.js"></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/jquery.js'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/SwupOverlayTheme.js"></script>
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/appCompressed.js'></script>
    <?php wp_head(); ?>

    <?php
        if(is_single()){
            $colorProject = get_field('work_color');
        }
    ?>

    <?php if(isset($colorProject) && $colorProject): ?>
        <style>
            .logo-site g{
                fill: <?= $colorProject; ?>;
            }

            .title-case-single,
            .sup-info-hero,
            .button-navigation{
                color: <?= $colorProject; ?>;
            }

            .case-single-carrousel .slick-dots li.slick-active,
            .button-navigation .bar{
                background-color: <?= $colorProject; ?>;
            }
        </style>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>

<div class="loader-site">
    <?php lsd_get_template_part('icons', 'logo', ''); ?>
</div>

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
            <a href="<?= get_the_permalink(get_field('page_about', 'option')); ?>"><span class="font_RightGrotesk-NarrowLight">À</span> <span class="font_RightGrotesk-SpatialBlack">Propos</span></a>
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
                            231 Rue Saint-Honoré <br/>75001 Paris
                        </div>
                        <div class="col-sm-6">
                            01 45 45 59 36<br/>
                            hello@laforceagency.com
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <?php if(get_field('params_newsletter','option')): ?>
                    <div class="label">Newsletter</div>
                    <a href="<?= get_field('params_newsletter','option'); ?>" target="_blank" class="sub-link">What’s the food</a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-2">
                    <?php if(get_field('params_spotify','option')): ?>
                    <div class="label">Our playlist on</div>
                    <a href="<?= get_field('params_spotify','option'); ?>" target="_blank" class="sub-link">Spotify</a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-2">
                    <ul class="social-menu row">
                        <?php if(get_field('params_facebook','option')): ?>
                        <li class="col-sm-6 col-6">
                            <a href="<?= get_field('params_facebook','option'); ?>" target="_blank">
                                Facebook
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(get_field('params_instagram','option')): ?>
                        <li class="col-sm-6 col-6">
                            <a href="<?= get_field('params_instagram','option'); ?>" target="_blank">
                                Instagram
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(get_field('params_twitter','option')): ?>
                        <li class="col-sm-6 col-6">
                            <a href="<?= get_field('params_twitter', 'option'); ?>" target="_blank">
                                Twitter
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if(get_field('params_linkedin', 'option')): ?>
                        <li class="col-sm-6 col-6">
                            <a href="<?= get_field('params_linkedin', 'option'); ?>" target="_blank">
                                Linkedin
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
