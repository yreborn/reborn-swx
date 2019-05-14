<?php
/**
 * Created by PhpStorm.
 * User: Reborn
 * Date: 2019/5/14
 * Time: 13:46
 */

namespace swx;

use swx\tcp\Tcp;

class app
{
    public function __construct()
    {
    }

    /**
     * 运行请求
     * User: Reborn
     * 2019/5/14 13:48:58
     */
    public function run()
    {
        $this->tcp();
//        $this->http();
//        $this->websocket();
    }

    /**
     * http请求
     * User: Reborn
     * 2019/5/14 13:47:34
     */
    public function http()
    {

    }

    /**
     * tcp请求
     * User: Reborn
     * 2019/5/14 13:47:46
     */
    public function tcp()
    {
        return (new Tcp())->run();
    }

    /**
     * web请求
     * User: Reborn
     * 2019/5/14 13:48:00
     */
    public function websocket()
    {

    }
}