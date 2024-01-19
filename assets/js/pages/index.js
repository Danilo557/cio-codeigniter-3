


            // Precios carousel (uses the Owl Carousel library)
            $(".pricing .testimonials-carousel").owlCarousel({
                autoplay: true,
                dots: true,
                loop: true,
                margin: 50,
                autoplayTimeout: 6000,
                responsive: {

                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 3
                    }
                }
            });




            // Testimonio carousel
            var heroCarousel = $("#heroCarousel");

            heroCarousel.on('slid.bs.carousel', function (e) {
                $(this).find('h2').addClass('animate__animated animate__fadeIn');
                $(this).find('p, .btn-get-started').addClass('animate__animated animate__fadeIn');
            });



            
            services.form_contact('#frm_contact');

            
            // var myFullpage = new fullpage('#fullpage', {
            //     anchors: [
            //     'contabilidad-en-la-nube',
            //     'sistema-contable',
            //     'ahorra-tiempo',
            //     'opiniones',
            //     'planes',
            //     'contacto',
            //     'footer'
            //     ],


            //     scrollBar: true,
            //     responsiveWidth: 900,

            // });