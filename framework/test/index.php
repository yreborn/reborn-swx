<?php
/**
 * Created by PhpStorm.
 * User: Reborn
 * Date: 2019/5/14
 * Time: 13:19
 */

require_once  dirname(dirname(__DIR__)).'/vendor/autoload.php';

//echo dirname(dirname(__DIR__)).'/vendor/autoload.php';
// Run application
(new swx\app())->run();

