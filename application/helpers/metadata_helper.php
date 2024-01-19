<?php
function site_key()
{
    return '6LfxmlcmAAAAAONjVmeTxswAtX_Zh5L5bWkturlT';
}

function secret_key()
{
    return '6LfxmlcmAAAAANJvhsA2JtZ1vK5FwLr6bgB4TLm3';
}

function getMetadataPages($view)
{
    $data = [
        'index' => [
            'title' => 'Sistema de contabilidad electrónica en la Nube | CIOnline',
            'description' => 'La forma más sencilla de automatizar tu contabilidad en línea. Más rápido e intuitivo que cualquier software contable en México. ¡Agiliza tu contabilidad!',
            'critical_path' =>
            'css_critical/index',
            'css_plugin' => [],
            'css' => [
                'assets/css/hexagon/hexagon.min.css',
            ],
            'js' => [
                'assets/js/hexagon/hexagon.min.js',
                'assets/js/hexagon/velocity.min.js',
                'assets/js/hexagon/velocity.ui.js',
                'assets/js/pages/index.js'
            ],
            'img_preconnect' => [
                '<link rel="preload" as="image" href="assets/img/home/home_01-small.webp" />'
            ],
            'preconnect_url' => []

        ],

        'caracteristicas' => [
            'title' => 'El mejor programa de contabilidad en línea de México | CIOnline',
            'description' => 'Conoce las características que hacen a CIOnline el más confiable sistema contable en línea para contadores, despachos y negocios por sus beneficios',
            'critical_path' =>
            'css_critical/caracteristicas',
            'css_plugin' => [],
            'css' => [],
            'js' => [
                'assets/js/pages/caracteristicas.js'
            ],
            'img_preconnect' => [
                '<link rel="preload" as="image" href="assets/img/caracteristicas/Características-small.webp" />'
            ],
            'preconnect_url' => []
        ],



        'que-es-cionline' => [
            'title' => 'Descubre a CIOnline | Automatiza tu contabilidad en línea',
            'description' => 'Cionline es la plataforma de contabilidad online ideal para Contadores y Negocios sin importar su giro. Mira cómo puedes ahorrar hasta 90% de tu tiempo.',
            'critical_path' => 'css_critical/que-es-cionline',
            'css_plugin' => [],
            'css' => [],
            'js' => [
                'assets/js/pages/que-es-cionline.js'
            ],
            'img_preconnect' => [
                '<link rel="preload" as="image" href="assets/img/cionline/quescio_01-small.webp" />'
            ],
            'preconnect_url' => []
        ],

        'integracion-a-portal-xpd' => [
            'title' => 'CIOnline Contabilidad + Conexión con Portal de Facturación XPD',
            'description' => 'Optimiza la contabilidad en línea de tu negocio y automatiza las Pólizas Contables al integrarlo con el Portal XPD. ¡Descubre aquí cómo hacerlo!',
            'critical_path' => 'css_critical/integracion-a-portal-xpd',
            'css_plugin' => [],
            'css' => [],
            'js' => [
                'assets/js/pages/integracion-a-portal-xpd.js'
            ],
            'img_preconnect' => [],
            'preconnect_url' => []
        ],


        'soporte' => [
            'title' => 'Soporte, Ayuda y Tutoriales | CIOnline',
            'description' => '¿Tienes algún problema? Aquí puedes consultar nuestros Tutoriales, podrás solicitar ayuda y resolver tus dudas. Horario: L-V de 9:00 am a 7:00 pm.',
            'critical_path' => 'css_critical/soporte',
            'css_plugin' => [
                '<link rel="preload stylesheet" onload="this.onload=null;this.rel=\'stylesheet\'" as="style"
                href="https://www.jqueryscript.net/css/jquerysctipttop.css">',
            ],
            'css' => [],
            'js' => [
                'assets/vendor/tinaciousFluidVid/tinaciousFluidVid.js?v2',
                'assets/js/pages/soporte.js'
            ],
            'img_preconnect' => [],
            'preconnect_url' => [
                '<link rel="preconnect" href="https://www.youtube.com/" crossorigin>'
            ]
        ],

        
        'planes/plan-anual' => [
            'title' => 'CIOnline: Plan Anual | Plataforma de contabilidad al Mejor Precio',
            'description' => 'El mejor socio para automatizar tu contabilidad desde $1700.00 al año. Sin contratos forzosos ni letras pequeñas. ¡Suscríbete ahora!',
            'critical_path' => 'css_critical/plan-anual',
            'css_plugin' => [],
            'css' => [],
            'js' => [
                'assets/js/pages/plan-anual.js'
            ],
            'img_preconnect' => [],
            'preconnect_url' => [],
        ],

        'planes/plan-mensual' => [
            'title' => 'CIOnline: Plan Mensual | Sistema contable en línea al Mejor Precio',
            'description' => 'Estás por comenzar a automatizar tu contabilidad en la Nube desde $199.00 al mes. Sin plazos forzosos ni letras pequeñas. ¡Suscríbete ahora!',
            'critical_path' => 'css_critical/plan-mensual',
            'css_plugin' => [],
            'css' => [],
            'js' => [
                'assets/js/pages/plan-anual.js'
            ],
            'img_preconnect' => [],
            'preconnect_url' => [],
        ],

        'planes/probar-gratis' => [
            'title' => 'CIOnline:  30 días Gratis del mejor sistema de contabilidad en Línea',
            'description' => 'Crea tu cuenta gratuita y disfruta sin restricción de nuestro sistema contable en la nube. Aumenta tu productividad y ahorra hasta el 90% del tiempo.',
            'critical_path' => 'css_critical/probar-gratis',
            'css_plugin' => [],
            'css' => [],
            'js' => [
                'assets/js/pages/probar-gratis.js'
            ],
            'img_preconnect' => [],
            'preconnect_url' => [],
        ],
    ];

    $data = setLink($view, $data);
    return $data[$view];
}


function setLink($view, $data)
{

    //Plugins



    $newcss = [];
    $css = $data[$view]['css'];
    foreach ($css as  $value) {
        $newcss[] = '<link rel="stylesheet preload" onload="this.onload=null;this.rel=\'stylesheet\'" as="style" href="' . base_url($value) . '">';
    }

    $newjs = [];
    $js = $data[$view]['js'];
    foreach ($js as  $value) {
        $newjs[] = '<script type="text/javascript" defer src="' . base_url($value) . '"></script>';
    }

    $data[$view]['css'] = $newcss;
    $data[$view]['js'] = $newjs;

    return $data;
}
