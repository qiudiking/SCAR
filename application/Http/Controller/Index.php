<?php
namespace application\Http\Controller;



use Scar\Db;
use Scar\http\Request;
use Scar\http\Response;
use Scar\Result;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/7/17
 * Time: 17:13
 */
class Index
{



	/**
	 * Index constructor.
	 *
	 * @param \Scar\http\Request  $request
	 * @param \Scar\http\Response $response
	 */
	public function __construct( Request $request, Response $response ) {

	}



	/**
	 * @api {get} / 首页
	 * @apiGroup 页面
	 * @apiName home
	 * @apiVersion 1.0.0
	 *
	 * @apiDescription 官网首页
	 *
	 * @apiUse Response
	 *
	 */
	public function Index( Request $request,Response $response  )
	{
		$page = $request->get('page',1);
		$list = Db::table('requirement')->order('create_time desc')->paginate(20,false,['page'=>$page]);
		$list = $list->toArray();
		\SeasLog::info( print_r($list,1) );
	}


	/**
	 * @api {get} /home 名称
	 * @apiGroup 页面
	 * @apiName home
	 * @apiVersion 1.0.0
	 *
	 * @apiDescription 测试使用
	 *
	 * @apiUse Response
	 *
	 */
	public function home(Request $request,Response $response)
	{
		$result = Result::instance();
		return $response->withContent( (string)$result );
	}

}