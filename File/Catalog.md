网站目录结构

**PHP框架**  
[http://www.thinkphp.cn/down/610.html](ThinkPHP3.2.3完整版) 

**后台前端框架**  
[https://www.angularjs.org/](https://www.angularjs.org/) 

www  WEB部署目录（或者子目录）
│
├─index.php       前台入口文件
│
├─admin.php       后台入口文件
│
├─favicon.ico     ico小图标
│
├─readme.html     网站说明 
│
├─README.md       README备注文件
│
├─.htaccess       路由器配置文件(apache专用)(可省略)
│
├─Addons 插件目录
│
├─File 说明文档
│  
├─Application 应用模块目录
│  │
│  ├─Admin 后台模块
│  │  │
│  │  ├─Conf 后台配置文件目录
│  │  ├─Common 后台函数公共目录
│  │  ├─Controller 后台控制器目录
│  │  ├─Model 后台模型目录
│  │  ├─Logic 后台模型逻辑目录
│  │  └─View 后台视图文件目录
│  │  
│  ├─Common 公共模块目录（不能直接访问）
│  │  │
│  │  ├─Conf 公共配置文件目录
│  │  ├─Common 公共函数文件目录
│  │  ├─Controller 模块访问控制器目录
│  │  └─Model 公共模型目录
│  │  
│  ├─Home Home 前台模块
│  │  │
│  │  ├─Conf 前台配置文件目录
│  │  ├─Common 前台函数公共目录
│  │  ├─Controller 前台控制器目录
│  │  ├─Model 前台模型目录
│  │  ├─View 模块视图文件目录
│  │  ├─Logic 后台模型逻辑目录
│  │  └─Widget 小工具(广告位,表单)
│  │
│  └─User 用户模块（不能直接访问）
│     │
│     ├─Api  用户登录及第三方登录接口文件目录(QQ帐号,新浪帐号)
│     ├─Conf 用户配置目录
│     ├─Common 后台函数公共目录
│     ├─Model 用户模型目录
│     └─Service 用户Service文件目录
│
├─Public 应用资源文件目录
│  │
│  ├─Admin 后台资源文件目录
│  │  │ 
│  │  ├─css 样式文件目录
│  │  ├─images 图片文件目录
│  │  └─js 脚本文件目录
│  │
│  ├─Home 前台资源文件目录
│  │  │ 
│  │  ├─css 样式文件目录
│  │  ├─images 图片文件目录
│  │  └─js 脚本文件目录
│  │
│  └─static 公共资源文件目录及第三方插件(jq) 
│ 
├─Runtime 应用运行时目录
│
├─Uploads 上传根目录
│  │
│  ├─Download 文件上传目录
│  ├─Picture 图片上传目录
│  ├─Editor 编辑器图片上传目录
│  └─Attachment  附件插件上传目录
│
└─ThinkPHP        框架系统目录（可以部署在非web目录下面）
  │	
  ├─Common       核心公共函数目录
  │
  ├─Conf         核心配置目录 
  │
  ├─Lang         核心语言包目录
  │
  ├─Library      框架类库目录
  │  │
  │  ├─Think     核心Think类库包目录
  │  ├─Behavior  行为类库目录
  │  ├─Org       Org类库包目录
  │  ├─Vendor    第三方类库目录
  │  ├─ ...      更多类库目录
  │  │
  ├─Mode         框架应用模式目录
  │
  ├─Tpl          系统模板目录
  │
  ├─LICENSE.txt  框架授权协议文件
  │
  ├─logo.png     框架LOGO文件
  │
  ├─README.txt   框架README文件
  │
  └─ThinkPHP.php    框架入口文件
