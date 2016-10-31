<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 后台内容控制器
 * @author huajie <banhuajie@163.com>
 */
class ArticleController extends Controller {
    /**
     * 分类文档列表页
     * @param integer $cate_id 分类id
     * @param integer $model_id 模型id
     * @param integer $position 推荐标志
     * @param integer $group_id 分组id
     */
    public function index($cate_id = null, $model_id = null, $position = null,$group_id=null){
        $this->display();
    }
        /**
     * 文档新增页面初始化
     * @author huajie <banhuajie@163.com>
     */
    public function add(){
       $this->display();
    }
        /**
     * 文档编辑页面初始化
     * @author huajie <banhuajie@163.com>
     */
    public function edit(){
        $this->display();	
    }

}