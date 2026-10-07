<?php

use ColorlibHQ\AdminLte\Menu\Filters\ActiveFilter;
use ColorlibHQ\AdminLte\Menu\Filters\GateFilter;
use ColorlibHQ\AdminLte\Menu\Filters\HrefFilter;
use ColorlibHQ\AdminLte\Menu\Filters\SearchFilter;

return [

    'title' => 'alfriansa',
    'title_prefix' => '',
    'title_postfix' => '',

    'use_ico_only' => false,
    'use_full_favicon' => false,

    'google_fonts' => [
        'allowed' => true,
    ],

    'logo' => 'KASIR 2',
    'logo_img' => 'vendor/adminlte/img/logoaw.png',
    'logo_img_class' => 'brand-image opacity-75 shadow',
    'logo_img_alt' => 'Logo Kasir',

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'vendor/adminlte/img/logoaw.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'text-bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,
    'layout_rtl' => false,

    'footer_left' => 'Copyright © 2014-'.date('Y').' <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>. All rights reserved.',
    'footer_right' => 'Anything you want',

    'preloader' => false,

    'control_sidebar' => false,
    'control_sidebar_theme' => 'dark',

    'sidebar_docs_url' => false,

    'demo' => false,
    'demo_middleware' => [
        'web',
        'auth',
    ],

    'docs' => false,
    'docs_middleware' => [
        'web',
    ],

    'activity_log' => [
        'redact' => [],
    ],

    'sidebar_breakpoint' => 'lg',
    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'leave',

    'sidebar_theme' => 'dark',
    'primary_color' => null,
    'sidebar_color' => null,
    'navbar_color' => null,
    'footer_color' => null,

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => 'fw-light',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'bg-body-secondary shadow',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-expand bg-body',
    'classes_topnav_nav' => 'navbar',
    'classes_topnav_container' => 'container-fluid',

    'color_mode_toggle' => true,

    /*
    |--------------------------------------------------------------------------
    | MENU
    |--------------------------------------------------------------------------
    */

    'menu' => [

        [
            'text' => 'Jurusan',
            'url' => '/jurusan',
            'icon' => 'far fa-fw fa-file',
        ],

        [
            'text' => 'Jenjang',
            'url' => '/jenjang',
            'icon' => 'far fa-fw fa-file',
        ],

        [
            'text' => 'Kelas',
            'url' => '/kelas',
            'icon' => 'far fa-fw fa-file',
        ],

        [
            'text' => 'Siswa',
            'url' => '/siswa',
            'icon' => 'far fa-fw fa-file',
        ],

        [
            'header' => 'ACCOUNT SETTINGS',
        ],

        [
            'text' => 'Profile',
            'url' => '#',
            'icon' => 'fas fa-fw fa-user',
        ],

        [
            'text' => 'Change Password',
            'url' => '#',
            'icon' => 'fas fa-fw fa-lock',
        ],

        [
            'text' => 'Multi Level',
            'icon' => 'fas fa-fw fa-share',
            'submenu' => [

                [
                    'text' => 'Level 1',
                    'url' => '#',
                ],

                [
                    'text' => 'Level 2',
                    'url' => '#',
                ],

            ],
        ],

        [
            'header' => 'LABELS',
        ],

        [
            'text' => 'Important',
            'url' => '#',
            'icon' => 'far fa-fw fa-circle',
            'icon_color' => 'danger',
        ],

        [
            'text' => 'Warning',
            'url' => '#',
            'icon' => 'far fa-fw fa-circle',
            'icon_color' => 'warning',
        ],

        [
            'text' => 'Information',
            'url' => '#',
            'icon' => 'far fa-fw fa-circle',
            'icon_color' => 'info',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | MENU FILTERS
    |--------------------------------------------------------------------------
    */

    'filters' => [
        GateFilter::class,
        HrefFilter::class,
        ActiveFilter::class,
        SearchFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | PLUGINS
    |--------------------------------------------------------------------------
    */

    'plugins' => [

        'flatpickr' => [
            'enabled' => false,
            'css' => 'vendor/flatpickr/flatpickr.min.css',
            'js' => 'vendor/flatpickr/flatpickr.min.js',
        ],

        'tom_select' => [
            'enabled' => false,
            'css' => 'vendor/tom-select/tom-select.bootstrap5.min.css',
            'js' => 'vendor/tom-select/tom-select.complete.min.js',
        ],

        'tabulator' => [
            'enabled' => false,
            'css' => 'vendor/tabulator-tables/tabulator.min.css',
            'js' => 'vendor/tabulator-tables/tabulator.min.js',
        ],

        'quill' => [
            'enabled' => false,
            'css' => 'vendor/quill/quill.snow.css',
            'js' => 'vendor/quill/quill.min.js',
        ],

        'chartjs' => [
            'enabled' => false,
            'js' => [
                'vendor/chartjs/chart.umd.min.js',
                'vendor/adminlte/js/charts.js',
            ],
        ],

        'jsvectormap' => [
            'enabled' => false,
            'css' => 'vendor/jsvectormap/jsvectormap.min.css',
            'js' => [
                'vendor/jsvectormap/jsvectormap.min.js',
                'vendor/jsvectormap/maps/world.js',
            ],
        ],

        'fullcalendar' => [
            'enabled' => false,
            'css' => 'vendor/fullcalendar/index.global.min.css',
            'js' => 'vendor/fullcalendar/index.global.min.js',
        ],

        'sortablejs' => [
            'enabled' => false,
            'js' => 'vendor/sortablejs/sortablejs.min.js',
        ],

    ],

];