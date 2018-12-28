jQuery(document).ready(function () {
    $('.slider-container').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev left-arrow button-slicks"><i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>\n</i></button>',
        nextArrow: '<button type="button" class="slick-prev right-arrow button-slicks"><i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></i></button>'
    });
    $('button.menu-btn').on('click', function () {
        $(this).parent().toggleClass('toggled');
        if( $(this).find('i').hasClass('fa-times') ) {
            $(this).find('i').addClass('fa-bars').removeClass('fa-times')
        }
        else {
            $(this).find('i').addClass('fa-times').removeClass('fa-bars');
        }
    });
});


