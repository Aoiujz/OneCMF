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

namespace Home\Controller;
use Think\Controller;

/**
 * Home模块首页控制器
 */
class IndexController extends Controller {
    public function index(){
        echo 'Hello OneCMF!';
    }
}
