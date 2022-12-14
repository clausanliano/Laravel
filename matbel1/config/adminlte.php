<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'SSMMB/MATBEL',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>MATBEL</b>/SSMMB',

    'logo_mini' => '<b>MB</b>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | light variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we have the option to enable a right sidebar.
    | When active, you can use @section('right-sidebar')
    | The icon you configured will be displayed at the end of the top menu,
    | and will show/hide de sidebar.
    | The slide option will slide the sidebar over the content, while false
    | will push the content, and have no animation.
    | You can also choose the sidebar theme (dark or light).
    | The right Sidebar can only be used if layout is not top-nav.
    |
    */

    'right_sidebar' => true,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs.
    | This was automatically set on install, only change if you really need.
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and a URL. You can also specify an icon from Font
    | Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    */
    
    'menu' => [
        [
            'text' => 'search',
            'search' => true,
        ],
      
        ['header' => 'Ferramentas Administrativas'],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'pages',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-file',
            'label'       => 4,
            'label_color' => 'success',
        ],
        [
            'text'        => 'Cadastro de Usu??rios',
            'icon'        => 'fa fa-list',
            'submenu' => [
                [
                    'text'        => 'Listar de Usu??rios',
                    'url'         => 'users',
                    'icon'        => 'fa fa-list',
                ],
                [
                    'text'        => 'Criar de Usu??rio',
                    'url'         => 'users/create',
                    'icon'        => 'fa fa-list',
                ],

            ],
        ],
        [
            'text'        => 'Controle de Permiss??es',
            'icon'        => 'fa fa-list',
            'submenu' => [
                [
                    'text'        => 'Administrar Permiss??es',
                    'url'         => 'model_has_roles',
                    'icon'        => 'fa fa-list',
                ],
                [
                    'text'        => 'Listar de Fun????es de Usu??rios',
                    'url'         => 'roles',
                    'icon'        => 'fa fa-list',
                ],
                [
                    'text'        => 'Listar Permiss??es',
                    'url'         => 'permission', 
                    'icon'        => 'fa fa-list',
                ],
            ],
        ],
        ['header' => 'Painel de Navega????o'],
        [
            'text'        => 'Armas',
            'icon'        => 'fa fa-list',
            'submenu' => [
                [
                    'text'        => 'Cadastros de Armas',
                    'url'         => 'arma',
                    'icon'        => 'fa fa-list',
                ],
                [
                        'text'        => 'Caracter??sticas da Arma',
                        'icon'        => 'fa fa-list',
                        'submenu' => [
                            [
                            'text'        => 'Modelos de Arma',
                            'url'         => 'modelo_arma',
                            'icon'        => 'fa fa-list',
                            ],
                            [
                                'text'        => 'Tipos de Arma',
                                'url'         => 'tipo_arma',
                                'icon'        => 'fa fa-list',
                            ],
                            [
                                'text'        => 'Fabricantes',
                                'url'         => 'fabricante',
                                'icon'        => 'fa fa-list',
                            ],
                            [
                                'text'        => 'Situa????es',
                                'url'         => 'situacao',
                                'icon'        => 'fa fa-list',
                            ],
                            [
                                'text'        => 'Calibres',
                                'url'         => 'calibre',
                                'icon'        => 'fa fa-list',
                            ],
                    ],
                ],
            ],
        ],
        [
            'text'        => 'Coletes',
            'icon'        => 'fa fa-list',
            'submenu' => [
                [
                    'text'        => 'Cadastro de Coletes',
                    'url'         => 'colete',
                    'icon'        => 'fa fa-list',
                ],
                [
                    'text'        => 'N??vel',
                    'url'         => 'nivel_colete',
                    'icon'        => 'fa fa-list',
                ],
                [
                    'text'        => 'Tamanho',
                    'url'         => 'tamanho_colete',
                    'icon'        => 'fa fa-list',
                ],
                [
                    'text'        => 'G??nero',
                    'url'         => 'genero_colete',
                    'icon'        => 'fa fa-list',
                ],
                [
                    'text'        => 'Situa????o',
                    'url'         => 'situacao_colete',
                    'icon'        => 'fa fa-list',
                ],

            ],
        ],
        [
            'text'        => 'Cautelas',
            'icon'        => 'fa fa-list',
            'submenu' => [
                [
                    'text'        => 'Cautelas Permanentes',
                    'url'         => 'cautela',
                    'icon'        => 'fa fa-list',
                ],
            ],
        ],

        [
            'text'        => 'Dados de Disparos',
            'icon'        => 'fa fa-list',
            'submenu' => [
                [
                    'text'        => 'Cadastrar Disparo',
                    'url'         => 'disparo',
                    'icon'        => 'fa fa-list',
                ],
                [
                    'text'        => 'Tipo Disparo',
                    'url'         => 'tipo_disparo',
                    'icon'        => 'fa fa-list',
                ],
                [
                    'text'        => 'Tipo Muni????o',
                    'url'         => 'tipo_municao',
                    'icon'        => 'fa fa-list',
                ],
            ],
        ],
        ['header' => 'account_settings'],
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ],
        ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'aqua',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Configure which JavaScript plugins should be included. At this moment,
    | DataTables, Select2, Chartjs and SweetAlert are added out-of-the-box,
    | including the Javascript and CSS files from a CDN via script and link tag.
    | Plugin Name, active status and files array (even empty) are required.
    | Files, when added, need to have type (js or css), asset (true or false) and location (string).
    | When asset is set to true, the location will be output using asset() function.
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
