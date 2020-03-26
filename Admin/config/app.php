<?php

$return_array = [

    'name' => 'BackEnd',

    'providers' => [
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        Admin\Providers\AppServiceProvider::class,
        Admin\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        Admin\Providers\EventServiceProvider::class,
        Admin\Providers\RouteServiceProvider::class,

    ],
    'asset_url' => env('ASSET_URL', 'http://localhost/notary/Admin/public/'),

];

$file_name = basename(__FILE__);

$common_config = realpath(app()->basePath().'/../Common/config/'.$file_name);
if(is_file($common_config)){
    return array_merge_recursive($return_array, include ($common_config));
}

return $return_array;