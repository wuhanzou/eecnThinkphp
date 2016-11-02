<?php
/**
 * 系统配文件
 * 所有系统级别的配置
 */
return array(
	//'配置项'=>'配置值'
	/**
	 * tp手册--附录--配置参考
	 * URL配置
	 */
	'DEFAULT_MODULE'     => 'Home',  //默认模块
	'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
	'URL_MODEL'            => 3, //URL模式
	'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符
	/* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'eecnthinkphp', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'eecn_', // 数据库表前缀
    // 显示页面Trace信息
	'SHOW_PAGE_TRACE' =>true, 
);