<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/7/17
 * Time: 16:57
 */
namespace application\Listener\Swoole;

use Swoole\Coroutine;

/**
 *
 *
 * 'connect',有新的连接进入时，在worker进程中回调。
 * 'workerStart',此事件在Worker进程/Task进程启动时发生
 * 'shutdown',此事件在Server正常结束时发生，，函数原型
 * 'workerStop',此事件在Worker进程终止时发生
 * 'start',启动后在主进程（master）的主线程回调此函数，函数原型
 * 'workerError',当Worker/Task进程发生异常后会在Manager进程内回调此函数。
 * 'close',TCP客户端连接关闭后，在worker进程中回调此函数。
 * 'pipeMessage',当工作进程收到由 sendMessage 发送的管道消息时会触发onPipeMessage事件
 * 'workerExit',仅在开启reload_async特性后有效。异步重启特性，会先创建新的Worker进程处理新请求，旧的Worker进程自行退出。
 * 'managerStart',当管理进程启动时调用它
 * 'managerStop',当管理进程结束时调用它，
 * Class StartEvent
 *
 * @package application\Listener\Swoole
 */
class StartEvent
{
	public function handle( \swoole_server $server )
	{

	}
}