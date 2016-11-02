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
        if(IS_POST){         //是否POST提交
            /* 检测验证码 TODO: */
            // if(!check_verify($verify)){
            //     $this->error('验证码输入错误！');
            // }
            /* 调用UC登录接口登录 */
            $User = new UserApi;
            $uid = $User->login($username, $password);
            $this->error($uid);
            if(0 < $uid){ //UC登录成功
                /* 登录用户 */
                $Member = D('Member');
                if($Member->login($uid)){ //登录用户
                    //TODO:跳转到登录前页面
                    $this->success('登录成功！', U('Index/index'));
                } else {
                    $this->error($Member->getError());
                }

            } else { //登录失败
                switch($uid) {
                    case -1: $error = '用户不存在或被禁用！'; break; //系统级别禁用
                    case -2: $error = '密码错误！'; break;
                    default: $error = '未知错误！'; break; // 0-接口参数错误（调试阶段使用）
                }
                $this->error($error);
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
     * 用户登录认证
     * @param  string  $username 用户名
     * @param  string  $password 用户密码
     * @param  integer $type     用户名类型 （1-用户名，2-邮箱，3-手机，4-UID）
     * @return integer           登录成功-用户ID，登录失败-错误编号
     */
    public function authentication($username, $password, $type = 1){
        return D('Member')->login($username, $password, $type);
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