<?php

// packages/driven/manifest/index.php

return [

    'name' => 'manifest',

    'type' => 'extension',

    // array of namespaces to autoload from given folders
    'autoload' => [
        'Pagekit\\Manifest\\' => 'src'
    ],

    'settings' => '/admin/manifest',

    'resources'=>[
        'manifest:'=>''
    ],

    'events'=>[
        'boot'=> function ($event, $app){

            $app->on('view.meta', function ($event, $meta) use ($app) {

                $meta([
                    'link:manifest' => [
                        'href' => '/manifest/webmanifest',
                        'rel' => 'manifest',
                        'type' => 'application/manifest+json'
                    ]
                    ]);

            }, 50);
        }

    ],

    // array of routes
    'routes' => [

        // identifier to reference the route from your code
        '@manifest' => [

            // which path this extension should be mounted to
            'path' => '/manifest',

            // which controller to mount
            'controller' => 'Pagekit\\Manifest\\Controller\\ManifestController'
        ]
    ],

    'menu' => [
        'manifest' => [
            'label'=>'Manifest',
            'icon' => 'manifest:icon.svg',
            'url'=>'@manifest'
        ]
    ],

    /**
     * Define theme configuration.
     * This is the theme's default configuration. During run-time, they will be merged with
     * settings the user has set in the backend. The default configuration can therefore
     * be overwritten.
     */
    'config' => [
        'manifest' => [
            'lang' => 'en',
            'name' => '',
            'short_name' => '',
            'description' => '',
            'scope' => '/',
            'start_url' => '/',
            'display' => 'standalone',
            'orientation' => 'any',
            'theme_color' => '#cccccc',
            'background_color' => '#cccccc',
            'icons' => array([
                    'src'=> '',
                    'size'=> '36x36',
                    'type'=> 'image/png',
                    'density' => '0.75'
                    ],[
                    'src'=> '',
                    'size'=> '48x48',
                    'type'=> 'image/png',
                    'density' => '1.0'
                ],[
                    'src'=> '',
                    'size'=> '72x72',
                    'type'=> 'image/png',
                    'density' => '1.5'
                ],[
                    'src'=> '',
                    'size'=> '96x96',
                    'type'=> 'image/png',
                    'density' => '2.0'
                ],[
                    'src'=> '',
                    'size'=> '144x144',
                    'type'=> 'image/png',
                    'density' => '3.0'
                ],[
                    'src'=> '',
                    'size'=> '192x192',
                    'type'=> 'image/png',
                    'density' => '4.0'
                ]
            )
        ]
    ]
];
