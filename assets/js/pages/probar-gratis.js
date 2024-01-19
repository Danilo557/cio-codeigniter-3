// var myFullpage = new fullpage('#fullpage', {
//     anchors: [
//         'el-mejor-socio-para-automatizar-tu-contabilidad',
//         'incluido-en-tu-plan-mensual',
//         'mas-beneficios',
//         'footer'
//     ],


//     scrollBar: true,
//     responsiveWidth: 900,

// });



$('.owl-carousel').owlCarousel({
    center: true,
    loop: true,
    nav: true,
    items: 3,
    autoplay: true,
    autoplayTimeout: 5000,
    stagePadding: 0,
    margin: -50,

    dots: true,
    navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2.4,
        },
        992: {
            items: 2.8,
        }
    },
    onInitialized: coverFlowEfx,
    onTranslate: coverFlowEfx,
});

function coverFlowEfx(e) {

    idx = e.item.index;
    $('.owl-item.big').removeClass('big');
    $('.owl-item.medium').removeClass('medium');
    $('.owl-item.mdright').removeClass('mdright');
    $('.owl-item.mdleft').removeClass('mdleft');
    $('.owl-item.smallRight').removeClass('smallRight');
    $('.owl-item.smallLeft').removeClass('smallLeft');
    $('.owl-item').eq(idx - 1).addClass('medium mdleft');
    $('.owl-item').eq(idx).addClass('big');
    $('.owl-item').eq(idx + 1).addClass('medium mdright');
    $('.owl-item').eq(idx + 2).addClass('smallRight');
    $('.owl-item').eq(idx - 2).addClass('smallLeft');
}


services.form_prueba_gratis('#frm_probrar_gratis');