<?php
namespace Admin\Controller;
use Think\Controller;
use User\Api\UserApi;
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
        if(IS_POST){         //是否POST提交
            /* 检测验证码 TODO: */
            if(!check_verify($verify)){
                $this->error('验证码输入错误！');
            }
        }else{
            if(is_login()){    //判断如果已登录就跳到首页
                $this->redirect('Index/index');
            }else{
                /* 读取数据库中的配置 */
                $config =   S('DB_CONFIG_DATA');      //在onethink这个可能是在框架启动的时候 读取的
                if(!$config){
                    // $config =   D('Config')->lists();         //此功能未完成
                    S('DB_CONFIG_DATA',$config);
                }
                C($config); //添加配置,C方法是ThinkPHP用于设置、获取，以及保存配置参数的方法，使用频率较高
                $this->display();
            }
        }
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