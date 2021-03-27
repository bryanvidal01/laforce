function isMobile(){
    if($(window).width() < 769){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){



});


window.onload = function(){

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

    $('.button-navigation').click(function(){
        $('body').toggleClass('nav-open');
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






