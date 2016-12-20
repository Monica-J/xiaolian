<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'xiaolian',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
//  'LAYOUT_ON'             =>  ''
	'LOG_RECORD'            =>  true,  // 进行日志记录
	'LOG_EXCEPTION_RECORD'  =>  true,    // 是否记录异常信息日志
	'LOG_LEVEL'             =>  'EMERG,ALERT,CRIT,ERR,WARN,NOTIC,INFO,DEBUG,SQL',  // 允许记录的日志级别
	'TMPL_PARSE_STRING'     =>   array(
	            '__UPLOAD__' => 'Public' // 更改默认的/Public 替换规则
	        )

	//页面调试工具
	// 'SHOW_PAGE_TRACE'=>true,
);
