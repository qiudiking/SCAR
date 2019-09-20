<?php
/**
 * Created by PhpStorm.
 * User: 秋狄
 * Date: 2019/9/2
 * Time: 9:20
 */

namespace application\Listener\Swoole;


class HandshakeEvent
{
	public function handle( $request,$response )
	{
		\SeasLog::info('HandshakeEvent');
	}
}