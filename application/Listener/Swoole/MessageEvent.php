<?php
/**
 * Created by PhpStorm.
 * User: 秋狄
 * Date: 2019/9/2
 * Time: 9:18
 */

namespace application\Listener\Swoole;


class MessageEvent
{
	public function handle( \swoole_server $server,$frame )
	{
		\SeasLog::info('MessageEvent');
	}
}