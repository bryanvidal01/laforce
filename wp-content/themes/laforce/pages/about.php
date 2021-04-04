<?php
/*
Template Name: About
*/

get_header();
?>

<div id="swup" class="transition-fade container-about" data-bg="#2d3787" data-color="#ebc542" data-marquee="#ebc542" data-footer="#2d3787">
    <div class="intro-archive">
        <section>
            <div class="marquee">
                <div class="marquee__inner color-violet" aria-hidden="true">
                    <span><strong>À</strong><strong>Propos</strong><strong>de nous</strong></span>
                    <span><strong>À</strong><strong>Propos</strong><strong>de nous</strong></span>
                    <span><strong>À</strong><strong>Propos</strong><strong>de nous</strong></span>
                    <span><strong>À</strong><strong>Propos</strong><strong>de nous</strong></span>
                </div>
            </div>
        </section>
    </div>

    <div class="container-content-case">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 offset-sm-6">
                    <div class="description-intro-about font_RightGrotesk-WideMedium">
                        <p>
                        Aujourd’hui, il y a encore des annonceurs qui privilégient des videos qui sont péniblement vues par 3,5 millions de spectateurs à la TV alors qu’avec une chouette idée, on peut tout casser et réunir 45 millions de personnes sur les réseaux sociaux. C’est ce qui s’est passé avec ce Tik Tok qui a profité à la marque Ocean Spray.
                        <br/>
                        <br/>
                        Si vous rêvez que votre marque soit likée, partagée et commentée, vous avez déjà fait une bonne partie du chemin puisque vous êtes ici à lire ces quelques lignes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="case-single-full-image">
        <img src="http://fakeimg.pl/2500x800/" alt="">
    </section>

    <section class="image-phone">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/group-2@2x.png" width="100%">
                </div>
                <div class="col-sm-4">
                    <div class="text-more-about">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcosit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            <br/>
                            <br/>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="case-single-two-images container-content-case">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <img src="http://fakeimg.pl/900x900/" alt="">
                </div>
                <div class="col-sm-6">
                    <img src="http://fakeimg.pl/900x900/" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php lsd_get_template_part('general', 'block', 'instagram'); ?>
</div>

<?php
get_footer();
