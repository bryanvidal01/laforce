<?php
/*
Template Name: Project
*/

get_header();
?>
<div id="swup" class="transition-fade" data-bg="#583f9a" data-color="#b6ebdf" data-marquee="#b6ebdf" data-footer="#583f9a">
    <div class="intro-archive">
        <section>
            <div class="marquee">
                <div class="marquee__inner color-violet" aria-hidden="true">
                    <span><strong>Nos</strong><strong>projets</strong></span>
                    <span><strong>Nos</strong><strong>projets</strong></span>
                    <span><strong>Nos</strong><strong>projets</strong></span>
                    <span><strong>Nos</strong><strong>projets</strong></span>
                </div>
            </div>
        </section>
    </div>

    <div class="container-cases">
        <div class="container-fluid">
            <div class="row">


                <?php

                if ( have_posts() ) :

                    while ( have_posts() ) :
                        the_post();

                        $work_image_preview = get_field('work_image_preview');

                        if($work_image_preview){
                            $work_image_preview_url = lsd_get_thumb($work_image_preview, '1200_1200');
                        }
                ?>

                    <div class="col-sm-6">
                        <a href="<?= get_the_permalink(); ?>" class="push-project">
                            <?php if(isset($work_image_preview_url) && $work_image_preview_url): ?>
                                <img src="<?= $work_image_preview_url; ?>" alt="">
                            <?php endif; ?>
                            <div class="title-case"><?= get_the_title(); ?></div>
                        </a>
                    </div>

                <?php

                    endwhile;

                endif;
                ?>

            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
