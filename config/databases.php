<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/7/17
 * Time: 15:36
 */


return  [
	// 数据库类型
	'type'            => 'mysql',
	// 服务器地址
	'hostname'        => '127.0.0.1',
	// 数据库名
	'database'        => 'demo',
	// 用户名
	'username'        => 'demo',
	// 密码
	'password'        => '123456',
	// 端口
	'hostport'        => '3306',
	// 连接dsn
	'dsn'             => '',
	// 数据库连接参数
	'params'          => [],
	// 数据库编码默认采用utf8
	'charset'         => 'utf8',
	// 数据库表前缀
	'prefix'          => '',
	// 数据库调试模式
	'debug'           => false,

	// 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	'deploy'          => 0,
	// 数据库读写是否分离 主从式有效
	'rw_separate'     => false,
	// 读写分离后 主服务器数量
	'master_num'      => 1,
	// 指定从服务器序号
	'slave_no'        => '0',
	// 模型写入后自动读取主服务器
	'read_master'     => false,

	// 是否严格检查字段是否存在
	'fields_strict'   => false,
	// 数据集返回类型
	'resultset_type'  => 'array',
	// 自动写入时间戳字段
	'auto_timestamp'  => true,
	// 时间字段取出后的默认时间格式
	'datetime_format' => 'Y-m-d H:i:s',
	// 是否需要进行SQL性能分析
	'sql_explain'     => false,
	// Builder类
	'builder'         => '',
	// Query类
	'query'           => '\\Scar\\db\\Query',
	// 是否需要断线重连
	'break_reconnect' => false,
	//'建立连接超时时间s'
	'timeout'         => 3,
	//开启严格模式，query方法返回的数据也将转为强类型
	'strict_type'     => true,
];