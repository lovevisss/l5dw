<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	{{-- {{Html::script('js/wetest/contains.js')}} --}}

	{{Html::script('js/wetest/push.js')}}
	{{-- {{Html::script('js/wetest/taskMgr.js')}} --}}
	{{-- {{Html::script('js/wetest/views.js')}} --}}
	<meta name="renderer" content="webkit"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width,user-scalable=yes"> 
	 <title>eCommerce</title> 
	{{Html::script('js/wetest/v.js')}}
	{{Html::script('js/wetest/cdn_djl.js')}}
	{{Html::script('js/wetest/hm.js')}}
	{{Html::script('js/wetest/ping.js')}}
	{{Html::script('js/wetest/badjs-report.js')}}
	{{Html::script('js/wetest/ptloginout.js')}}
	{{Html::script('js/wetest/stats')}}
	{{Html::script('js/wetest/wpa.php')}}

	@if(Route::currentRouteName() != 'cart')
	{{Html::style('css/wetest/bootstrap.min.css')}}
	@endif
	{{Html::style('css/wetest/chosen.css')}}
	{{Html::style('css/wetest/datepicker3.css')}}
	{{Html::style('css/wetest/TXcomponents.css')}}
	{{Html::style('css/wetest/platform.css')}}
	{{Html::style('css/wetest/main.css')}}
	{{Html::style('css/wetest/common.fc0eb627.css')}}
	{{Html::style('css/wetest/header.99e8e558.css')}}
	{{Html::style('css/wetest/reset.f8865000.css')}}
	{{Html::style('css/main.css')}}
	{{Html::script('js/wetest/cdn_dianjiliu.js')}}
	{{Html::script('js/wetest/i.js')}}
	{{Html::style('css/font-awesome.min.css')}}
	{{Html::style('css/shoppingcart.css')}}
			{{-- {{Html::script('js/wetest/jquery.min.js')}} --}}
			<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	
 		
 </head>     
 		 
<body>
	<div  style="min-height: 744px;"> 
		<div class="rolling-back fullDiv" id="rolling-back" style="display: none; margin-top: 0px;"> 
			<div class="rolling container"> 
				<span class="rolling-notice"></span> <p class="noticWord" id="noticWord"></p> <span class="remove" id="rollRemove"></span> 
			</div> 
		</div> 
		<div class="headerB_Wrap fixHeader" id="headerB_Wrap"> 
			<div class="headerB"> <h1 class="index_logo" onclick="window.location.href=&#39;/&#39;" ></h1>
				<ul class="index_nav" id="indexNav">
					<li id="productLi"> <a href="javascript:;" style="cursor: default;">产品</a> </li> 
					{{-- <li> <a href="/recommend">推荐</a> </li>  --}}
					{{-- <li> <a href="javascript:;" style="cursor: default;">解决方案</a>
					 <ul class="hsolution"> 
					 	<li> <a href="http://wetest.qq.com/solution/game"> <span class="logo game"></span>游戏 </a> 
					 	</li>
					 	 <li> <a href="http://wetest.qq.com/solution/application"> <span class="logo app"></span>应用 </a> </li> 
					 	</ul>
					 	 </li>  --}}
					 	  </ul>  
				


	 	 	 	 <div class="floatRight clearfix" id="loginInBtn" style="display: block;"> 
	 	 	 	 	@if(Auth::check())
	 	 	 	 		{{Html::link('logout', '登出', ['class' => 'loginInBtn'])}}
	 	 	 	 		@if(Auth::user()->id == 1)
	 	 	 	 			{{Html::link('manage', '管理', ['class' => 'loginInBtn'])}}
	 	 	 	 		@else
	 	 	 	 			{{Html::link('info', "个人信息", ['class' => 'loginInBtn', 'style' => 'color:#000;background:#fff;'])}}
		 	 	 	 		{{Html::link('vieworder', "订单", ['class' => 'loginInBtn', 'style' => 'color:#000;background:#fff;'])}}
		 	 	 	 		{{Html::link('cart', "购物车", ['class' => 'loginInBtn', 'style' => 'color:#000;background:#fff;'])}}
	 	 	 	 		@endif
	 	 	 	 	@else
		 	 	 	 	{{Html::link('login', '登录', ['class' => 'loginInBtn'])}}
		 	 	 	 	{{Html::link('register', '注册', ['class' => 'loginInBtn', 'style' => 'color:#000;background:#fff;'])}}
					@endif
	 	 	 	 </div> 


					 	 	 	 <script type="text/javascript">
					 	 	 	 	var userObj=document.getElementById("userBanner");
					 	 	 	 	var loginObj=document.getElementById("loginInBtn");
					 	 	 	 	var tqmObj=document.getElementById("tqmEnter");
					 	 	 	 	var headerB=document.getElementById("headerB_Wrap");
					 	 	 	 	var userAuthIcon=document.getElementById("userAuthIcon");
					 	 	 	 	var corpAuthIcon=document.getElementById("corpAuthIcon");
					 	 	 	 	function addClass(b,a){if(!hasClass(b,a)){b.className=b.className==""?a:b.className+" "+a;}}
					 	 	 	 	function removeClass(b,a){if(hasClass(b,a)){
					 	 	 	 		var c=" "+b.className.replace(/[\t\r\n]/g,"")+" ";
					 	 	 	 		while(c.indexOf(" "+a+" ")>=0)
					 	 	 	 			{c=c.replace(" "+a+" "," ");}b.className=c.replace(/^\s+|\s+$/g,"");
					 	 	 	 			}
					 	 	 	 	}
					 	 	 	 	function hasClass(b,a){return b.className.match(new RegExp("(\\s|^)"+a+"(\\s|$)"));}
					 	 	 	
					 	 	 	 </script>

					 	 	 	  <div class="headerSearch"> 
					 	 	 	  	<input id="globalSearchText" type="text" placeholder="搜索你感兴趣的内容" onenter="$(this).next().trigger(&#39;click&#39;)" value="" style="width: 180px; opacity: 1;"> <i class="logo search" onclick="globalSearch()" ></i> 
					 	 	 	  </div> 
					 	 	 	  </div> </div>
					 	 	 	   <div class="headerMask" id="headerMask">
					 	 	 	    <ul class="mainNav" id="newNav">
					 	 	 	    	@foreach($categories as $key => $category)
											<li class="newNavLi @php
												if($category && $category->id ==1)
													echo "active"
											@endphp" onmouseover="navToggle(this)" onmouseout="clearLiTimer()">
					 	 	 	    		<span class="toolLogo" style="background: url(&quot;/images/category/category{{$key+1}}.png&quot;) no-repeat;"></span>
					 	 	 	    		<span class="toolName">{{$category->name}}</span>
					 	 	 	    		<ol>
					 	 	 	    			@foreach($category->products as $product)
														<a class="productBlock" href="/product/{{$product->id}}">
							 	 	 	    				<div class="ptitle">{{$product->title}}</div>
							 	 	 	    				<div class="pcontent">{{substr($product->description,0,40)."..."}}</div>
					 	 	 	    					</a>
					 	 	 	    			@endforeach
					 	 	 	    			
					 	 	 	    		</ol>
					 	 	 	    		</li>
					 	 	 	    	@endforeach
					 	 	 	 		</ul> </div> 

					 	 	 	 			<div class="clean"></div> 

					 	 	 	 			<script type="text/javascript">
					 	 	 	 				var navTimer;
					 	 	 	 				var productLi=document.getElementById("productLi");
					 	 	 	 				var headerMask=document.getElementById("headerMask");
					 	 	 	 				var newNav=document.getElementById("newNav");
					 	 	 	 				var liLeave=true,hLeave=true;
					 	 	 	 				productLi.onmouseover=function()
					 	 	 	 				{
					 	 	 	 					liLeave=false;
					 	 	 	 					clearTimeout(navTimer);
					 	 	 	 					headerMask.style.display="block";
					 	 	 	 					var a=newNav.getElementsByTagName("li").length>0?newNav.getElementsByClassName("active")[0].getElementsByTagName("ol")[0].offsetHeight:320;
					 	 	 	 					var a=Math.max(a,newNav.offsetHeight);headerMask.style.height=a+"px";
					 	 	 	 				};
					 	 	 	 				productLi.onmouseleave=function()
					 	 	 	 				{
					 	 	 	 					liLeave=true;
					 	 	 	 					if(hLeave){
					 	 	 	 						navTimer=setTimeout(function()
					 	 	 	 						{removeClass(headerB,"xhover");removeClass(productLi,"xhover");
					 	 	 	 						headerMask.style.display="none";
					 	 	 	 						},150);
					 	 	 	 					}
					 	 	 	 				};
					 	 	 	 				headerMask.onmouseover=function(){
					 	 	 	 					hLeave=false;
					 	 	 	 					addClass(headerB,"xhover");
					 	 	 	 					addClass(productLi,"xhover");
					 	 	 	 					clearTimeout(navTimer);
					 	 	 	 				};
					 	 	 	 				headerMask.onmouseleave=function(){
					 	 	 	 					hLeave=true;
					 	 	 	 					if(liLeave){
					 	 	 	 						navTimer=setTimeout(function(){
					 	 	 	 							removeClass(headerB,"xhover");
					 	 	 	 							removeClass(productLi,"xhover");
					 	 	 	 							headerMask.style.display="none";},150);}
					 	 	 	 						};
					 	 	 	 				// function showProduct(){
					 	 	 	 				// 	var a="";
					 	 	 	 				// 	var d=localStorage.productLists;
					 	 	 	 				// 	if(!d)
					 	 	 	 				// 	{
					 	 	 	 				// 		d=JSON.parse(d);
					 	 	 	 				// 		for(var b in d)
					 	 	 	 				// 			{
					 	 	 	 				// 				var f=d[b];
					 	 	 	 				// 				var e="";
					 	 	 	 				// 				for(var h in f.lists){
					 	 	 	 				// 					var c=f.lists[h];
					 	 	 	 				// 					e+='<a class="productBlock" href="'+c.url+'" tp1="平台" tp2="首页header" tp3="顶部header" tp4="'+f.name+'" tp5="'+c.name+'" '+(c.blank=="1"?'target="_blank" rel="noopener noreferrer"':"")+'><div class="ptitle">'+c.name+'</div><div class="pcontent">'+c.desc+"</div></a>";}a+='<li class="newNavLi" onmouseover="navToggle(this)" onmouseout="clearLiTimer()"><span class="toolLogo" style="background: url('+f.icon+') no-repeat;"></span><span class="toolName">'+f.name+"</span><ol>"+e+"</ol></li>";}newNav.innerHTML=a;
					 	 	 	 				// 					if(newNav.getElementsByTagName("li").length>0&&newNav.getElementsByClassName("active").length==0)
					 	 	 	 				// 						{
					 	 	 	 				// 							var g=newNav.getElementsByTagName("li")[0];
					 	 	 	 				// 							addClass(g,"active");
					 	 	 	 				// 						}
					 	 	 	 				// 	}else
 	 	 	 									// 	{
 	 	 	 									// 		a='<div style="text-align: center;width: 868px; height: 320px; line-height: 320px; font-size: 26px; color: #fff;font-weight: bold; background-color:rgba(26,37,49,1);">正在努力加载 ...</div>';
 	 	 	 									// 		newNav.innerHTML=a;
 	 	 	 									// 	}
					 	 	 	 				// }
					 	 	 	 				// showProduct();
 	 	 	 									// if(localStorage.login=="true")
 	 	 	 									// 	{
 	 	 	 									// 		showUserInfo();
 	 	 	 									// 	}else
 	 	 	 									// 	{
 	 	 	 									// 		userObj.style.display="none";
 	 	 	 									// 		loginObj.style.display="block";
 	 	 	 									// 		document.getElementById("alertNotice").style.display="none";
 	 	 	 									// 	}
 	 	 										var liTimer;
					 	 	 	 				function navToggle(a)
					 	 	 	 				{if(hasClass(a,"active")){return;}liTimer=setTimeout(function(){var d=document.getElementsByClassName("newNavLi");for(var b=0;b<d.length;b++){d[b].className="newNavLi";}a.className+=" active";var c=a.getElementsByTagName("ol")[0].offsetHeight?a.getElementsByTagName("ol")[0].offsetHeight:320;var c=Math.max(c,newNav.offsetHeight);headerMask.style.height=c+"px";},150);}
					 	 	 	 				function clearLiTimer(){clearTimeout(liTimer);}
					 	 	 	 				// function globalSearch(){
					 	 	 	 				// 	var textObj=document.getElementById("globalSearchText");
					 	 	 	 				// 	var text = textObj.value;
					 	 	 	 				// 	alert(text);
					 	 	 	 				// }
					 	 	 	 			</script>
					 	 	 	 			 <script type="text/javascript">var WS_HOST="ws://wetest.qq.com/ws/";function login_out(){window.location.href="/auth/logout/";localStorage.login=false;}function removeRolling(a){$.ajax({url:"/main/remove-rolling/?id="+a,type:"POST",data:{},success:function(b){var b=$.parseJSON(b);if(!b.flag){Doalert(b.error);}}});$(".rolling-back").animate({"margin-top":"-33px"},300);$("#headerB_Wrap").animate({top:"0px"},300);$("#headerMask").css({top:"66px"});}function addToBG(a){$.ajax({url:"/main/submit-bg/",type:"POST",data:{join:a},success:function(b){var b=$.parseJSON(b);if(b.flag){Doalert("操作成功",function(){window.location.reload();});}else{Doalert(b.error,function(){hideModal();});}}});}(function(){var f=!!(window.attachEvent&&!window.opera);var e=/webkit\/(\d+)/i.test(navigator.userAgent)&&(RegExp.$1<525);var a=[];var b=function(){for(var d=0;d<a.length;d++){a[d]();}};var c=document;c.onReady=function(g){if(!f&&!e&&c.addEventListener){return c.addEventListener("DOMContentLoaded",g,false);}if(a.push(g)>1){return;}if(f){(function(){try{c.documentElement.doScroll("left");b();}catch(h){setTimeout(arguments.callee,0);}})();}else{if(e){var d=setInterval(function(){if(/^(loaded|complete)$/.test(c.readyState)){clearInterval(d),b();}},0);}}};})();document.onReady(function(){$(".rolling-back").animate({"margin-top":"0"},300);$("#userBanner").hover(function(){$(this).trigger("click");},function(){return;});});</script> <style> .spread{height:384px;} </style> <script>document.getElementById("headerB_Wrap").className+=" fixHeader";</script> 
