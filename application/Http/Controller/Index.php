<?php
namespace application\Http\Controller;

use Scar\http\Request;
use Scar\http\Response;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/7/17
 * Time: 17:13
 */
class Index
{
	public function __construct( Request $request, Response $response ) {

	}

	/**
	 * @api {get}/user/Index/login 名称
	 * @apiGroup user
	 * @apiName 您
	 * @apiVersion 1.0.0
	 *
	 * @apiDescription 接口描述
	 *
	 *
	 *
	 * @apiSuccess {Number} code    状态码，0：请求成功
	 * @apiSuccess {String} message   提示信息
	 * @apiSuccess {Object} data    返回数据
	 *
	 * @apiSuccessExample {json} Success-Response:
	 * {"code":0,"message":"","data":[]}
	 *
	 * @apiError 4002 The <code>id</code> of the User was not found.
	 *
	 * @apiErrorExample {json} Error-Response:
	 * {"code":5001,"message":"接口异常"}
	 *
	 */
	public function Index( Request $request, Response $response )
	{


	}




}