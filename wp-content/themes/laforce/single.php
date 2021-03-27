<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header();

?>
<div class="intro-single container-content-case">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <div class="title-case-single font_RightGrotesk-SpatialBlack">
                    <?php echo get_the_title(); ?>
                </div>
            </div>
            <div class="col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dicta modi nobis officiis perferendis quod repudiandae suscipit vel veritatis voluptate. Assumenda, aut deserunt esse fugit odit placeat tempore voluptas voluptates!
                </p>
            </div>
        </div>
        <div class="row sup-info-hero">
            <div class="col-sm-3">
                <div class="date font_RightGrotesk-TightMedium">
                    2020
                </div>
            </div>
            <div class="col-sm-5">
                <div class="category font_RightGrotesk-CompactBlack text-uppercase">
                    Brand strategy <br/>
                    Social media
                </div>
            </div>
            <div class="col-sm-4">
                <img src="https://cdn.1min30.com/wp-content/uploads/2015/08/logo-oasis.png" width="150" class="logo" alt="">
            </div>
        </div>
    </div>
</div>


<section class="case-single-full-image">
    <img src="http://fakeimg.pl/2500x800/" alt="">
</section>

<section class="case-single-two-images container-content-case">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <img src="http://fakeimg.pl/600x900/" alt="">
            </div>
            <div class="col-sm-6">
                <img src="http://fakeimg.pl/600x900/" alt="">
            </div>
        </div>
    </div>
</section>

<section class="case-single-carrousel">
    <div class="carousel slider">
        <div class="container-mockup">
            <div class="mockupPhone">
                <img src="http://fakeimg.pl/400x800/">
            </div>
        </div>
        <div class="container-mockup">
            <div class="mockupPhone">
                <img src="http://fakeimg.pl/400x800/">
            </div>
        </div>
        <div class="container-mockup">
            <div class="mockupPhone">
                <img src="http://fakeimg.pl/400x800/">
            </div>
        </div>
        <div class="container-mockup">
            <div class="mockupPhone">
                <img src="http://fakeimg.pl/400x800/">
            </div>
        </div>
        <div class="container-mockup">
            <div class="mockupPhone">
                <img src="http://fakeimg.pl/400x800/">
            </div>
        </div>
        <div class="container-mockup">
            <div class="mockupPhone">
                <img src="http://fakeimg.pl/400x800/">
            </div>
        </div>
    </div>
</section>

<section class="case-single-video-image-full-container container-content-case">
    <iframe width="1280" height="720" src="https://www.youtube.com/embed/jpoCIIZW7BY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>

<section class="case-single-video-image-full-container container-content-case">
    <img src="https://64.media.tumblr.com/7bed8273f621486faecdd407969aef51/tumblr_otfcxeacdO1slhhf0o1_1280.jpg" alt="">
</section>


<div class="pagination-project">
    <div class="title-section-pagination">
        <span class="font_RightGrotesk-NarrowLight">À</span> <span class="font_RightGrotesk-SpatialBlack">SUIVRE</span>
    </div>
    <div class="row">
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

<?php
get_footer();
