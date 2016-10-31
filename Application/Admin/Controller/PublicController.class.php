<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 后台首页控制器
 * @author 
 */
class PublicController extends Controller {
    /**
     * 后台用户登录
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function login($username = null, $password = null, $verify = null){
        $this->display();
    }
     /**
     * 验证码
     * @return [type] [description]
     */
    public function verify(){
        $verify = new \Think\Verify();
        $verify->entry(1);
    }
}