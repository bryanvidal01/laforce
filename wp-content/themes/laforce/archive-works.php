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
                <div class="col-sm-6">
                    <a href="<?= get_site_url(); ?>/works/realisation/" class="push-project">
                        <img src="http://fakeimg.pl/1200x1200/" alt="">
                        <div class="title-case">SushiShop - Digital Content</div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a class="push-project">
                        <img src="http://fakeimg.pl/1200x1200/" alt="">
                        <div class="title-case">SushiShop - Digital Content</div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a class="push-project">
                        <img src="http://fakeimg.pl/1200x1200/" alt="">
                        <div class="title-case">SushiShop - Digital Content</div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a class="push-project">
                        <img src="http://fakeimg.pl/1200x1200/" alt="">
                        <div class="title-case">SushiShop - Digital Content</div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
