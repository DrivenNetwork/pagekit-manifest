<?php

namespace Pagekit\Manifest\Controller;

use Pagekit\Application as App;


class ManifestController
{

    /**
     * @Access(admin=true)
     */
    public function indexAction()
    {

        $module = App::module('manifest');
        $config = $module->config;

        return [
            '$view' => [
                'title'=>'',
                'name'=>'manifest:views/index.php'
            ],
            'manifest'=> $config['manifest'],
            '$data'=> $config
        ];
    }

    /**
     * @Access(admin=true)
     * @Request({"manifest"}, csrf=true)
     */
    public function saveAction($manifest)
    {
        App::config('manifest')->set('manifest', $manifest);
        return App::response('Success', 200 );
    }

    public function webmanifestAction()
    {

        $module = App::module('manifest');
        $config = $module->config;
        $response = str_replace("storage", "\\/storage", json_encode($config['manifest']));
        return App::response($response, 200, ['Content-Type' => 'application/manifest+json'.'; charset='.'UTF-8']);
    }

}