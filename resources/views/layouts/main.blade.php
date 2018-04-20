<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>eCommerce - Product</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	{{Html::style('css/normalize.css')}}
	{{Html::style('css/main.css')}}
	{{Html::script('js/vendor/modernizr.js')}}
</head>
<body>
	<!--[if lt IE 8]>
		<p class="chromeframe">你正在使用<strong>过时</strong>的浏览器，请<a href="http://rj.baidu.com/soft/detail/14744.html?ald">升级你的浏览器</a>来获取更好的上网体验</p>
	<![endif]-->
	<div id="wrapper">
		<header>
			<section id="top-area">
				<p>电话下单:021-800-0000 | 电子邮件:orz@shop.com</p>
			</section>
			<section id="action-bar">
				<div id="logo">
					<a href="#"><span id="logo-accent">e</span>Commerce</a>
				</div>
				<nav class="dropdown">
					<ul>
						<li>
							<a href="#">分类 <img src="img/down-arrow.gif" alt="Shop by Category"></a>
							<ul>
								<li><a href="#">笔记本</a></li>
								<li><a href="#">台式机</a></li>
								<li><a href="#">手机</a></li>
								<li><a href="#">平板</a></li>
							</ul>
						</li>
					</ul>
				</nav>

				<div id="search-form">
					<form action="#" method="get">
						<input type="search" name="search" placeholder="关键字搜索" class="search">
						<input type="submit" value="搜索" class="search submit">
					</form>
				</div>

				<div id="user-menu">
					<nav id="signin" class="dropdown">
						<ul>
							<li>
								<a href="#"><img src="img/user-icon.gif" alt="sign in">登录<img src="img/down-arrow.gif" alt="sign in"></a>
								<ul>
									<li><a href="#">登录</a></li>
									<li><a href="#">退出</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<!--
					<nav class="dropdown">
						<ul>
							<li>
								<a href="#"><img src="img/user-icon.gif" alt="">andrew Perkins <img src="img/down-arrow.gif" alt="Andrew Perkins"></a>
								<ul>
									<li><a href="#">Order History</a></li>
									<li><a href="#">WishList</a></li>
									<li><a href="#">Sign out</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					-->
				</div>
			</section>
		</header>

	</div>
</body>
</html>