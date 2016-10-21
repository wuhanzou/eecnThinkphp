慕课网angluar项目目录

app
	css

	framework  放置其它的一些UI控件或其它的框架。如boostrap前端框架，jQuery等

	images

	js   核心js
		app.js    作为启动点的JS。加载所有的module,里面放置了路由等操作(注意，在这个TP框架里面没有用路由功能)
			
			controllers.js      放置所有控制器
			
			directives.js         放置所有指令
			
			filters.js                放置所有自定义过滤器
			
			services.js	放置所有自定义服务(公用的方法或属性，注意angluarjs的服务是由其它模块调用而不是继承的)			
			tpls                         这里都是放的模板片段，通过控制器来调用。然后插入到页面中
		
				bookList.html   列表页
			
				hello.html      欢迎页    
			

			index.html           每个应用都有一个主文件，用来加载框架，JS等
		
======================以下目录可忽略=====================

	node_modules         这个目录是用node.js安装一些插件的时候自动生成的目录，所有安装的插件都在这个目录下。
	
	http-server                这里是用node.js安装了一个http-server的服务器，相当于apache或ngnix                                                     		

	package.json            node.js的npm的配置项,因为这个是项目是用node.js生成的目录结构，所以这个是自动生成的，如果不用node.js，这个是可以删除的
