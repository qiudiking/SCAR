<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/7/17
 * Time: 15:12
 */

$config = array();
//--------------------------swoole------------------------//
$config['http']['bind']['port'] = 8821;
$config['http']['bind']['host'] = '0.0.0.0';
$config['http']['bind']['mode'] = '';
$config['http']['bind']['sock_type'] = '';

//----------------swoole_config-------------------------//
$config['http']['set']['worker_num'] = 4;
$config['http']['set']['log_file'] = APP_PATH.'/runtime/logs/swoole.log';
$config['http']['set']['task_worker_num'] = 2;

return $config;