@include('layouts.header')    <!-- 引入头部和导航栏 -->
	 			
@include('partial.slider')    <!-- 引入轮播 -->


					 	 	 	 			 <div class="cont-w bg-w"> 
					 	 	 	 			 	<div class="cont-b"> 
					 	 	 	 			 		<h3 class="cont-title" style="margin-bottom:78px;">热销产品</h3> 
					 	 	 	 			 		<div class="tools-b">   
					 	 	 	 			 			<div class="hot clearfix"> 
					 	 	 	 			 				@foreach($categories as $key => $category)
						 	 	 	 			 				<div class="cloud{{$key+1}}"> 
						 	 	 	 			 					<i class="cloud{{$key+1}}"></i> <span>{{Html::link('/categories/'.$category->id,$category->name)}}</span> 
						 	 	 	 			 				</div> 
					 	 	 	 			 				@endforeach
					 	 	 	 			 				
					 	 	 	 			 				{{-- <div class="cloud"> 
					 	 	 	 			 					<i class="yzj"></i> <span>云真机</span> 
					 	 	 	 			 				</div> 
					 	 	 	 			 				<div class="property">
					 	 	 	 			 				 <i class="xncs"></i> <span>性能测试</span> 
					 	 	 	 			 				</div> 
					 	 	 	 			 				<div class="security"> 
					 	 	 	 			 					<i class="aqcs"></i> <span>安全测试</span> 
					 	 	 	 			 				</div> 
					 	 	 	 			 				<div class="last"> 
					 	 	 	 			 					<i class="yqjk"></i> <span>舆情分析</span> 
					 	 	 	 			 				</div>  --}}
					 	 	 	 			 			</div>

					 	 	 	 			 			@foreach($categories as $key => $category)
															<div class="spread cloud{{$key+1}}Content 
                                                                @if($key!=0)
                                                                    dn
                                                                @endif
                                                                services-list"> 
																<i class="jian jian{{$key+1}}"></i>
						 	 	 	 			 			@foreach($category->products as $key =>$product)
																@if($key <=1)
                                                                    <div class="@if($key%2==0)
                                                                                    ftl
                                                                                @else
                                                                                    ftr
                                                                                @endif

                                                                                     t-left"> 
                                                                    <span class="test product">
                                                                            <a href="/product/{{$product->id}}">{{Html::image($product->image,null,['class' => 'list-product'])}}</a>
                                                                        </span> 
                                                                    <div class="test-left"> 
                                                                        <h2>{{$product->title}}</h2> 
                                                                        <div class="quickout"> 
                                                                            <p class="quick">{{substr($product->description,0,40)."..."}}</p> </div>
                                                                         <p><i class="gou"></i>
                                                                                    @if($product->availability == 1)
                                                                                        <span class="discount">特别优惠</span>
                                                                                    @endif
                                                                         </p>
                                                                            <p><i class="gou"></i>¥ {{$product->price}}</p>
                                                                            <p><i class="gou"></i>库存:{{$product->num}}</p>
                                                                         <a href="/product/{{$product->id}}" target="_blank">了解更多</a> 
                                                                              {{--   <a href="{{ route('cart',['id' => $product->id, 'num' => 1]) }}"
                                                                                    onclick="event.preventDefault();
                                                                                             document.getElementById("addtocart{{$product->id}}").submit();">
                                                                                    加入购物车
                                                                                </a>

                                                                                <form id="addtocart{{$product->id}}" action="{{ route('cart',['id' => $product->id, 'num' => 1]) }}" method="POST" style="display: none;">
                                                                                    {{ csrf_field() }}
                                                                                </form>
 --}}
                                                                         <a href="{{ route('add_cart',['id' => $product->id, 'num' => 1]) }}">加入购物车</a> 
                                                                        </div> 
                                                                    </div> 
                                                                @endif
						 	 	 	 			 			@endforeach
					 	 	 	 			 			 
					 	 	 	 			 			 	{{-- <div class="ftr t-left"> 
                                                                <span class="test product expert"></span> 
					 	 	 	 			 			 		<div class="test-left"> 
					 	 	 	 			 			 			<h2>专家兼容测试</h2> 
					 	 	 	 			 			 			<div class="quickout"> <p class="quick">腾讯测试专家定位兼容及功能问题，覆盖安卓/iOS主流机型</p> </div> <p><i class="gou"></i>深度定位核心场景的兼容及功能问题</p> <p><i class="gou"></i>严格遵守腾讯测试流程</p> <p><i class="gou"></i>专业测试报告详细记录问题，便于复现</p> <a href="http://wetest.qq.com/product/expert-compatibility-testing" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="兼容测试" tp5="专家兼容测试" tp6="了解更多">了解更多</a> <a href="http://wetest.qq.com/cloud/help/manualbook" class="ljsy" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="兼容测试" tp5="专家兼容测试" tp6="服务预约">服务预约</a> 
					 	 	 	 			 			 		</div> 
					 	 	 	 			 			 	</div>  --}}
					 	 	 	 			 			 	<div class="clear">
					 	 	 	 			 			 		
					 	 	 	 			 			 	</div> 
					 	 	 	 			 			 </div>   

					 	 	 	 			 			@endforeach   
					 	 	 	 			 			
					 	 	 	 			 			 {{-- <div class="spread dn cloudContent"> <i class="jian jian2"></i> <div class="case2"> {{Html::image('images/yzj.png')}} <div class="test-left"> <h2>云真机</h2> <div class="quickout"> <p class="quick">云端千台真机测试，节省百万真机费用</p> </div> <p><i class="gou"></i>云端真实手机测试</p> <p><i class="gou"></i>配备市场主流新机型，最新Android版本全覆盖</p> <p><i class="gou"></i>随时测试，快速发现问题</p> <a href="http://wetest.qq.com/product/cloudphone" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="云真机" tp5="云真机" tp6="了解更多">了解更多</a> </div> </div> </div>   <div class="spread dn propertyContent services-list"> <i class="jian jian3"></i> <div class="ftl t-left"> <span class="test product client"></span> <div class="test-left"> <h2>客户端性能</h2> <div class="quickout"> <p class="quick">腾讯手游必用的性能测试工具</p> </div> <p><i class="gou"></i>无需改动代码、即下即用</p> <p><i class="gou"></i>深入准确分析游戏资源问题、性能瓶颈</p> <p><i class="gou"></i>极速产出报告，支持各类游戏及APP</p> <a href="http://wetest.qq.com/product/cube/" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="性能测试" tp5="客户端性能" tp6="了解更多">了解更多</a> <a href="http://wetest.qq.com/cloud/index.php/phone/step1?test=effective" class="ljsy" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="性能测试" tp5="客户端性能" tp6="下载客户端">下载客户端</a> </div> </div> <div class="ftr t-left"> <span class="test product service"></span> <div class="test-left"> <h2>服务器性能</h2> <div class="quickout"> <p class="quick">让压测更简单</p> </div> <p><i class="gou"></i>一分钟完成用例配置</p> <p><i class="gou"></i>云端压力稳定、无上限</p> <p><i class="gou"></i>性能测试数据图表可视化展示</p> <a href="http://wetest.qq.com/gaps/" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="性能测试" tp5="服务器性能" tp6="了解更多">了解更多</a> <a href="http://wetest.qq.com/gaps/ConfigRunning?projectid=58b4e04342c1902c79fbaf40d93d84c6&amp;i_testid=1a6b340c30f500fc495428ea53b22e7f" class="ljsy" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="性能测试" tp5="服务器性能" tp6="查看demo">查看demo</a> </div> </div> <div class="clear"></div> </div>   <div class="spread dn securityContent"> <i class="jian jian4"></i> <div class="case2"> {{Html::image('images/aqcs.png')}} <div class="test-left"> <h2>手游安全测试</h2> <div class="quickout"> <p class="quick">无漏洞，不收费，连接腾讯安全测试专家，提早揭露游戏外挂风险</p> </div> <p><i class="gou"></i>支持Unity3D、Cocos2D等主流引擎</p> <p><i class="gou"></i>覆盖协议、内存、脚本等多个维度安全</p> <p><i class="gou"></i>保持产品高度私密，不公开任何漏洞细节</p> <p><i class="gou"></i>获得《王者荣耀》、《CF枪战王者》等腾讯顶级手游同等待遇</p> <a href="http://wetest.qq.com/appoint/sr" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="安全测试" tp5="安全测试" tp6="预约服务">预约服务</a> <a href="http://wetest.qq.com/sr/sr-report-demo.php" class="ljsy" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="安全测试" tp5="安全测试" tp6="样例报告">样例报告</a> </div> </div> </div>   <div class="spread dn lastContent services-list"> <i class="jian jian5"></i> <div class="ftl t-left"> <span class="test product productNews"></span> <div class="test-left"> <h2>产品风讯</h2> <div class="quickout"> <p class="quick">一分钟了解你的产品口碑和用户喜好</p> </div> <p><i class="gou"></i>收录百万产品数据，时效性达分钟级</p> <p><i class="gou"></i>智能实时报警，准确率达90%</p> <p><i class="gou"></i>提炼有价值观点，洞察市场变化</p> <a href="http://fsight.qq.com/" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="舆情分析" tp5="产品风讯" tp6="了解更多">了解更多</a> </div> </div> <div class="ftr t-left"> <span class="test product news"></span> <div class="test-left"> <h2>行业风讯</h2> <div class="quickout"> <p class="quick">洞悉风向，追踪口碑无需多网浏览</p> </div> <p><i class="gou"></i>覆盖主流游戏媒体，行业动态一网打尽</p> <p><i class="gou"></i>游戏、公司媒体正负面口碑一键追踪</p> <p><i class="gou"></i>口碑升降、优劣榜单，热门游戏快速预测</p> <a href="http://fsight.qq.com/insight/" target="_blank" tp1="平台" tp2="首页" tp3="button_pro" tp4="舆情分析" tp5="行业风讯" tp6="了解更多">了解更多</a> </div> </div> <div class="clear"></div> </div> </div> </div> --}} </div> 

@include('flash::message')

                                                         <div class="cont-w" style="background-color:#39404e;padding: 0;"> 
                                                            <div class="cont-b"> 
                                                                <div class="solutions" onclick="window.location.href=&#39;/product/{{$products[0]->id}}&#39;" style="background-size: 100%; background: url({{$products[0]->image}} ) no-repeat"> 
                                                                    <div class="su-mask"> <span class="su-icon su1"></span> <p class="su-title">{{$products[0]->title}}</p> <p class="su-subtitle">特别优惠</p> <a class="su-a">查看详情</a> </div> 
                                                                </div> <div class="solutions" onclick="window.location.href=&#39;/product/{{$products[1]->id}}&#39;" style="background-size: 100%;background: url({{$products[1]->image}}) no-repeat"> <div class="su-mask"> <span class="su-icon su2"></span> <p class="su-title">{{$products[1]->title}}</p> <p class="su-subtitle">特别优惠</p> <a class="su-a" tp1="平台" tp2="首页" tp3="应用解决方案" tp4="联系客服">查看详情</a> </div> </div> </div> </div>


                                                                 <div class="cont-w bg-w"> <div class="cont-b"> <h3 class="cont-title">我们的服务优势</h3> <div class="serve clearfix"> <div class="floatLeft"> <span class="serve-icon i1"></span> </div> <dl class="serve-dl"> <dt>服务于海量产品</dt> <dd>提供所有腾讯精品游戏质量服务，如《英雄联盟》、《王者荣耀》等</dd> </dl> </div> <div class="serve clearfix"> <div class="floatLeft"> <span class="serve-icon i2"></span> </div> <dl class="serve-dl"> <dt>腾讯质量标准</dt> <dd>十三年千款游戏磨砺，铸就精品质量标准</dd> <dd>5大维度，41项指标，360°保障产品质量</dd> </dl> </div> <div class="serve clearfix"> <div class="floatLeft"> <span class="serve-icon i3"></span> </div> <dl class="serve-dl"> <dt>腾讯金牌质量团队</dt> <dd>腾讯高级专家坐诊</dd> <dd>为您提供腾讯顶级游戏同等服务</dd> </dl> </div> <div class="serve clearfix"> <div class="floatLeft"> <span class="serve-icon i4"></span> </div> <dl class="serve-dl"> <dt>独创技术引领革新</dt> <dd>基于亿级用户样本的大数据运营分析引擎</dd> <dd>次世代自动化游戏测试技术</dd> </dl> </div> </div> </div> 
                                                        {{--  <div class="cont-w cont-safe"> <div class="cont-b"> <p class="safe-title">腾讯立体化安全防护体系，保卫您的信息安全</p> </div> </div>  --}}
					 	 	 	 		{{-- 	 <div class="cont-w bg-w"> 
					 	 	 	 			 	<div class="cont-b"> <h3 class="cont-title" style="margin-bottom:0;">合作汇聚力量，质量带来快乐</h3> 
					 	 	 	 			 	<p class="morePartners"><a href="http://wetest.qq.com/introduction/partners" tp1="平台" tp2="首页" tp3="link_morecoo" tp4="更多合作伙伴">更多合作伙伴&gt;</a></p>  --}}
			{{-- 		 	 	 	 			 	<div class="partner clearfix"> <div class="partner_list">
					 	 	 	 				 <div class="partner_box clearfix">
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="巨人网络">
            <dt style="background-position: 0px -424px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">巨人网络是集研发、运营、销售为一体的综合性互动娱乐企业。一切以玩家为出发点，旨在做真正属于中国玩家自己的游戏，打造中国人自己的游戏巨作。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="莉莉丝游戏">
            <dt style="background-position: -192px -212px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">莉莉丝游戏，旨在为全世界玩家创造前所未有的游戏体验。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="触控科技">
            <dt style="background-position: -384px -212px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">北京触控科技有限公司是一家推动、维护、支撑移动数字娱乐行业，以及游戏行业生态的平台型公司。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="DeNA">
            <dt style="background-position: -576px -212px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">DeNA，是世界领先的网络服务公司，业务涵盖社交游戏、电子商务等领域。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="掌趣">
            <dt style="background-position: -768px -212px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">掌趣，中国领先的移动游戏开发商、发行商和运营商。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="4399游戏">
            <dt style="background-position: 0px -318px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">4399游戏，国内领先的中文游戏平台。集页游、手游、小游戏研发、运营一体；坚持用户体验为核心，提供绿色健康游戏。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="昆仑游戏">
            <dt style="background-position: -192px -318px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">昆仑游戏是昆仑万维旗下游戏平台，主要业务集中于网络游戏的研发、运营和全球发行。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="游久时代">
            <dt style="background-position: -384px -318px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">游久时代，注重互动式娱乐体验的国内一线互联网游戏发行商与研发商。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="盖娅">
            <dt style="background-position: -576px -318px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">盖娅介绍：坚持产品精品化的全球研运一体游戏公司，全球多语言游戏产品、游戏开发者和游戏市场的连接者。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="怪糖">
            <dt style="background-position: -768px -318px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">怪糖(上海)网络科技有限公司，精于研发手机、VR等平台的新进游戏开发商。</a>
            </dd>
        </dl>
    
    </div>

     <div class="partner_box clearfix">
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="腾讯游戏">
            <dt style="background-position: 0px 0px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">WeTest平台为腾讯游戏服务十年，为数百款内外部游戏提供专业测试工具、技术，是腾讯游戏对外发行的质量生命保证线。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="天美艺游">
            <dt style="background-position: -192px 0px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">WeTest平台对腾讯精品移动游戏工作室——天美艺游，提供手游测试及企鹅风讯的深度服务。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="腾讯开放平台">
            <dt style="background-position: -384px 0px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">WeTest平台，为腾讯开放平台百万开发者提供手游及应用企鹅风讯的定制化服务。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="腾讯云">
            <dt style="background-position: -576px 0px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">WeTest平台的手游云测试工具，是腾讯云服务产品链条上不可或缺的一环。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="腾讯文智">
            <dt style="background-position: -768px 0px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">文智为企鹅风讯提供了专业的词法、句法、情感分析功能，帮助对原始用户评论数据进行智能处理。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="金刚系统">
            <dt style="background-position: 0px -106px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">金刚为WeTest手游测试提供了组件权限合规性、网络数据安全、本地数据安全等系统安专业检测服务，是产品安全性检测的不二选择。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="腾讯应用宝">
            <dt style="background-position: 0px -212px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">应用宝是腾讯倾力打造的安卓应用商店，为用户提供了海量而优质的应用、游戏、视频、电子书等服务资源。作为国内安卓应用商店的领军者，目前腾讯应用宝日分发量已经突破1.8亿。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="腾讯广点通">
            <dt style="background-position: -384px -106px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">腾讯广点通日流量超120亿，海量优质资源，精准受众定向在QQ空间、QQ、微信、腾讯新闻客户端等平台投放。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="腾讯信鸽">
            <dt style="background-position: -576px -106px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">腾讯信鸽是专业的移动推送平台，通过将通知和消息及时送达精准定向的用户，显著提升用户的活跃度和留存率。</a>
            </dd>
        </dl>
    
    
    
        <dl tp1="平台" tp2="首页" tp3="logo_coo" tp4="腾讯大学">
            <dt style="background-position: -768px -106px"></dt>
            <dd class="partner_detail">
                <a href="http://wetest.qq.com/introduction/partners">腾讯大学作为腾讯特色的学习交流平台，服务于腾讯合作伙伴及用户，面向互联网产业链，传播腾讯经验，分享行业知识及优秀实践。</a>
            </dd>
        </dl>
    
    </div>

     </div> </div> <span class="partner_arrows left" tp1="平台" tp2="首页" tp3="合作伙伴" tp4="翻页" tp5="向左翻页"></span> <span class="partner_arrows right" tp1="平台" tp2="首页" tp3="合作伙伴" tp4="翻页" tp5="向右翻页"></span> </div> </div>  --}} <div class="cont-w footer-banner"> <div class="footer-mask"></div>
      <div class="cont-b"> <h3 class="cont-title">现在注册，即可免费领取超值礼包</h3> <p class="cont-subtitle">完成注册可获价值310元试用额度；完成个人认证，可获大于5000元测试福利；创建企业，可获得专家兼容精华版代金券3000元。</p> <a class="footer-a" href="/register" tp1="平台" tp2="首页" tp3="底部注册领取">注册领取</a> </div> </div>  </div> 

 		@include('layouts.footer')
	<div class="container">
		@yield('content')
	</div>
</body>
</html>