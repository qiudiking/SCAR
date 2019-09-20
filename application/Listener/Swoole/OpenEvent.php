<?php
/**
 * Created by PhpStorm.
 * User: 秋狄
 * Date: 2019/9/2
 * Time: 9:19
 */

namespace application\Listener\Swoole;


class OpenEvent
{
	public function handle( \swoole_server $server,$request )
	{
		\SeasLog::info('OpenEvent');
	}
}