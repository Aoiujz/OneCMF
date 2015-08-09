<?php
// +----------------------------------------------------------------------
// | OneCMF - 基于ThinkPHP的内容管理框架
// +----------------------------------------------------------------------
// | Copyright (c) 2015 www.onecmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://mit-license.org )
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <www.zjzit.cn>
// +----------------------------------------------------------------------

// PHP环境检测
// ThinkPHP要求5.3.0以上的PHP版本
version_compare(PHP_VERSION, '5.3.0', '<') && exit('require PHP > 5.3.0 !');

// 调试模式 
// 建议开发阶段开启 部署阶关闭
define('APP_DEBUG', true);

// OneCMF缓存目录
define('RUNTIME_PATH', realpath('./Runtime') . '/');

// OneCMF核心目录
define('ONECMF_PATH', realpath('./OneCMF') . '/');

// 应用目录
define('APP_PATH', ONECMF_PATH . 'Application/');

// 应用公共目录
define('COMMON_PATH', ONECMF_PATH . 'Common/');

// 执行应用
require './ThinkPHP/ThinkPHP.php';
