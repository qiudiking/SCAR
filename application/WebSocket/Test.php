<?php
/**
 * Created by PhpStorm.
 * User: 秋狄
 * Date: 2019/8/31
 * Time: 16:07
 */

namespace application\WebSocket;




use Swoole\Coroutine;

class Test
{
	public function handshake(  $request,  $response )
	{
		\SeasLog::info('handshake');
	}

	public function open( $server, $request )
	{
		\SeasLog::info('open');



	}

	public function close(  $server, $fd,  $reactorId )
	{
		\SeasLog::info('close');



	}

	public function message( \swoole_websocket_server  $server, \swoole_websocket_frame $frame )
	{
		\SeasLog::info('message');

	}

}