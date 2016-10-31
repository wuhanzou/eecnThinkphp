<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    /**
     * 用户详情
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function index(){
        $this->display();
    }
    /**
     * 用户管理首页
     * @author 麦当苗儿 <zuojiazi@vip.qq.com>
     */
    public function lists(){
        $this->display();
    }
    /**
     * 新增及添加新用户
     * @author huajie <banhuajie@163.com>
     */
    public function add(){
        $this->display();
    }
    /**
     * 修改及提效名称
     * @author huajie <banhuajie@163.com>
     */
    public function nickname(){
        $this->display('nickname');
    }
    /**
     * 修改及提交新密码
     * @author huajie <banhuajie@163.com>
     */
    public function password(){
        $this->display('password');
    }
    /**
     * 获取用户注册错误信息
     * @param  integer $code 错误编码
     * @return string        错误信息
     */
    private function showRegError($code = 0){
        switch ($code) {
            case -1:  $error = '用户名长度必须在16个字符以内！'; break;
            case -2:  $error = '用户名被禁止注册！'; break;
            case -3:  $error = '用户名被占用！'; break;
            case -4:  $error = '密码长度必须在6-30个字符之间！'; break;
            case -5:  $error = '邮箱格式不正确！'; break;
            case -6:  $error = '邮箱长度必须在1-32个字符之间！'; break;
            case -7:  $error = '邮箱被禁止注册！'; break;
            case -8:  $error = '邮箱被占用！'; break;
            case -9:  $error = '手机格式不正确！'; break;
            case -10: $error = '手机被禁止注册！'; break;
            case -11: $error = '手机号被占用！'; break;
            default:  $error = '未知错误';
        }
        return $error;
    }
    
}   