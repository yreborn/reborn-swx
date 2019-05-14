<?php
/**
 * Created by PhpStorm.
 * User: Reborn
 * Date: 2019/5/14
 * Time: 13:41
 */

namespace swx\http;

class Http
{
    public function run()
    {
        $http = new Http\Server('0.0.0.0', 9501);
        $http->set(array('daemonize'=> true));
        $http->on('request', function ($request, $response) {
            $response->end("<h1>Hello Swoole. #".rand(1000, 9999)."</h1>");
        });
        $http->start();
    }
}