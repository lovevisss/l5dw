{{Html::style('css/wetest/footer.css')}}
    <div class="another-foot"> 
 		{{Html::style('css/wetest/foot.969558cd.css')}}
      	<div class="intro-cont"> 
      		<div class="intro-about"> 
      			<div class="flt"> 
      				<ul> 
      					<li><a href="#" tp1="平台" tp2="footer" tp3="关于我们">关于我们</a>|</li> 
  						<li><a href="#" tp1="平台" tp2="footer" tp3="联系我们">联系我们</a>|</li> 
  						<li><a href="#" tp1="平台" tp2="footer" tp3="服务协议">服务协议</a></li> 
  					</ul> 
  					<div class="clear">
      						
  					</div> 
  				</div>  
  			 
  				<div class="clear">
  					
  				</div> 
  			</div> 
  			{{-- <div class="intro-other"> 
  				<ul>  
  					<li><a href="http://gad.qq.com/" target="_blank">GAD腾讯游戏开发者平台</a></li>  
  					<li><a href="http://c.qq.com/" target="_blank">腾讯创服平台</a></li>  
  					<li><a href="https://testerhome.com/" target="_blank">TesterHome</a></li>  
  					<li><a href="http://www.devstore.cn/" target="_blank">DevStore</a></li>  
  					<li><a href="http://www.cnblogs.com/" target="_blank">博客园</a></li> 
  					<li><a href="https://www.proginn.com/" target="_blank">程序员客栈</a></li>  
  					<li><a href="https://www.testwo.com/" target="_blank">测试窝</a></li> 
  					<li><a href="http://www.testtao.com/" target="_blank">测试之道</a></li>  
  					<li><a href="http://www.gameres.com/" target="_blank">游资网</a></li>  
  					<li><a href="https://www.qidianla.com/" target="_blank">起点学院</a></li> 
  					<li><a href="http://www.tuicool.com/" target="_blank">推酷</a></li> 
				    <li><a href="http://www.softwhy.com/" target="_blank">前端教程</a></li> 
				    <li><a href="http://www.yixieshi.com/" target="_blank">互联网的一些事</a></li>
			        <li><a href="http://www.sykong.com/" target="_blank">手游那点事</a></li> 
			        <li><a href="http://mozilla.com.cn/moz-portal.html" target="_blank">火狐社区</a></li>
			        <li><a href="http://www.51testing.com/html/index.html" target="_blank">51Testing</a></li> 
  					<li><a href="http://www.imooc.com/" target="_blank">慕课网</a></li> 
  					<li><a href="http://www.9miao.com/forum.php" target="_blank">9秒社区</a></li> 
  					<li><a href="https://segmentfault.com/" target="_blank">segmentfault</a></li>  
  					<li><a href="http://www.apkbus.com/" target="_blank">安卓巴士</a></li> 
  					<li><a href="http://www.w3school.com.cn/" target="_blank">W3school</a></li> 
                </ul> 
                <div class="clear"></div> 
            </div>  --}}
            <div class="erwei-out"> 
            	<span class="intro-copyright">Copyright © 1998 - 2017 All Rights Reserved</span> <span class="intro-copyright">XX公司&nbsp;&nbsp;版权所有</span>
            </div> 
        </div>
    </div>   

			{{Html::script('js/wetest/bootstrap.min.js')}}
			{{Html::script('js/wetest/chosen.jquery.js')}}
			{{Html::script('js/wetest/bootstrap-datepicker.js')}}
    		{{Html::script('js/wetest/TXcomponents.js')}}
			{{Html::script('js/wetest/platform.js')}}
			{{Html::script('js/wetest/main.js')}}
			{{Html::script('js/wetest/jquery.zclip.min.js')}}
			{{Html::script('js/wetest/zclip.js')}}
			 <script>
											    $('#flash-overlay-modal').modal();
											</script>
											<script>
$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
      	  <div class="modal modal-alert fade" id="alert" tabindex="-1" role="dialog" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body"> <div class="alert-message"></div> <button class="submit-btn btn btn-blue" data-dismiss="modal" aria-hidden="true">确定</button> </div> </div> </div> </div> <div class="modal modal-alert fade" id="confirm" tabindex="-1" role="dialog" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body"> <div class="alert-message"></div> <button class="submit-btn btn btn-blue" data-dismiss="modal" aria-hidden="true">确定</button> <button class="btn btn-default close-btn" data-dismiss="modal" aria-hidden="true">取消</button> </div> </div> </div> </div> <div class="showImageBox" id="showImageBox"> <span class="showImage-left" onclick="changeImage(&#39;left&#39;)"></span> <span class="showImage-right" onclick="changeImage(&#39;right&#39;)"></span> <span class="showImage-close" onclick="hideImages()" id="showImage-close">×</span> {{Html::image('images/aqcs.png')}} </div> <div class="showToasts" id="showToasts"></div> <div class="modal modal-message fade" id="NoteModal" tabindex="-1" role="dialog" aria-hidden="false"> <div class="modal-dialog" style="margin-left: auto; margin-right: auto"> <div class="modal-content"> <div class="modal-header center"> <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true">×</span> <span class="sr-only">Close</span> </button> <h4 class="modal-title inline pull-left"></h4> <div class="inline" style="margin-right: 10%"> <span id="mnotice" class="snotice colorR"></span> <span id="mmsg" class="snotice colorG"></span> </div> <div class="clean"></div> </div> <div class="modal-body"></div> <div class="modal-footer"> <button class="submit-btn btn btn-blue">确定</button> &nbsp;&nbsp; <span class="close" style="opacity: 1" data-dismiss="modal" aria-hidden="true"> <button class="close-btn btn btn-default">关闭</button> </span> </div> </div> </div> </div>   


          <script type="text/javascript">var preg=/^[\w.]+\.(qq|qcloud)\.com$/;if(!preg.test(top.location.hostname)){if(top.location!=self.location){top.location.href=self.location.href;}}</script> 
			{{Html::script('js/wetest/header.js')}} <script type="text/javascript">var headerSearchWord="企鹅风讯";var header_id="1";document.onReady&&document.onReady(function(){function a(e,d){var f=document.createElement("script");f.src=e;if(d){f.onload=f.onreadystatechange=function(){if(!this.readyState||this.readyState=="loaded"||this.readyState=="complete"){this.onload=this.onreadystatechange=null;d();}};}var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(f,c);}(function(){var d=[{src:"//wpa.b.qq.com/cgi/wpa.php",onload:function(){bindService();}},{src:"//tajs.qq.com/stats?sId=39474795"},{src:"//ui.ptlogin2.qq.com/js/ptloginout.js"}];d.push({src:"//cdn.wetest.qq.com/platform/2.5.5/js/badjs-report.js",onload:function(){BJ_REPORT.init({id:77});BJ_REPORT.tryJs().spyAll();}});d.push({src:"//pingjs.qq.com/ping.js"});d.push({src:"https://hm.baidu.com/hm.js?4fbe458a710114c234b2f89cc4d891f6"});for(var c in d){var e=d[c];a(e.src,e.onload);}})();if(typeof showUserInfo=="function"){getUserInfo();}var b=getCookie("wetest_language")?getCookie("wetest_language"):"Cn";$("#languageCheck li[value="+b+"]").addClass("active").siblings(".active").removeClass("active");if(headerSearchWord){$("#globalSearchText").css({width:"180px",opacity:"1"});}$(".headerSearch").hover(function(){if(window.location.pathname!=webRoot+"/lab/"){sendJsTag({tp1:"平台",tp2:window.location.pathname,tp3:"header",tp4:"bn_search",tp5:"按钮_搜索",tp6:"划过搜索按钮"});if(headerSearchWord){setHeaderHoverNum(header_id);}}},function(){return;});});

			function globalSearch(){
				var a=document.getElementById("globalSearchText").value;
				window.location.href=webRoot+"/search/"+encodeURIComponent(a);
				if(headerSearchWord&&a==headerSearchWord)
					{
						setHeaderSearchNum(header_id);
					}
				}


			function changeLanguage(b){$("#languageCheck li[value="+b+"]").addClass("active").siblings(".active").removeClass("active");if(in_array(b,["Cn","En","Ko"])){setCookie("wetest_language",b);var a=window.location.href;if(a.indexOf("admin")!=-1&&(a.indexOf("tool-manage")==-1&&a.indexOf("banner")==-1&&a.indexOf("header-product")==-1)){window.location.href="//wetest.ied.com";}else{window.location.reload();}}}function setHeaderHoverNum(a){$.post(webRoot+"/main/set-hover-num/",{id:a});}function setHeaderSearchNum(a){$.post(webRoot+"/main/set-search-num/",{id:a});}function loginIn(a){var a=a||window.location.pathname+window.location.search+window.location.hash;var b=webRoot+"/auth/login/?next="+encodeURIComponent(a);window.location.href=b;}function login_out(){pt_logout.logout(function(){localStorage.login=false;window.location.href=webRoot+"/auth/logout/";});}function getUserInfo(){$.ajax({url:"/user/info",data:{},type:"POST",attribute:"ignore",success:function(e){var d=JSON.parse(e);if(d.flag==true){var b=d.ret;localStorage.login=b.login;if(b.login==true){var a=b.person;localStorage.login=b.login;localStorage.person_name=a.name;localStorage.person_is_staff=a.is_staff;localStorage.person_is_auth=a.is_auth;localStorage.person_has_bg=a.has_bg;localStorage.person_team_id=a.team_id;localStorage.person_fake=a.fake;localStorage.person_corp_id=a.corp_id;showUserInfo();}else{localStorage.login=false;$("#userBanner,#alertNotice").hide();$("#loginInBtn").show();}if(b.rolling["contents"]!=""&&b.rolling["contents"]!=undefined){if($("#headerMask").length>0){$("#headerMask").css({top:"99px"});}$("#rolling-back").show();$("#noticWord").text(b.rolling["contents"]);if(b.rolling["url"]){$("#noticWord").css("cursor","pointer").click(function(){window.open(b.rolling["url"]);});}$("#rollRemove").click(function(){removeRolling(b.rolling["id"]);});$("#headerB_Wrap").animate({top:"33px"},300);}localStorage.productLists=JSON.stringify(b.productLists);typeof showProduct=="function"&&showProduct();var g=getCookie("wetest_language");if(null==g||undefined==g||""==g){var c=b.ip_language;if("Ko"==c){var f="당신의 인터넷 주소는 한국에서 왔 는데, 한국어 디스플레이로 전환할지 여부？";}else{if("En"==c){var f="Detected that you are currently not in China, whether or not to switch to English?";}}if("Cn"==c){setCookie("wetest_language","Cn");}else{Doconfirm(f,function(h){if(h){changeLanguage(c);}else{setCookie("wetest_language","Cn");}});}}}}});}function feedback(){showModal({title:"建议反馈",url:"/feedback/view/",btnComment:"提交",size:showModal.large,showFooter:false});}function bindService(){if(typeof BizQQWPA=="undefined"){return;}var a=[];$("[CustomerService], ._CustomerService").each(function(){if(!$(this).data("hasfun")){var c=$(this).attr("id");if(!c){c=getRandomString();$(this).attr("id",c);}var b={aty:"0",nameAccount:"800024531",selector:c};$(this).data("hasfun",1);a.push(b);}});if(a.length>0){BizQQWPA.addCustom(a);}}
		</script>    

			<script language="javascript">var _hmt=_hmt||[];window.onload=function(){var c=document.createElement("script");var b=window.location.protocol.split(":")[0];if(b==="https"){c.src="https://zz.bdstatic.com/linksubmit/push.js";}else{c.src="http://push.zhanzhang.baidu.com/push.js";}var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(c,a);if(typeof(pgvMain)=="function"){pgvMain();}};

		</script>  
      
			{{Html::script('js/wetest/template.js')}}

 {{--      <script type="text/html" id="coorTable">
    {{each data as value i}}
    {{if i%10 == 0 }}
    <div class="partner_box clearfix">
    {{/if}}
        <dl {{if value.url!=""}}tp1="平台" tp2="首页" tp3="logo_coo" tp4="{{value.name}}"{{/if}}>
            <dt style="background-position: {{value.left}}px {{value.top}}px"></dt>
            <dd class="partner_detail">
                <a {{if value.url==""}}style="cursor:default"{{else}} href="{{value.url}}"{{/if}}>{{value.content}}</a>
            </dd>
        </dl>
    {{if i%10 == 9 || i == data.length}}
    </div>
    {{/if}}
    {{/each}}
	</script> --}}
<script type="text/javascript">

	var moveI=0;
	var from="";
	$(document).ready(function(){
		$("#globalSearchText").css({width:0,opacity:0});$(".headerSearch").hover(function(){$("#globalSearchText").css({width:"180px",opacity:"1"});},function(){$("#globalSearchText").css({width:0,opacity:0});});if(from=="email"){feedback();}$(".slideShow").createBanner(5000);$(".partner_list");
	$(".partner_list dl").each(function(a){var b=$(this);b.hover(function(){b.find("dt").stop().animate({top:"-106px"},200);b.find("dd").stop().animate({top:"0px",cursor:"pointer"},200);},function(){b.find("dt").stop().animate({top:"0px",cursor:"pointer"},200);b.find("dd").stop().animate({top:"106px"},200);});});$(".solutions").css({backgroundSize:"100%"});
	$(".solutions").hover(function(){$(this).stop().animate({backgroundSize:"105%"},600);},function(){$(this).stop().animate({backgroundSize:"100%"},600);});
	$(".partner_arrows").click(function(){var a=$(".partner_box").length;var b;
	if($(this).hasClass("right")){moveI++;if(moveI>=a-1){moveI=a-1;$(this).hide();}else{$(this).show();}$(".partner_arrows.left").show();}else{moveI--;if(moveI<=0){moveI=0;$(this).hide();}else{$(this).show();}
	$(".partner_arrows.right").show();}b=-(moveI*1080);
	$(".partner_list").animate({left:b},200);});

	$(".tools-b .hot>div").hover(
		function(){
			// var b={tp1:"平台",tp2:"首页",tp3:"hover_proicon",tp4:$(this).find("span").text()};
			// sendJsTag(b);
			var a=$(this).attr("class");
			$(this).addClass("active").siblings(".active").removeClass("active");
			$(this).find("i").addClass("active");
			$(this).siblings().find("i").removeClass("active");
			var c=$(".spread."+a+"Content");
			if(c.hasClass("dn"))
				{
					c.removeClass("dn").siblings(".spread").addClass("dn");
				}
			},function(){});
	// $('.spread>div:not(".clear")').hover(function(){
	// 	var b=$(this).parent(".spread").index();
	// 	var c=$(".hot>div:nth-child("+b+")").find("span").text();
	// 	var a={tp1:"平台",tp2:"首页",tp3:"hover_proarea",tp4:c,tp5:
	// 	$(this).find("h2").text()};
	// 	// sendJsTag(a);
	// }
	// 	,function(){});
}
	);
</script>