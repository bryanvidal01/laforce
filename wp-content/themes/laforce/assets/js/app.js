function isMobile(){
    if($(window).width() < 769){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){



});


function init(){

    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0;

    var swupDatas = $('#swup');
    var layoutColor = swupDatas.data('color');
    var layoutBg = swupDatas.data('bg');
    var layoutMarquee = swupDatas.data('marquee');
    var layoutFooter = swupDatas.data('footer');

    console.log(layoutColor);

    $('body').css({'background' : layoutBg});
    $('.logo-site g').css({'fill' : layoutColor});
    $('.marquee .marquee__inner').css({'color' : layoutMarquee});
    $('.button-navigation').css({'color' : layoutColor});
    $('.button-navigation .bar').css({'background' : layoutColor});
    $('.footer').css({'background' : layoutFooter});
    $('.sub-footer').css({'background' : layoutFooter});


    $('body').removeClass('nav-open');

    if($('.listing-projects').length > 0){
        var listProjectPosition = $('.listing-projects').offset().top;
        var listProjectHeight = $('.listing-projects').innerHeight();
        var innerHeight = $(window).innerHeight();

        $(window).scroll(function(){
            var currentScroll = $(window).scrollTop();

            if(currentScroll >= listProjectPosition){
                $('.container-mockup').addClass('fixed');
                $('.project').each(function(){
                    var el = $(this);
                    var positionElementProject = $(this).offset().top;
                    var colorEl = el.data('color');
                    var idStrate = el.data('id');

                    if((currentScroll + (innerHeight / 2)) > positionElementProject){
                        $('.container-mockup').css('background-color', colorEl);
                    }

                    if((currentScroll + (innerHeight / 2)) > positionElementProject && currentScroll < (positionElementProject + (innerHeight / 2))){
                        $('#' + idStrate).fadeIn();
                    }else{
                        $('#' + idStrate).fadeOut();
                    }

                });
            }else{
                listProjectPosition = $('.listing-projects').offset().top;
                listProjectHeight = $('.listing-projects').innerHeight();
                $('.container-mockup').removeClass('fixed');
            }

            if((currentScroll + innerHeight) >= (listProjectPosition + listProjectHeight)){
                $('.container-mockup').addClass('end-fixed');
            }else{
                $('.container-mockup').removeClass('end-fixed');
            }
        });
    }

    var totalSlide = $('.list-images li').length;
    var slide = 1;

    $('.pagination-next').click(function(event){
        event.preventDefault();
        if(slide < totalSlide){
            $('.list-images li:nth-child('+ slide +') img').toggleClass('hidden');

            slide++;
            $('.container-content-teams li').removeClass('visible');
            $('.container-content-teams li:nth-child('+ slide +')').addClass('visible')

        }else{
            $('.list-images li img').removeClass('hidden');
            $('.container-content-teams li').removeClass('visible');
            $('.container-content-teams li:nth-child(1)').addClass('visible')
            slide = 1;
        }


    });




    if(!isMobile()){
        var slideVisible = 5;
    }else{
        var slideVisible = 1;
    }

    slider = $('.slider').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: slideVisible,
        slidesToScroll: slideVisible,
        focusOnSelect: false,
        dots: true,
        draggable: false
    });
}

window.onload = function(){

    $('.button-navigation').click(function(){
        $('body').toggleClass('nav-open');
    });

    var colors = ['#2D2E82', '#583f9a', '#d96333'];
    const randomColors = Math.floor(Math.random() * colors.length);

    var animation = new SwupOverlayTheme({
        color: ['#192373'],
        duration: 800,
        direction: 'to-top',
    });
    const swup = new Swup({
        plugins: [animation]
    });

    init();

    swup.on('pageView', init);
    swup.on('pageLoaded', init);

    /*document.addEventListener('swup:pageLoaded', (event) => {
        init()
    });*/

}






