<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>
    <meta content="<?= $description ?>" name="description">
    <meta content="" name="keywords">

    <link rel="canonical" href="<?= current_url(true) ?>" />

    <!--start NO CACHE -->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- Preconnect CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://code.jquery.com/" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net/" crossorigin>
    <link rel="preconnect" href="https://www.jqueryscript.net/" crossorigin>
    <link rel="preconnect" href="https://www.google.com/" crossorigin>
    <?php
        if(isset($preconnect_url)){
            foreach ($preconnect_url as $url) {
                echo $url ."\n";
            }
        }
    ?>

    <!-- Preload -->
    <link rel="preload" as="image" href="<?= base_url('assets/favicon.ico') ?>" />
    <link rel="preload" as="image" href="<?= base_url('assets/img/logo.webp') ?>" />

    <?php
        if(count($img_preconnect)>0){
            foreach ($img_preconnect as $img) {
                echo $img ."\n";
            }
        }
    ?>

    <!-- <link rel="preload" as="font" type="font/woff2" crossorigin  href="fonts/zantroke-webfont.woff2" /> -->


    <!-- Favicons -->
    <link href="<?= base_url('assets/favicon.ico') ?> " rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?> " rel="apple-touch-icon">

    

    <!-- Critical Path -->
    <?php

    if (isset($css_path)) :
        echo $css_path;
    endif;

    ?>


    <!-- Normalize -->
    <link rel="stylesheet preload" onload="this.onload=null;this.rel='stylesheet'" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->
    <link rel="stylesheet preload" onload="this.onload=null;this.rel='stylesheet'" as="style" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@400;500;700&family=Poppins:wght@300;400;500;700&family=Raleway:wght@300;400;500;700&display=swap">

    <link rel="stylesheet preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vendor CSS Files -->
    <link rel="stylesheet preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>">

    <link rel="stylesheet preload" onload="this.onload=null;this.rel='stylesheet'" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate -->
    <link rel="preload stylesheet" as="style" onload="this.onload=null;this.rel='stylesheet'" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet preload" onload="this.onload=null;this.rel='stylesheet'" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css" />




    <!-- css plugin -->
    <?php
    if (isset($css_plugin)) :
        foreach ($css_plugin as  $value) :
            echo $value . "\n";
        endforeach;
    endif;

    ?>
    <!-- Template Main CSS File -->
    <link rel="stylesheet preload" onload="this.onload=null;this.rel='stylesheet'" as="style" href="<?= base_url('assets/css/general.min.css') ?>">
    <link rel="stylesheet preload" onload="this.onload=null;this.rel='stylesheet'" as="style" href="<?= base_url('assets/css/index.min.css') ?>">

    <!-- CSS DINAMICO -->
    <?php
    if (isset($css)) :
        foreach ($css as  $value) :
            echo $value . "\n";
        endforeach;
    endif;
    ?>




    <!-- Open Graph -->
    <meta property="og:url" content="<?= current_url(true) ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:image" content="<?= base_url('assets/img/logo.webp') ?>">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="cionline">
    <meta property="twitter:url" content="<?= current_url(true) ?>">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $description ?>">
    <meta name="twitter:image" content="<?= base_url('assets/img/logo.webp') ?>">
    <!-- Schema WebSite -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "<?= $title ?>",
            "url": "<?= current_url(true) ?>",
            "abstract": "<?= $description ?>"
        }
    </script>
    <!-- Schema Corporation -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Corporation",
            "name": "<?= $title ?>",
            "url": "<?= current_url(true) ?>",
            "logo": "<?= base_url('assets/img/logo.webp') ?>",
            "sameAs": [
                "https://www.facebook.com/ContabilidadInteligenteOnline",
                "https://twitter.com/basalcapital",
                "https://www.youtube.com/channel/UCTenKN0qzRL2YiVNlAOlsVQ"
            ]
        }
    </script>



    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W26S56J');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-220947590-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-220947590-1');
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W26S56J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <header id="header">
        <div class="container-fluid">

            <div class="row d-flex justify-content-center">
                <div class="col-xl-11 d-flex align-items-center justify-content-between">
                    <div></div>
                    <a class="logo" href="<?= base_url('/') ?>">
                        <img class="lazy" data-src="assets/img/logo.webp" width="100px" height="100px" alt="logo cio">
                        <span class="d-none">Logo</span>
                    </a>

                    <nav class="nav-menu d-none d-xl-block">
                        <ul class="menu">
                            <li class="<?= active_link(base_url('/')) ?> d-block d-xl-none"><a href="<?= base_url('/') ?>">Inicio</a></li>
                            <li class="<?= active_link(base_url('/')) ?> d-none d-xl-block"><a href="<?= base_url('/') ?>"><i class="fa-solid fa-house house"></i></a></li>
                            <li class="<?= active_link(base_url('que-es-cionline')) ?>"><a href="<?= base_url('que-es-cionline') ?>">¿Qué es Cionline?</a></li>
                            <li class="<?= active_link(base_url('caracteristicas')) ?>"><a href="<?= base_url('caracteristicas') ?>">Características</a></li>
                            <li><a href="<?= base_url('/') ?>#planes">Planes</a></li>
                            <li class="<?= active_link(base_url('integracion-a-portal-xpd')) ?>"><a href="<?= base_url('integracion-a-portal-xpd') ?>">Integración a Portal XPD</a></li>
                            <li class="<?= active_link(base_url('soporte')) ?>"><a href="<?= base_url('soporte') ?>">Soporte</a></li>
                            <li class="d-block d-lg-none"><a target="_blank" href="https://web.cionline.mx/">Acceso al Sistema</a></li>
                            <li class="d-block d-lg-none"><a href="<?= base_url('probar-gratis') ?>">Prueba Gratis</a></li>
                        </ul>
                        <div class="sub-menu">
                            <ul class="d-flex justify-content-end">
                                <li class="d-flex align-items-start justify-content-center ">
                                    <a href="<?= base_url('probar-gratis') ?>" class="btn-free third d-none d-xl-block">Prueba Gratis</a>
                                </li>
                                <li class="d-flex align-items-start justify-content-center ">
                                    <div class="center d-none d-xl-block">
                                        <div class="Btn Btn-Down blue" data-content="¡Iniciar Sesión!" data-color="#E4B363">
                                            <a target="_blank" href="https://web.cionline.mx/">
                                                <span>
                                                    <em>Acceso al Sistema</em>
                                                    <i aria-hidden="true" class="user fa fa-user fa-lg"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav><!-- .nav-menu -->

                    <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
                </div>
            </div>

        </div>
    </header>

    <main>
        <?= $content ?>

        <section class="section footer d-flex align-items-center">
            <div class="footer-half lazy" data-bg-multi="linear-gradient(rgba(255, 255, 255,0.1), rgba(255, 255, 255,0.1)),url(<?= base_url('assets/img/fooder_img_bg_c.webp') ?>)">
            </div>
            <div class="container-fluid">
                <div class="d-flex flex-row align-items-center mb-lg-5 pb-lg-5 mb-3">

                    <div class="linea-horizontal"></div>
                    <h2 class="mapa">Mapa del Sitio</h2>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <div class="container-blue">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <span class="ponter"></span>
                                            <a class="h2" href="<?= base_url('/') ?>">Inicio</a>
                                        </div>
                                    </div>
                                    <ul class="links mt-3">
                                        <li class="d-flex justify-content-start"><a href="<?= base_url('que-es-cionline') ?>">¿Qué es Cionline?</a></li>
                                        <li class="d-flex justify-content-start"><a href="<?= base_url('caracteristicas') ?>">Características</a></li>
                                        <li class="d-flex justify-content-start"><a href="<?= base_url('integracion-a-portal-xpd') ?>">Integración a Portal XPD</a>

                                        </li>
                                        <li class="d-flex justify-content-start"><a href="<?= base_url('soporte') ?>">Soporte</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <span class="ponter"></span>
                                            <a class="h2" href="<?= base_url('/') ?>#planes">Planes</a>
                                        </div>
                                    </div>
                                    <ul class="links mt-3">
                                        <li class="d-flex justify-content-start"><a href="<?= base_url('plan-mensual') ?>">Plan Mensual</a></li>
                                        <li class="d-flex justify-content-start"><a href="<?= base_url('plan-anual') ?>">Plan Anual</a></li>
                                        <li class="d-flex justify-content-start"><a href="<?= base_url('probar-gratis') ?>">Prueba 30 días</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <span class="ponter"></span>
                                            <span class="h2">Herramientas</span>
                                        </div>
                                    </div>
                                    <ul class="links mt-3">
                                        <li class="d-flex justify-content-start"><a target="_blank" href="https://www.expidetufactura.com.mx/XPD/">Sistema de facturación en
                                                línea</a></li>
                                        <li class="d-flex justify-content-start"><a target="_blank" href="https://www.expidetufactura.com.mx/XPD/validador-cfdi.html">Validador de CFDI 4.0</a>
                                        </li>
                                        <li class="d-flex justify-content-start"><a target="_blank" href="https://protectorfiscal.mx/">Sistema contra EFOS y EDOS</a></li>
                                        <li class="d-flex justify-content-start"><a target="_blank" href="https://cafidi.mx/">Calculadora Fiscal Digital</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <span class="ponter"></span>
                                            <span class="h2">Redes Sociales</span>
                                        </div>
                                    </div>
                                    <ul class="links mt-3">
                                        <li class="d-flex justify-content-start"><a target="_blank" rel="nofollow" href="https://www.facebook.com/ContabilidadInteligenteOnline">Facebook</a></li>
                                        <li class="d-flex justify-content-start"><a target="_blank" rel="nofollow" href="https://twitter.com/basalcapital">Twitter</a></li>
                                        <li class="d-flex justify-content-start"><a target="_blank" rel="nofollow" href="https://www.youtube.com/channel/UCTenKN0qzRL2YiVNlAOlsVQ">Youtube</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-md-8">
                                    <div class="d-flex flex-column">
                                        <span class="h2 text-center my-3">Aviso de privacidad</span>
                                        <p class="paragraph">
                                            © Copyright Basal Capital Centro Mayor. Torre Alfa. Piso 14 Calzada Zavaleta
                                            1108. Santa Cruz Buenavista Puebla. Pue. C.P. 72150. Tel Ventas 01(222)2 48
                                            74 85. Tel Atención a clientes 01 (222)2 26 77 24.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="<?= base_url('/') ?>">
                            <img class="img-logo lazy pt-md-5 pt-2 " data-src="assets/img/SCO-footer.webp" height="100px" width="100px" alt="logotipo B">
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </main>



    <a href="#" class="back-to-top" rel="nofollow"><i class="fa-solid fa-arrow-up"></i></a>


    <!-- Google key -->
    <script>
        var google_site_key = "<?= site_key() ?>";

        var service_recapcha="<?= base_url("service/recapcha") ?>"

        var service_contacto_rests="<?= base_url("service/formulario_contacto") ?>"

        var service_formulario_plan ="<?= base_url("service/formulario_plan") ?>"

        var service_formulario_prueba_gratis ="<?= base_url("service/formulario_prueba_gratis") ?>"

    </script>


    <!-- Vendor JS Files -->
    <script defer type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-lazyload/17.8.3/lazyload.min.js" integrity="sha512-PYqZh14FSExDb67jbM60M4ri5A/Bn/xOiM1ihfPx7c1d8XywMmn2M7+Z4i+v9RF9dlzRYzqk7sXamAHKZjfyFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js" integrity="sha512-m4xvGpNhCfricSMGJF5c99JBI8UqWdIlSmybVLRPo+LSiB9FHYH73aHzYZ8EdlzKA+s5qyv0yefvkqjU2ErLMg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer type="text/javascript" src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script defer type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6LfxmlcmAAAAAONjVmeTxswAtX_Zh5L5bWkturlT"></script>
    <script defer type="text/javascript" src="assets/js/validation.min.js"></script>
    <script defer type="text/javascript" src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"> </script>
    
    <!-- Template Main JS File -->
    <script type="text/javascript" defer src="assets/js/main.min.js"></script>
    <script type="text/javascript" defer src="assets/js/hexagon/jquery-ui.min.js"></script>
    <script type="text/javascript" defer src="assets/js/service.min.js"></script>
    

    
    <!-- JS DINAMICO -->
    <?php
    if ($js) :
        foreach ($js as $value) :
            echo $value . "\n";
        endforeach;
    endif;

    ?>

</body>

</html>