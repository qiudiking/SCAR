<?php
/**
 * Created by PhpStorm.
 * User: 秋狄
 * Date: 2019/9/20
 * Time: 16:33
 */

namespace application\Http\Controller;


class Common
{

	private $assign = [];

	public function assign($name,$value)
	{
		$this->assign[$name] = $value;
	}

	public function display($fileName) { //文件名（包括类型）
		$path = APP_PATH . '/resource/views/'; //文件的路由地址
		$file = $path.$fileName.'.html'; //文件的路由地址
		if ( is_file( $file ) ) {//文件是否存在

			$loader = new \Twig\Loader\FilesystemLoader( $path );
			$twig = new \Twig\Environment($loader);

			return  $twig->render($fileName.'.html', $this->assign);
		}else{
			throw new \Exception("view not file $file");
		}

	}
}