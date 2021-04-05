<?php
/*
Template Name: Homepage
*/

get_header();

?>

<div id="swup" class="transition-fade container-home" data-bg="#fff" data-color="#c6ff59" data-marquee="#583f9a" data-footer="#583f9a">
    <section class="hero-home">
        <div class="text-center">
            <div class="font_RightGrotesk-TightMedium">Digital</div>
            <div class="font_RightGrotesk-SpatialBlack">Social</div>
            <div><span class="font_RightGrotesk-CompactBlack">Food</span> <span class="font_RightGrotesk-TallFine">Agency</span></div>
        </div>

        <div class="scroll-button">

        </div>
    </section>

    <?php

        $page_home_introduction = get_field('page_home_introduction');
        $page_home_introduction_photo = get_field('page_home_introduction_photo');

        if($page_home_introduction_photo){
            $page_home_introduction_photo_url = lsd_get_thumb($page_home_introduction_photo, '2500_800');
        }

    ?>
    <section class="image-full-width-home">
        <?php if(isset($page_home_introduction_photo_url) && $page_home_introduction_photo_url): ?>
        <img src="<?= $page_home_introduction_photo_url; ?>" width="100%" alt="">
        <?php endif; ?>
        <video src="<?= $page_home_introduction; ?>" width="100%" class="hidden-xs" id="video-hero" playsinline autoplay loop muted></video>
    </section>

    <div class="section-introduction">
        <div class="text-center title-intro-section">
            Nos expertises
        </div>

        <div class="container-introduction">
            <div>
                <span class="font_RightGrotesk-SpatialBlack" style="margin-left: -.2vw;">Brand</span>
                <span class="font_RightGrotesk-TightMedium" style="margin-left: -1.2vw;">Stratégy</span>
                <span class="img-1" style="margin-left: -.1vw;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/YT_03.jpg" alt="">
                </span>
            </div>
            <div>
                <span class="img-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/apple_food02.jpg" style="margin-left: .2vw;" alt="">
                </span>
                <span class="font_RightGrotesk-TallFine" style="margin-left: -1.25vw;">Brand</span>
                <span class="font_RightGrotesk-CompactBlack" style="margin-left: -1.30vw;">Content</span>
            </div>
            <div>
                <span class="font_RightGrotesk-TallFine">Social</span>
                <span class="font_RightGrotesk-SpatialBlack" style="margin-left: -0vw;">Média</span>
                <span class="img-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insta_03.jpg" width="370" alt="">
                </span>
                <span class="font_RightGrotesk-TallFine" style="margin-left: -0vw;">Activation</span>
            </div>
        </div>

        <div class="text-center">
            <a href="http://localhost:8888/laforce/works/oasis-social-gaming/" class="border-dot">
                <span class="font_RightGrotesk-TallFine">À</span> <span class="font_RightGrotesk-CompactBlack">Propos</span>
            </a>
        </div>
    </div>

    <section>
        <div class="marquee">
            <div class="marquee__inner color-violet" aria-hidden="true">
                <span><strong>Nos</strong><strong>derniers</strong><strong>travaux</strong></span>
                <span><strong>Nos</strong><strong>derniers</strong><strong>travaux</strong></span>
                <span><strong>Nos</strong><strong>derniers</strong><strong>travaux</strong></span>
                <span><strong>Nos</strong><strong>derniers</strong><strong>travaux</strong></span>
            </div>
        </div>
    </section>


    <?php lsd_get_template_part('bloc', 'strate', 'last-work'); ?>

    <section class="section-all-works">
        <div class="text-center">
            <a href="" class="border-dot color-violet">
                <span class="font_RightGrotesk-TallFine">À</span> <span class="font_RightGrotesk-CompactBlack">Propos</span>
            </a>
        </div>
    </section>


    <?php
        $page_home_testimonials = get_field('page_home_testimonials');

        if($page_home_testimonials):
    ?>
    <section class="section-temoignage">
        <div class="container-fluid">
            <div class="text-center title-intro-section">
                Nos expertises
            </div>

            <div class="container-title-section">
                <div class="font_RightGrotesk-TightMedium">Amour,</div>
                <div class="font_RightGrotesk-SpatialBlack">Licorne</div>
                <div class="font_RightGrotesk-NarrowLight">& chocolat</div>
            </div>

            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <div class="row">
                        <?php foreach ($page_home_testimonials as $page_home_testimonial): ?>
                            <?php if($page_home_testimonial['page_home_testimonials_testimonial']): ?>
                                <div class="col-sm-6 text-center">
                                    <div class="temoignage-container">
                                        <div class="temoignage-content">
                                            <?= $page_home_testimonial['page_home_testimonials_testimonial']; ?>
                                        </div>
                                        <div class="temoignage-author">
                                            <?= $page_home_testimonial['page_home_testimonials_testimonial_author']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>



    <?php
        $page_home_teams = get_field('page_home_teams');

        if($page_home_teams):
    ?>
    <section class="section-team">
        <div class="text-center title-intro-section color-blue">
            Notre équipe
        </div>
        <div class="container-title-section text-uppercase color-blue">
            <span class="font_RightGrotesk-TightMedium">Fabulous</span><span class="font_RightGrotesk-SpatialBlack">team</span>
        </div>
        <div class="container-fluid">
            <div class="list-team">
                <div class="container-images-teams">
                    <ul class="list-images">
                        <?php
                        foreach ($page_home_teams as $page_home_team):
                            $page_home_teams_photo = $page_home_team['page_home_teams_photo'];

                            if($page_home_teams_photo){
                                $page_home_teams_photo_url = lsd_get_thumb($page_home_teams_photo, '640_780');
                            }
                        ?>
                        <li>
                            <?php if(isset($page_home_teams_photo_url) && $page_home_teams_photo_url): ?>
                            <img src="<?= $page_home_teams_photo_url; ?>" alt="">
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                    <div class="pagination-next"></div>
                </div>
                <div class="container-content-teams">
                    <ul>
                        <?php $membre = 0; foreach ($page_home_teams as $page_home_team): ?>
                            <li <?= ($membre == 0)? 'class="visible"' : ''; ?>>
                                <div class="name-team font_RightGrotesk-SpatialBlack color-blue">
                                    <?= $page_home_team['page_home_teams_firstname']; ?>
                                </div>
                                <div class="subname-team font_RightGrotesk-Medium color-blue">
                                    <?= $page_home_team['page_home_teams_name']; ?>
                                </div>
                                <div class="function font_RightGrotesk-WideMedium">
                                    <?= $page_home_team['page_home_teams_post']; ?>
                                </div>
                                <div class="description">
                                    <?= $page_home_team['page_home_teams_biography']; ?>
                                </div>
                            </li>
                        <?php $membre ++; endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php lsd_get_template_part('general', 'block', 'instagram'); ?>
</div>
<?php
get_footer();
