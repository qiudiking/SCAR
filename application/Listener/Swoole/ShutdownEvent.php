<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/7/29
 * Time: 16:56
 */

namespace application\Listener\Swoole;


class ShutdownEvent
{
	public function handle( \swoole_server $server )
	{
		\SeasLog::info('Shutdown');
	}
}