<?php
/*
Template Name: Homepage
*/

get_header();

?>
<section class="hero-home">
    <div class="text-center">
        <div class="font_RightGrotesk-TightMedium">Digital</div>
        <div class="font_RightGrotesk-SpatialBlack">Social</div>
        <div><span class="font_RightGrotesk-CompactBlack">Food</span> <span class="font_RightGrotesk-TallFine">Agency</span></div>
    </div>
</section>
<section class="image-full-width-home">
    <img src="https://images.pexels.com/photos/6563716/pexels-photo-6563716.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" width="100%" alt="">
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
                <img src="https://64.media.tumblr.com/7bed8273f621486faecdd407969aef51/tumblr_otfcxeacdO1slhhf0o1_1280.jpg" alt="">
            </span>
        </div>
        <div>
            <span class="img-2">
                <img src="https://64.media.tumblr.com/4b5e14b48ae5129f5fd9d6eb8406cb50/tumblr_otdi8010Sf1slhhf0o1_1280.jpg" style="margin-left: .2vw;" alt="">
            </span>
            <span class="font_RightGrotesk-TallFine" style="margin-left: -1.25vw;">Brand</span>
            <span class="font_RightGrotesk-CompactBlack" style="margin-left: -1.30vw;">Content</span>
            <span class="font_RightGrotesk-TallFine" style="margin-left: -1.15vw;">Social Media</span>
        </div>
        <div>
            <span class="font_RightGrotesk-TallFine">Brand</span>
            <span class="font_RightGrotesk-TallFine" style="margin-left: -0vw;">&</span>
            <span class="font_RightGrotesk-Medium" style="margin-left: -0vw;">Social</span>
            <span class="img-3">
                <img src="https://64.media.tumblr.com/5cfd905b9ac4e0cdd220c220aa67da6a/tumblr_ot2iawL39F1slhhf0o1_1280.jpg" width="370" alt="">
            </span>
            <span class="font_RightGrotesk-TallFine" style="margin-left: -0vw;">Activation</span>
        </div>
    </div>

    <div class="text-center">
        <a href="" class="border-dot">
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

<section class="listing-projects">
    <div class="container-mockup">
        <div class="mockupPhone">
            <video src="<?php echo get_template_directory_uri(); ?>/assets/videos/ezgif.com-crop.mp4" width="400" height="860" id="project-1" autoplay loop muted></video>
            <video src="<?php echo get_template_directory_uri(); ?>/assets/videos/180607_A_101 (1).mp4" width="400" height="860" id="project-2" style="display: none;" autoplay loop muted></video>
            <img src="https://images.pexels.com/photos/6401445/pexels-photo-6401445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="400" height="860" alt="" id="project-3" style="display: none ">
        </div>
    </div>
    <div class="project" data-id="project-1" data-color="#d96333">
        <div class="container-info-project">
            <img src="https://creathink.fr/wp-content/uploads/2020/01/Quitoque-logo-2019.png" width="150" class="logo" alt="">
            <div class="font_RightGrotesk-Medium text-uppercase" style="color: #d96333">
                C'est qui
            </div>
            <div class="font_RightGrotesk-SpatialBlack" style="color: #d96333">
                Le Chef
            </div>
            <div class="font_RightGrotesk-Medium" style="color: #d96333">ce soir ??</div>

            <p class="description-project">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            </p>
            <div class="container-mockup-mobile visible-mobile" style="background-color: #d96333;">
                <div class="mockupPhone">
                    <img src="https://images.pexels.com/photos/6401445/pexels-photo-6401445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="400" height="860" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="project" data-id="project-2" data-color="#2ca480">
        <div class="container-info-project">
            <img src="https://iconape.com/wp-content/files/zs/243142/svg/243142.svg" width="150" class="logo" alt="">
            <div class="font_RightGrotesk-Medium text-uppercase" style="color: #2ca480">
                MORNING
            </div>
            <div class="font_RightGrotesk-SpatialBlack" style="color: #2ca480">
                WAKE UP
            </div>
            <div class="font_RightGrotesk-Medium" style="color: #2ca480">by Belvita</div>

            <p class="description-project">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            </p>
            <div class="container-mockup-mobile visible-mobile" style="background-color: #2ca480;">
                <div class="mockupPhone">
                    <img src="https://images.pexels.com/photos/6401445/pexels-photo-6401445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="400" height="860" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="project" data-id="project-3" data-color="#2e3487">
        <div class="container-info-project">
            <img src="https://cdn.1min30.com/wp-content/uploads/2015/08/logo-oasis.png" width="150" class="logo" alt="">
            <div class="font_RightGrotesk-Medium text-uppercase" style="color: #2e3487">
                Oasis
            </div>
            <div class="font_RightGrotesk-SpatialBlack" style="color: #2e3487">
                Social
            </div>
            <div class="font_RightGrotesk-Medium" style="color: #2e3487">Gaming</div>

            <p class="description-project">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            </p>
            <div class="container-mockup-mobile visible-mobile" style="background-color: #2e3487;">
                <div class="mockupPhone">
                    <img src="https://images.pexels.com/photos/6401445/pexels-photo-6401445.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="400" height="860" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-all-works">
    <div class="text-center">
        <a href="" class="border-dot color-violet">
            <span class="font_RightGrotesk-TallFine">À</span> <span class="font_RightGrotesk-CompactBlack">Propos</span>
        </a>
    </div>
</section>

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
                    <div class="col-sm-6 text-center">
                        <div class="temoignage-container">
                            <div class="temoignage-content">
                                « C’était super de bosser avec eux,
                                ils sont créatis et à l’écoute ! Un vrai bonheur »
                            </div>
                            <div class="temoignage-author">
                                Jeff Bezos, CEO Amazon
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="temoignage-container">
                            <div class="temoignage-content">
                                « C’était super de bosser avec eux,
                                ils sont créatis et à l’écoute ! Un vrai bonheur »
                            </div>
                            <div class="temoignage-author">
                                Jeff Bezos, CEO Amazon
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="temoignage-container">
                            <div class="temoignage-content">
                                « C’était super de bosser avec eux,
                                ils sont créatis et à l’écoute ! Un vrai bonheur »
                            </div>
                            <div class="temoignage-author">
                                Jeff Bezos, CEO Amazon
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="temoignage-container">
                            <div class="temoignage-content">
                                « C’était super de bosser avec eux,
                                ils sont créatis et à l’écoute ! Un vrai bonheur »
                            </div>
                            <div class="temoignage-author">
                                Jeff Bezos, CEO Amazon
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <li>
                        <img src="http://fakeimg.pl/440x580/" alt="">
                    </li>
                    <li>
                        <img src="http://fakeimg.pl/440x580/666666" alt="">
                    </li>
                    <li>
                        <img src="http://fakeimg.pl/440x580/333333" alt="">
                    </li>
                </ul>
                <button class="pagination-next">Next</button>
            </div>
            <div class="container-content-teams">
                <ul>
                    <li class="visible">
                        <div class="name-team font_RightGrotesk-SpatialBlack color-blue">
                            Olivier 1
                        </div>
                        <div class="subname-team font_RightGrotesk-Medium color-blue">
                            Henry
                        </div>
                        <div class="function font_RightGrotesk-WideMedium">
                            Co-funder
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        </div>
                    </li>
                    <li>
                        <div class="name-team font_RightGrotesk-SpatialBlack color-blue">
                            Olivier 2
                        </div>
                        <div class="subname-team font_RightGrotesk-Medium color-blue">
                            Henry
                        </div>
                        <div class="function font_RightGrotesk-WideMedium">
                            Co-funder
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        </div>
                    </li>
                    <li>
                        <div class="name-team font_RightGrotesk-SpatialBlack color-blue">
                            Olivier 3
                        </div>
                        <div class="subname-team font_RightGrotesk-Medium color-blue">
                            Henry
                        </div>
                        <div class="function font_RightGrotesk-WideMedium">
                            Co-funder
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php lsd_get_template_part('general', 'block', 'instagram'); ?>
<?php
get_footer();
