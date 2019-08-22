<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/8/5
 * Time: 15:33
 */

namespace application\Task;


use Cake\Log\Log;

class Index
{
	public function Index( $data )
	{
		\SeasLog::info( print_r($data,1) );
	}
}