<?php
/**
 * Created by PhpStorm.
 * User: Reborn
 * Date: 2019/5/14
 * Time: 11:15
 */

namespace swx\tcp;

class Tcp
{

    public function run()
    {
        //创建Server对象，监听 127.0.0.1:9501端口
        $serv = new \swoole_server('0.0.0.0', 9509);
//        $serv->set(array('daemonize'=> true));
        //监听连接进入事件
        $serv->on('connect', function ($serv, $fd) {
            echo "Client: Connect.\n";
        });

        //监听数据接收事件
        $serv->on('receive', function ($serv, $fd, $from_id, $data) {
            $serv->send($fd, "Server: ".$data);
        });

        //监听连接关闭事件
        $serv->on('close', function ($serv, $fd) {
            echo "Client: Close.\n";
        });

        //启动服务器
        $serv->start();
    }
}