<?php
use \Cake\Core\Plugin;

return [
    'CrudView' => [
        'brand' => 'Crud View',
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
