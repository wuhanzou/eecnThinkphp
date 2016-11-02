// JavaScript Document
$(document).ready(function(){
	
//-------------顶部user入口下拉效果------------
	(function(){
		$(".user").mouseover(function(){	
		$(".user-menu").stop().slideDown("fast");
		});
		
		$(".user").mouseout(function(){
			$(".user-menu").stop().slideUp("fast");
		});
	})();
	
	
	
//------------右侧收放效果js--------------------
	(function(){
		var $iterms=$(".iterms");				
			$iterms.children("h3").click(function(){
			$(this).siblings("ul").slideToggle("fast");
			$(this).toggleClass("open");
		})
	})();
	
//-----------content高度自适应------------------
	(function(){
		var $mainHeight=$(".main").height();
		$(".main").css("min-height",$mainHeight+20);
		
		
		var $winHeight=$(window).height();
		if($(".index-sign").length>0){
			$(".main").css("height",$winHeight-20);
		}
		else{
			$(".main").css("height",$winHeight-70);
		}
		
		
		$(window).resize(function(){
			var $winHeight=$(window).height();
			if($(".index-sign").length>0){
				$(".main").css("height",$winHeight-20);
			}
			else{
				$(".main").css("height",$winHeight-70);
			}
		})
	})();
	

})

//-----------检测页面所处位置反映到nav------------
$(function(){
		var locationHref=document.location.href;
		var $navA=$(".nav a");
		$navA.each(function(){
			var name=$(this).attr("name");
			if(locationHref.indexOf(name)!==-1){
				$(this).addClass("current");
			}
		})		
		function textIndex(){
			if($(".index-sign").length>0){
				$navA.eq(0).addClass("current");
			}
		} 
		textIndex();

})