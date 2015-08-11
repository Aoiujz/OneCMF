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

/**
 * PHP环境检测
 * ThinkPHP3.2.3要求PHP5.3.0以上版本
 * 但是OneCMF要求PHP5.4.0以上版本
 */
version_compare(PHP_VERSION, '5.4.0', '<') && exit('require PHP > 5.3.0 !');

/**
 * 应用调试模式 
 * 建议开发阶段开启 部署阶关闭
 */
define('APP_DEBUG', true);

/**
 * OneCMF缓存目录
 * OneCMF所有的模板缓存，文件形式的数据缓存，零时文件
 * 以及日志文件都将保存在该目录
 * 该目录可以部署到Web以外的目录，但部署完成后请更改路径配置
 * 注意: 该目录必须可写，尽量使用绝对路径
 */
define('RUNTIME_PATH', realpath('./Runtime') . '/');

/**
 * OneCMF核心目录
 * OneCMF的工作目录，所有OneCMF的API，模块，工具类库等目录都定义在该目录
 * 该目录也是OC命名空间的更目录
 * 所有除开ThinkPHP模块的类库都必须使用OC命名空间
 */
define('ONECMF_PATH', realpath('./OneCMF') . '/');

/**
 * ThinkPHP公共模块目录
 * 该目录为ThinkPHP必须目录，但是在OneCMF中已经被ONECMF_PATH代替
 * 因此，该常量为了兼容而定义
 */
define('COMMON_PATH', ONECMF_PATH);

/**
 * OneCMF应用目录（模块目录）
 * 即ThinkPHP的模块目录，每个目录代表一个模块
 * 所有OneCMF的核心块，扩展模块都将定义在该目录
 * 该目录不受OC命名空间影响，直接遵循ThinkPHP模块命名空间即可
 */
define('APP_PATH', ONECMF_PATH . 'Application/');

/**
 * 执行应用
 * OneCMF应用执行入口（即ThinkPHP入口）
 */
require './ThinkPHP/ThinkPHP.php';
