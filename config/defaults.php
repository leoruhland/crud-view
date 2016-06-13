<?php
use \Cake\Core\Plugin;

return [
    'CrudView' => [
        'brand' => 'Sistema de Reservas',
        'menu' => [
            ['icon' => 'fa-user', 'title' => 'Clientes', 'action' => ['controller' => 'guests', 'action' => 'index']],
            ['icon' => 'fa-calendar', 'title' => 'Ocupação', 'action' => ['controller' => 'rooms', 'action' => 'map']],
            ['icon' => 'fa-calendar-check-o', 'title' => 'Reservas',  'action' => ['controller' => 'rooms', 'action' => 'calendar']],
            ['icon' => 'fa-credit-card', 'title' => 'Cobranças', 'action' => ['controller' => 'charges', 'action' => 'index']],
            ['icon' => 'fa-cog', 'title' => 'Configurações', 'dropdown' => [
                ['icon' => 'fa-users', 'title' => 'Administradores', 'action' => ['controller' => 'users', 'action' => 'index']],
                ['icon' => 'fa-bed', 'title' => 'Quartos', 'action' => ['controller' => 'rooms', 'action' => 'index']],
                ['icon' => 'fa-bookmark', 'title' => 'Categorias de Quartos', 'action' => ['controller' => 'room_categories', 'action' => 'index']],
            ]],
        ],
        'css' => [
            '../vendor/bootstrap/dist/css/bootstrap.css',
            '../vendor/selectize/dist/css/selectize.bootstrap3.css',
            '../vendor/font-awesome/css/font-awesome.css',
            '../vendor/metisMenu/dist/metisMenu.css',
            'CrudView.local'
        ],
        'js' => [
            'headjs' => [
                '../vendor/jquery/dist/jquery.min.js',
                '../vendor/bootstrap/dist/js/bootstrap.min.js',
                '../vendor/selectize/dist/js/standalone/selectize.min.js',
                '../vendor/metisMenu/dist/metisMenu.min.js',
                '../vendor/moment/min/moment-with-locales.min.js',
                '../vendor/jquery.dirtyforms/jquery.dirtyforms.min.js',
            ],
            'script' => [
                'CrudView.local'
            ]
        ],
        'timezoneAwareDateTimeWidget' => false,
        'useAssetCompress' => Plugin::loaded('AssetCompress')
    ]
];
